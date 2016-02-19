<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 10.02.2016
 * Time: 19:42
 */
session_start();
require_once ('smarty_config.php');
require_once ('Categories.php');
require_once ('Goods.php');
require_once ('User.php');

date_default_timezone_set('UTC');


$smarty = new MySmarty();

$smarty->assign('name', 'Незнакомец');
$smarty->assign('authorized', '');
if (isset($_SESSION ['auth'])) {
    $smarty->assign('authorized', $_SESSION ['auth']);
}
if (isset($_SESSION ['name'])) {
    $smarty->assign('name', $_SESSION ['name']);
}

$findcategory = Goods::findByCategory_id($_GET['id']);
$smarty->assign('categoryidgoods', $findcategory);

$smarty->display('goods.tpl')
?>