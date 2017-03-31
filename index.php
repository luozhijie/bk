<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>我的博客</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">

<? include("nav.php"); ?>

<div style="width: 920px; margin: 0 auto;">
	<div style="width: 70%; float: left;">
		<? include("carousel.php") ?>
	</div>
	
 <div class="panel panel-primary" style="width: 30%;float: left;">
	<div class="panel-heading">
		<h3 class="panel-title">
			搜索热词
		</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group small">
	<li class="list-group-item">a</li>
	<li class="list-group-item">b</li>
	<li class="list-group-item">c</li>
	<li class="list-group-item">d</li>
</ul>
	</div>
	</div>
</div>
<div style="width: 920px; margin: 0 auto; clear: both;">
	
	<div class="panel panel-default" style="width: 640px; float: left;">
    <div class="panel-body" style="width: 620px;height: 180px; padding: 15px; margin: 0 auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 416px; height: 150px; margin: auto 10px ; float: left; padding: 2px; ">
				<div style="width: 416px; height: 40px;">
					title
				</div>
				<div style="width: 416px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 416px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
		</div>
    <div class="panel-body" style="width: 620px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 416px; height: 150px; margin: auto 10px ; float: left; padding: 2px; ">
				<div style="width: 416px; height: 40px;">
					title
				</div>
				<div style="width: 416px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 416px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
		</div>
    <div class="panel-body" style="width: 620px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 416px; height: 150px; margin: auto 10px ; float: left; padding: 2px; ">
				<div style="width: 416px; height: 40px;">
					title
				</div>
				<div style="width: 416px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 416px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
		</div>
    <div style=" width: 250px; margin: 0 auto;">
    <ul class="pagination">
	<li><a href="#">&laquo;</a></li>
	<li class="active"><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">&raquo;</a></li>
</ul>
</div>
</div>

<? include("tqyb.php") ?>
<div>
	 
	
</div>
</div>
</body>
</html>