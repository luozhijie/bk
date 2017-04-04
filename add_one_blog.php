<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>发布博客</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">

<? include("nav.php"); ?>

		<div style="width: 920px; margin: 0 auto; clear: both;">
		<form role="form">
			<div class="form-group">
		<label for="name">标题</label>
		<input name="title" type="text" class="form-control" id="title" 
			   placeholder="请输入标题">
	</div>
	<div class="form-group">
		<label for="name">内容</label>
			<textarea name="content" type="text" class="form-control" id="content" 
			   placeholder="请输入内容" rows="15"></textarea>
	</div>
		<button type="submit" class="btn btn-default">提交</button>
			</form>
		</div>
</body>
</html>