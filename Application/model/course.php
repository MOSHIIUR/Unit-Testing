<?php

    require('dbConnection.php');


function addCourse($data)      //adding FACULTY  
{

    $con = connection();
    $sql = "insert into course (code, curriculum, name, credit, description) 
        values ('{$data->code}','{$data->dept}', '{$data->name}', '{$data->credit}', '{$data->description}') ";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getAllcourse()        //get all faculty, this is when list of courses need to show
{

    $con = connection();
    $sql = "select * from course order by code ASC";

    $result = mysqli_query($con, $sql);
    return $result;


}

function getCourse($id)        //a particular course information is shown
{

    $con = connection();
    $sql = "select * from course where code = '{$id}'";

    $result = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($result);

    if($data)
     return $data;
    
    else return null;


}


function updateCourse($data, $id)    //$id = course id that is gonna modified
{

    $con = connection();
    $sql = "update course set name='{$data['name']}', credit='{$data['credit']}' where code='{$id}'";
    $result = mysqli_query($con, $sql);
    return $result;


}


function deleteCourse($id)         //removing a course from the data base
{
    $con = connection();
    $sql = "delete from course where code = '{$id}'";

    $result = mysqli_query($con, $sql);

    //$data = mysqli_fetch_assoc($result);

    return $result;
}




?>
