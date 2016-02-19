<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 08.02.2016
 * Time: 18:29
 */
require_once ('db.php');

class User {
    public $id;
    public $login;
    public $password;


    //getters
    public function getId () {
        return $this->id;
    }
    public function getLogin (){
        return $this->login;
    }
    public function getPassword (){
        return $this->password;
    }


    //setters
    public function setLogin ($login){
        $this->login=$login;
        return $this;
    }
    public function setPassword ($password){
        $this->password=$password;
        return $this;
    }
    public function saveLogPass (){
        $inslogpass="INSERT INTO user (login, password) VALUES ('$this->login', '$this->password')";
        conn_db()->exec($inslogpass);
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    //selectors
    public function findById ($idfind) {
        $idfindsql="SELECT * FROM user WHERE id = '$idfind'";
        $result=conn_db()->query($idfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setId($data[0]['id']);
        $this->setLogin($data[0]['name']);
        $this->setPassword($data[0]['pass']);
        return $this;
    }

    public static function findByLog ($logfind) {
        $logfindsql="SELECT * FROM user WHERE login = '$logfind'";
        $result=conn_db()->query($logfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function findByPass ($passfind) {
        $passfindsql="SELECT * FROM user WHERE password = '$passfind'";
        $result=conn_db()->query($passfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public static function findAll ()
    {
        $allfindsql = "SELECT * FROM user";
        $result = conn_db()->query($allfindsql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //update
    public function Update (){
        $up="UPDATE user SET login='$this->login', password='$this->password', WHERE id=$this->id;";
        conn_db()->exec($up);
    }

    //delete
    public static function Delete ($id) {
        $delete="DELETE FROM user WHERE id=$id;";
        conn_db()->exec($delete);
    }
}
?>