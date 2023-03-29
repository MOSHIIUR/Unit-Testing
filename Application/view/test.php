<?php
   
        /* $json = $_POST['data'];
        $user = json_decode($json);
        // print_r($user->username);
        echo $user->dept;  */ 
    
        require('../model/functions.php');

        if(isset($_REQUEST['data'])) //faculty add block-> exceuting the form block
        {   
            
            $json = $_POST['data'];
            $data = json_decode($json);
            // print_r($user->username);
            
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];     //temporary address
            $FileName = $_FILES['uploadedFile']['name'];    //real file file name
        
            //for the image file
/*             $fileTmpPath = $data->tempAddress;     //temporary address
            $FileName = $data->actual_fileName;    //real file file name
 */
            //echo $fileTmpPath;



            $stored_destination = moveFile($fileTmpPath, $FileName);
            echo $stored_destination;

            
        
        }
    

?>