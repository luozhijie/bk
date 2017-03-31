<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<? include("bootstrapinclude.php"); ?>
	<link rel="stylesheet" href="css/login.css" type="text/css"/>
	<title>用户注册</title>
	<? isset($_GET["stat"])?$stat = $_GET["stat"]:$stat = 1 ?>
	
</head>
<script type="text/javascript">
		$(function () {
        $('form').bootstrapValidator({
　　　　　　　　message: 'This value is not valid',
            　feedbackIcons: {
                　　　　　　　　valid: 'glyphicon glyphicon-ok',
                　　　　　　　　invalid: 'glyphicon glyphicon-remove',
                　　　　　　　　validating: 'glyphicon glyphicon-refresh'
            　　　　　　　　   },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        }
                    }
                },
                pwd: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        }
                    }
                },
				cpwd: {
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        }
                    }
                }
            }
        });
    });
	
	$(function(){
		$("#divusername").fadeIn(500);
		$("#divpwd").fadeIn(1000);
		<? if($stat == 2){ ?>
  		$("#divcpwd").fadeIn(1500);
		$("#divgxqm").fadeIn(2000);
		<? } ?>
		$("#divbutton").fadeIn(<?=$stat==1?1500:2500 ?>);
		
});
	
	</script>
<body class="background">
<? include("nav.php") ?>
	<div style="margin:10% auto;width:58%; height: 500px; background-color: white;" class="boxshadow yj">

		<ul class="nav nav-tabs nav-justified">

			<li <?=$stat==1? "class='active'": "" ?>><a href="login.php?stat=1">登录</a>
			</li>
			<li id="lireg" <?=$stat==2? "class='active'": "" ?>><a href="login.php?stat=2">注册</a>
			</li>
		</ul>


		<form class="form-horizontal" role="form" method="post" action="<?=$stat==2?" doreg.php ":"dologin.php " ?>">
			<div class="form-group"  id="divusername" style="display: none;">
				<label for="username" class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-9">
					<input type="text" class="form-control input-group-lg" id="username" name="username" placeholder="请输入名字">
				</div>
			</div>

			<div class="form-group" id="divpwd" style="display: none;">
				<label for="pwd" class="col-sm-2 control-label">密码</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入密码">
				</div>
			</div>
			<? if($stat==2){ ?>
			<div class="form-group" style="display: none;" id="divcpwd">
				<label for="cpwd" class="col-sm-2 control-label">确认密码</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="请再次输入密码">
				</div>
			</div>

			<div id="divgxqm" style="width: 98%; margin: 0 auto; display: none;" >
				<p style="font-weight: bold">个性签名</p>
				<textarea name="gexinqianming" id="gexinqianming" class="form-control col-lg-2" rows="3"></textarea>
			</div>
			<? } ?>

			<div style="width: 112px;margin: 2% auto; display: none;" id="divbutton">
				<p>

					<button type="submit" class="btn btn-primary btn-default">
						<?=$stat==2 ? "注册" :"登陆" ?>
					</button>
					<button type="reset" class="btn btn-primary btn-default">重置</button>
				</p>
			</div>


		</form>


	</div>



</body>

</html>