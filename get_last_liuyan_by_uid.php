<?
session_start();
if(isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT liuyanban.*,userlist.img,username FROM bk.liuyanban join userlist on userlist.id = liuyanban.uid where uid = $uid group by id desc;";
	include("conn.php");
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);
	$array = array();
	array_push($array,$row);
	echo json_encode($array);
}
?>