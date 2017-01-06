 <!--

$link=db_connect();

if(isset($_POST['submit']))
{

    $query = mysqli_query($link,"SELECT id, password FROM users WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    # Сравниваем пароли
    if($data['password'] == ($_POST['password']))
    {
        header("Location: index.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
          ?>   
-->   
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
                <a href="index.php">Главная страница</a><br><br>
   <div class="container"><table border=0>
        <tr>
 <td class="col1"> <img src="Img/Logo.JPG"  width="100%" ></td>
         <td class="col2"> </td>
 <td class="col3">
     
     <form method="POST">
<br><input type="text" name="login" placeholder="Логин" required>
<br><input type="password" name="password" placeholder="Пароль" required>
<br><br><input type="submit" name="submit" value="Вход"> <input type="reset" value="Очистить">
</form>
</td>
        </tr>
</table></div> 
</body>
</html>



