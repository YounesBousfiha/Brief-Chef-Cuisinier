<?php
include "../Config/db.php";

function emailEnumeration($conn, $email) {
    $isFound = false;
    $sql = 'SELECT * FROM User WHERE Email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $emailDB = $stmt->get_result();

    if($emailDB->num_rows > 0) {
        $isFound = true;
    }
    return $isFound;
}
        
function SignUp($conn, $prenom, $nom, $email, $phone, $password) {
    $role_id = 2;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO User (Nom, Prenom, Email, Password, Phone, Role_id) VALUES(?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssi', $nom, $prenom ,$email, $hashed_password, $phone, $role_id);
    $stmt->execute();
    $stmt->close();
}

function genrateToken() {
    return bin2hex(random_bytes(32));
}

function Login($conn, $email, $password) {
    $sql = 'SELECT * FROM User WHERE Email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $data = $stmt->get_result();
    $creds = $data->fetch_assoc();
    if ($creds && password_verify($password, $creds['Password'])) {
        $token = genrateToken();
        session_start();
        setcookie("auth_token", $token, time() + 3600, "/");

        $sql = 'UPDATE User SET auth_Token = ? WHERE ID = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $token, $creds['ID']);
        $stmt->execute();
        return $creds;
    }
    return null;
}

function ValidateUser($conn) {
    $token = $_COOKIE['auth_token'];
    if(isset($token)) {
        $sql = 'SELECT * FROM User WHERE auth_Token = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $token);
        $stmt->execute();
        $data = $stmt->get_result();
        $user = $data->fetch_assoc();

        if($user) {
            return $user;
        } else {
            Logout();
            return null;
        }
    }
}

function Logout() {
    setcookie("auth_token", "", time() - 3600, "/");
    //header("Location: http://localhost:3000/public/index.php");
}
?>