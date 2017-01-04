<?php
    echo "Admin Panel";
    require_once("../database.php");
    require_once("../models/users.php");

    $link = db_connect();
 
    $users = users_all($link);
  include("../views/users.php");
    
?>