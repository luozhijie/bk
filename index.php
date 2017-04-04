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
<script language="javascript" type="text/javascript">
	var page=1;
		$(document).ready(function(){
			getmore();
})
		function  getmore(){
$.getJSON("./get_blog_list.php?page="+page,function(data){
var $jsontip = $("#divlistpanel"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div onclick=\" return window.location.href='one_blog.php?id="+info["id"]+"';\" class='panel-body' style='width: 620px;height: 180px; padding: 15px; margin: -2px auto; border:2px solid #FF4747; border-radius: 10px;'><div style='width: 150px; height: 150px;float: left';><img src='blogimg/"+info["img"]+"' class='img-circle'></img></div><div style='width: 416px; height: 150px; margin: auto 10px ; float: left; padding: 2px; '><div style='width: 416px; height: 40px;'>"+info["title"]+"</div><div style='width: 416px; height: 60px;margin: 1px auto;'>"+info["content"]+"</div><div style='width: 416px; height: 44px; margin: 1px auto;'><div style='width: 90px; height: 44px; background-color: red; float: left; '>"+info["username"]+"</div><div style='width: 80px; height: 44px; background-color: red; float: left;'>赞："+info["goodtimes"]+"</div><div style='width: 80px; height: 44px; background-color: red; float: left;'>评论数："+info["10"]+"</div><div style='width: 166px; height: 44px; background-color: red; float: left;'>"+info["date"]+"</div></div></div></div>";
})
$jsontip.append(strHtml);//显示处理后的数据 
})
page++;
}
</script>
<div style="position: fixed;margin-right:100px;margin-bottom:100px;"><img width="150px" height="150px" src="imgs/add_blog.jpg" ></img></div>
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
		<? include("hot_search.php") ?>
		<? foreach($hotsearchcontent as &$value){ ?>
	<li class="list-group-item"><?=$value ?></li>
	<? } ?>
</ul>
	</div>
	</div>
</div>
<div style="width: 920px; margin: 0 auto; clear: both;">
	
	<div  id="divlistpanel" class="panel panel-default" style="width: 640px; float: left;">
    
</div>

<? include("tqyb.php") ?>
<div>
	 
	
</div>
</div>
</body>
</html>