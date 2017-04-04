<?
if(isset($_GET["bid"])){
	$bid = $_GET["bid"];
include("conn.php");
$sql = "SELECT count(*) as commenttimes FROM bk.comment where bid = $bid;";
$result = mysql_query($sql,$con);
$commenttimes = mysql_fetch_array($result);
echo "$commenttimes";
}

//function getBlogCommentTimes($bid){
//	include("conn.php");
//$sql = "SELECT count(*) as commenttimes FROM bk.comment where bid = $bid;";
//$result = mysql_query($sql,$con);
//$commenttimes = mysql_fetch_array($result);
//return("$commenttimes") ;
//}
?>