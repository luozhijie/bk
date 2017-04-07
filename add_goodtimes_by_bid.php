<?
session_start();
if(isset($_SESSION["uid"])){
	if(isset($_GET["bid"])){
		$bid = $_GET["bid"];
		$sql = "UPDATE `bk`.`bloglist` SET `goodtimes`=`goodtimes`+1 WHERE `id`='$bid';";
		echo $sql;
		include("conn.php");
		$result = mysql_query($sql,$con);
		
	}
}
?>