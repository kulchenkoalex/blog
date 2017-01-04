<html>
<body>

<div class="content">
<div class="Page">
<form method="POST" action="register">
<br><input type="text" name="login" placeholder="Логин" maxlength="20" pattern="[A-Za-z-0-9]{3,20}" title="Не менее 3 и неболее 20 латынских символов или цифр." required>
<br><input type="password" name="password" placeholder="Пароль" maxlength="15" pattern="[A-Za-z-0-9]{5,15}" title="Не менее 5 и неболее 15 латынских символов или цифр." required>
    <br><input type="email" name="email" placeholder="E-Mail" required>
<br><input type="text" name="name" placeholder="Имя" maxlength="20" pattern="[А-Яа-яЁё]{4,10}" title="Не менее 4 и неболее 20 латынских символов или цифр." required>
    <br><input type="text" name="surname" placeholder="Фамилия" maxlength="20" pattern="[А-Яа-яЁё]{4,20}" title="Не менее 4 и неболее 20 латынских символов или цифр." required>
    <br><input type="tel" name="number" placeholder="Номер телефона" maxlength="12" pattern="[А-Яа-яЁё]{4,12}" title="Не менее 4 и неболее 12 латынских символов или цифр." required>
<br><input type="submit" name="enter" value="Регистрация"> <input type="reset" value="Очистить">
</form>
</div>

</div>
</body>
</html>