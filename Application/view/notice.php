<?php
require('header.php');
require('../model/notice.php');
//list of notice shown
if (!isset($_REQUEST['data']) && !isset($_REQUEST['addNotice']) && !isset($_GET['id']) && !isset($_GET['did']) && !isset($_GET['mid']) && !isset($_REQUEST['modify'])) //list of notice is showing
{

?>
    <form class="normal" action="notice.php" method="post">
        <div class="heading">
            <p>Notice List</p>
        </div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found">
            <?php

            session_start();

            if (isset($_SESSION['message'])) {
                // Display the message
                echo $_SESSION['message'];

                // Clear the message from the session
                unset($_SESSION['message']);
            }
            ?>
        </p>


        <?php

        $data = getAllnotice();

        echo '<table class="list"><tr><th>Title</th><th>Edit</th><th>Delete</th></tr>';

        while ($infoArray =  mysqli_fetch_assoc($data)) {

        ?>



            <tr>
                <td><?php echo $infoArray['name']; ?></td>
                <td><?php echo '<a href=notice.php?id=' . $infoArray['id'] . '>View</a>'; ?></td>
                <td id="delete"><?php echo '<a href=notice.php?did=' . $infoArray['id'] . '>Delete</a>'; ?></td>
            </tr>

        <?php

        }

        echo '</table>';
        ?>
        <br>
        <div class="center"><input type="Submit" name="addNotice" value="Add notice"></div>

    </form>
<?php


} else if (isset($_GET['id'])) //view is clicked -------> assosiate notice info shown in details 
{

    $Info = getnotice($_GET['id']);
?>



    <form class="normal">

        <div class="heading">
            <p>Notice</p>
        </div>


        <table class="list">


            <!--    title    -->
            <tr>
                <td>
                    <h2><?php echo $Info['name']; ?></h2>
                </td>
            </tr>



            <!--    Date    -->
            <tr>
                <td>Date:<?php echo $Info['date']; ?></td>
            </tr>

            <!--    contant    -->
            <tr>
                <td><?php echo $Info['description']; ?></td>
            </tr>


            <!--    information change -->
            <tr>
                <td align="left"><a href=notice.php>Back</a></td>
                <td align="right"><?php echo '<a href=notice.php?mid=' . $Info['id'] . '>Modify</a>'; ?></td>
            </tr>


        </table>


    </form>



<?php



} else if (isset($_GET['did'])) //delete is clicked-----> deleting the notice from the notice file
{

    $status = deletenotice($_GET['did']); //did = delete identity

    if ($status) {
        
        session_start();
        // Store the message in the session
        $_SESSION['message'] = 'Deleted';
        header('location:notice.php');
    }
} 

else if (isset($_GET['mid'])) //modify is clicked[from the view page]-----> notice modifying form generates
{

    $Info = getnotice($_GET['mid']);
    setcookie('id', $_GET['mid'], time() + 3600, '/');
?>



    <form class="normal" action="notice.php" method="post">
        <div class="heading">
            <p>Notice</p>
        </div>


        <table class="profile">


            <!--    title    -->
            <tr>
                <td>Title:</td>
                <td><input type="text" name="name" value="<?php echo $Info['name']; ?>"></td>
            </tr>

            <!--    date    -->
            <tr>
                <td>Date:</td>
                <td><input type="Date" name="date" value="<?php echo $Info['date']; ?>"></td>
            </tr>


            <!--    contant    -->
            <tr>
                <td>Contant:</td>
                <td colspan="2"><textarea name="description" id="" cols="30" rows="10"><?php echo $Info['description']; ?></textarea></td>
            </tr>
            <!--    information change -->
            <tr>
                <td align="left"><input class="cancel" type="submit" value="Cancel" onclick="notice()"></td>
                <td align="right"><input type="submit" name="modify" value="Confirm"></td>
            </tr>



        </table>


    </form>



<?php


} else if (isset($_REQUEST['modify'])) //modify form value gets and modified operation performs
{

    $data = $_POST;
    $status = updatenotice($data, $_COOKIE['id']);
    $id = $_COOKIE['id'];


    if ($status) {
        setcookie('id', $id, time() - 3600, '/');
        header('location:notice.php?id=' . $id);
        //print_r($info);


    }
} else if (isset($_REQUEST['data'])) //notice add block-> write the form information to a file
{
    $json = $_REQUEST['data'];
    $user = json_decode($json);
    // print_r($user->username);

    //echo $user->name;
    //echo addNotice($user);

    //all the information we can get in $_post global variable which is kind of an array
    //hech store those value in a array

    if (addNotice($user)) {
        return 1;
    } else {
        return 0;
    }
} else if (isset($_REQUEST['addNotice'])) //notice publish form ---> interface
{
?>

    <form class="registration" id="form" onsubmit="return false">

        <div class="heading">
            <p>ADD Notice</p>
        </div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>

        <table class="list">

            <!--    title   -->
            <tr>
                <td>
                    <h2>Title:</h2>
                </td>
                <td>
                    <h2><input type="text" id="title" onkeyup="check_notice_Title()"></h2>
                </td>
                <td>
                    <p class="emsg" id="emsg_title"></p>
                </td>
            </tr>

            <!--date-->
            <tr>
                <td>Date:</td>
                <td><input type="date" id="date" onchange="checkDate()"></td>
                <td>
                    <p class="emsg" id="emsg_date"></p>
                </td>
            </tr>

            <!--text area-->
            <tr>
                <td>Description</td>
                <td colspan="2"><textarea name="contant" id="description" cols="30" rows="10" onkeyup="checkDescription()"></textarea></td>
                <td>
                    <p class="emsg" id="emsg_description"></p>
                </td>
            </tr>


            <!--    submit/add    -->
            <td colspan="2"><input type="submit" class='registration' id="add" value="ADD Notice" onclick="addNotice()">
                <h3>Back to the<a href=notice.php> List</a>?</h3>
        </table>
    </form>



<?php
}



?>