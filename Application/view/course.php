<?php
    require('header.php');require('../model/course.php');

//list of courses is shown
if(!isset($_REQUEST['data']) && !isset($_REQUEST['addCourse']) && !isset($_GET['id']) && !isset($_GET['did']) && !isset($_GET['mid']) && !isset($_REQUEST['modify'])) //list of faculty is showing
{
    
    ?>
        <form class="normal" action="course.php" method="post">
        <div class="heading"><p>Course List</p></div>


    <?php
    
    $data = getAllcourse(); //print_r($infoArray); echo '<br>';

    //print_r(mysqli_fetch_assoc($data));
    echo '<center><table class="list" ><tr><th>ID</th><th>Name</th><th>Edit</th><th>Delete</th></tr>';

    //for($i=0; $i<sizeof($infoArray); $i++)
    while($infoArray =  mysqli_fetch_assoc($data))
    
    {
        
        ?>

                        
                    
                        <tr>
                            <td><?php echo $infoArray['code'];?></td>
                            <td><?php echo $infoArray['name'];?></td>
                            <td><?php echo '<a href=course.php?id='.$infoArray['code'].'>View</a>'; ?></td>
                            <td><?php echo '<a href=course.php?did='.$infoArray['code'].'>Delete</a>'; ?></td>
                        </tr>
                    
        <?php     

    }

    echo '</table>';
    ?>
                    <br><div class="center"><input type="Submit" name="addCourse" value="Add Course"></div></form>
    <?php

}

else if(isset($_GET['id'])) //view is clicked -------> assosiate course info shown in details 
{
    
    $Info = getCourse($_GET['id']);
    ?>

 
    
    <h1></h1>
    
    <form class="normal">
        <div class="heading"><p><?php echo $Info['name'];?></p></div>
        
        <table class="list">
            <!--    code    -->
            <tr>
                <td>CODE:</td>
                <td><?php echo $Info['code'];?></td>
            </tr>
            
            <!--    curriculum    -->
            <tr>
                <td>Curriculum:</td>
                <td><?php echo $Info['curriculum'];?></td>
            </tr>
            
            <!--    title    -->
            <tr>
                <td>Title:</td>
                <td><?php echo $Info['name'];?></td>
            </tr>

            <!--    hour    -->
            <tr>
                <td>Credit:</td>
                <td><?php echo $Info['credit'];?></td>
            </tr>


                <!--    description  -->
                <tr>
                        <td colspan="2">Course description</td>
                </tr>

                <!--    description  -->
                <tr>
                        <td colspan="2"><p align="justify"><?php echo $Info['description'];?></p></td>
                </tr>


            <!--    information change -->
            <tr>
            <td align="left"><a href=course.php>Back</a></td>
            <td align="right"><?php echo '<a href=course.php?mid='.$Info['code'].'>Modify</a>'; ?></td>
            </tr>

        </table>


    </form>

 
    
    <?php



}

else if(isset($_GET['did'])) //delete is clicked-----> deleting the notice
{

    $status = deleteCourse($_GET['did']); //did = delete identity

    if($status)
    {
            header('location:course.php');
    
    }




}

else if(isset($_GET['mid'])) //modify is clicked-----> notice modifying form generates
{

    $Info = getCourse($_GET['mid']);
    setcookie('id', $_GET['mid'], time()+3600, '/');
    ?>

 
    
    <form class="normal" action="course.php" method="post">
            <div class="heading"><p><?php echo $Info['code'];?></p></div>
    
        <table class="list">

            <!--    code    -->
            <tr>
                <td>CODE:</td>
                <td><?php echo $Info['code'];?></td>
            </tr>
            
            <!--    curriculum    -->
            <tr>
                <td>Curriculum:</td>
                <td><?php echo $Info['curriculum'];?></td>
            </tr>
            
            <!--    title    -->
            <tr>
                <td>Title:</td>
                <td><input type="text" name="name" value="<?php echo $Info['name'];?>"></td>
            </tr>

            <!--    hour    -->
            <tr>
                <td>Credit:</td>
                <td><input type="number" name="credit" value="<?php echo $Info['credit'];?>"></td>
            </tr>
            
                <!--    description  -->
                <tr>
                        <td colspan="2">Course description</td>
                </tr>

                <!--    description  -->
                <tr>
                        <td colspan="2"><p align="justify"><?php echo $Info['description'];?></p></td>
                </tr>

            <!--    information change -->
            <tr>
                    <td align="left"><input class="cancel" type="submit" value="Cancel" onclick="course()"></td>
                    <td align="right"><input type="submit" name="modify" value="Confirm"></td>
            </tr>


        </table>

    </form>

 
    
    <?php


}

else if(isset($_REQUEST['modify'])) //save changes button clicked::--modify form value gets and modified operation performs
{

    $data = $_POST; 
    $status = updateCourse($data, $_COOKIE['id']); 
    $id = $_COOKIE['id'];


    if($status)
    {
            setcookie('id', $id, time()-3600, '/');
            header('location:course.php?id='.$id);
            //print_r($info);
        
    
    }




}

else if(isset($_REQUEST['data'])) //add button clicked --> course add block-> exceuting the form block
{
    $json = $_POST['data'];
    $user = json_decode($json);
    // print_r($user->username);
    /* $result = addCourse($user);
    echo $result; */

    
    //all the information we can get in $_post global variable which is kind of an array
    //hech store those value in a array
    
    if(addCourse($user))
    {
        return 1;
    }


    else 
    {
        return 0;
    }

}

else if(isset($_REQUEST['addCourse'])) //course creation form block
{
    ?>

    <form class="registration" id="form" onsubmit="return false">
        
        <div class="heading"><p>ADD Course</p></div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>
        
        <table class="profile">
        <!--    code -->
        <tr>
                <td>Course Code</td>
                <td><input id="code" type="text" name="code" onkeyup="checkCode()"></td>
                <td><p class="emsg" id="emsg_code"></p></td>

                
            </tr>
            
        <!--    curriculum    -->
        <tr>
            <td>Curriculum</td>
            <td>
            <select id="dept" onchange="checkDept()">
                <option></option>	
                <option value="FE">FACULTY OF ENGINEERING</option>	
                <option value="FST">FACULTY OF SCIENCE & TECHNOLOGY</option>	
                <option value="FBA">FACULTY OF BUSINESS ADMINISTRATION</option>	
            </select>
            </td>
            <td><p class="emsg" id="emsg_dept"></p></td>
            
        <!--    course title -->
            <tr>
                <td>Course Name</td>
                <td><input id="name" type="text" name="title" onkeyup="checkName()"></td>
                <td><p class="emsg" id="emsg_name"></p></td>
            </tr>


     <!--    hour  -->
                <tr>
                    <td>Credit Hour</td>
                    <td><input id="number" type="number" name="hour" onkeyup="checkNumber()"></td>
                    <td><p class="emsg" id="emsg_number"></p></td>
                </tr>
        <!--    description  -->
            <tr>
                <td>Course description</td>
                <td><textarea id="description" name="description" id="" cols="30" rows="10" onkeyup="checkDescription()"></textarea></td>
                <td><p class="emsg" id="emsg_description"></p></td>
            </tr>


        <!--    submit/add    -->
        <td colspan="2"><input type="submit" value="ADD" onclick="addCourse()">
        <h3>Back to the<a href=course.php> List</a>?</h3>


        </table>



        </form>
    
        



    
    <?php
}


//require('../controller/footer.php');
?>



