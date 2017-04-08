<?
if(isset($_GET["searchinfo"])){
	$key = $_GET["searchinfo"];
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>博文</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">
<script language="javascript" type="text/javascript">
	var page=1;
		$(document).ready(function(){
			getmore("<? echo $key ?>");
})
		function  getmore(){
$.getJSON("./dosearch.php?page="+page+"&key="+"<? echo $key ?>",function(data){
var $jsontip = $("#divlistpanel"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div  onclick=\" return window.location.href='one_blog.php?id="+info["id"]+"';\" class='panel-body' style='width: 620px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;'><div style='width: 600px; height: 150px; margin: auto 10px ; float: left; padding: 2px; '><div style='width: 600px; height: 40px;'>"+info["title"]+"</div><div style='width: 600px; height: 60px;margin: 1px auto;'>"+info["content"]+"</div><div style='width: 600px; height: 44px; margin: 1px auto;'><div style='width: 90px; height: 44px;  float: left; '>"+info["username"]+"</div><div style='width: 80px; height: 44px;  float: left;'>赞："+info["goodtimes"]+"</div><div style='width: 80px; height: 44px;  float: left;'>评论数："+info["10"]+"</div><div style='width: 166px; height: 44px;  float: left;'>"+info["date"]+"</div></div></div></div>";
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
page++;
}
	</script>

<? include("nav.php"); ?>
	
<div style="width: 620px; margin: 0 auto; clear: both;">
	
	<div class="panel panel-default" id="divlistpanel">
   
		</div>
         
<!--
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
-->

</div>
<button type="button" class="btn btn-primary btn-lg btn-block" onClick="getmore()">点击加载更多</button>
</div>
</body>
</html>
<? } ?>