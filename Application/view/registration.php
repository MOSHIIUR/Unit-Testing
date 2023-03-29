


<?php
//require ('validation.php');



if(isset($_REQUEST['register']))
{
    $user = $_POST; $status = false;

    //for the image file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];     //temporary address
    $FileName = $_FILES['uploadedFile']['name'];    //real file file name

    $length = sizeof($user);
    if(moveFile($fileTmpPath, $FileName))
    {
        $length = sizeof($user);
        $user[$length] = $FileName;
    }
    
    if(($user['username'] !=NUll && $user['id'] !=NUll && $user['mail'] !=NUll && $user['password'] !=NUll && $user['Cpassword'] !=NUll && $user['phone'] !=NUll))
    {

        if(verifyUserName($user['username']))
        {
               if(verifyAid($user['id']))
               {
                    if($user['password'] == $user['Cpassword'])
                    {
                        if(verifyPass($user['password']))
                        {
                            if(verifyAmail($user['mail']))
                            {
                                if(is_numeric($user['phone']) && !(strpos($user['phone'], " ")))
                                {
                                    if(addAdmin($user))
                                    {
                                        echo '<h1>SUCCESS!! Admin Created';
                                        //print_r($user);
        
                                        
                                    }
        
                                }
        
                                else echo '<h2>Phone Number must be numeric and 11digits</h2';
    
                            }

                            else echo '<h1>duplicate mail not allowed</h1>';
                        }

                        else echo '<h1>Password must be minimum of 4 digits</h1>';

                    }

                    else echo '<h2>Confirm Password does not match with password</h2';


               }

               else echo '<h2>Duplicate id or space not allowed</h2';
        }

        else echo'
        
            <h1>Wrong naming formation</h1>
            <h3>minimum of be two words, can include - or ., no number in first  char</h3>
        
            ';

    }

    else echo'
    
        <h1>Null input</h1> 
    
        ';



}

else if(isset($_REQUEST['data']))
{
    require('../model/admin.php');
    $json = $_POST['data'];
    $user = json_decode($json);
    //echo $user->name;
    $status = false;


    
    if(addAdmin($user))
    {
        $status = true;
        echo $status;
    }


    else echo $status;
}

else
{
?>

<link rel="stylesheet" href="../css/style.css">
<script src='../controller/emsg.js'></script>

    <div class="center">
    <form class="registration" id="form" onsubmit="return false">
        
        <h1>Create an Account</h1>
        <p class="smsg" id="found"></p>
        <p class="emsg" id="not_found"></p>

            
            <!-- id -->
            <div>
                <label>ID:</label>
                <label><input type="text" id="id" onkeyup="checkId()"></label>
                <p class="emsg" id="emsg"></p>
            </div>
            
            <!-- username -->
            <div>
                <label>Name:</label>
                <label><input type="text" id="name" onkeyup="checkName()"></label>
                <p class="emsg" id="emsg_name"></p>
            </div>
            
            <!-- email -->
            <div>
                <label>Email:</label>
                <label><input type="email" id="mail" onkeyup="checkMail()"></label>
                <p class="emsg" id="emsg_mail"></p>
            </div>
            
            <!-- password -->
            <div>
                <label>Password:</label>
                <label><input type="password" id="password" onkeyup="checkPass()"></label>
                <p class="emsg" id="emsg_pass"></p>
            </div>
            
            <!-- Cpassword -->
            <div>
                <label>Confirm Password:</label>
                <label><input type="password" id="cpassword" onkeyup="checkcpass()"></label>
                <p class="emsg" id="emsg_cpass"></p>
            </div>

                <!--    gender    -->
                <div>
                    <label>Gender</label>
                    <label>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other" checked>other
                    </label>
                </div>
            <!-- 
                            
                            <div>
                                <label>Upload Pictures:</label>
                                <label><input id='file' type="file" name="uploadedFile" onchange="checkFile()"></label>
                                <img src="" id='previewImage'>
                                <p class="emsg" id="emsg_file"></p>
                            </div>
            -->

        

        <br>
        <input id='submit' type="submit" value="Register" name="Register" onclick="register()"><br>
        <p></p>
        <input class="login" id='submit' type="submit" name="Login" value="Login" onclick="home()">
    
    </form>
    </div>



<?php
}




    
?>
    



