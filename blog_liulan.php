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
		function  getmore(url){
$.getJSON(url,function(data){
var $jsontip = $("#divlistpanel"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div class='panel-body' style='width: 850px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;'><div style='width: 150px; height: 150px;float: left';><img src='blogimg/"+info["img"]+"' class='img-circle'></img></div><div style='width: 630px; height: 150px; margin: auto 10px ; float: left; padding: 2px;'><div style='width: 620px; height: 40px;margin: 1px auto;'>"+info["title"]+"</div><div style='width: 620px; height: 60px;margin: 1px auto;'>"+info["content"]+"</div><div style='width: 620px; height: 44px; margin: 1px auto;'>info2</div></div></div>";
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
}
	</script>

<? include("nav.php"); ?>
<div style="width: 920px; margin: 0 auto; clear: both;">
	
	<div class="panel panel-default" id="divlistpanel">
    <div class="panel-body" style="width: 850px;height: 180px; padding: 15px; margin: 0 auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 630px; height: 150px; margin: auto 10px ; float: left; padding: 2px;">
				<div style="width: 620px; height: 40px;margin: 1px auto;">
					title
				</div>
				<div style="width: 620px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 620px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
		</div>
		<div class="panel-body" style="width: 850px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 630px; height: 150px; margin: auto 10px ; float: left; padding: 2px;">
				<div style="width: 620px; height: 40px;margin: 1px auto;">
					title
				</div>
				<div style="width: 620px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 620px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
		</div>
		<div class="panel-body" style="width: 850px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;">
			<div style="width: 150px; height: 150px;float: left";>
				<img src="blogimg/default.jpg" class="img-circle"></img>
			</div>
			<div style="width: 630px; height: 150px; margin: auto 10px ; float: left; padding: 2px;">
				<div style="width: 620px; height: 40px;margin: 1px auto;">
					title
				</div>
				<div style="width: 620px; height: 60px;margin: 1px auto;">
					info1
				</div>
				<div style="width: 620px; height: 44px; margin: 1px auto;">
					info2
				</div>
			</div>
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
<button type="button" class="btn btn-primary btn-lg btn-block" onClick="getmore('./get_blog_list.php?page=1')">点击加载更多</button>
</div>
</body>
</html>