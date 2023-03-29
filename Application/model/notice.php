<?php

    require('dbConnection.php');


function addNotice($data)      //adding notice  
{

    $con = connection();
    $sql = "insert into notice (name, date, description) values ('{$data->name}','{$data->date}', '{$data->description}') ";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getAllnotice()        //get all notice, this is when list of students need to show
{

    $con = connection();
    $sql = "select * from notice order by id ASC";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getnotice($id)        //a particular student information is shown
{

    $con = connection();
    $sql = "select * from notice where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($result);

    if($data)
     return $data;
    
    else return null;


}


function updatenotice($data, $id)    //$id = student id that is gonna modified
{

    $con = connection();
    $sql = "update notice set name='{$data['name']}', date='{$data['date']}', description='{$data['description']}' where id='{$id}'";


    $result = mysqli_query($con, $sql);
    return $result;


}


function deletenotice($id)         //removing a student from the data base
{
    $con = connection();
    $sql = "delete from notice where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    //$data = mysqli_fetch_assoc($result);

    return $result;
}




?>
