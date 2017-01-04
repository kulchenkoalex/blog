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
            <a href="users.php">Пользователи</a>
            <table class="admin-table" border="1">
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Email</th>
                    <th>Номер</th>
                    <th>Логин</th>
                    <th>Пароль</th>
                    <th>Роль</th>
                    <th></th>
                    <th></th>
                </tr>
        
            <?php foreach($users as $b): ?>
                <tr>
                    <td><?=$b['name']?></td>
                    <td><?=$b['surname']?></td>
                    <td><?=$b['email']?></td>
                    <td><?=$b['number']?></td>
                    <td><?=$b['login']?></td>
                    <td><?=$b['password']?></td>
                    <td><?=$b['role']?></td>
                    <td><a href="users.php?action=edit&id=<?=$b['id']?>">Редактировать</a></td>
                    <td><a href="users.php?action=delete&id=<?=$b['id']?>">Удалить</a></td>
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