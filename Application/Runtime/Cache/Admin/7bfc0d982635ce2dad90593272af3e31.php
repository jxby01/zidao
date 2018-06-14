<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>后台模板</title>
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/amazeui.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/core.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/menu.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/index.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/admin.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/page/typography.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/page/form.css" />
		<link rel="stylesheet" href="/Public/Admin/assetsl/css/component.css" />
		<script type="text/javascript" charset="utf-8">
	   // 定义一个函数用以显示当前时间
	   function displayTime() {
	    var elt = document.getElementById("clock"); // 通过id= "clock"找到元素
	    var now = new Date(); // 得到当前时间
	    elt.innerHTML = now.toLocaleTimeString(); //让elt来显示它
	    setTimeout(displayTime,1000); //在1秒后再次执行
	   }
	   window.onload = displayTime; //当onload事件发生时开始显示时间
	 </script>
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
                <a href="index.html" class="logo"><span>Youzi<span>Dao</span></span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">
					<span id="clock" class="page-title"></span>
				</ul>
				
				<ul class="am-nav am-navbar-nav am-navbar-right">
					<li class="inform"><i class="am-icon-bell-o" aria-hidden="true"></i></li>
					<li class="hidden-xs am-hide-sm-only">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><img src="/Public/Admin/assetsl/img/search.png"></a>
                        </form>
                    </li>
				</ul>
			</div>
		</header>
		<!-- end page -->
		
		<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				  <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">
				    	<!-- User -->
						<div class="user-box am-hide-sm-only">
	                        <div class="user-img">
	                            <img src="/Public/Admin/assetsl/img/avatar-1.jpg" alt="user-img" title="你好啊☺" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
	                        </div>
	                        <h5><a href="<?php echo U('Admin/Login/logout');?>">退出登录</a> </h5>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	
	                            <li>
	                                <a href="#" class="text-custom">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                    <!-- End User -->
	            
						 <ul class="am-list admin-sidebar-list">
						    <li style="display: none"><a href="<?php echo U('Admin/Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
							<?php foreach($menu->module as $t):?>
							 <?php if($_SESSION['leavls'] == '*'){ ?>
							 <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#<?php echo $t->target?>'}"><span class="<?php echo $t->icon?>"></span> <?php echo $t->name?> <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub" id="<?php echo $t->target?>">
							  <?php foreach($t->controller as $k):?>
						        <li><a href="/index.php/Admin/<?php echo $k->link?>" class="am-cf"> <?php echo $k->name?></span></a></li>
							  <?php endforeach;?>
						      </ul>
						    </li>
							 <?php }else if(in_array($t->name->attributes()->id,$_SESSION['leavls'])){ ?>
							 <li class="admin-parent">
								 <a class="am-cf" data-am-collapse="{target: '#<?php echo $t->target?>'}"><span class="<?php echo $t->icon?>"></span> <?php echo $t->name?> <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
								 <ul class="am-list am-collapse admin-sidebar-sub" id="<?php echo $t->target?>">
									 <?php foreach($t->controller as $k):?>
									 <?php if(in_array($k->name->attributes()->id,$_SESSION['leavls'])){ ?>
						<li><a href="/index.php/Admin/<?php echo $k->link?>" class="am-cf"> <?php echo $k->name?></span></a></li>
									 <?php }?>
									 <?php endforeach;?>
								 </ul>
							 </li>
							 <?php }?>
							<?php endforeach;?>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->