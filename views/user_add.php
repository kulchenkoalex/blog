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
            <form method="post" action="../admin/users.php?action=add">
               <br><input type="text" name="login" placeholder="Логин" maxlength="20" pattern="[A-Za-z-0-9]{3,20}" title="Не менее 3 и неболее 20 латинских символов или цифр." required>
<br><input type="password" name="password" placeholder="Пароль" maxlength="100" pattern="[A-Za-z-0-9]{5,100}" title="Не менее 5 символов." required>
    <br><input type="email" name="email" placeholder="E-Mail" required>
<br><input type="text" name="name" placeholder="Имя" maxlength="20" pattern="[А-Яа-яЁё-A-Za-z]{3,20}" title="Не менее 3 и неболее 20 символов." required>
    <br><input type="text" name="surname" placeholder="Фамилия" maxlength="20" pattern="[А-Яа-яЁё-A-Za-z]{3,20}" title="Не менее 3 и неболее 20 символов." required>
    <br><input type="tel" name="number" placeholder="(050) 999-99-99" pattern="\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}" title="Формат ввода (050) 121-34-57." required>
    <br><select size="1" name="role"><option value="Пользователь">Пользователь</option><option value="Администратор">Администратор</option></select>
    <br><br>
<input type="submit" name="enter" value="Добавить"> <input type="reset" value="Очистить">
            </form>
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