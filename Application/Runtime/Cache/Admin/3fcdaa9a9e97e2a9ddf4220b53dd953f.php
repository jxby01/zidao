<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>System backstage logon system</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="/zidao/Public/Admins/css/bootstrap.min.css">
	<link rel="stylesheet" href="/zidao/Public/Admins/css/animate.css">
	<link rel="stylesheet" href="/zidao/Public/Admins/css/style.css">


	<!-- Modernizr JS -->
	<script src="/zidao/Public/Admins/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-2">

		<div class="container">
			
            <div class="copyrights">Collect from Yanger</a></div>
			<div class="row">
					<div class="col-md-4">
					

					<!-- Start Sign In Form -->
					<form action="<?php echo U('Admin/Login/login');?>" id="msg_form" method="POST"  class="fh5co-form animate-box" data-animate-effect="fadeInLeft">
						<h2>Sign In</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group" style="height:50px;">
							<div class="checkcode" style="width:120px;float:left;">
								<label for="password" class="sr-only">Verification Code</label>
								<input type="text" name="yanzhengma" id="code" class="form-control" placeholder="Verification" autocomplete="off">
							</div>
								<img id="Imgchange" style="float:right;width:140px;margin-top:7px;" src="<?php echo U('Admin/Login/verify');?>">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						
						<div class="form-group">
							<input type="submit" value="Sign In" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
					
			</div>
			
		</div>
	<div class="row" style="clear: both;position:absolute;bottom:0;left:35%;">
				<div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. More Templates Yanger - Collect from Yanger</small></p></div>
	</div>
	<!-- jQuery -->
	<script src="/zidao/Public/Admins/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/zidao/Public/Admins/js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="/zidao/Public/Admins/js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="/zidao/Public/Admins/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/zidao/Public/Admins/js/main.js"></script>


	</body>
</html>
<script>
$(function(){
	$('#msg_form').submit(function(){
		var yanzhengma = $('#code').val();
		if(yanzhengma == null || yanzhengma == '' ){
			alert('请输入验证码');
			return false;
		}
	});
	$('#Imgchange').click(function(){
		$('#Imgchange').attr('src','<?php echo U("Admin/Login/verify");?>');
	})
		
})
</script>