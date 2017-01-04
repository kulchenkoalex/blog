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
<a href="index.php">Регистрация</a></li></ul>

  
        <div class="blog_view">
            <h1>Мой Блог</h1>
        <div>
            <?php foreach($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <em>Описание: <?=$a['description']?></em>
            <p><?=articles_intro($a['content'])?></p>
            </div>
        <?php endforeach ?>
        </div>
            </div>
            <!--нижняя часть сайта-->
<table class="footer-table" border="0" cellpadding="4" cellspacing="0" width="100%" style="border:1px solid #FFFFFF;">
<tr><td align="center" style="background:#115847;"><!-- <copy> -->Copyright &copy 2016<!-- </copy> --></td></tr>
</table>

        
    </body>
</html>