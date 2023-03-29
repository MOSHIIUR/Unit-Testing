<?php

    require('dbConnection.php');


function addAdmin($data)      //adding admin  
{

    $con = connection();
    $sql = "insert into adminprofile (id, username, mail, password, gender) 
        values ('{$data->id}','{$data->name}', '{$data->mail}', '{$data->pass}', '{$data->gender}') ";

    $result = mysqli_query($con, $sql);
    return $result;


}

function fetchAdminInfo($id)
{

    $con = connection();
    $sql = "select * from adminprofile where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($result);

    return $data;


}


function updateAdmin($data, $id)    //$id = user id that is gonna modified
{

    $con = connection();
    $sql = "update adminprofile set username='{$data->name}',mail='{$data->mail}',password='{$data->password}' where id='{$id}'";


    $result = mysqli_query($con, $sql);
    return $result;


}

function changeImage($path, $id)    //$id = user id that is gonna modified
{

    $con = connection();
    $sql = "update adminprofile set image='{$path}' where id='{$id}'";


    $result = mysqli_query($con, $sql);
    return $result;


}





?>