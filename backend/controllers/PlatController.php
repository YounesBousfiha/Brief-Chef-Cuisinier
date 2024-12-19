<?php

class PlatController {

    public static function AjoutePlat() {
        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;

        $sql = "INSERT INTO Plats (Plat_type, Plat_desc, Created_by) VALUES(?, ?, ?)";
        var_dump("Hello");
        $user = AuthController::ValidateUser();
        var_dump($user);
        if($user) {
            try {
                $stmt = $db->prepare($sql);
                $stmt->bind_param('ssi', $data['Plat_type'], $data['Plat_desc'], $user['ID']);
                $stmt->execute();
                $stmt->close();
            } catch (Exception $e) {
                echo "Operation Failed :" . $e->getMessage();
            }
        }
        echo json_decode($user);
    }

    public static function ModifyPlat() {
        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;
    }

    public static function SupprimerPlat() {}

    public static function GetAllPlats() {}

    public static function GetPlat() {}

}

?>