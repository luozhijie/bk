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
	var page = 1;
	$(document).ready(function(){
			getmore();
})
	function getmore(){
$.getJSON("./get_user_list.php?page="+page,function(data){
var $jsontip = $("#tbody1"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){ 
			var list = "<tr><td>"+info["id"]+"</td><td><img src='userimg/"+info["img"]+"' class='img-circle'></img></td><td>"+info["username"]+"</td><td>"+info["password"]+"</td><td>"+info["8"]+"</td><td>"+info["isroot"]+"</td><td>"+info["lastonline"]+"</td><td><div class='btn-group btn-group-xs'><button type='button' class='btn btn-default' onClick='return delUserById("+info["id"]+")'>删除</button><div class='btn-group-vertical btn-group-xs '><button type='button' class='btn btn-default dropdown-toggle btn-group-xs' data-toggle='dropdown'>管理员设置<span class='caret'></span></button><ul class='dropdown-menu'><li><a href='#' onClick='return changeRoot("+info["id"]+",1)'>是</a></li><li><a href='#' onClick='return changeRoot("+info["id"]+",0)'>否</a></li></ul></div></div></td></tr>";
	strHtml += list;
	
})
$jsontip.append(strHtml);//显示处理后的数据 
})
page++;
}
	
	function delUserById(uid){
		window.location="del_user.php?uid="+uid;
	}
	
	function changeRoot(uid,root){
		window.location="set_user_root.php?uid="+uid+"&root="+root;
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
		
	</tbody>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block" onClick="getmore()">点击加载更多</button>
	</div>
</body>
</html>