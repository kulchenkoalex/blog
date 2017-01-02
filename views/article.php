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
            <div></div>
            <h3><?=$article['title']?>Заголовок1</h3>
            <em>Опубликовано <?=$article['description']?></em>
            <p><?=$article[content]?>Статья1</p>
        </div class="article">
        <div>
            <h3>Заголовок2</h3>
            <em>Опубликовано 2017-01-02</em>
            <p>Статья2</p>
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