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

    public static function ValidateUser() {}

    public static function signup() {
        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;
        $sql = "INSERT INTO User (Nom, Prenom, Email, Password, Phone, Role_id) VALUES(?, ?, ?, ?, ?, ?)";
        // Check if user Exist
        // Validate if password Duplicate
        try {
            $stmt = $db->prepare($sql);
            $hashed_password = password_hash($data['Password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sssssi', $data['Nom'], $data['Prenom'], $data['Email'], $hashed_password, $data['Phone'], $data['Role_id']);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            echo 'Operatio Failed: ' . $e->getMessage();
        }
        
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