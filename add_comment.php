<?
session_start();
if(isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
	if(isset($_GET["bid"])){
		$bid = $_GET["bid"];
	if(isset($_GET["content"])){
		$content = $_GET["content"];
		$sql = "INSERT INTO `bk`.`comment` (`uid`, `content`, `bid`) VALUES ('$uid', '$content', '$bid');";
		include("conn.php");
		mysql_query($sql,$con);
		$sql = "select a.*,username,img from (SELECT * FROM bk.comment where bid=$bid and uid=$uid) as a join userlist on userlist.id = a.uid group by id desc limit 0,1;";
		$result = mysql_query($sql,$con);
		$row = mysql_fetch_array($result);
		echo json_encode($row);
	}
	}
}
?>