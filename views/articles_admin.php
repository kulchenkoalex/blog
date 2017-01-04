<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой Блог</title>
        <link rel="stylesheet" href="../style.css">
      
    </head>
    <body bgcolor="#c0c0c0">
        <div>
            <h1>Мой Блог</h1>
        <div class="blog_view">
            <a href="index.php?action=add">Добавить статью</a>
            <table class="admin-table" border="1">
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