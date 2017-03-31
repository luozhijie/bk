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
	<script type="text/javascript" language="javascript">
function upfile(){  //此处用了change事件，当选择好图片打开，关闭窗口时触发此事件
        $.ajaxFileUpload({
        url:'./upload_img.php',   //处理图片的脚本路径
        type: 'post',       //提交的方式
        secureuri :false,   //是否启用安全提交
        fileElementId :'inputfile',     //file控件ID
        dataType : 'json',  //服务器返回的数据类型      
        success : function (data, status){  //提交成功后自动执行的处理函数
            if(1 != data.total) return;　　 //因为此处指允许上传单张图片，所以数量如果不是1，那就是有错误了
            var url = data.files[0].path;　　
            $('.id_photos').empty();
            //此处效果是：当成功上传后会返回一个json数据，里面有url，取出url赋给img标签，然后追加到.id_photos类里显示出图片
            $('.id_photos').append('<img src="'+url+'" value="'+url+'" style="width:80%" >');
            //$('.upload-box').remove();
        },
        error: function(data, status, e){   //提交失败自动执行的处理函数
            alert(e);
        }
    });
}
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
				<img src="userimg/default.jpg" class="img-circle">
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
				<form class="form-inline" role="form">
	<div class="form-group">
		<label class="sr-only" for="inputfile">文件输入</label>
		<input type="file" id="inputfile">
	</div>
</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="button" class="btn btn-primary" id="submit" onClick="upfile();">
					提交
				</button>
			</div>
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