<?php

class MenuController{
    
    // Menu Will be Based on Plats
    public static function getMenu() {}
    public static function getAllMenus() {}
    public static function updateMenu() {}
    public static function deleteMenu() {}
    public static function createMenu() {
        // in FrontEnd just USE AJAX to fetch the Plats & It ID 
        // then Pass them Back with the Selected Choices
        $data = json_decode(file_get_contents('php://input'), true);

        $user = AuthController::ValidateUser();

        $db = DBconnection::getConnection()->connection;

        $insertMenu = "INSERT INTO Menu (Nom, Created_by) VALUES(?, ?)";
        $stmt = $db->prepare($insertMenu);
        $stmt->bind_param('si', $data['Nom'], $user['ID']);
        $stmt->execute();

        $lastID = $db->insert_id;

        $stmt->close();
        $PlatsMenu = "INSERT INTO Menu_Plats (Menu_id, Plat_id) VALUES (?, ?)";
        $stat = $db->prepare($PlatsMenu);
        $stat->bind_param("ii", $lastID, $data['Plat_id']);
        if($stat->execute()) {
            $stat->close();
            return 1;
        }

        $stat->close();
        return -1;
    }
}

?>