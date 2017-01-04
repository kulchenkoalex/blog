<?php

function users_all($link)
    {
        $query = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $n = mysqli_num_rows($result);
        $users = array();
        
        for ($i=0; $i<$n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $users[] = $row;
        }
        
        return $users;
    }



function users_get($link, $id_users)
    {
        $query = sprintf("SELECT * FROM users WHERE id=%d", (int)$id_users);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $users = mysqli_fetch_assoc($result);
        
        return $users;
    }


?>