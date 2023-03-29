<?php

    require('dbConnection.php');


function addStudent($data)      //adding student  
{

    $con = connection();
    $sql = "insert into student (name, id, program, address, dob, gender, admissionDate, graduationDate) 
        values ('{$data->name}','{$data->id}', '{$data->dept}', '{$data->address}', '{$data->dob}', '{$data->gender}', '{$data->join_date}', '{$data->graduation}') ";


    $result = mysqli_query($con, $sql);
    return $result;


}

function getAllStd()        //get all student, this is when list of students need to show
{

    $con = connection();
    $sql = "select * from student order by id ASC";

    $result = mysqli_query($con, $sql);

    //$data = mysqli_fetch_assoc($result);

    return $result;


}

function getStd($id)        //a particular student information is shown
{

    $con = connection();
    $sql = "select * from student where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($result);

    if($data)
     return $data;
    
    else return null;


}


function updateStd($data, $id)    //$id = student id that is gonna modified
{

    $con = connection();
    $sql = "update student set name='{$data['name']}', address='{$data['address']}', dob='{$data['dob']}' where id='{$id}'";


    $result = mysqli_query($con, $sql);
    return $result;


}


function deleteStd($id)         //removing a student from the data base
{
    $con = connection();
    $sql = "delete from student where id = '{$id}'";

    $result = mysqli_query($con, $sql);

    //$data = mysqli_fetch_assoc($result);

    return $result;
}




?>
