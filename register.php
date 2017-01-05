<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Регистрация</title>
        <style>
         table {
    width: 100%; /* Ширина таблицы в процентах */
                }
   .col1 {
    width: 200px; /* Ширина ячейки */
            }
            .col2 {
    width: 30px; /* Ширина ячейки */
            }
  </style>
    </head>
            <body bgcolor="#132A49">
 <center><h1> <b>Регистрация пользователя</b></h1></center><br><br>
   <div class="container"><table border=0>
        <tr>
 <td class="col1"> <img src="Img/Logo.JPG"  width="100%" ></td>
         <td class="col2"> </td>
 <td class="col3">
     <form method="post" action="admin/users.php?action=add">
    <br><input type="text" name="login" placeholder="Логин" maxlength="20" pattern="[A-Za-z-0-9]{3,20}" title="Не менее 3 и неболее 20 латинских символов или цифр." required>
<br><input type="password" name="password" placeholder="Пароль" maxlength="100" pattern="[A-Za-z-0-9]{5,100}" title="Не менее 5 символов." required>
    <br><input type="email" name="email" placeholder="E-Mail" required>
<br><input type="text" name="name" placeholder="Имя" maxlength="20" pattern="[А-Яа-яЁё-A-Za-z]{3,20}" title="Не менее 3 и неболее 20 символов." required>
    <br><input type="text" name="surname" placeholder="Фамилия" maxlength="20" pattern="[А-Яа-яЁё-A-Za-z]{3,20}" title="Не менее 3 и неболее 20 символов." required>
    <br><input type="tel" name="number" placeholder="(050) 999-99-99" pattern="\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}" title="Формат ввода (050) 121-34-57." required> <?$=$users['role'] ="Пользователь"?>
    <br><br>
<br><input type="submit" name="enter" value="Регистрация"> <input type="reset" value="Очистить">
         </form>   
</td>
        </tr>
</table></div> 
</body>
</html>