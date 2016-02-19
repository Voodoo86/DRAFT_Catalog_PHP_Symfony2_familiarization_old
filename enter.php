<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */
session_start();
require_once ('smarty_config.php');
require_once ('User.php');
require_once ('Categories.php');
date_default_timezone_set('UTC');



$smarty = new MySmarty();
$smarty->assign('title', 'Вход');
$name='незнакомец';
$authorized='';

$allcategories = Categories::findAll();
$smarty->assign('allcategories', $allcategories);





if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST ['rname']) && (!empty($_POST ['rpass']))) {
        if ((isset($_POST['rname']) && isset($_POST['rpass']))) {
            $user = User::findByLog($_POST ['rname']);
            if (($_POST['rname']== $user[0]['login'])&& ($_POST['rpass']==$user[0]['password'])) {
                $_SESSION ['auth']='registred';
                $authorized =$_SESSION ['auth'];
                $_SESSION ['name']=$_POST['rname'];
                $name = $_SESSION ['name'];
            } else {
                $message_unreg = 'НЕВЕРНОЕ ИМЯ ИЛИ ПАРОЛЬ!';
            }
        }

    }else {
        $message_bad = 'ЗАПОЛНИТЕ ВСЕ ПОЛЯ!';
    }
}


$smarty->assign('name', $name);
$smarty->assign('authorized', $authorized);
$smarty->assign('message_ok', '');
$smarty->assign('message_bad', '');
$smarty->assign('message_isp', '');

header('Location: index.php');



?>