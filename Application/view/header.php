<?php
 
 
   if(!isset($_COOKIE['admin']))
   
   {
      header('location: home.php');
   }

   else
   {
      ?>

         <script src='../controller/validation.js'></script>
         <script src='../controller/emsg.js'></script>
         <link rel="stylesheet" href="../css/style.css">

         <div class="frame">
            <div class="header">
                  <a href="search.php">Search</a>
                  <a href="userProfile.php">View Profile</a>
                  <a href="student.php">Students</a>
                  <a href="faculty.php">Faculties</a>
                  <a href="course.php">Courses</a>
                  <a href="notice.php">Notices</a>
                  <a href="form.php">Forms</a>
                  <a href="logout.php">Sign Out</a>
                  <a href="home.php">Home</a>

            </div>
         </div>


      
      <?php
      
   }



?>