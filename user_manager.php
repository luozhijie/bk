<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">
	
<script language="javascript" type="text/javascript">
	function getmore(url){
$.getJSON(url,function(data){
var $jsontip = $("#tbody1"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){ 
			var list = "<tr><td>"+info["id"]+"</td><td><img src='userimg/"+info["img"]+"' class='img-circle'></img></td><td>"+info["username"]+"</td><td>"+info["password"]+"</td><td>"+info["blogtimes"]+"</td><td>"+info["isroot"]+"</td><td>"+info["lastonline"]+"</td><td><div class='btn-group btn-group-xs'><button type='button' class='btn btn-default' onClick=''>修改</button><button type='button' class='btn btn-default' onClick=''>删除</button><div class='btn-group-vertical btn-group-xs '><button type='button' class='btn btn-default dropdown-toggle btn-group-xs' data-toggle='dropdown' onClick=''>管理员设置<span class='caret'></span></button><ul class='dropdown-menu'><li><a href='#' onClick=''>是</a></li><li><a href='#' onClick=''>否</a></li></ul></div></div></td></tr>";
	strHtml += list;
	
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
}
	</script>
<? include("nav.php"); ?>
<div style="width: 880px;margin: 0 auto;background-color: white;border-radius:10px;">
<table class="table table-striped">
	<caption>用户管理</caption>
	<thead>
		<tr>
			<th>ID</th>
			<th>IMG</th>
			<th>用户名</th>
			<th>密码</th>
			<th width="90px">发文次数</th>
			<th width="100px">管理员权限</th>
			<th>最近一次上线时间</th>
			<th width="180px">操作</th>
		</tr>
	</thead>
	<tbody id="tbody1">
		<tr>
			<td>a</td>
			<td>
				<img src="userimg/default.jpg" class="img-circle"></img>
			</td>
			<td>a</td>
			<td>a</td>
			<td>a</td>
			<td>a</td>
			<td>a</td>
			<td>
			<div class="btn-group btn-group-xs">
	<button type="button" class="btn btn-default" onClick="">修改</button>
	<button type="button" class="btn btn-default" onClick="">删除</button>
		<div class="btn-group-vertical btn-group-xs ">
		<button type="button" class="btn btn-default dropdown-toggle btn-group-xs" data-toggle="dropdown" onClick="">
			管理员设置
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#" onClick="">是</a></li>
			<li><a href="#" onClick="">否</a></li>
		</ul>
	</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block" onClick="getmore('./get_user_list.php?page=1')">点击加载更多</button>
	</div>
</body>
</html>