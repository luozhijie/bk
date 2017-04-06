<?
session_start();
if(isset($_SESSION["uid"])){
	if(isset($_GET["root"])&& isset($_GET["uid"])){
		$uid = $_GET["uid"];
		$rootStat = $_GET["root"];
		$sql = "UPDATE `bk`.`userlist` SET `isroot`='$rootStat' WHERE `id`='$uid';";
		include("conn.php");
		mysql_query($sql,$con);
		
	}
}
?>