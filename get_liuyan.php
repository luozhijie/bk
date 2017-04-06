<?
if(isset($_GET["page"])){
include("conn.php");
$array = array();
$sql = "SELECT liuyanban.*,username,img FROM bk.liuyanban join userlist on liuyanban.uid = userlist.id group by id desc limit ".(($_GET["page"]-1)*10).",10";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result)){
	array_push($array,$row);
}
echo json_encode($array);
}
?>