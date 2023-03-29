<?php
require('header.php');
require('../model/student.php');

if (isset($_GET['id'])) //when view is clicked; assosiate student profile info shown in details 
{

    $stdInfo = getStd($_GET['id']);
?>




    <form class="normal">
        <div class="heading">
            <p>Student Profile: <?php echo $stdInfo['name']; ?></p>
        </div>


        <table class="profile">
            <!--    id    -->
            <tr>
                <td>ID:</td>
                <td><?php echo $stdInfo['id']; ?></td>
            </tr>

            <!--    name    -->
            <tr>
                <td>Name:</td>
                <td><?php echo $stdInfo['name']; ?></td>
            </tr>

            <!--    program    -->
            <tr>
                <td>Program:</td>
                <td><?php echo $stdInfo['program']; ?></td>
            </tr>



            <!--    address[present address]    -->
            <tr>
                <td>Address:</td>
                <td><?php echo $stdInfo['address']; ?></td>
            </tr>

            <!--    dob    -->
            <tr>
                <td>DOB:</td>
                <td><?php echo $stdInfo['dob']; ?></td>
            </tr>

            <!--    gender    -->
            <tr>
                <td>Gender:</td>
                <td><?php echo $stdInfo['gender']; ?></td>
            </tr>



            <!--    admission/[admission date]    -->
            <tr>
                <td>Admission Date:</td>
                <td><?php echo $stdInfo['admissionDate']; ?></td>
            </tr>

            <!--    graduation[graduation date]    -->
            <tr>
                <td>Graduation Date:</td>
                <td><?php echo $stdInfo['graduationDate']; ?></td>
            </tr>


            <!-- modify -->
            <!--    information change -->
            <tr>
                <td align="left"><a href=student.php>Back</a></td>
                <td align="right"><?php echo '<a href=student.php?mid=' . $stdInfo['id'] . '>Modify</a>'; ?></td>
            </tr>


        </table>



    </form>



<?php



} else if (isset($_GET['mid'])) //when modify is called
{
    $stdInfo = getStd($_GET['mid']);
    setcookie('id', $stdInfo['id'], time() + 3600, '/');
?>



    <form class="normal" action="student.php" method="post" enctype="">

        <div class="heading">
            <p>Modify Profile: <?php echo $stdInfo['name']; ?></p>
        </div>




        <table class="profile ">
            <!--    id    -->
            <tr>
                <td>ID</td>
                <td><?php echo $stdInfo['id']; ?></td>
            </tr>

            <!--    name    -->
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $stdInfo['name']; ?>"></td>
            </tr>

            <!--    program    -->
            <tr>
                <td>Program</td>
                <td><?php echo $stdInfo['program']; ?></td>
            </tr>



            <!--    paddress[permanent address]    -->
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $stdInfo['address']; ?>"></td>
            </tr>

            <!--    dob    -->
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" value="<?php echo $stdInfo['dob']; ?>"></td>
            </tr>

            <!--    gender    -->
            <tr>
                <td>Gender</td>
                <td><?php echo $stdInfo['gender']; ?></td>
            </tr>



            <!--    admission/[admission date]    -->
            <tr>
                <td>Admission Date</td>
                <td><?php echo $stdInfo['admissionDate']; ?></td>
            </tr>

            <!--    graduation[graduation date]    -->
            <tr>
                <td>Graduation Date</td>
                <td><?php echo $stdInfo['graduationDate']; ?></td>
            </tr>

            <!--    information change -->
            <tr>
                <td align="left"><input class="cancel" type="submit" value="Cancel" onclick="student()"></td>
                <td align="right"><input type="submit" name="modify" value="Confirm"></td>
            </tr>


        </table>



    </form>




<?php


} else if (isset($_REQUEST['modify'])) //when save changes is pressed [editing a file--> modify form file values comes here]
{

    $data = $_POST;
    $status = updateStd($data, $_COOKIE['id']);
    $id = $_COOKIE['id'];


    if ($status) {
        setcookie('id', $stdInfo['id'], time() - 3600, '/');
        header('location:student.php?id=' . $id);
        //print_r($info);


    }
} else if (isset($_GET['did'])) //deleting a file
{

    $status = deleteStd($_GET['did']); //did = delete identity

    if ($status) {
        session_start();
        $_SESSION['delete'] = 'Deleted';
        header('location:student.php');
    }
} else //just the home page, list of student is showing
{

?>
    <form class="normal" action="addStd.php">
        <div class="heading">
            <p>Student List</p>
        </div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found">
            <?php

            session_start();

            if (isset($_SESSION['delete'])) {
                // Display the message
                echo $_SESSION['delete'];

                // Clear the message from the session
                unset($_SESSION['delete']);
            }
            ?>
        </p>


        <?php

        $data = getAllStd();

        //print_r(mysqli_fetch_assoc($data));
        echo '<center><table id="stdTable" class="list" ><tr><th>ID</th><th>Name</th><th>Edit</th><th>Delete</th></tr>';

        //for($i=0; $i<sizeof($infoArray); $i++)
        while ($infoArray =  mysqli_fetch_assoc($data)) {

        ?>



            <tr>
                <td><?php echo $infoArray['id']; ?></td>
                <td><?php echo $infoArray['name']; ?></td>
                <td><?php echo '<a href=student.php?id=' . $infoArray['id'] . '>View</a>'; ?></td>
                <td id="delete"><?php echo '<a href=student.php?did=' . $infoArray['id'] . '>Delete</a>'; ?></td>
            </tr>

        <?php

        }

        echo '</table></center>';
        ?>
        <br>
        <div class="center"><input type="Submit" value="Add Student"></div>
    </form>
<?php



}

//require('../view/footer.php');


?>