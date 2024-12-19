<?php 


class DBconnection {

    private static $hasinstance = null;
    public static $connection;

    private function __construct()
    {
        
        $this->connection = new mysqli('localhost', 'root', 'MyStr0ng!Passw0rd', 'ChefCuisinier');

        if($this->connection->connect_error) {
            die("Connection Failed " . $this->connection->connect_error);
        }
    }


    public static function getConnection() {
        if(self::$hasinstance == null) {
            self::$hasinstance = new DBconnection();
        }
        return self::$hasinstance;
    }
}
?>