<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>留言板</title>
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
$.getJSON("./get_liuyan.php?page="+page,function(data){
var $jsontip = $("#list"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div style=\"width: 800px; margin: 0 auto; border:1px solid #000396\"><div style=\"height: 50px\"><div style=\"width: 50px; height: 50px; float: left\"><img src=\"userimg/"+info["img"]+"\" class=\"img-circle\" style=\"width: 50px; height: 50px;\"></img></div><div style=\"width: 200px; height: 20px; background-color: white; float: left; margin: 15px auto\">"+info["username"]+"</div><div style=\"width:200px; height: 20px; background-color: white; float:right;margin: 15px 0auto auto; text-align: right\">"+info["date"]+"</div></div><div style=\"width: 800px; clear: both;\">"+info["content"]+"</div></div>";
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
page++;
}
	
	function sendLiuYan(uid){
		var liuyan;
		liuyan = document.getElementById("textarea").value;
		$.post("./add_liuyan.php",{content:liuyan},function(){
			alert("aaa");
			$.getJSON("get_last_liuyan_by_uid.php?uid="+uid,function(data){
var $jsontip = $("#list"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div style=\"width: 800px; margin: 0 auto; border:1px solid #000396\"><div style=\"height: 50px\"><div style=\"width: 50px; height: 50px; float: left\"><img src=\"userimg/"+info["img"]+"\" class=\"img-circle\" style=\"width: 50px; height: 50px;\"></img></div><div style=\"width: 200px; height: 20px; background-color: white; float: left; margin: 15px auto\">"+info["username"]+"</div><div style=\"width:200px; height: 20px; background-color: white; float:right;margin: 15px 0auto auto; text-align: right\">"+info["date"]+"</div></div><div style=\"width: 800px; clear: both;\">"+info["content"]+"</div></div>";
})
$jsontip.prepend(strHtml);//显示处理后的数据 
}) 
		} );
	}
	</script>
<? include("nav.php"); ?>
	<div style="width: 880px;margin: 0 auto;background-color: white;border-radius:10px;">
		<div class="panel panel-info">
    <div class="panel-heading">
        <h3 style="height: 30px" class="panel-title">
        留言板
        <button style="float: right;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	留言
</button>
        </h3>
        
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					留言
				</h4>
			</div>
			<div class="modal-body">
				<textarea name="textarea" id="textarea" rows="5" style="width: 550px; "></textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button onClick="return sendLiuYan(<?=$_SESSION["uid"] ?>)" type="button" class="btn btn-primary">
					留言
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
    </div>
    <div  class="panel-body">
    <div id="list" >
    	
		</div>
		<div style="width: 800px; margin: 0 auto">
		<button type="button" class="btn btn-primary btn-lg btn-block" onClick="return getmore();">点击加载更多</button></div>
    </div>
</div>
	</div>

</body>
</html>