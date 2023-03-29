<link rel="stylesheet" href="../css/style.css">

<?php


if (isset($_COOKIE['admin'])) {
    require('../model/admin.php');
    $user = fetchAdminInfo($_COOKIE['admin']);
?>



    <div class="heading">
        <p id="name"><?php echo $user['username'];?></p>
    </div>


    <div class="background">

        <table class="home">

            <!--    image    -->
            <tr>
                <td><img src="../image/search.PNG"></td>
                <td><img src="../image/profile.JPG"></td>
                <td><img src="../image/student.JPG"></td>
                <td><img src="../image/faculty.jpg"></td>
            </tr>

            <!--    text/href -->
            <tr>
                <td align="center"><a href="search.php">Search</a></td>
                <td align="center"><a href="userProfile.php">Profile</a></td>
                <td align="center"><a href="student.php">Students</a></td>
                <td align="center"><a href="faculty.php">Faculties</a></td>

            </tr>

            <tr>
                <td><img src="../image/course.PNG"></td>
                <td><img src="../image/notice.PNG"></td>
                <td><img src="../image/download.JPG"></td>
                <td><img src="../image/logout.JPG"></td>
            </tr>



            <tr>
                <td align="center"><a href="course.php">Courses</a></td>
                <td align="center"><a href="notice.php">Notices</a></td>
                <td align="center"><a href="form.php">Forms</a></td>
                <td align="center"><a href="logout.php">Sign Out</a></td>

            </tr>



        </table>
    </div>

    <?php require('footer.php'); ?>

<?php  //php start

} else {
?>

    <script src="../controller/emsg.js"></script>

    <html>

    <head>
        <title>Login</title>
    </head>

    <body>
        <div class="center">
            <form class="login" onsubmit="return false">

                <h2>Admin Login</h2>
                <p id="intro">Login with your organizational ID and Password</p>
                <p class="emsg" id="emsg_login"></p>

                <div>
                    <input type="text" id='id' autofocus="autofocus" placeholder="User Name" onkeyup="checkId()" /><br>
                    <p class="emsg" id="emsg"></p>

                    <input type="password" id='password' placeholder="password" onkeyup="checkPass()" /><br>
                    <p class="emsg" id="emsg_pass"></p>
                </div>

                <input type="submit" id="login-button" name="Login" class='login' value='Login' onclick="login()" /><br>


                <!-- footer -->
                <p><a href="accRecover.php">Forget Password?</a></p>
                </p><a href="registration.php">Register</a></p>

            </form>

        </div>
    </body>

    </html>




<?php





}














?>