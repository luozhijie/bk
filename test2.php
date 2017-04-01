<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<script>
	 function test(){
            var form = new FormData(document.getElementById("tf"));
//             var req = new XMLHttpRequest();
//             req.open("post", "${pageContext.request.contextPath}/public/testupload", false);
//             req.send(form);
            $.ajax({
                url:"upload_img.php",
                type:"post",
                data:form,
                processData:false,
                contentType:false,
                success:function(data){
                    window.clearInterval(timer);
                    console.log("over..");
                },
                error:function(e){
                    alert("错误！！");
                    window.clearInterval(timer);
                }
            });        
            get();//此处为上传文件的进度条
        }
	</script>
	
	<form action="upload_img.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
		<button type="button" name="submit" value="Submit" onClick="return test();"></button>
</form>


</body>
</html>