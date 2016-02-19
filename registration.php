<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */

session_start();
require_once ('smarty_config.php');
require_once ('Goods.php');
require_once ('Categories.php');
require_once ('User.php');

date_default_timezone_set('UTC');


$smarty = new MySmarty();
$smarty->assign('title', 'Регистрация');
$smarty->assign('name', 'Незнакомец');
$message_ok = '';
$message_bad = '';
$message_isp = '';
$smarty->assign('authorized', '');

$allcategories = Categories::findAll();
$smarty->assign('allcategories', $allcategories);

$allgoods = Goods::findAll();
$smarty->assign('allgoods', $allgoods);

$allusers = User::findAll();
$smarty->assign('allusers', $allusers);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST ['name']) && (!empty($_POST ['pass']))) {
        if ((isset($_POST['name']) && isset($_POST['pass']))) {
            $user = User::findByLog($_POST ['name']);
            if (empty($user)) {
                $user_reg = new User();
                $user_reg->setLogin($_POST['name']);
                $user_reg->setPassword($_POST['pass']);
                $user_reg->saveLogPass();
                $message_ok = 'ПОЗДРАВЛЯЕМ, ВЫ ЗАРЕГИСТРИРОВАНЫ!';
            } else {
                $message_isp = 'ДАННОЕ ИМЯ УЖЕ ИСПОЛЬЗУЕТСЯ ДРУГИМ ПОЛЬЗОВАТЕЛЕМ!';
            }
        }

    }else {
        $message_bad = 'ЗАПОЛНИТЕ ВСЕ ПОЛЯ!';
    }
}


$smarty->assign('message_ok', $message_ok);
$smarty->assign('message_bad', $message_bad);
$smarty->assign('message_isp', $message_isp);

$smarty->display('registration.tpl');


?>
