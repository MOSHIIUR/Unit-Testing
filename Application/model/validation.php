<?php


function verifyUserName($name)
{


    //word counting
    $wrdCount = str_word_count($name); 


    //convert the string to array
    $arr = str_split($name);

    //array size
    $length = sizeof($arr);

    $status=false;

    if($wrdCount >=2)
    {
        
        $x = $arr[0];
        if (($x >= 'a' && $x <= 'z') || ($x >= 'A' && $x <= 'Z')) 
        {
            for($i=1; $i<$length; $i++)
            {
                if(($arr[$i] >='a' && $arr[$i] <='z') ||($arr[$i] >='A' && $arr[$i] <='Z'))
                {
                    $status = true;
                }
            }


        }        
    
        else $status = false;
    }


    if($status)
    {
        return true;
    }

    else return false;




}


function verifyPass($pass)
{
    

    if(strlen($pass) >= 4)
    {
        return true;

    }

    else return false;
    
}

function verifySid($id)
{
    

    if($id != Null)
    {
        $status = true;
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
                    
                    $status = false;
                    break;
                }
    
        }
    
        

    }

    if(!$status) return false;
    else return true;
    
}

function verifyfid($id)
{
    

    if($id != Null)
    {
     
        $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform
        $status = true;
    
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
                    
                    $status = false;
                    break;
                }
    
        }
    
        if(!$status) return false;
        else return true;

    }

    else return false;
    
}

function verifyAid($id)
{
    

    if($id != Null)
    {
     
        $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform
        $status = true;
    
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
                    
                    $status = false;
                    break;
                }
    
        }
    
        if(!$status) return false;
        else return true;

    }

    else return false;
    
}

function verifyCid($id)
{
    

    if($id != Null)
    {
     
        $file = fopen('course.txt', 'r');  //introducing the file and the operation gonna perform
        $status = true;
    
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
                    
                    $status = false;
                    break;
                }
    
        }
    
        if(!$status) return false;
        else return true;

    }

    else return false;
    
}

function verifynid($id)
{
    

    if($id != Null)
    {
     
        $file = fopen('notice.txt', 'r');  //introducing the file and the operation gonna perform
        $status = true;
    
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
                    
                    $status = false;
                    break;
                }
    
        }
    
        if(!$status) return false;
        else return true;

    }

    else return false;
    
}





function verifyFMail($mail)
{
    

    $file = fopen('facultyProfile.txt', 'r');  //introducing the file and the operation gonna perform
    $status = true;

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($mail == $user[2])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                
                /* $status = false;
                break; */
                print_r($user);
            }

    }

    /* if(!$status) return false;
    else return true; */
    print_r($mail);
    
}

function verifyAmail($mail)
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
    $status = true;
    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        if($mail == $user[2])
        {
            $status = false;
            break;

        }



    }

    return $status;
    
}




?>