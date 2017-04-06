<?php  

  
define('ROOTX',dirname(__FILE__).'/');  
   $filetype = $_FILES["file"]["type"];
if ((($_FILES["file"]["type"] == "image/gif")  
     || ($_FILES["file"]["type"] == "image/jpeg")  
     || ($_FILES["file"]["type"] == "image/pjpeg"))  
    && ($_FILES["file"]["size"] < 2000000))  
{  
    if ($_FILES["file"]["error"] > 0)
    {  
//        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";  
    }  
    else  
    {  
//        echo "content_img: " . $_FILES["file"]["name"] . "<br />";  
//        echo "Type: " . $_FILES["file"]["type"] . "<br />";  
//        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";  
//        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";  
          
        if (file_exists("content_img/" . $_FILES["file"]["name"]))  
        {  
//            echo $_FILES["file"]["name"] . " already exists. ";  
        }  
        else  
        {  
            if(move_uploaded_file($_FILES["file"]["tmp_name"], ROOTX."content_img/".$_FILES["file"]["name"]))  
            {  
//                echo "move ok<br/>";  
            }  
            else  
            {  
//                echo "<br/>move fail:".ROOTX."content_img/".$_FILES["file"]["name"]."<br/>";  
                  
                print_r(error_get_last());  
                  
//                echo "<br/><br/>";  
            }
              
//            echo "Stored in: " . "content_img/" . $_FILES["file"]["name"];
			$md5 = md5_file("content_img/" . $_FILES["file"]["name"]);
			rename("content_img/" . $_FILES["file"]["name"] , "content_img/".$md5.".jpg");
			echo "content_img/".$md5.".jpg";
        }  
    }  
}  
else  
{  
//    echo "Invalid file";  
}  
?>  