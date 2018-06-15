<?php if (!defined('THINK_PATH')) exit();?>	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
								<form class="am-form" data-am-validator>
									<div class="am-u-md-6">
										<div class="card-box">
											<h4 class="header-title m-t-0 m-b-30">修改资料</h4>
											<form class="am-form">
                                                <div class="layui-upload">

                                                    <div class="layui-upload-list">
                                                        <img style="width: 84px;height: 84px;margin-bottom: 12px;" class="layui-upload-img" src="/Public/Admin/assetsl/img/headerimg.png" id="demo1">
                                                        <p></p>
                                                        <button style="font-size: 12px;height: 30px;line-height: 30px;" type="button" class="layui-btn" id="test1">选择图片</button>
                                                    </div>
                                                </div>
                                                <div class="am-form-group">
													<label for="doc-ipt-email-2">用户名</label>
													<input type="email" class="am-radius" id="doc-ipt-email-2" placeholder="输入用户名">
												</div>

												<div class="am-form-group">
													<label for="doc-ipt-pwd-2">密码</label>
													<input type="password" class="am-radius" id="doc-ipt-pwd-2" placeholder="设置个密码吧">
												</div>
												<div class="am-form-group">
													<label for="doc-ipt-pwd-2">确认密码</label>
													<input type="password" class="am-radius" id="doc-ipt-pwd-3" placeholder="确认密码">
												</div>
												<button type="submit" class="am-btn am-btn-primary">确认修改</button>
											</form>
										</div>
									</div>
								</form>
						</div>
					<!-- Row end -->
				</div>
			</div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
<script type="text/javascript" src="/Public/Admin/assetsl/js/jquery-2.1.0.js" ></script>
<script type="text/javascript" src="/Public/Admin/layui/layui.js" ></script>
<script>
    var img = null;
    layui.use('upload', function(){
        var $ = layui.jquery,
            upload = layui.upload;

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: '<?php echo U("Admin/Common/add_imgs");?>'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    return layer.msg('上传失败');
                }
                img = res.src;
                alert(img);
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });
    })
$(function(){
	$("#submit").click(function(){
		 var name = $("#doc-vld-name-2").val();
		 var id = $("#power_id").val();
		 var leavls = [];
		 $("input[name='level']:checked").each(function(i){
             leavls[i] =$(this).val();
        });
		if(name == null || name == ""){
			alert('请填写权限名称');
			return false;
		}
		if(leavls == null || leavls == ""){
			alert("请选择权限");
			return false;
		}
		$.ajax({
			type:'post',
			url:"<?php echo U('Admin/Power/power_edit');?>",
			data:{name:name,leavls:leavls,id:id},
			success:function(data){
				if(data == 1){
					alert('修改成功');
					location.reload();
				}else{
					alert('出现了一点小的意外...');
					location.reload();
				}
			}
		})
		
		
	})
})

</script>