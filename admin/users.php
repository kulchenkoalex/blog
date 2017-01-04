<?php
    echo "Admin Panel";
    require_once("../database.php");
    require_once("../models/users.php");

    $link = db_connect();
 



if (isset($_GET['action']))
        $action = $_GET['action'];
    else 
        $action = "";
 
    if ($action == "add")
    {
        if(!empty($_POST))
        {
            users_new($link, $_POST['name'], $_POST['surname'], $_POST['number'], $_POST['email'], $_POST['role'], $_POST['login'], $_POST['password']);
            header("Location: users.php");
        }
        include("../views/user.php");
    }
    else
    {
            $users = users_all($link);
  include("../views/users.php");

    }
?>