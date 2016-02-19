<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<link href="static/css/bootstrap.min.css" rel="stylesheet">
<link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script SRC="static/js/bootstrap.min.js"></script>
<title>{$title}</title>
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
                {foreach from=$categoryidgoods key=key1 item=goods}
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
<p><a href="index.php">На главную</a></p>
</body>
</html>