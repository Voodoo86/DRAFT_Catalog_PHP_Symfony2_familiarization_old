<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script SRC="static/js/bootstrap.min.js"></script>
    <title>{$title}</title>
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
            {if {$authorized !=='registred'}}

                <p>Введите имя и пароль</p>
                <form method="post" action="enter.php">
                    <input type="text" name="rname" value="Имя" class="form-control">
                    <p></p>
                    <input type="password" name="rpass" value="11111" class="form-control">
                        <input type="submit" value="Вход" class="btn btn-primary">
                </form>
            {/if}
            <a href="registration.php" class="btn btn-primary">Регистрация</a>
            <a href="logout.php" class="btn btn-primary">ВЫХОД</a>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                Привет {$name}!
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
                    {foreach from=$allcategories key=key1 item=category}
                     <br>
                        <a href="goods_by_category.php?id={$category.id}">{$category.name}</a>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="modal-content">
                <div class="panel-info" style="padding: 10px">
                    <table class="table table-hover">
                        <tr>
                            <td colspan="4" class="text-uppercase">Товар</td>
                        </tr>
                        {foreach from=$allgoods key=key1 item=goods}
                            <tr>
                            <td>
                                <span class="active">{$goods.id}</span>
                            </td>
                            <td>
                                <a href="redaction_goods.php?id={$goods.id}">{$goods.name}</a>
                            </td>
                            <td>
                                {$goods.description}
                            </td>
                            <td>
                                {$goods.category_id}
                            </td>
                        </tr>
                        {/foreach}
                    </table>
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