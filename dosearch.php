<?
if(isset($_GET["key"])){
$key=$_GET["key"];
	if(isset($_GET["page"])){
		$page = $_GET["page"];
include("conn.php");
$sql = "SELECT * FROM bk.searchhistory where content = '".$key."'";
$result = mysql_query($sql,$con);
$info = mysql_fetch_array($result);
	$array = array();
if($info==null){
	$sql="INSERT INTO `bk`.`searchhistory` (`content`) VALUES ('".$key."');";
	$result = mysql_query($sql,$con);
}else{
	$sql="UPDATE `bk`.`searchhistory` SET `times`= `times`+1 where `content`= '".$key."';";
	$result = mysql_query($sql,$con);
}
	$sql = "select a.*,username from(SELECT * FROM bk.bloglist where content like '%$key%') as a join userlist on userlist.id = a.userid limit ".(($page-1)*10).",10;";
	$result = mysql_query($sql,$con);
	while($info = mysql_fetch_array($result)){
//		echo $info["title"]."<br>";
		$sql = "SELECT count(*) as count FROM bk.comment where bid = ".$info["id"].";";
		$result2 = mysql_query($sql,$con);
		$row = mysql_fetch_array($result2);
		array_push($info,$row["count"]);
		array_push($array,$info);
	}
	echo json_encode($array);
}}
?>