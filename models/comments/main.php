<?php

function COMMENTS()
{
    global $CONNECT, $Module, $Page, $Param;
    
   // if ($_SESSION['USER_LOGIN_IN'] != 1) echo '<br><br>Оставлять комментарии могут только зарегистрированные пользователи.';
    //else
        echo '<form method="POST" action="/comments/add/models/'.$Page.'/id/'.$Param['id'].'";>
    <textarea name="text" rows="3" cols="100" placeholter="Текст сообщения" required></textarea><br><input type="submit" name="enter" value="Отправить">
    <input type="reset" value="Очистить"></form>';
}


//$ID = ModuleID($p1);



//$Count = mysqli_fetch_row(mysqli_query($CONNECT, 'SELECT  COUNT (`id`) FROM `comments` WHERE `module` = '.$ID.' AND `articles` = '.$Param['id'].''));

//if (!$Param['id']) {
//$Param['page'] = 1;
//$Result = mysqli_query($CONNECT, 'SELECT `id`, `added`, `date`, `date` FROM `comments` WHERE `module` = '.$ID.' AND `articles` = '.$Param['id'].' ORDER BY `id` DESC LIMIT 0, 5');
//}
 //else {
//$Start = ($Param['page'] - 1) * 5;
//$Result = mysqli_query($CONNECT, str_replace('START', $Start, 'SELECT `id`, `added`, `date`, `date` FROM `comments` WHERE `module` = '.$ID.' AND `articles` = '.$Param['id'].' ORDER BY `id` DESC LIMIT START, 5'));
//}


//PageSelector($Param4, $Param['page'], $Count);

//while ($Row = mysqli_fetch_assoc($Result)) 
   //echo '<div><span>'.$Row['added'].' | '.$Row['date'].'</span>'.$Row['text'].'<div>';


?>