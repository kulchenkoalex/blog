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
        <div>
            <div class="article">
            <h3><?=$article['title']?></h3>
            <em>Опубликовано: <?=$article['description']?></em>
            <p><?=$article['content']?></p>
        </div>
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