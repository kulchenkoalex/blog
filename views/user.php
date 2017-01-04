<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой Блог</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Мой Блог</h1>
        <div class="container">
            <form method="post" action="../admin/users.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
               <br><input type="text" name="login" value="<?=$users['login']?>" placeholder="Логин" maxlength="20" pattern="[A-Za-z-0-9]{3,20}" title="Не менее 3 и неболее 20 латынских символов или цифр." required>
<br><input type="text" name="password" value="<?=$users['password']?>"placeholder="Пароль" maxlength="15" pattern="[A-Za-z-0-9]{5,15}" title="Не менее 5 и неболее 15 латынских символов или цифр." required>
    <br><input type="email" name="email" value="<?=$users['email']?>" placeholder="E-Mail" required>
<br><input type="text" name="name" value="<?=$users['name']?>" placeholder="Имя" maxlength="20" pattern="[А-Яа-яЁё-A-Za]{4,10}" title="Не менее 4 и неболее 20 латынских символов или цифр." required>
    <br><input type="text" name="surname" value="<?=$users['surname']?>" placeholder="Фамилия" maxlength="20" pattern="[А-Яа-яЁё-A-Za]{4,20}" title="Не менее 4 и неболее 20 латынских символов или цифр." required>
    <br><input type="text" name="number" value="<?=$users['number']?>" placeholder="Номер телефона" maxlength="12" pattern="{4,12}" title="Не менее 4 и неболее 12 латынских символов или цифр." required>
    <br><select size="1" name="role" value="<?=$users['role']?>"><option value="Пользователь">Пользователь</option><option value="Администратор">Администратор</option></select>
    <br><br>
<input type="submit" name="enter" value="Сохранить"> <input type="reset" value="Очистить">
            </form>
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