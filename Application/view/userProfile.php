<?php

    require('header.php');
    require('../model/admin.php');
    $user = fetchAdminInfo($_COOKIE['admin']);
    //fetching the admin/user info on the user array
    



if(isset($_POST['modify'])) //if the change information button is pressed this block works
{
    //php end
    ?>

    <form class="normal" onsubmit="return false">

        <div class="heading"><p>Change Information</p></div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>


        <table class="profile">
            
            <!--    id  -->
            <tr>
                <td>ID:</td>
                <td><?php echo $user['id']?></td>
                
                
            </tr>
            <!--    username  -->
            <tr>
                <td>Username:</td>
                <td><input id="name" type="text" name="username" value="<?php echo $user['username'];?>" onkeyup="checkName()"></td>
                <td><p class="emsg" id="emsg_name"></p></td>
            </tr>

            <!--    mail  -->
            <tr>
                <td>EMail:</td>
                <td><input id="mail" type="email" name="email" value="<?php echo $user['mail'];?>" onkeyup="checkMail()"></td>
                <td><p class="emsg" id="emsg_mail"></p></td>

            </tr>

            <!--    password  -->
            <tr>
                <td>Password:</td>
                <td><input id="password" type="text" name="password" value="<?php echo $user['password'];?>" onkeyup="checkPass()"></td>
                <td><p class="emsg" id="emsg_pass"></p></td>

            </tr>

            <!--    phn no.  -->
            <tr>
                <td>Gender:</td>
                <td><?php echo $user['gender'];?></td>
            </tr>


            <!--    information change -->
                <tr>
                    <td align="left"><input class="cancel" type="submit" value="Cancel" onclick="profile()"></td>
                    <td align="right"><input type="submit" name="save" value="Confirm" onclick="changeProfile()"></td>
                </tr>

        </table>
    </form>

    

    <?php
    //php start

}

else if(isset($_REQUEST['data']))   //if the confirm changes button is pressed
{
        


    $json = $_POST['data'];
    $data = json_decode($json);
    //$status = updateAdmin($data, $user['id']);
    // print_r($user->username);

    //all the information we can get in $_post global variable which is kind of an array
    //hech store those value in a array
    
    if((updateAdmin($data, $user['id'])))
    {
        session_start();
        $_SESSION['change'] = 'Updated';
        return true;
    }


    else 
    {
        return false;
    }



}

else if(isset($_REQUEST['image']))
{
    

    ?>
        <div>
            <form class="normal" action="userProfile.php" method="post" enctype="multipart/form-data">

            <div class="heading"><p>Change Picture</p></div><br>

            
            <!--    image  -->
            
                    <img id="previewImage" src='<?php echo $user['image'];?>'><br>
            

            <!--    information change -->
             
                    <input id='file' type="file" name="uploadedFile" onchange="checkFile()">
                    <input type="submit" class="cancel" value="Cancel" onclick="profile()">
                    <input id="submit" type="submit" name="upload" value="Change" hidden>
          

            


            </form>
        </div> 

    <?php

}

else if(isset($_REQUEST['upload']))
{
    require('../model/functions.php');

    $temp = $_FILES['uploadedFile']['tmp_name'];
    $real = $_FILES['uploadedFile']['name'];
    $img_path = moveFile($temp, $real);
    if($img_path)
    {
        if(changeImage($img_path, $user['id']))
        {
            header('location:userProfile.php');
        }

    }


}

else    //showing all the admin info
{
    //php end
    ?>
     
        <form class="normal" action="userProfile.php" method="post" enctype="">

            <div class="heading"><p>Admin Profile</p></div>
            <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found">
            <?php

            session_start();

            if (isset($_SESSION['change'])) {
                // Display the message
                echo $_SESSION['change'];

                // Clear the message from the session
                unset($_SESSION['change']);
            }
            ?>
        </p>

            <table class="profile">
            
            <!--    Image  -->
            <tr>
                <td colspan="2" align="center"><img class="circle" src='<?php echo $user['image'];?>'></td>            
            </tr>
            
            <!--    id  -->
            <tr>
                <td>ID:</td>
                <td><?php echo $user['id'];?></td>
            </tr>
            <!--    Username  -->
            <tr>
                <td>Nameame:</td>
                <td><?php echo $user['username'];?></td>
            </tr>

            <!--    Email  -->
            <tr>
                <td>EMail:</td>
                <td><?php echo $user['mail'];?></td>
            </tr>

            <!--    Password  -->
            <tr>
                <td>Password:</td>
                <td><?php echo $user['password'];?></td>
            </tr>

            <!--    Gender.  -->
            <tr>
                <td>Gender:</td>
                <td><?php echo $user['gender'];?></td>
            </tr>



            <!--    information change -->
                <tr>
                    <td><input type="submit" name="modify" value="Change Information"></td>
                    <td><input type="Submit" name="image" value="Change Picture"></td>
                </tr>

            </table>

        </form>


        
        <?php

    //php start
}


/* require('../view/footer.php');
 */
?>



