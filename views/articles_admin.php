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
            <table border="1">
                <tr>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th></th>
                    <th></th>
                </tr>
        
            <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['title']?></td>
                    <td><?=$a['description']?></td>
                    <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
                </tr>  
        <?php endforeach ?>
            </table>
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