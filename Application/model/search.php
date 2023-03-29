<?php

require('dbConnection.php');



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

?>

