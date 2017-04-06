<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>发布博客</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">

<? include("nav.php"); ?>
<script language="javascript" type="text/javascript">
	function addhuanghang(){
		document.getElementById("content").value+="<br>";
	}
	function addshuipingxian(){
		document.getElementById("content").value+="<hr>";
	}
	function addkongge(){
		document.getElementById("content").value+="&nbsp;";
	}
	function addimg(){
		document.getElementById("content").value+="&nbsp;";
	}
	
	function submit(){
		$.post("add_blog_action.php", { title : document.getElementById("title").value,content : document.getElementById("content").value } );
	}
	
	function pushImgAndGetPath(){
		$.post("upload_content_img.php",$("#uploadform"),function(imgPath){
			document.getElementById("content").value+="<img src='"+imgPath+"'></img>";
		});
	}
	
	function uploadimg(){
        var formData = new FormData($("#uploadform")[0]);
$.ajax({ 
url : 'upload_content_img.php', 
type : 'POST', 
data : formData, 
// 告诉jQuery不要去处理发送的数据
processData : false, 
// 告诉jQuery不要去设置Content-Type请求头
contentType : false,
beforeSend:function(){
console.log("正在进行，请稍候");
},
success : function(responseStr) {
//	alert(responseStr);
	var zhuanyi = "\\\"";
	document.getElementById("content").value+="<img src=\\'"+responseStr+"\\'></img>";
}, 
error : function(responseStr) {
console.log("error");
	alert(responseStr);
} 
});}
	</script>
	
	
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					插入图片
				</h4>
			</div>
			<form class="form-inline" role="form" enctype="multipart/form-data" id="uploadform">
			<div class="modal-body">
				<input type="file" id="file" name="file" id="file"/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="button" class="btn btn-primary" onClick="return uploadimg();">
					提交
				</button>
				</form>
			</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
	
	
		<div style="width: 920px; margin: 0 auto; clear: both; background-color: white;border-radius: 10px;">
<!--		<form role="form" action="add_blog_action.php" method="post">-->
			<div class="form-group">
		<label for="name">标题</label>
		<input name="title" type="text" class="form-control" id="title" 
			   placeholder="请输入标题">
	</div>
	<div class="form-group">
		<label for="name">内容</label>
		  <button type="button" id="huanhang" class="btn btn-primary" onClick="return addhuanghang()">换行</button>
	    <button type="button" id="kongge" class="btn btn-primary"> 空格</button>
		    <button type="button" id="shuipingxian" class="btn btn-primary"> 水平线</button>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	插入图像
</button>
			<textarea name="content" hidden="content" type="text" class="form-control" id="content" 
			   placeholder="请输入内容" rows="30"></textarea>
	</div>
		<button type="submit" class="btn btn-default" onClick="return submit();">提交</button>
<!--			</form>-->
		</div>
</body>
</html>