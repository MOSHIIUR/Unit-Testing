
<?php

require('header.php');require('../model/search.php');



if(isset($_GET['search']))
{

 
        $std = getStd($_GET['search']);
        $faculty = getfaculty($_GET['id']);
        $course = getCourse($_GET['id']);
        
        if($std)
        {
            showlist($std);
        }

        else if($faculty)
        {

        }
        else if($course)
        {
            
        }
        
    

    


}


else if(isset($_GET['sid'])) //when view is clicked; assosiate student profile info shown in details 
{
    
    $stdInfo = getStd($_GET['sid']);
    ?>


    
     <form class="normal" onsubmit="return false">
     <div class="heading"><p>Student Profile: <?php echo $stdInfo['name'];?></p></div>

       
       <table class="list">
       <!--    id    -->
       <tr>
           <td>ID:</td>
           <td><?php echo $stdInfo['id'];?></td>
       </tr>
       
       <!--    name    -->
       <tr>
           <td>Name:</td>
           <td><?php echo $stdInfo['name'];?></td>
       </tr>
   
       <!--    program    -->
       <tr>
           <td>Program:</td>
           <td><?php echo $stdInfo['program'];?></td>
       </tr>
       
   
       
       <!--    address[present address]    -->
       <tr>
           <td>Address:</td>
           <td><?php echo $stdInfo['address'];?></td>
       </tr>
   
       <!--    dob    -->
       <tr>
           <td>DOB:</td>
           <td><?php echo $stdInfo['dob'];?></td>
       </tr>
   
       <!--    gender    -->
       <tr>
           <td>Gender:</td>
           <td><?php echo $stdInfo['gender'];?></td>
       </tr>
   
   
   
       <!--    admission/[admission date]    -->
       <tr>
           <td>Admission Date:</td>
           <td><?php echo $stdInfo['admissionDate'];?></td>
       </tr>
   
       <!--    graduation[graduation date]    -->
       <tr>
           <td>Graduation Date:</td>
           <td><?php echo $stdInfo['graduationDate'];?></td>
       </tr>
       

       <!--    graduation[graduation date]    -->
       <tr>
           <td>    <h3>Back to the<a href=search.php> Search</a>?</h3></td>
           <td>    <h3>Back to<a href=home.php> Home</a>?</h3></td>
       </tr>
       



 </table>
    </form>

 
    
    <?php



}

else if(isset($_GET['fid'])) //view is clicked -------> assosiate faculty info shown in details 
{
    
    $Info = getfaculty($_GET['fid']);
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
        <td colspan="1" align="center"><a href=search.php>Back</a></td>
        </tr>


        </table>

</form>

 
    
    <?php



}

else if(isset($_GET['cid'])) //view is clicked -------> assosiate course info shown in details 
{
    
    $Info = getCourse($_GET['cid']);
    ?>

 
    
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
            <td colspan="1" align="center"><a href=search.php>Back?</a></td>
            </tr>

        </table>


    </form>
 
    
    <?php



}



else
{
    ?>
            
        <div class="min-height">
            <form class="normal" action="search.php" method="post">
                <div class="heading"><p>Search Student/Faculty/Course</p></div>

                <p></p>
                <input id="id" type="text" placeholder="Search using ID.." onkeyup="listSearch()">
                <p class="emsg" id="msg"></p>

                <p></p>
            </form>
        </div>
            



    
    <?php
    require('footer.php');

    
}










    ?>



    



