<?php

include './config/db.php';

class AuthController {

    public static function generateToken() {
        return bin2hex(random_bytes(32));
    }

    public static function logout() {
        setcookie("auth_token", "", time() - 3600, "/");
        //header("Location: https://localhost:3000");
    }

    public static function ValidateUser() {
        $user  = null;
        $db = DBconnection::getConnection()->connection;

        $token = $_COOKIE['auth_token'];
        if($token) {
            $sql = "SELECT * FROM User WHERE auth_Token = ?";
            try {
                var_dump($db); // This show A NULL
                $stmt = $db->prepare($sql); // BUG is HERE
                $stmt->bind_param('s', $token);
                $stmt->execute();
                $res = $stmt->get_result();
                $user = $res->fetch_assoc();
                return $user;
            } catch (Exception $e) {
                echo "Validation Failed: " . $e->getMessage();
            }
        }
        return $user;
    }
    
    public static function signup() {

        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;

        if($data['Password'] != $data['PasswordConfirmation']) {
            return -1;
        }

        $sql = "INSERT INTO User (Nom, Prenom, Email, Password, Phone, Role_id) VALUES(?, ?, ?, ?, ?, ?)";

        try {
            $stmt = $db->prepare($sql);
            $hashed_password = password_hash($data['Password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sssssi', $data['Nom'], $data['Prenom'], $data['Email'], $hashed_password, $data['Phone'], $data['Role_id']);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            echo 'Operatio Failed: ' . $e->getMessage();
        }
        return 1;
    }

    public static function login() {

        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;

        $sql = "SELECT * FROM User WHERE Email = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('s', $data['Email']);
        $stmt->execute();
        $entries = $stmt->get_result();
        $res = $entries->fetch_assoc();
        if(password_verify($data['Password'], $res['Password'])) {
            $token = AuthController::generateToken();

            setcookie("auth_token", $token, time() + 3600, "/");

            $sql = "UPDATE User SET auth_Token = ? WHERE ID = ?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param('si', $token, $res['ID']);
            $stmt->execute();
            // add redirection 
            return $res;
        }
        return null;
    }

}
?>