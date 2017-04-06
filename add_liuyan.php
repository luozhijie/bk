<?
session_start();
if(isset($_SESSION["uid"])){
	if(isset($_POST["content"])){
	$uid = $_SESSION["uid"];
		$content = $_POST["content"];
	include("conn.php");
	$sql = "INSERT INTO `bk`.`liuyanban` (`uid`, `content`) VALUES ('$uid', '$content');";
	$result = mysql_query($sql,$con);
		echo $sql;
}
}

?>