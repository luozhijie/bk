<?
include("conn.php");
$sql = "SELECT content FROM bk.searchhistory order by times desc limit 0,4;";

$result = mysql_query($sql,$con);
$hotsearchcontent=array() ;
while($hotsearch = mysql_fetch_array($result)){
	array_push($hotsearchcontent,$hotsearch["content"]);
}

?>