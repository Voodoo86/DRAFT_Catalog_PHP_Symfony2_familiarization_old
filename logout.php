<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 17.02.2016
 * Time: 20:10
 */

session_start();


    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;



?>