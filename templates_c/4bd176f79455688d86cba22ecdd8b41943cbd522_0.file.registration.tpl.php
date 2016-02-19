<?php
/* Smarty version 3.1.29, created on 2016-02-17 17:52:41
  from "C:\Users\Kate\PhpstormProjects\catalog\templates\registration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4b36949d8e0_51682282',
  'file_dependency' => 
  array (
    '4bd176f79455688d86cba22ecdd8b41943cbd522' => 
    array (
      0 => 'C:\\Users\\Kate\\PhpstormProjects\\catalog\\templates\\registration.tpl',
      1 => 1455731525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c4b36949d8e0_51682282 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
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
<body style="background-color: #f7ecb5">
<!-- рабочая область -->
<div class="container-fluid">
    <!-- row - строка хедр здесь -->
    <div class="row" style="background-color: #269abc">
        <!-- col md 12 - колонки-12шт в себе -->
        <div class="col-md-10" align="center">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="static/images/carrhead1.jpg">
                        <div class="carousel-caption" style="color: #0f0f0f; ">
                            <span style="text-shadow: -2px -17px 2px rgba(150, 0, 150, 1);">Самотыки</span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="static/images/carrhead1.jpg" alt="...">
                        <div class="carousel-caption" style="color: #0f0f0f">
                            Много самотыков
                        </div>
                    </div>
                    <div class="item">
                        <img src="static/images/carrhead1.jpg" alt="...">
                        <div class="carousel-caption" style="color: #0f0f0f">
                            Совсем дохера самотыков!!!
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-2">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['authorized']->value !== 'registred';
$_tmp1=ob_get_clean();
if ($_tmp1) {?>
                <p>Введите имя и пароль</p>
                <form method="post" action="enter.php">
                    <input type="text" name="rname" value="Имя" class="form-control">
                    <p></p>
                    <input type="password" name="rpass" value="11111" class="form-control">
                    <input type="submit" value="Вход" class="btn btn-primary">
                </form>
            <?php }?>
            <a href="registration.php" class="btn btn-primary">Регистрация</a>
            <a href="logout.php" class="btn btn-primary">ВЫХОД</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            Привет <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
        </div>
    </div>
    <div class="col-md-12">
        <div class="nav navbar navbar-static-top" style="background-color: #9acfea">
            <div style="padding: 5px">
                <a href="index.php">НА ГЛАВНУЮ</a>
            </div>
        </div>
    </div>
</div>
<!-- row - строка девая колонка 3 -->
<div class="row">
    <div class="col-md-3">
        <div class="modal-content">
            <div style="padding: 10px">
                Категории <br>
                <?php
$_from = $_smarty_tpl->tpl_vars['allcategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$__foreach_category_0_saved_key = isset($_smarty_tpl->tpl_vars['key1']) ? $_smarty_tpl->tpl_vars['key1'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                    <br>
                    <a href="goods_by_category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
if ($__foreach_category_0_saved_key) {
$_smarty_tpl->tpl_vars['key1'] = $__foreach_category_0_saved_key;
}
?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="modal-content">
            <div class="panel-info" style="padding: 10px">
                <!-- create category -->

                <div class="panel-info" style="padding: 10px"><strong>ФОРМА РЕГИСТРАЦИИ</strong><br>
                    <p>Установите имя и пароль
                    <p style="color: #5cb85c"><strong><?php echo $_smarty_tpl->tpl_vars['message_ok']->value;?>
</strong></p>
                    <p style="color: #ac2925"><strong><?php echo $_smarty_tpl->tpl_vars['message_bad']->value;?>
</strong></p>
                    <p style="color: #ac2925"><strong><?php echo $_smarty_tpl->tpl_vars['message_isp']->value;?>
</strong></p>
                    </p>
                    <form method="post" action="registration.php">
                        <input type="text" name="name" value="Имя" class="form-control">
                        <p></p>
                        <input type="password" name="pass" value="11111" class="form-control"><p></p>
                        <p><input type="submit" value="Регистрация" class="btn btn-primary"></p>
                    </form>
                </div>

                <!-- del category -->
            </div>
        </div>
    </div>
    <div class="col-md-3" style="background-color: moccasin">
        <div class="modal-content" style="padding: 10px">
            Реклама
        </div>

    </div>
</div>
<div class="row">
    <!-- col md 12 - колонки-12шт в себе футер -->
    <div class="col-md-12" style="background-color: #31708f">
        <div class="modal-footer">Футер</div>
    </div>
</div>
</div>
</body>
</html>

<?php }
}
