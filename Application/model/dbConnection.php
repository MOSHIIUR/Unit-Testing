<?php

function connection()
{
    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    return $con;
}



?>