<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Панель Администратора</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body bgcolor="#c0c0c0">
        <div>
            <h1><center>Панель администратора</center></h1><br><br>
        <div class="blog_view">
             
 
 <li><a href="../index.php" title="Главная">Вернуться на главную страницу сайта</a></li> 
<li><a href="index.php">Статьи</a></li> 
<li><a href="users.php">Пользователи</a></li>
            <br><br><br>
            <a href="index.php?action=add">Добавить статью</a><br><br>
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
        </div><br><br><br>
        <footer>
            <p>Мой первый блог
            <br>
            Copyright &copy 2016
            </p>
        </footer>
        </div>
    </body>
</html>