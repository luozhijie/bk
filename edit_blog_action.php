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
	if(isset($_POST["bid"])){
		$bid = $_POST["bid"];
		
	}
	$sql = "UPDATE `bk`.`bloglist` SET `title`='$title', `content`='$content' WHERE `id`='$bid';";
	echo "$sql";
	
	$result = mysql_query($sql,$con);
//	if($result){
		echo $result;
//	}
}
?>