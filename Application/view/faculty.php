<?php
    require('header.php'); 
    require('../model/faculty.php');
    

//list of faculty shown
if(!isset($_REQUEST['addFaculty']) && !isset($_GET['id']) && !isset($_GET['did']) && !isset($_GET['mid']) && !isset($_REQUEST['modify']) && !isset($_REQUEST['data'])) //list of faculty is showing
{
    
    ?>
        <form class="normal" action="faculty.php" method="post">
        <div class="heading"><p>Faculty List</p></div>


    <?php
    
    $data = getAllfaculty();

    //print_r(mysqli_fetch_assoc($data));
    echo '<table class="list"><tr><th>ID</th><th>Name</th><th>Edit</th><th>Delete</th></tr>';

    //for($i=0; $i<sizeof($infoArray); $i++)
    while($infoArray =  mysqli_fetch_assoc($data))
    
    {
        
        ?>

                        
                    
                        <tr>
                            <td><?php echo $infoArray['id'];?></td>
                            <td><?php echo $infoArray['name'];?></td>
                            <td><?php echo '<a href=faculty.php?id='.$infoArray['id'].'>View</a>'; ?></td>
                            <td><?php echo '<a href=faculty.php?did='.$infoArray['id'].'>Delete</a>'; ?></td>
                        </tr>
                    
        <?php     

    }

    echo '</table>';
    ?>
                    <br><div class="center"><input type="Submit" name="addFaculty" value="Add Faculty"></div></form>
    <?php

}

else if(isset($_GET['id'])) //view is clicked -------> assosiate faculty info shown in details 
{
    
    $Info = getfaculty($_GET['id']);
    ?>

     
    <form class="normal">

            <div class="heading"><p>Faculty Profile: <?php echo $Info['name'];?></p></div>

    
            <table class="list">
            <!--    id    -->
            <tr>
                <td>ID:</td>
                <td><?php echo $Info['id'];?></td>
            </tr>
            
            <!--    name    -->
            <tr>
                <td>Name:</td>
                <td><?php echo $Info['name'];?></td>
            </tr>
            
            <!--    Contact    -->
            <tr>
                <td>Email:</td>
                <td><?php echo $Info['email'];?></td>
            </tr>


            
            <!--    job position    -->
            <tr>
                <td>Job Status:</td>
                <td><?php echo $Info['position'];?></td>
            </tr>
            
            <!--    dept    -->
            <tr>
                <td>Department:</td>
                <td><?php echo $Info['dept'];?></td>
            </tr>
            
            <!--    address[present address]    -->
            <tr>
                <td>Address:</td>
                <td><?php echo $Info['address'];?></td>
            </tr>


            <!--    dob    -->
            <tr>
                <td>DOB:</td>
                <td><?php echo $Info['dob'];?></td>
            </tr>

            <!--    gender    -->
            <tr>
                <td>Gender:</td>
                <td><?php echo $Info['gender'];?></td>
            </tr>


            <!--    joined    -->
            <tr>
                <td>Joining Date:</td>
                <td><?php echo $Info['date'];?></td>
            </tr>

            <!--    information change -->
            <tr>
            <td align="left"><a href=faculty.php>Back</a></td>
            <td align="right"><?php echo '<a href=faculty.php?mid='.$Info['id'].'>Modify</a>'; ?></td>
            </tr>


        </table>

    </form>

 
    
    <?php



}

else if(isset($_GET['did'])) //delete is clicked-----> deleting the faculty a file
{

    $status = deleteFaculty($_GET['did']); //did = delete identity

    if($status)
    {
            header('location:faculty.php');
    
    }




}

else if(isset($_GET['mid'])) //modify is clicked-----> faculty modifying form generates
{

    $Info = getfaculty($_GET['mid']);
    setcookie('id', $_GET['mid'], time()+3600, '/');
    ?>

 
    
    
    <form class="normal" action="faculty.php" method="post">
    <div class="heading"><p>Faculty Profile: <?php echo $Info['id'];?></p></div>

    
            <table class="profile">
            <!--    id    -->
            <tr>
                <td>ID:</td>
                <td><?php echo $Info['id'];?></td>
            </tr>
            
            <!--    name    -->
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $Info['name'];?>"></td>
            </tr>
            
            <!--    Contact    -->
            <tr>
                <td>Contact:</td>
                <td><?php echo $Info['email'];?></td>
            </tr>

            
            <!--    position    -->
            <tr>
                <td>Job Status:</td>
                <td><?php echo $Info['position'];?></td>
            </tr>
            
            <!--    dept    -->
            <tr>
                <td>Department:</td>
                <td><?php echo $Info['dept'];?></td>
            </tr>
            
            <!--    address[present address]    -->
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $Info['address'];?>"></td>
            </tr>


            <!--    dob    -->
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob" value="<?php echo $Info['dob'];?>"></td>
            </tr>

            <!--    gender    -->
            <tr>
                <td>Gender:</td>
                <td><?php echo $Info['gender'];?></td>
            </tr>
            <!--    joined    -->
            <tr>
                <td>Joining Date:</td>
                <td><?php echo $Info['date'];?></td>
            </tr>

            
            <!--    information change -->
            <tr>
                    <td align="left"><input class="cancel" type="submit" value="Cancel" onclick="faculty()"></td>
                    <td align="right"><input type="submit" name="modify" value="Confirm"></td>
            </tr>



        </table>
    
    </form>

 
    
    <?php


}

else if(isset($_REQUEST['modify'])) //modify form value gets and modified operation performs
{

    $data = $_POST; 
    $status = updateFaculty($data, $_COOKIE['id']); $id = $_COOKIE['id'];


    if($status)
    {
            setcookie('id', $id, time()-3600, '/');
            header('location:faculty.php?id='.$id);
            //print_r($info);
        
    
    }




}

else if(isset($_REQUEST['data'])) //faculty add block-> exceuting the form block
{   
    
    $json = $_POST['data'];
    $user = json_decode($json);
    // print_r($user->username);

    
    //all the information we can get in $_post global variable which is kind of an array
    //hech store those value in a array
    
    if(addfaculty($user))
    {
        return 1;
    }


    else 
    {
        return 0;
    }

}

else if(isset($_REQUEST['addFaculty'])) //faculty creation form block
{
    ?>
    <div class="center">
    
        
    <form class="registration" id="form" onsubmit="return false">
    
        <div class="heading"><p>ADD Faculty</p></div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>
        

        <!--    id    -->
        <div>
        <label>ID</label>
        <label><input id='id' type="text" onkeyup="checkId()"></label>
        <p class="emsg" id="emsg"></p>
        </div>
        


        <!--    name    -->
        <div>
        <label>Name</label>
        <label><input id="name" type="text" onkeyup="checkName()"></label>
        <p class="emsg" id="emsg_name"></p>
        </div>



        <!--    mail    -->
        <div>
        <label>Mail</label>
        <label><input id="mail" type="email" name="mail" onkeyup="checkMail()"></label>
        <p class="emsg" id="emsg_mail"></p>
        </div>

        <!--    position    -->
        <div>
        <label>Job Title</label>
        <label><input id="jobtitle" type="text" onkeyup="checkTitle()"></label>
        <p class="emsg" id="emsg_title"></p>
        </div>

        <!--    dept    -->
        <div>
        <label>Department</label>
        <label>
            <select id="dept" onchange="checkDept()">
                <option></option>	
                <option value="FE">FACULTY OF ENGINEERING</option>	
                <option value="FST">FACULTY OF SCIENCE & TECHNOLOGY</option>	
                <option value="FBA">FACULTY OF BUSINESS ADMINISTRATION</option>	
            </select>
        </label>
        <p class="emsg" id="emsg_dept"></p>
        </div>

        <!--    address[present address]    -->
        <div>
        <label>Present Address</label>
        <label><input id="address" type="text" name="address" value="" onkeyup="checkAddress()"></label>
        <p class="emsg" id="emsg_address"></p>
        </div>

        <!--    dob    -->

        <div>
        <label>DOB</label>
        <label><input id="dob" type="date" name="dob" value="" onchange="checkDOB()"></label>
        <p class="emsg" id="emsg_dob"></p>
        </div>

        <!--    gender    -->
        <div>
        <label>Gender</label>
        <label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other" checked>other
        </label>
        <p class="emsg" id="emsg"></p>
        </div>


        <!--    joined/[joining  date]    -->
        <div>
        <label>Joining Date:</label>
        <label><input id="join" type="date" name="joined" onchange="checkJoin()"></label>
        <p class="emsg" id="emsg_join"></p>
        </div>

        <!--    submit/add    -->
        <td colspan="2"><input type="submit" class='registration' value="ADD FACULTY" onclick="add()">
        <h3>Back to the<a href=faculty.php> List</a>?</h3>


    </form>


    </div>
    <?php
}



?>


