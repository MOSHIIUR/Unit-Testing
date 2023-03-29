<?php

    require('dbConnection.php');


function addfaculty($data)      //adding FACULTY  
{

    $con = connection();
    $sql = "insert into faculty (id, name, email, position, dept, address, dob, gender, date) 
        values ('{$data->id}','{$data->name}', '{$data->mail}', '{$data->title}', '{$data->dept}', 
        '{$data->address}', '{$data->dob}', '{$data->gender}', '{$data->join_date}') ";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getAllfaculty()        //get all faculty, this is when list of students need to show
{

    $con = connection();
    $sql = "select * from faculty order by id ASC";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getfaculty($id)        //a particular student information is shown
{

    $con = connection();
    $sql = "select * from faculty where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($result);

    if($data)
     return $data;
    
    else return null;


}


function updateFaculty($data, $id)    //$id = student id that is gonna modified
{

    $con = connection();
    $sql = "update faculty set name='{$data['name']}', address='{$data['address']}', dob='{$data['dob']}' where id='{$id}'";


    $result = mysqli_query($con, $sql);
    return $result;


}


function deleteFaculty($id)         //removing a student from the data base
{
    $con = connection();
    $sql = "delete from faculty where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    //$data = mysqli_fetch_assoc($result);

    return $result;
}




?>
