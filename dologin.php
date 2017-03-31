<?
session_start();
include("conn.php");
$username = $_POST["username"];
$pwd = $_POST["pwd"];
$sql = "SELECT * FROM bk.userlist where username = '$username' and password = '$pwd';";
$result = mysql_query($sql,$con);
$info = mysql_fetch_array($result);
if($info==null){
	echo "用户名或密码错误";
}else{
	$sql = "UPDATE `bk`.`userlist` SET `lastonline`=now() WHERE `id`=".$info["id"].";";
	mysql_query($sql,$con);
	$_SESSION["username"]=$info["username"];
	$_SESSION["isroot"]=$info["isroot"];
	echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
}
?>
