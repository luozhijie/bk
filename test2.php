<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<? include("bootstrapinclude.php") ?>
<body>
<script>
	function ajaxfresh(url){
		$.ajax({
　　　　　　type : "get",
　　　　　　async : false,
　　　　　　url : url,
　　　　　　data : '{type:1}',
			timeout : 3000,
			success : function(page){
　　　　　　　　$("#mainContent").html(page);
　　　　　　},
　　　　　　error : function(){
　　　　　　　　console.log("faild");
　　　　　　}
　　　　});
　　}

function  getmore(url){
$.getJSON(url,function(data){
var $jsontip = $("#mainContent"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){ 
strHtml += info["id"];
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
}
			
	function  getmore1(url){
		alert("aaa");
$.getJSON(url,function(data){
var $jsontip = $("#tbody1"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){ 
strHtml += "<tr><td><img src='userimg/".info["id"]."' class='img-circle'></img></td><td>".info["img"]."</td><td>".info["username"]."</td><td>".info["password"]."</td><td>".info["blogtimes"]."</td><td>".info["isroot"]."</td><td>".info["lastonline"]."</td><td><div class='btn-group btn-group-xs'><button type='button' class='btn btn-default' onClick=''>修改</button><button type='button' class='btn btn-default' onClick=''>删除</button><div class='btn-group-vertical btn-group-xs '><button type='button' class='btn btn-default dropdown-toggle btn-group-xs' data-toggle='dropdown' onClick=''>管理员设置<span class='caret'></span></button><ul class='dropdown-menu'><li><a href='#' onClick=''>是</a></li><li><a href='#' onClick=''>否</a></li></ul></div></div></td></tr>";
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
}
</script>
<a href="#" onclick="getmore1('./get_user_list.php?page=1')">click</a>
<div id="tbody1"></div>
</body>
</html>
