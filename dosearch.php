<?
if(isset($_GET["searchinfo"])){
$searchinfo=$_GET["searchinfo"];
include("conn.php");
$sql = "SELECT * FROM bk.searchhistory where content = '".$searchinfo."'";
$result = mysql_query($sql,$con);
$info = mysql_fetch_array($result);
	$array = array();
if($info==null){
	$sql="INSERT INTO `bk`.`searchhistory` (`content`) VALUES ('".$searchinfo."');";
	$result = mysql_query($sql,$con);
}else{
	$sql="UPDATE `bk`.`searchhistory` SET `times`= `times`+1 where `content`= '".$searchinfo."';";
	$result = mysql_query($sql,$con);
}
	$sql = "SELECT * FROM bk.bloglist where title like '%".$searchinfo."%';";
	$result = mysql_query($sql,$con);
	while($info = mysql_fetch_array($result)){
//		echo $info["title"]."<br>";
		array_push($array,$info);
	}
	echo json_encode($array);
	
	
}
?>