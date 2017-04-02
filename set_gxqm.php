<?
session_start();
if(isset($_SESSION["uid"])){
	include("conn.php");
	$id = $_SESSION["uid"];
	if(isset($_POST["gxqm"])){
	$sql = "UPDATE `bk`.`userlist` SET `gxqm`='".$_POST["gxqm"]."' WHERE `id`='".$id."';";
//		echo $sql;
	$result = mysql_query($sql,$con);
	if($result!=null){
		
	}
	}else{
		
	}
}else{
	
}
?>