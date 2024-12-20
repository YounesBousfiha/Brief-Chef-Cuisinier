<?php

class MenuController{
    
    // Menu Will be Based on Plats
    public static function getMenu() {}
    public static function getAllMenus() {
        $db = DBconnection::getConnection()->connection;

        $sql = "SELECT Menu.ID AS menu_id, Menu.Nom AS menu_name, Plat.ID AS plat_id, Plat.Nom AS plat_name
        FROM Menu INNER JOIN Menu_Plats ON Menu.ID = Menu_Plats.Menu_id
        INNER JOIN Plat ON Menu_Plats.Plat_id = Plat.ID";

        $stmt = $db->prepare($sql); // BUG IS HERE

        $stmt->execute();

        $res = $stmt->get_result();
        $menus = $res->fetch_all(MYSQLI_ASSOC);

        var_dump($menus);
        var_dump('Hello');


    }
    public static function deleteMenu($menu_id) {
        $db = DBconnection::getConnection()->connection;
        
        $sql = "DELETE FROM Menu WHERE ID = ?";

        $stmt = $db->prepare($sql);

        $stmt->bind_param('i', $menu_id);
        if($stmt->execute()) {
            $stmt->close();
            return 1;
        }

        $stmt->close();
        return -1;
    }
    public static function createMenu() {
        // in FrontEnd just USE AJAX to fetch the Plats & It ID 
        // then Pass them Back with the Selected Choices
        $data = json_decode(file_get_contents('php://input'), true);

        $user = AuthController::ValidateUser();

        $db = DBconnection::getConnection()->connection;

        $sql = "SELECT ID FROM Menu Where Nom = ?";
        $query = $db->prepare($sql);
        $query->bind_param('s', $data['Nom']);
        $query->execute();

        $res = $query->get_result();

        if($res->num_rows > 0) {
            $menu = $res->fetch_assoc();
            $menu_id = $menu['ID'];
        } else {
            $insertMenu = "INSERT INTO Menu (Nom, Created_by) VALUES(?, ?)";
            $stmt = $db->prepare($insertMenu);
            $stmt->bind_param('si', $data['Nom'], $user['ID']);
            $stmt->execute();
    
            $menu_id = $db->insert_id;
    
            $stmt->close();
        }
        $query->close();

        $PlatsMenu = "INSERT INTO Menu_Plats (Menu_id, Plat_id) VALUES (?, ?)";
        $stat = $db->prepare($PlatsMenu);
        $stat->bind_param("ii", $menu_id , $data['Plat_id']);
        if($stat->execute()) {
            $stat->close();
            return 1;
        }

        $stat->close();
        return -1;
    }
}

?>