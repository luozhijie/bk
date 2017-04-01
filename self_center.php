<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>个人中心</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<link href="self_center.css" rel="stylesheet" type="text/css"/>
<body class="background">
<script src="js/ajaxfileupload.js" type="text/javascript" language="javascript"></script>
   <script type="text/JavaScript">
	   function upload(){
        var formData = new FormData($("#uploadform")[0]);
$.ajax({ 
url : 'upload_img.php', 
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
	alert(responseStr);
	document.getElementById("userimg").src=responseStr;
if(responseStr.status===0){
	document.getElementById("userimg").src=responseStr;
console.log("成功"+responseStr);
}else{
console.log("失败");
}
}, 
error : function(responseStr) { 
console.log("error");
	alert(responseStr);
} 
});}
</script>
<? include("nav.php") ?>

<div style="width: 920px; margin: 0 auto;">
		<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">个人中心</h3>
    </div>
    <div class="panel-body">
		<div style="width: 150px; height: 200px; margin: 0 auto;">
			<div style="widows: 150px; height: 150px">
				<img src="userimg/default.jpg" class="img-circle" id="userimg">
				</img>
			</div>
		<div style="width: 150px; height: 50px;">
		<div style="margin: 0 auto; text-align: center">
			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">更改头像</button>
			</div>
		</div>
		</div>
    </div>
    

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					上传头像
				</h4>
			</div>
			<div class="modal-body">
				<form action="upload_img.php" method="post" class="form-inline" role="form" enctype="multipart/form-data" id="uploadform">
	<div class="form-group">
		<label class="sr-only" for="inputfile">文件输入</label>
		<input type="file" id="file" name="file" id="file"/>
	</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="button" name="submit" value="submit" class="btn btn-primary" id="submit" onClick="return upload();" data-dismiss="modal">
					提交
				</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
    
    <div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">个性签名</h3>
	</div>
	<div class="panel-body">
		<div style="width: 700px;margin: 0 auto;">
			<textarea style="width:700px; height:500px; border:solid 1px #f00; border-radius:20px; resize:none;"></textarea>
		</div>
		<div style="text-align: center"> 
			<button type="button" class="btn btn-info" style="text-align: center;">更改个性签名</button>
		</div>
	</div>
</div>
	</div>
	
	
	
	</div>
</body>
</html>