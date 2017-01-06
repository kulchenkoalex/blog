<?php

   require_once("database.php"); 
   require_once("models/articles.php");
    
    $link = db_connect();
    $articles = articles_all($link);
       
    include("views/articles.php");


    $Module = 'index';
    

    $Page='index';
    
if ($Page == 'comments')
{
    if ($Module == 'add') include('models/comments/add.php');
    else if ($Module == 'control') include('models/comments/control.php');
}
?>