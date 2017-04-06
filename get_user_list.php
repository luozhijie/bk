<?
include("conn.php");
$array = array();
$sql = "SELECT * FROM bk.userlist limit ".(($_GET["page"]-1)*10).",10;";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result)){
	$id = $row["id"];
	$sql = "SELECT count(*) as count FROM bk.bloglist where userid = $id;";
//	echo $sql;
	$row2 = mysql_fetch_array(mysql_query($sql,$con));
	array_push($row,$row2['count']);
	array_push($array,$row);
}
echo json_encode($array);
?>