<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой Блог</title>
        <link rel="stylesheet" href="style.css">
        <link href="css/1.css" rel="stylesheet" type="text/css">
    </head>
    
    <body bgcolor="#1EA786" >
<table border=1 width="100%">
 <td> <img src="Img/comp.png"  width="100%" ></td>
 </table>
<!-- MENU -->

<ul id="nav"> 
 
 <li><a href="index.php" title="Главная"><!--<s5176>--><b>Главная</b><!--</s>--></a></li> 
<li><a href="admin">Админка</a>
 </li> 
    <li>
<a href="index.php">Регистрация</a></li>
<li><a href="login.php">Вход</a></li></ul>
        <div>
            <h1>Мой Блог</h1>
        <div class="blog_view">
            <div class="article">
            <h3><?=$article['title']?></h3>
            <em>Описание: <?=$article['description']?></em>
            <p><?=$article['content']?></p>
                 <?php COMMENTS() ?>
        </div>
        </div>
            </div>
        <div >
   <table class="footer-table" border="0" cellpadding="4" cellspacing="0" width="100%" style="border:1px solid #FFFFFF;">
<tr><td align="center" style="background:#115847;"><!-- <copy> -->Copyright &copy 2016<!-- </copy> --></td></tr>
</table>
        </div>
        
    </body>
</html>