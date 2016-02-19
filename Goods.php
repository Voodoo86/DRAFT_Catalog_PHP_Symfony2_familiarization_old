<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 08.02.2016
 * Time: 18:29
 */
require_once ('db.php');

class Goods {
    public $id;
    public $name;
    public $description;
    public $category_id;


    //getters
    public function getId () {
        return $this->id;
    }
    public function getName (){
        return $this->name;
    }
    public function getDescription (){
        return $this->description;
    }
    public function getCategory_id (){
        return $this->category_id;
    }

    //setters
    public function setName ($name){
        $this->name=$name;
        return $this;
    }
    public function setDescription ($description){
        $this->description=$description;
        return $this;
    }
    public function setCategory_id ($category_id){
        $this->category_id=$category_id;
        return $this;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function saveNamedesccat (){
        $inssaveNamedesccat="INSERT INTO goods (name, description, category_id) VALUES ('$this->name', '$this->description', '$this->category_id')";
        conn_db()->exec($inssaveNamedesccat);
    }



    //selectors
    public function findById ($idfind) {
        $idfindsql="SELECT * FROM goods WHERE id = $idfind LIMIT 1";
        $result=conn_db()->query($idfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setId($data[0]['id']);
        $this->setDescription($data[0]['description']);
        $this->setName($data[0]['name']);
        $this->setCategory_id($data[0]['category_id']);
        return $this;
    }
    public static function findByName ($namefind) {
        $namefindsql="SELECT * FROM goods WHERE name = '$namefind'";
        $result=conn_db()->query($namefindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function findByDescription ($descriptionfind) {
        $descriptionfindsql="SELECT * FROM goods WHERE description = '$descriptionfind'";
        $result=conn_db()->query($descriptionfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function findByCategory_id ($category_idfind) {
        $category_idfindsql="SELECT * FROM goods WHERE category_id =".$category_idfind.";";
        $result=conn_db()->query($category_idfindsql);
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public static function findAll ()
    {
        $allfindsql = "SELECT * FROM goods";
        $result = conn_db()->query($allfindsql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //update
    public function Update (){
        $up="UPDATE goods SET name='$this->name', description='$this->description', category_id='$this->category_id' WHERE id=$this->id;";
        conn_db()->exec($up);
    }

    //delete
    public static function Delete ($id) {
        $delete="DELETE FROM goods WHERE id=$id;";
        conn_db()->exec($delete);
    }
}
?>