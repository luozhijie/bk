<?
session_start();
if(isset($_SESSION["uid"])){
if(isset($_GET["uid"])){
	$uid  = $_GET["uid"];
	$sql = "DELETE FROM `bk`.`userlist` WHERE `id`='$uid';";
	include("conn.php");
	$result = mysql_query($sql,$con);
}}
?>