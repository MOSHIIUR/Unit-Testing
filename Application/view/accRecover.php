

<?php


if(isset($_POST['id']))
{
    

    require('../model/admin.php');
    $data  = fetchAdminInfo($_POST['id']);

    //echo $data['password'];

    //cheking here if we find the user
    if($data) //if status = true; if block executes
    {
        //php start
        echo $data['password'];

    }

    else    //if status = false, means not found, else block executes
    {
        return 0;
    }


}

else 
{
    ?>
    <link rel="stylesheet" href="../css/style.css">

    <form id="form" class="recover" onsubmit="return false">
        <h1 id="test">Acoount Recovery</h1>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>

                
        <input id='id' type="text" placeholder="Search with ID" onkeyup="checkId()">
        <p class="emsg" id="emsg"></p>
        
            <input type="submit" class='cancel' value="Cancel" onclick="home()"/>
            <input type="submit" id="find-password" value='Find' onclick="recover()"/>
    </form>

    <script src="../controller/emsg.js"></script>
    <?php
}

?>




