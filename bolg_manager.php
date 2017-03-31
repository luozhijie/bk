<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">

<? include("nav.php"); ?>
<div style="width: 880px;margin: 0 auto;background-color: white;border-radius:10px;">
<table class="table table-striped">
	<caption>博文管理</caption>
	<thead>
		<tr>
			<th>标题</th>
			<th>简略内容</th>
			<th width="75px">观看次数</th>
			<th width="60px">评论数</th>
			<th width="75px">点赞次数</th>
			<th width="100px">操作</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>a</td>
			<td>b</td>
			<td>c</td>
			<td>d</td>
			<td>e</td>
			<td>
			<div class="btn-group btn-group-xs">
	<button type="button" class="btn btn-default">修改</button>
	<button type="button" class="btn btn-default">删除</button>
			</div>
			</td>
		</tr>
		
	</tbody>
</table>
	</div>
</body>
</html>