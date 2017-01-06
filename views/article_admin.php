<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf8">
        <title>Панель Администратора</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body bgcolor="#c0c0c0">
            <h1><center>Панель администратора</center></h1><br><br>
        <div class="blog_view">
 <li><a href="../index.php" title="Главная">Вернуться на главную страницу сайта</a></li> 
<li><a href="index.php">Статьи</a></li> 
<li><a href="users.php">Пользователи</a></li>
            <br><br><br>
        <div class="container">
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название: 
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label><br><br>
                <label>
                    Краткое описание: 
                    <textarea class="form-item" name="description" cols="80" rows="2" required><?=$article['description']?></textarea>
                </label><br><br>
                <label>
                    Cодержимое: 
                    <textarea class="form-item" name="content" cols="80" rows="10" required><?=$article['content']?></textarea>
                </label><br><br>
                <pre>             <input type="submit" value="Сохранить" class="btn"></pre>
            </form>
        </div><br><br><br>
        <footer>
            <p>Мой первый блог
            <br>
            Copyright &copy 2016
            </p>
        </footer>
        </div>
        </div>
    </body>
</html>