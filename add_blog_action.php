<?
session_start();
include("conn.php");
if(isset($_SESSION["uid"])){
	$id=$_SESSION["uid"];
if(isset($_POST["title"])){
	$title = $_POST["title"];
}
	if(isset($_POST["content"])){
	$content = $_POST["content"];
}
	if(isset($_POST["img"])){
	$img = $_POST["img"];
}
	$sql = "INSERT INTO `bk`.`bloglist` (`title`, `content`, `userid`, `img`) VALUES ('$title','$content', '$id', 'default.jpg');";
	$result = mysql_query($sql,$con);
	if($result){
		echo "成功";
	}else{
		echo $sql;
	}
}
?>