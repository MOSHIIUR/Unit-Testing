<?php


    require('../model/admin.php');
    $json = $_POST['data'];
    $user = json_decode($json);
    $id = $user->id; $password = $user->password;
    
        $status = false;

        $data = fetchAdminInfo($id);
        
        if($data)
        {
            if(trim($data['id']) == trim($id) && trim($data['password']) == trim($password))
            {
                    $status = true;
                    setcookie('admin', $id, time()+3600, '/');  //$_COOKIE['admin'];
            }

        }

        if(!$status)
        {
            echo $status;
        }

        else echo $status; 

        



?>