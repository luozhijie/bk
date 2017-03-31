<?php
error_reporting(0);
$con=mysql_connect("127.0.0.1:3306","root","luozhijie");
$db = mysql_select_db("bk",$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
?>