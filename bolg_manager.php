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
	var page=1;
		$(document).ready(function(){
			getmore();
})
		function  getmore(){
$.getJSON("./get_blog_list.php?page="+page,function(data){
var $jsontip = $("#tbody"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<tr><td>"+info["title"]+"</td><td>"+info["content"]+"</td><td>"+info["readtimes"]+"</td><td>"+info["11"]+"</td><td>"+info["goodtimes"]+"</td><td><div class='btn-group btn-group-xs'><button type='button' class='btn btn-default' onClick='return editBlogById("+info["id"]+")'>修改</button><button type='button' class='btn btn-default' onClick='return delBlogById("+info["id"]+")'>删除</button></div></td></tr>";
})
$jsontip.append(strHtml);//显示处理后的数据 
})
page++;
}
	
	function delBlogById(bid){
		 window.location="del_blog_by_id.php?bid="+bid+"";
	}
	
	function editBlogById(bid){
		window.location="edit_blog_by_id.php?bid="+bid+"";
	}
</script>

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
	<tbody id="tbody">
	 
		
		
	</tbody>
</table>
<button type="button" class="btn btn-primary btn-lg btn-block" onClick="getmore()">点击加载更多</button>
	</div>
</body>
</html>