<?php
session_start();
if(isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
define('ROOTX',dirname(__FILE__).'/');  
include("conn.php");
	
mysql_query();
  $filetype = $_FILES["file"]["type"];
if ((( $filetype== "image/gif")  
     || ($filetype == "image/jpeg")  
     || ($filetype == "image/pjpeg"))  
    && ($_FILES["file"]["size"] < 2000000))  
{  
    if ($_FILES["file"]["error"] > 0)  
    {  
       // echo "Return Code: " . $_FILES["file"]["error"] . "<br />";  
    }  
    else  
    {  
//        echo "userimg: " . $_FILES["file"]["name"] . "<br />";  
//        echo "Type: " . $_FILES["file"]["type"] . "<br />";  
//        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";  
//        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";  
          
        if (file_exists("userimg/" . $_FILES["file"]["name"]))  
        {  
//            echo $_FILES["file"]["name"] . " already exists. ";  
        }  
        else  
        {  
			
			
            if(move_uploaded_file($_FILES["file"]["tmp_name"], ROOTX."userimg/".$_FILES["file"]["name"]))  
            {  
//                echo "move ok<br/>";  
            }  
            else  
            {  
//                echo "<br/>move fail:".ROOTX."userimg/".$_FILES["file"]["name"]."<br/>";  
                  
                print_r(error_get_last());  
                  
//                echo "<br/><br/>";  
            }  
              $md5 = md5_file(ROOTX."userimg/".$_FILES["file"]["name"],false);
//            echo "Stored in: " . "userimg/" . $_FILES["file"]["name"];  
			rename(ROOTX."userimg/".$_FILES["file"]["name"],ROOTX."userimg/".$md5.".jpg");
			$request = mysql_query("UPDATE `bk`.`userlist` SET `img`='".$md5.".jpg"."' WHERE `id`='".$uid."';",$con);
	$info = mysql_fetch_array($request);
			

function resizeImage($im,$maxwidth,$maxheight,$name,$filetype)

 {

  $pic_width = imagesx($im);

  $pic_height = imagesy($im);

  

  if(($maxwidth && $pic_width > $maxwidth) || ($maxheight && $pic_height > $maxheight))

  {

   if($maxwidth && $pic_width>$maxwidth)
  {
   $widthratio = $maxwidth/$pic_width;

    $resizewidth_tag = true;

   }

  

   if($maxheight && $pic_height>$maxheight)

   {

    $heightratio = $maxheight/$pic_height;

    $resizeheight_tag = true;

   }

  

   if($resizewidth_tag && $resizeheight_tag)

   {

    if($widthratio<$heightratio)

     $ratio = $widthratio;

    else

     $ratio = $heightratio;

   }

  

   if($resizewidth_tag && !$resizeheight_tag)

    $ratio = $widthratio;

   if($resizeheight_tag && !$resizewidth_tag)

    $ratio = $heightratio;

  

   $newwidth = $pic_width * $ratio;

   $newheight = $pic_height * $ratio;

  

   if(function_exists("imagecopyresampled"))

   {

    $newim = imagecreatetruecolor($newwidth,$newheight);//PHP系统函数

      imagecopyresampled($newim,$im,0,0,0,0,$newwidth,$newheight,$pic_width,$pic_height);//PHP系统函数

   }

   else

   {

    $newim = imagecreate($newwidth,$newheight);

      imagecopyresized($newim,$im,0,0,0,0,$newwidth,$newheight,$pic_width,$pic_height);

   }

  

   $name = $name.$filetype;

   imagejpeg($newim,$name);

   imagedestroy($newim);

  }

  else

  {

   $name = $name.$filetype;

   imagejpeg($im,$name);

  }

 }

//使用方法：

$im=imagecreatefromjpeg("userimg/".$md5.".jpg");//参数是图片的存方路径

$maxwidth="150";//设置图片的最大宽度

$maxheight="150";//设置图片的最大高度

$name="userimg/".$md5;//图片的名称，随便取吧

$filetype=".jpg";//图片类型

resizeImage($im,$maxwidth,$maxheight,$name,$filetype);//调用上面的函数

				echo $md5.".jpg";
	
        }  
    }  
}  
else  
{  
    echo "Invalid file";  
} 
}else{
	echo "非法访问";
}
?>