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



function user_get($link, $id_users)
    {
        $query = sprintf("SELECT * FROM users WHERE id=%d", (int)$id_users);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $users = mysqli_fetch_assoc($result);
        
        return $users;
    }

function users_new($link, $name, $surname, $number, $email, $role, $login, $password)
    {
        $name = trim($name);
        $surname = trim($surname);
        $number = trim($number);
        $email = trim($email);
        $role = trim($role);
        $login = trim($login);
        $password = trim($password);
        
        if ($name == '' or $surname == '' or $number == '' or $email == '' 
            or $login == '' or $password == '')
            return false;

        $t = "INSERT INTO users (name, surname, number, email, role, login, password) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    
        $query = sprintf($t,  mysqli_real_escape_string($link, $name),
                         mysqli_real_escape_string($link,$surname),
                         mysqli_real_escape_string($link,$number),
                        mysqli_real_escape_string($link,$email),
                        mysqli_real_escape_string($link,$role),
                        mysqli_real_escape_string($link,$login),
                        mysqli_real_escape_string($link,$password));
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }

function users_edit($link, $id, $name, $surname, $number, $email, $role, $login, $password)
    {
        $name = trim($name);
        $surname = trim($surname);
        $number = trim($number);
        $email = trim($email);
        $role = trim($role);
        $login = trim($login);
        $password = trim($password);
        $id = (int)$id;
        
        if ($name == '' or $surname == '' or $number == '' or $email == '' 
            or $login == '' or $password == '')
            return false;
        
        $sql = "UPDATE users SET name='%s', surname='%s', number='%s', email='%s', role='%s', login='%s', password='%s' WHERE id='%d'";
        
        $query = sprintf($sql, mysqli_real_escape_string($link, $name),
                         mysqli_real_escape_string($link,$surname),
                         mysqli_real_escape_string($link,$number),
                        mysqli_real_escape_string($link,$email),
                        mysqli_real_escape_string($link,$role),
                        mysqli_real_escape_string($link,$login),
                        mysqli_real_escape_string($link,$password), $id);
        
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
        
    }


function users_delete($link, $id)
    {
       $id = (int)$id;
        
        if($id == 0)
            return false;
        
        $query = sprintf("DELETE FROM users WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

?>