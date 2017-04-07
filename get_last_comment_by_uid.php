<?
session_start();
if(isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
	if(isset($_POST["bid"])){
		$bid = $_POST["bid"];
	$sql = "select a.*,username,img from (SELECT * FROM bk.comment where bid=$bid and uid=$uid) as a join userlist on userlist.id = a.uid group by id desc limit 0,1;";
	include("conn.php");
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);
	$array = array();
	array_push($array,$row);
	echo json_encode($array);
}}
?>