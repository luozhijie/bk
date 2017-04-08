<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>博文详情</title>
<? include("bootstrapinclude.php") ?>
</head>
<link href="css/index.css" rel=stylesheet type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<body class="background">
<? include("nav.php") ?>
<? if(isset($_GET["id"])){ ?>
<? $id = $_GET["id"]?>
	<script language="javascript" type="application/javascript">
		var page=1;
		$(document).ready(function(){
			getmore();
})
		function  getmore(){
$.getJSON("./get_comment_by_bid.php?page="+page+"&bid=<?=$id ?>",function(data){
//	alert(data);
var $jsontip = $("#commentpanel"); 
var strHtml="" ;//存储数据的变量 
$.each(data,function(infoIndex,info){
	strHtml += "<div style=\"width: 800px; margin: 0 auto; border:1px solid #000396\"><div style=\"height: 50px\"><div style=\"width: 50px; height: 50px; float: left\"><img src=\"userimg/"+info["img"]+"\" class=\"img-circle\" style=\"width: 50px; height: 50px;\"></img></div><div style=\"width: 200px; height: 20px; background-color: white; float: left; margin: 15px auto\">"+info["username"]+"</div><div style=\"width:200px; height: 20px; background-color: white; float:right;margin: 15px 0auto auto; text-align: right\">"+info["date"]+"</div></div><div style=\"width: 800px; clear: both;\">"+info["content"]+"</div></div>";
})
$jsontip.append(strHtml);//显示处理后的数据 
}) 
page++;
}
	function good(bid){
		$.post("add_goodtimes_by_bid.php?bid="+bid);
		var oldstr = document.getElementById("goodbutton").innerHTML;
		var tmp = oldstr.replace("赞","");
		var tmp2 = Number(tmp);
		var newstr = "赞"+(++tmp2);
		document.getElementById("goodbutton").innerHTML = newstr;
	}
		function sendcomment(){
			var comment = document.getElementById("comment").value;
			var bid = <?=$id ?>;
			var uid = <?=$_SESSION["uid"] ?>;
			var $jsontip = $("#commentpanel"); 
			var strHtml="" ;//存储数据的变量 
			$.post("add_comment.php",{bid:bid,content: comment,uid:uid} ,function (data){
				var obj = JSON.parse(data);
//				alert(obj.date);
				strHtml += "<div style=\"width: 800px; margin: 0 auto; border:1px solid #000396\"><div style=\"height: 50px\"><div style=\"width: 50px; height: 50px; float: left\"><img src=\"userimg/"+obj.img+"\" class=\"img-circle\" style=\"width: 50px; height: 50px;\"></img></div><div style=\"width: 200px; height: 20px; background-color: white; float: left; margin: 15px auto\">"+obj.username+"</div><div style=\"width:200px; height: 20px; background-color: white; float:right;margin: 15px 0auto auto; text-align: right\">"+obj.date+"</div></div><div style=\"width: 800px; clear: both;\">"+obj.content+"</div></div>";
				$jsontip.before(strHtml);//显示处理后的数据
			});
 
		}
	</script>
<?
	$sql = "select * from (SELECT * FROM bk.bloglist where id=$id) as a join userlist on userlist.id = userid;";
						  include("conn.php");
						 $result =  mysql_query($sql,$con);
						 if( $row = mysql_fetch_array($result)){
?>

	<div style="width: 920px; margin: 0 auto; clear: both;">
		<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">详细信息
		<button id="goodbutton" onClick="return good(<?=$id ?>);" type="button" class="btn btn-success" style="float: right;">赞<?=$row["goodtimes"] ?></button>
		</h3>
		
	</div>
	<div class="panel-body">
		<div style="margin: 0 auto;width: 800px; height: 80px; font-size: 50px; text-align: center;">
			<?=$row["title"] ?>
		</div>
		<div style="margin: 0 auto;width: 300px; height: 20px; font-size: 15px; text-align: center; float: left;">
			发布时间：<?=$row["date"] ?>
		</div>
		<div style="margin: 0 auto;width: 200px; height: 20px; font-size: 15px; text-align: center;float: left;">
			用户：<?=$row["username"] ?>
		</div>
		<div style="margin: 0 auto;width: 300px; height: 20px; font-size: 15px; text-align: center;float: left;">
			个性签名：<?=$row["gxqm"] ?>
		</div>
		<div style="width: 300px;">
			正文：<?=$row["content"] ?>
		</div>
	</div>
	
	<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">发表评论</h3>
	</div>
	<div class="panel-body">
		<textarea name="comment" id="comment"></textarea>
		<button type="button" class="btn btn-primary btn-lg btn-block" onClick="return sendcomment();">发表评论</button></div>
	</div>
</div>
	
	<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">评论</h3>
	</div>
	<div id="commentpanel" class="panel-body">
		
	</div>
	<div style="width: 800px; margin: 0 auto">
		<button type="button" class="btn btn-primary btn-lg btn-block" onClick="return getmore();">点击加载更多</button></div>
</div>
</div>

	</div>
	<? }} ?>
</body>
</html>