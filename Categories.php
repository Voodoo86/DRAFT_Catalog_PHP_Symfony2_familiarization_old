<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 08.02.2016
 * Time: 18:29
 */
require_once ('db.php');

class Categories {
    public $id;
    public $name;


    //getters
    public function getId () {
        return $this->id;
    }
    public function getName (){
        return $this->name;
    }


    //setters
    public function setName ($name){
        $this->name=$name;
        return $this;
    }
    public function save (){
        $ins="INSERT INTO categories (name) VALUES ('$this->name')";
        conn_db()->exec($ins);
    }

    public function setId ($id){
        $this->id=$id;
        return $this;
    }


    //selectors
    public function findById ($idfind) {
        $idfindsql="SELECT * FROM categories WHERE id = '$idfind'";
        $result=conn_db()->query($idfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setId($data[0]['id']);
        $this->setName($data[0]['name']);
        return $this;

    }
    public static function findByName ($namefind) {
        $namefindsql="SELECT * FROM categories WHERE name = '$namefind'";
        $result=conn_db()->query($namefindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public static function findAll ()
    {
        $allfindsql = "SELECT * FROM categories";
        $result = conn_db()->query($allfindsql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //update
    public function Update (){
        $up="UPDATE categories SET name='$this->name' WHERE id=$this->id;";
        conn_db()->exec($up);
    }

    //delete
    public static function Delete ($id) {
        $delete="DELETE FROM categories WHERE id=$id;";
        conn_db()->exec($delete);
    }
}
?>