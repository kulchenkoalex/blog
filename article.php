<?php

   require_once("database.php"); 
   require_once("models/articles.php");
   require_once("models/comments/main.php");

    
    $link = db_connect(); 
    $article = article_get($link, $_GET['id']);
       
    include("views/article.php");
?>