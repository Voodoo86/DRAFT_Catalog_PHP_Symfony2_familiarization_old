<?php
/* Smarty version 3.1.29, created on 2016-02-10 17:33:58
  from "C:\Users\Kate\PhpstormProjects\catalog\goods_by_category.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bb7486012ec8_84323196',
  'file_dependency' => 
  array (
    '8aff3689061447aebdc136c732ce95594d94c6c8' => 
    array (
      0 => 'C:\\Users\\Kate\\PhpstormProjects\\catalog\\goods_by_category.php',
      1 => 1455125041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bb7486012ec8_84323196 ($_smarty_tpl) {
echo '<?php
';?>/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 10.02.2016
 * Time: 19:42
 */
require_once ('smarty_config.php');
require_once ('Categories.php');
require_once ('Goods.php');

date_default_timezone_set('UTC');


$smarty = new MySmarty();

$findcategory = Goods::findByCategory_id($_GET['id']);
$smarty->assign('categoryidgoods', $findcategory);

$smarty->display('goods.tpl')
<?php echo '?>';
}
}
