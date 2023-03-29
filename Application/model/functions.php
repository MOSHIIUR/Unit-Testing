<?php
//require('validation.php');


//---------------------------------------------------------------------modify--------------------------------------------------

function modifyStd($obj)    //$obj is store a line of a file
{
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('~', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

function modifyFaculty($obj)    //$obj is store a line of a file
{
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('~', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

function modifyCourse($obj)    //$obj is store a line of a file
{
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('~', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

function modifyadmin($obj)  //$obj is store a line of a file
{
    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('~', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();    //declaring a two dimentional array which holds the line of the file

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;    //append the the line we get here ignoring the actual line 

        }

        else
        {
            $info[] = $data;    //store the lines those are not our target
        }


    }

    return $info; //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
}

function modifyNotice($obj)  //$obj is store a line of a file
{
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('~', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();    //declaring a two dimentional array which holds the line of the file

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;    //append the the line we get here ignoring the actual line 

        }

        else
        {
            $info[] = $data;    //store the lines those are not our target
        }


    }

    return $info; //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
}

//--------------------------------------------------------------------- delete ----------------------------------------------

function deleteStd($id)    
{
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count = 0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }


    //again opening the file; start fresh
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $id)
        {
            

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

//------------------------------------------------------ deleting a faculty
function deleteFaculty($id)    //$obj is store a line of a file
{
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count = 0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }


    //again opening the file; start fresh
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $id)
        {
            

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

//------------------------------------------------------ deleting a faculty
function deleteCourse($id)    //$obj is store a line of a file
{
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count = 0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }


    //again opening the file; start fresh
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $id)
        {
            

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

//------------------------------------------------------ deleting a Notice
function deleteNotice($id)    //$obj is store a line of a file
{
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count = 0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }


    //again opening the file; start fresh
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $id)
        {
            

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}



//----------------------------------------- ---------------------------- overwrite ---------------------------------------------------------------

function overwrite_userProfile($info)   //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
{


    $file = fopen('userProfile.txt', 'w');
    for($i=0; $i<sizeof($info); $i++)
    {
        fwrite($file, $info[$i]);
    }
        return true;

}

//-----------------------------------------  overwrite user info
function overwrite_StdProfile($info)   //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
{


    $file = fopen('storeStdinfo.txt', 'w');
    for($i=0; $i<sizeof($info); $i++)
    {
        fwrite($file, $info[$i]);
    }
        return true;

}


//-----------------------------------------  overwrite faculty info/file
function overwrite_facultyProfile($info)   //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
{


    $file = fopen('facultyProfile.txt', 'w');
    for($i=0; $i<sizeof($info); $i++)
    {
        fwrite($file, $info[$i]);
    }
        return true;

}

//-----------------------------------------  overwrite faculty info/file
function overwrite_CourseFile($info)   //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
{


    $file = fopen('course.txt', 'w');
    for($i=0; $i<sizeof($info); $i++)
    {
        fwrite($file, $info[$i]);
    }
        return true;

}

//-----------------------------------------  overwrite notice file
function overwrite_NoticeFile($info)   //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
{


    $file = fopen('notice.txt', 'w');
    for($i=0; $i<sizeof($info); $i++)
    {
        fwrite($file, $info[$i]);
    }
        return true;

}

//----------------------------------------------------------------------------AAADD-------------------------------------------------------


function addFaculty($user) //add faculty
{

    $status = false;


        if(verifyfid($user['id']))
    {
        if(verifyUserName($user['name']))
        {
            //if(verifyFMail($user['mail']))
            if($user['mail']!=NULL)
            {
                if($user['room']!=NULL)
                {
                    if($user['linkedln']!=NULL)
                    {
                        if($user['position']!=NULL)
                        {
                            if($user['dept']!=NULL)
                            {
                                if($user['address']!=NULL)
                                {
                                    if($user['paddress']!=NULL)
                                    {
                                        if($user['dob']!=NULL)
                                        {
                                            if($user['gender']!=NULL)
                                            {
                                                if($user['nationality']!=NULL)
                                                {
                                                    if($user['religion']!=NULL)
                                                    {
                                                        if($user['bloodgrp']!=NULL)
                                                        {
                                                            if($user['joined']!=NULL)
                                                            {
                                                                
                                                                    $obj = $user['id']."~".$user['name']."~".$user['mail']."~".$user['room']."~".$user['linkedln']."~".$user['position']."~".$user['dept']."~".$user['address']."~".$user['paddress']."~".$user['dob']."~".$user['gender']."~".$user['nationality']."~".$user['religion']."~".$user['bloodgrp']."~".$user['joined']."\r\n";
                                                                    $file = fopen('facultyProfile.txt', 'a');
                                                                    fwrite($file, $obj);
                                                                    $status = true;
                                                                
            
                                                            }
                                                            else $status = false;
                                                            //else echo 'null admission time';
            
                                                        }
                                                        //else echo 'null blood type';
                                                        else $status = false;   //echo 'null blood type';
            
                                                    }
                                                    //else echo 'null religion';
                                                    else $status = false;   //echo 'null religion';
                                                    
                                                }
                                                //else echo 'null nationality';
                                                else $status = false;   //echo 'null nationality';
            
                                            }
                                            
                                            //else echo 'null gender';
                                            else $status = false;   //echo 'null gender';
            
                                        }
                                        //else echo 'null date of birth';
                                        else $status = false;   //echo 'null date of birth';
            
                                    }
                                    //else echo 'null parmanent address';
                                    else $status = false;   //echo 'null parmanent address';
            
                                }
                                
                                //else echo 'null present address';
                                else $status = false;   //echo 'null present address';
                                        }
                            //else echo 'null parmanent address';
                            else $status = false;   //echo 'null parmanent address';

                        }
                        //else echo 'null present address';
                        else $status = false;   //echo 'null present address';

                    }

                    //else echo 'null department';
                    else $status = false;   //echo 'null department';

                }

                //else echo 'null program';
                else $status = false;   //echo 'null program';

            }

            //else echo 'null credit';
            else $status = false;   //echo 'null credit';

        }
        //else echo 'nullcgpa';
        else $status = false;   //echo 'nullcgpa';

    }

    //else echo 'null username'
    else $status = false;   //echo 'null username'


    return $status;


}

function addCourse($user) //add course
{

    $status = false;


        if(verifyCid($user['code']))
    {
        if($user['curriculum']!=NULL)
        {
            if($user['title']!=NULL)
            {
                if($user['hour']!=NULL)
                {
                    if($user['prerequisite']!=NULL)
                    {
                        if($user['description']!=NULL)
                        {
                                                                
                            $obj = $user['code']."~".$user['curriculum']."~".$user['title']."~".$user['hour']."~".$user['prerequisite']."~".$user['description']."\r\n";
                            $file = fopen('course.txt', 'a');
                            fwrite($file, $obj);
                            $status = true;
                                                                
            
                        }
                        //else echo 'null present address';
                        else $status = false;   //echo 'null present address';

                    }

                    //else echo 'null department';
                    else $status = false;   //echo 'null department';

                }

                //else echo 'null program';
                else $status = false;   //echo 'null program';

            }

            //else echo 'null credit';
            else $status = false;   //echo 'null credit';

        }
        //else echo 'nullcgpa';
        else $status = false;   //echo 'nullcgpa';

    }

    //else echo 'null username'
    else {$status = false; echo '<h1>Duplicate ID</h1>';}   //echo 'null username'


    return $status;


}


function addNotice($user) //add notice
{

    $status = false;


        if(verifynid($user['id']))
    {
        if($user['title']!=NULL)
        {
            if($user['subject']!=NULL)
            {
                if($user['contant']!=NULL)
                {
                    if($user['date']!=NULL)
                    {
                        $obj = $user['id']."~".$user['title']."~".$user['subject']."~".$user['date']."~".$user['contant']."\r\n";
                        $file = fopen('notice.txt', 'a');
                        fwrite($file, $obj);
                        $status = true;
                        }

                    else $status = false;

                }

                //else echo 'null program';
                else $status = false;   //echo 'null program';

            }

            //else echo 'null credit';
            else $status = false;   //echo 'null credit';

        }
        //else echo 'nullcgpa';
        else $status = false;   //echo 'nullcgpa';

    }

    //else echo 'null username'
    else {$status = false; echo '<h1>Duplicate Notice ID</h1>';}   //echo 'null username'


    return $status;


}



//-------------------------------------------------------------------------  VIEW [geeting specific user info] -------------------------------------------------------
function viewAdmininfo()
{
    $username = $_COOKIE['admin'];
    //$password = $_COOKIE['password'];

    

    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($username == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                return $user;
                break;
            }

    }

    return $user;

}

function viewStdinfo($id)
{
    

    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($id == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                
                //return $user;
                break;
            }

    }

    //print_r($user);
    return $user;

}

function viewFacultyinfo($id)
{
    

    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($id == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                
                return $user;
                break;
            }

    }

    //print_r($user);
    //return $user;

}

function viewCourseinfo($id)
{
    

    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($id == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                
                return $user;
                break;
            }

    }

    //print_r($user);
    //return $user;

}

function viewNoticeinfo($id)
{
    

    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($id == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                
                return $user;
                break;
            }

    }

    //print_r($user);
    //return $user;

}



//----------------------------------------------------------------------------READ----------------------------------------------------

function readStdFile()
{
    //file reading
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $info = array(); //will store all the information in the 

    //again opening the file; start fresh
    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform
    for($i=0; $i<$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array
        $info[$i] = $user;



    }

    return $info;

}

// reading the faculty file[facultyProfile] --> return $info 2D array
function readFacultyFile()
{
    //file reading
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $info = array(); //will store all the information in the 

    //again opening the file; start fresh
    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform
    for($i=0; $i<$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array
        $info[$i] = $user;



    }

    return $info;

}

// reading the course file[course] --> return $info 2D array
function readCourseFile()
{
    //file reading
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $info = array(); //will store all the information in the 

    //again opening the file; start fresh
    $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform
    for($i=0; $i<$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array
        $info[$i] = $user;



    }

    return $info;

}

//reading the notice file[notice] --> return $info 2D array
function readNoticeFile()
{
    //file reading
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $info = array(); //will store all the information in the 

    //again opening the file; start fresh
    $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform
    for($i=0; $i<$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array
        $info[$i] = $user;



    }

    return $info;

}



//---------------------------------------------------------------   move file to my directory
function moveFile($temp, $real)
{


    // directory in which the uploaded file will be moved
    $uploadFileDir = '../image/';
    $dest_path = $uploadFileDir . $real;
    
    if(move_uploaded_file($temp, $dest_path))
    {
            return $dest_path;
    }
    else return false;

}


//-------------------------------------------------change pictures
function changeimg($obj)  //$obj is store a line of a file
{
    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }


    //again opening the file; start fresh
    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();    //declaring a two dimentional array which holds the line of the file

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $obj[0])
        {
            $concat = $user[6];
            $data = $concat;
            $info[] = $data;

        }

        else
        {
            $info[] = $data;    //store the lines those are not our target
        }


    }

    return $info; //$info a two dimentional array which now holds the each line of the file in a array specifying a syntex
}






?>