<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой Блог</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1>Мой Блог</h1>
            <a href="admin">Панель Администратора</a>
        <div>
            <?php foreach($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <em>Описание: <?=$a['description']?></em>
            <p><?=$a['content']?></p>
            </div>
        <?php endforeach ?>
        </div>
        <footer>
            <p>Мой первый блог
            <br>
            Copyright &copy 2016
            </p>
        </footer>
        </div>
    </body>
</html>