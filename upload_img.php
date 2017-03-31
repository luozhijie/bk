<?php
define('ROOTX',dirname(__FILE__).'/');  
  
if ((($_FILES["file"]["type"] == "image/gif")  
     || ($_FILES["file"]["type"] == "image/jpeg")  
     || ($_FILES["file"]["type"] == "image/pjpeg"))  
    && ($_FILES["file"]["size"] < 2000000))  
{  
    if ($_FILES["file"]["error"] > 0)  
    {  
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";  
    }  
    else  
    {  
        echo "userimg: " . $_FILES["file"]["name"] . "<br />";  
        echo "Type: " . $_FILES["file"]["type"] . "<br />";  
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";  
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";  
          
        if (file_exists("userimg/" . $_FILES["file"]["name"]))  
        {  
            echo $_FILES["file"]["name"] . " already exists. ";  
        }  
        else  
        {  
            if(move_userimged_file($_FILES["file"]["tmp_name"], ROOTX."userimg/".$_FILES["file"]["name"]))  
            {  
                echo "move ok<br/>";  
            }  
            else  
            {  
                echo "<br/>move fail:".ROOTX."userimg/".$_FILES["file"]["name"]."<br/>";  
                  
                print_r(error_get_last());  
                  
                echo "<br/><br/>";  
            }  
              
            echo "Stored in: " . "userimg/" . $_FILES["file"]["name"];  
        }  
    }  
}  
else  
{  
    echo "Invalid file";  
}  
?>