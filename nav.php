<? session_start(); ?>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LZJ's Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <? $active = isset($_GET["active"])?$_GET["active"]:1 ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav">
       <li class=<?=$active==1?"active":"" ?>><a href="index.php?active=1">首页</a></li>
        <li class=<?=$active==2?"active":"" ?>><a href="aboutme.php?active=2">关于我</a></li>
        <li class=<?=$active==3?'active':'' ?>><a href="blog_liulan.php?active=3">博文</a></li>
        <? if(isset($_SESSION["isroot"])?$_SESSION["isroot"]==1:false){ ?>
        <li class="dropdown <?=$active==4||$active==5||$active==6?"active":"" ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class=<?=$active==4?'active':'' ?>><a href="bolg_manager.php?active=4">博文管理</a></li>
            <li class=<?=$active==5?'active':'' ?>><a href="user_manager.php?active=5">用户管理</a></li>
            <li class=<?=$active==6?'active':'' ?>><a href="system_manager.php?active=6">系统管理</a></li>
          </ul>
        </li>
        <? } ?>
        <li class=<?=$active==7?'active':'' ?>><a href="liuyanban.php?active=7">留言板</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-left" action="dosearch.php" method="get">
        <div class="form-group">
          <input type="text" name="searchinfo" class="form-control" placeholder="搜索博文">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
      <? if(isset($_SESSION["username"])){ ?>
			    <ul class="nav navbar-nav">
			    <li class=<?=$active==8?"active":"" ?>><a href="self_center.php?active=8">个人中心</a></li>
		  		</ul>
			    <? } ?>
		  <form class="navbar-form navbar-right">
		  	<button type="submit" onClick="javascript:document.location.href='<?=isset($_SESSION["username"])?"cancellogin.php":"login.php"  ?>';return false; " class="btn btn-<?=isset($_SESSION["username"])?'danger':'primary' ?>"><?=isset($_SESSION["username"])?"注销":"登录" ?></button>

		  </form>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
