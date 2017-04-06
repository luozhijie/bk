<?
session_start();
if(isset($_SESSION["uid"])){
if(isset($_GET["bid"])){
	$bid = $_GET["bid"];
	$sql = "DELETE FROM `bk`.`bloglist` WHERE `id`='$bid';";
	include("conn.php");
	$result = mysql_query($sql,$con);
	if($result){
		echo("删除成功");
	}
}}
?>