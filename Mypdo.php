<?php 
class Mypdo {
    private $pdo;
    public function __construct() 
    {
        
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
    function getDbInstance()
    {
       if(isset($this->pdo)){
           echo 'hello';
           return $this->pdo;
       }
       else{
           $obj = new self();
           return $obj->pdo;
       }
    }
}


