<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Авторизация пользователя</title>
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
 <center><h1> <b>Авторизация пользователя</b></h1></center><br><br>
   <div class="container"><table border=0>
        <tr>
 <td class="col1"> <img src="Img/Logo.JPG"  width="100%" ></td>
         <td class="col2"> </td>
 <td class="col3">
     <form method="POST" action="/login">
<br><input type="text" name="login" placeholder="Логин" required>
<br><input type="password" name="password" placeholder="Пароль" required>
<br><br><input type="submit" name="enter" value="Вход"> <input type="reset" value="Очистить">
</form>
</td>
        </tr>
</table></div> 
</body>
</html>



