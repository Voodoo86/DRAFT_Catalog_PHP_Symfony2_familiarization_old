<?php
/* Smarty version 3.1.29, created on 2016-02-17 17:26:20
  from "C:\Users\Kate\PhpstormProjects\catalog\templates\goods.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4ad3c4f78d0_06365618',
  'file_dependency' => 
  array (
    '235d32a5462654eca883cfcb82a779eeb157b81e' => 
    array (
      0 => 'C:\\Users\\Kate\\PhpstormProjects\\catalog\\templates\\goods.tpl',
      1 => 1455729978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c4ad3c4f78d0_06365618 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<link href="static/css/bootstrap.min.css" rel="stylesheet">
<link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 SRC="static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<!-- start -->
<br>
<p><a href="index.php">На главную</a></p>
    <div>
        <table class="table table-hover">
                <tr>
                    <td colspan="4" class="text-uppercase">Товар</td>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['categoryidgoods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$__foreach_goods_0_saved_key = isset($_smarty_tpl->tpl_vars['key1']) ? $_smarty_tpl->tpl_vars['key1'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
                    <tr>
                        <td>
                            <span class="active"><?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
</span>
                        </td>
                        <td>
                        <a href="redaction_goods.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
</a>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['goods']->value['description'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['goods']->value['category_id'];?>

                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
if ($__foreach_goods_0_saved_key) {
$_smarty_tpl->tpl_vars['key1'] = $__foreach_goods_0_saved_key;
}
?>
        </table>
    </div>
<p><a href="index.php">На главную</a></p>
</body>
</html><?php }
}
