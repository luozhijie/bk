<?
if(isset($_GET["page"])){
include("conn.php");
$array = array();
	if(isset($_GET["bid"])){
		$bid = $_GET["bid"];
$sql = "select a.*,username,img from (SELECT * FROM bk.comment where bid = $bid) as a join userlist on a.uid = userlist.id group by id desc limit ".(($_GET["page"]-1)*10).",10";
//		echo $sql;
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result)){
	array_push($array,$row);
}
echo json_encode($array);
}}
?>