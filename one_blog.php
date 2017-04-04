<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>博文详情</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">
<? include("nav.php") ?>
<? if(isset($_GET["id"])){ ?>
<? $id = $_GET["id"]?>
<?
	$sql = "select * from (SELECT * FROM bk.bloglist where id=$id) as a join userlist on userlist.id = userid;";
						  include("conn.php");
						 $result =  mysql_query($sql,$con);
						 if( $row = mysql_fetch_array($result)){
?>
	<div style="width: 920px; margin: 0 auto; clear: both;background-color: wheat">
		<div style="margin: 0 auto;width: 800px; height: 80px; font-size: 50px; text-align: center;">
			<?=$row["title"] ?>
		</div>
		<div style="margin: 0 auto;width: 300px; height: 20px; font-size: 15px; text-align: center; float: left;">
			发布时间：<?=$row["date"] ?>
		</div>
		<div style="margin: 0 auto;width: 200px; height: 20px; font-size: 15px; text-align: center;float: left;">
			用户：<?=$row["username"] ?>
		</div>
		<div style="margin: 0 auto;width: 300px; height: 20px; font-size: 15px; text-align: center;float: left;">
			个性签名：<?=$row["gxqm"] ?>
		</div>
		<div style="width: 300px;">
			正文：<?=$row["content"] ?>
		</div>
	</div>
	<? }} ?>
</body>
</html>