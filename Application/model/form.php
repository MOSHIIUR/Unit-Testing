<?php

    require('dbConnection.php');


function addform($path)      //adding form  
{

    $con = connection();
    $sql = "insert into form (name) values ('{$path}')";


    $result = mysqli_query($con, $sql);
    return $result;


}

function getAllform()        //get all form, this is when list of students need to show
{

    $con = connection();
    $sql = "select * from form order by id ASC";

    $result = mysqli_query($con, $sql);
    return $result;


}


function deleteForm($id)         //removing a student from the data base
{
    $con = connection();
    $sql = "delete from form where id = '{$id}'";

    $result = mysqli_query($con, $sql);
    
    return $result;
}




?>
