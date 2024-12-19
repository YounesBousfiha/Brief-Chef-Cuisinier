<?php

class PlatController {

    public static function AjoutePlat() {
        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;

        $sql = "INSERT INTO Plats (Plat_type, Plat_desc, Created_by) VALUES(?, ?, ?)";

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
        //echo json_decode($user);
    }

    public static function updatePlat($plat_id) {
        $data = json_decode(file_get_contents('php://input'), true);
        $db = DBconnection::getConnection()->connection;
    }

    public static function deletePlat($plat_id) {
        $db = DBconnection::getConnection()->connection;

        $sql = "DELETE FROM Plats WHERE ID = ?";

        $stmt = $db->prepare($sql);
        $stmt->bind_param('i', $plat_id);
        if($stmt->execute()) {
            return 1;
        }
        return -1;
    }

    public static function GetAllPlats() {
        $db = DBconnection::getConnection()->connection;

        $sql = "SELECT * FROM Plats";

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $res = $stmt->get_result();
        $plats = $res->fetch_all(MYSQLI_ASSOC);

        var_dump($plats);


    }

    public static function GetPlat($plat_id) {
        $db = DBconnection::getConnection()->connection;

        $sql = "SELECT * FROM Plats WHERE ID = ?";

        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $plat_id);
        $stmt->execute();

        $res = $stmt->get_result();
        $plat = $res->fetch_all(MYSQLI_ASSOC);

        var_dump($plat);
    }

}

?>