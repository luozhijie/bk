<?
if(isset($_SESSION["uid"])){
	$id = $_SESSION["uid"];
include("conn.php");
	$result = mysql_query("SELECT gxqm FROM bk.userlist where id = ".$id.";",$con);
	$info = mysql_fetch_array($result);
	if($info!=null){
		echo $info["gxqm"];
	}
}else{
	
}
?>