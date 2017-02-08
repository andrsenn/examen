<?php
    class Conexion{
        private static $instancia;
        private $dbh;
     
        private function __construct(){
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=examenlp4', 'root', '');
                $this->dbh->exec("SET CHARACTER SET utf8");
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage(); die();
            }
        }
     
        
    }
?>

