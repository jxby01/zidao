<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>登录</title>
<link href="/zidao/Public/Admin/Wopop_files/style_log.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/zidao/Public/Admin/Wopop_files/style.css">
<link rel="stylesheet" type="text/css" href="/zidao/Public/Admin/Wopop_files/userpanel.css">
<link rel="stylesheet" type="text/css" href="/zidao/Public/Admin/Wopop_files/jquery.ui.all.css">

</head>

<body class="login" mycollectionplug="bind">
<div class="login_m">
<div class="login_logo"><img src="/zidao/Public/Admin/Wopop_files/logo.png" width="196" height="46"></div>
<div class="login_boder">

<div class="login_padding" id="login_model" style="margin-top:40px;">

 
  <label>
  
    <input style="font-size:12px;font-family: Microsoft YaHei;" type="text" id="username" class="txt_input txt_input2" placeholder="用户名" onfocus="if (value ==&#39;&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;&#39;}">
  </label>
 
  <label>
  
    <input style="font-size:12px;font-family: Microsoft YaHei;" type="password" name="textfield2" id="userpwd" class="txt_input" placeholder="密码" onfocus="if (value ==&#39;&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;&#39;}">
  </label>
  
  <label>
  
    <input style="font-size:12px;margin-top:8px;font-family: Microsoft YaHei;width:150px;" type="text" name="textfield2" id="code" class="txt_input" placeholder="验证码" onfocus="if (value ==&#39;&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;&#39;}" value="">
	
  </label>
 <img id="Imgchange" style="float:right;width:140px;margin-top:7px;cursor:pointer;" src="<?php echo U('Admin/Login/verify');?>">
 

 
  <div class="rem_sub">
 
    <label>
      <input type="submit" class="sub_button" name="button" id="button" value="登录" style="opacity: 0.7;">
    </label>
  </div>
</div>


<div id="forget_model" class="login_padding" style="display:none">
<br>

   <br>
   <div class="forget_model_h2">(Please enter your registered email below and the system will automatically reset users’ password and send it to user’s registered email address.)</div>
    <label>
    <input type="text" id="usrmail" class="txt_input txt_input2">
   </label>

 
  <div class="rem_sub">
  <div class="rem_sub_l">
   </div>
    <label>
     <input type="submit" class="sub_buttons" name="button" id="Retrievenow" value="Retrieve now" style="opacity: 0.7;">
     　　　
     <input type="submit" class="sub_button" name="button" id="denglou" value="Return" style="opacity: 0.7;">　　
    
    </label>
  </div>
</div>
<!--login_padding  Sign up end-->
</div><!--login_boder end-->
</div><!--login_m end-->
 <br> <br>
</body></html>
<script src="/zidao/Public/Admin/assetsl/js/jquery-2.1.0.js"></script>
<script>
$(function(){
	$("#button").click(function(){
	var name = $('#username').val();
	var password = $("#userpwd").val();
	var code = $("#code").val();
	$.ajax({
		type:"post",
		data:{code:code},
		url:'<?php echo U("Admin/Login/check_code");?>',
		success:function(data){
			if(data == 0){
				$('#Imgchange').attr('src','<?php echo U("Admin/Login/verify");?>');
				alert('请保证验证码正确');
			}else{
				$.ajax({
					type:"post",
					data:{name:name,password:password},
					url:'<?php echo U("Admin/Login/check_passw");?>',
					success:function(data){
						if(data == 1){
							 window.location.href="<?php echo U('Admin/Index/index');?>";
						}else{
							alert('账号或密码错误！');
						}
					}
				})
			}
		}
	})
	})
	
	$('#Imgchange').click(function(){
		$('#Imgchange').attr('src','<?php echo U("Admin/Login/verify");?>');
	})
		
})
</script>