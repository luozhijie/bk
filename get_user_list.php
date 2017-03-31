<?
include("conn.php");
$array = array();
$sql = "SELECT * FROM bk.userlist limit ".(($_GET["page"]-1)*10).",".(($_GET["page"]*10)-1).";";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result)){
	array_push($array,$row);
}
echo json_encode($array);
?>