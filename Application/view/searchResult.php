<?php

require('../model/search.php');

if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];

    if(getStd($id))
    {
        $data = getStd($id);
        showStdlist($data);

    }
    
    else if(getfaculty($id))
    {
        $data = getfaculty($id);
        showFacultylist($data);
    }
    
    else if(getCourse($id))
    {
        $data = getCourse($id);
        showCourselist($data);
    }
    
    else echo 'not found';
    
    

}

function showstdlist($data)
{

            ?>

           
                    <div>
                    <table class="profile">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td><?php echo $data['id'];?></td>
                            <td><?php echo $data['name'];?></td>
                            <td><?php echo '<a href=search.php?sid='.$data['id'].'>View</a>'; ?></td>
                        </tr>

                        
                    </table>
                    </div>
            


                <?php
     
        
}

function showFacultylist($data)
{

            ?>

           
                    <div>
                    <table class="profile">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td><?php echo $data['id'];?></td>
                            <td><?php echo $data['name'];?></td>
                            <td><?php echo '<a href=search.php?fid='.$data['id'].'>View</a>'; ?></td>
                        </tr>

                        
                    </table>
                    </div>
            


                <?php
     
        
}

function showCourselist($data)
{

            ?>

           
                    <div>
                    <table class="profile">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td><?php echo $data['code'];?></td>
                            <td><?php echo $data['name'];?></td>
                            <td><?php echo '<a href=search.php?cid='.$data['code'].'>View</a>'; ?></td>
                        </tr>

                        
                    </table>
                    </div>
            


                <?php
     
        
}


?>