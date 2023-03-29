<?php require('header.php');require('../model/student.php'); 

if(isset($_REQUEST['data'])) //add student is pressed

{
    $json = $_POST['data'];
    $user = json_decode($json);
    // print_r($user->username);
    /* $result = addStudent($user);
    echo $result; */
    
    //all the information we can get in $_post global variable which is kind of an array
    //hech store those value in a array
    
    if(addStudent($user))
    {
        return 1;
    }


    else 
    {
        return 0;
    }
}

else{

?>

    <form id="form" class="registration" onsubmit="return false">
        <div class="heading"><p>ADD Student</p></div>
        <p class="emsg" id="not_found"></p>
        <p class="smsg" id="found"></p>


    
        <table class="profile">
        <!--    id    -->
        <tr>
            <td>ID</td>
            <td><input id="id" type="text" name="id" onkeyup="checkId()"></td>
            <td><p class="emsg" id="emsg"></p></td>
        </tr>
        
        <!--    name    -->
        <tr>
            <td>Name</td>
            <td><input id="name" type="text" name="name" onkeyup="checkName()"></td>
            <td><p class="emsg" id="emsg_name"></p></td>
        </tr>
        
        <!--    dept    -->
        <tr>
        <td>Department</td>
        <td>
            <select id="dept" onchange="checkDept()">
                <option></option>	
                <option value="FE">FACULTY OF ENGINEERING</option>	
                <option value="FST">FACULTY OF SCIENCE & TECHNOLOGY</option>	
                <option value="FBA">FACULTY OF BUSINESS ADMINISTRATION</option>	
            </select>
        </td>
        <td><p class="emsg" id="emsg_dept"></p></td>
        </tr>        <!--    address[present address]    -->
        
        <tr>
        <td>Present Address</td>
        <td><input id="address" type="text" name="address" value="" onkeyup="checkAddress()"></td>
        <td><p class="emsg" id="emsg_address"></p></td>
        </tr>


        <!--    dob    -->
        <tr>
            <td>DOB</td>
            <td><input id="dob" type="date" name="dob" onchange="checkDOB()"></td>
            <td><p class="emsg" id="emsg_dob"></p></td>
        </tr>

        <!--    gender    -->
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Other" checked>other
            </td>
        </tr>



        <!--    admission/[admission date]    -->
        <tr>
            <td>Admission Date</td>
            <td><input id="join" type="date" name="admission" onchange="checkJoin()"></td>
            <td><p class="emsg" id="emsg_join"></p></td>
        </tr>

        <!--    graduation[graduation date]    -->
        <tr>
            <td>Graduation Date</td>
            <td><input id="date" type="date" name="graduation"></td>
        </tr>



        
                <!--    information change -->
                    <tr>
                        <td align="left"><input class="cancel" type="submit" value="Back" onclick="student()"></td>
                        <td align="right"><input type="Submit" name="image" value="ADD" onclick="addStd()"></td>
                    </tr>


        </table>



    </form>
    
<?php
}
?>