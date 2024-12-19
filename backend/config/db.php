<?php 


class DBconnection {

    private static $hasinstance = null;
    private $connection;

    private function __construct()
    {
        
        $this->connection = new mysqli('localhost', 'root', '', 'ChefCuisine');

        if($this->connection->connect_error) {
            die("Connection Failed " . $this->connection->connect_error);
        }
    }


    public static function getConnection() {
        if(self::$hasinstance == null) {
            self::$hasinstance == new DBconnection();

        return self::$hasinstance;
    }
}
}
?>