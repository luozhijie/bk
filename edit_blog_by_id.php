<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>修改博客</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">




<? include("nav.php"); ?>
		<?
	if(isset($_SESSION["uid"])){
	if(isset($_GET["bid"])){
		$bid = $_GET["bid"];
		include("conn.php");
		$sql = "SELECT * FROM bk.bloglist where id = $bid ;";
		$result = mysql_query($sql,$con);
		$row = mysql_fetch_array($result);
		
	?>

		<div style="width: 920px; margin: 0 auto; clear: both; background-color: white;border-radius: 10px;">
		<form role="form" action="edit_blog_action.php" method="post">
			<input type="hidden" name="bid" id="bid" value="<?=$_GET["bid"] ?>"></input>
			<div class="form-group">
		<label for="name">标题</label>
		<input name="title" type="text" class="form-control" id="title" 
			   placeholder="请输入标题" value="<?=$row["title"] ?>">
	</div>
	<div class="form-group">
		<label for="name">内容</label>
			<textarea name="content" type="text" class="form-control" id="content" 
			   placeholder="请输入内容" rows="15"><?=$row["content"] ?></textarea>
	</div>
		<button type="submit" class="btn btn-default">提交</button>
			</form>
		</div>
		<? }} ?>
</body>
</html>