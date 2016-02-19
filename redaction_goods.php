<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */

session_start();
require_once ('smarty_config.php');
require_once('Categories.php');
require_once('Goods.php');
date_default_timezone_set('UTC');


$smarty = new MySmarty();
$smarty->assign('title', 'Редактирование товаров');
$smarty->assign('name', 'Незнакомец');
$message = '';
$smarty->assign('authorized', 'registred');

$message_cat = '';



$good = new Goods();
$allcategories = Categories::findAll();

if (isset($_GET['id'])) {
    $good->findById($_GET['id']);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit']) && $_POST['edit'] == 1) {
        $good->setDescription($_POST['description'])->setName($_POST['good'])->Update();
    } elseif (isset($_POST['edit']) && $_POST['edit'] == 2) {
        $new_good = new Goods();
        $new_good->setDescription($_POST['description']);
        $new_good->setName($_POST['good']);
        $new_good->setCategory_id($_POST['new_category']);
        $new_good->saveNamedesccat();
        $message = 'Новый товар создан';
    } elseif (isset($_POST['category_id'])) {
        $category_id = new Categories();
        $category_id->setName($_POST['category_id'])->Update();
        $category_id->save($_POST['category_id']);
        $message = 'Новая категория создана';
    } elseif ((isset($_POST['edit']) && $_POST['edit'] == 3)) {
            $good->Delete($good->getId());
            $message = 'Good was deleted';
    } elseif ((isset($_POST['del_category']))) {
        Categories::Delete($_POST['del_category']);
        $message = 'Категория удалена';
    }
}


$new_categories=Categories::findAll();

$category_id = new Categories();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

}

$smarty->assign('name', 'Незнакомец');
$smarty->assign('authorized', '');
if (isset($_SESSION ['auth'])) {
    $smarty->assign('authorized', $_SESSION ['auth']);
}
if (isset($_SESSION ['name'])) {
    $smarty->assign('name', $_SESSION ['name']);
}




$smarty->assignByRef('good', $good);
$smarty->assign('message', $message);
$smarty->assign('allcategories', $allcategories);


$smarty->assignByRef('category_id', $category_id);
$smarty->assign('message_cat', $message_cat);


$smarty->display('redaction_goods.tpl');

?>