<? 
session_start();
include("conn.php");
$username = $_POST["username"];
$pwd = $_POST["pwd"];
$gexinqianming = $_POST["gexinqianming"];

$sql = "INSERT INTO `bk`.`userlist` (`username`, `password`, `gxqm`) VALUES ('$username', '$pwd', '$gexinqianming');";
if(mysql_query($sql,$con)){
	echo "	tianjiachengg";
}else{
	echo "shibai<br>"."$sql";
}
?>