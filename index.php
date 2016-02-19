<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */

session_start();
require_once ('smarty_config.php');
require_once ('Categories.php');
require_once ('Goods.php');
require_once ('User.php');

date_default_timezone_set('UTC');


$smarty = new MySmarty();
$smarty->assign('title', 'Шаблон (индекс)');


$smarty->assign('name', 'Незнакомец');
$smarty->assign('authorized', '');
if (isset($_SESSION ['auth'])) {
    $smarty->assign('authorized', $_SESSION ['auth']);
}
if (isset($_SESSION ['name'])) {
    $smarty->assign('name', $_SESSION ['name']);
}

$allcategories = Categories::findAll();
$smarty->assign('allcategories', $allcategories);

$allgoods = Goods::findAll();
$smarty->assign('allgoods', $allgoods);

$allusers = User::findAll();
$smarty->assign('allusers', $allusers);

$smarty->display('index.tpl');




?>