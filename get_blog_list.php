<?
include("conn.php");
$array = array();
$sql = "SELECT bloglist.*,userlist.img as uimg,username FROM bk.bloglist join userlist on userlist.id = userid group by id desc limit ".(($_GET["page"]-1)*10).",10";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result)){
	$sql = "SELECT count(*) as count FROM bk.comment where bid = ".$row['id'].";";
	$resultnum = mysql_query($sql,$con);
	$row2 = mysql_fetch_array($resultnum);
//	print_r($row2['count']);
	$count = array("count"=>$row2['count']);
//	array_push($count,$row2['count']);
//	print_r($count);
//	print_r($row);
//	array_push($row,$count);
	array_push($row,$row2['count']);
	$row["content"] = strip_tags($row["content"]);
	
	array_push($array,$row);
//	array_push($array,$count);
}
echo json_encode($array);
?>