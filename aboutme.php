<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>关于我</title>
<? include("bootstrapinclude.php"); ?>
</head>
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
	
<body  class="background">
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
$("#more").click(function(){
    $("#div1").fadeOut(1000);
  });
});
	</script>
<? include("nav.php") ?>
<div style="width: 920px;margin: 0 auto;background-color: red">
<div class="panel panel-info" style=" float: left; width:  600px">
	<div class="panel-heading">
		<h3 class="panel-title">关于我</h3>
	</div>
	<div class="panel-body">
	about me;
	</div>
</div>
<div style="width: 258px;height: 300px; float: left">
<? include("tqyb.php") ?>
</div>
<!--
	<div style="width: 700px; float: left; background-color: white ">
		
	</div>
-->
</div>



</div>

</body>
</html>