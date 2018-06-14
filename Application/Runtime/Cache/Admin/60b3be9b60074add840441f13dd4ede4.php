<?php if (!defined('THINK_PATH')) exit();?><!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box">
								<form action="" class="am-form" data-am-validator>
								  <fieldset>
								    <legend>添加管理员</legend>
								    <div class="am-form-group">
								      <label for="doc-vld-name-2">管理员账号/名称：</label>
								      <input type="text" id="doc-vld-name-2" name="admin_name"  placeholder="输入户名" required/>
								    </div>
									<div class="am-form-group">
									  <label for="doc-vld-name-2">管理员密码：</label>
									  <input type="text" id="doc-vld-name-3" name="password"  placeholder="输入密码"required/>
									</div>
								    <div class="am-form-group">
								      <label for="doc-select-1">选择权限</label>
								      <select id="doc-select-1" required>
								        <option value="0" name="powers">-=请选择一项权限添加=-</option>
										<?php if(is_array($powers)): foreach($powers as $key=>$k): ?><option value="<?php echo ($k["id"]); ?>"><?php echo ($k["name"]); ?></option><?php endforeach; endif; ?>
								      </select>
								      <span class="am-form-caret"></span>
								    </div>
								    <button class="am-btn am-btn-secondary" id="submit">提交</button>
								  </fieldset>
								</form>
								
								
							</div>
						</div>
					<!-- Row end -->
				</div>		
			</div>
		</div>
<script type="text/javascript" src="/Public/Admin/assetsl/js/jquery-2.1.0.js" ></script>
<script>
	$(function () {
	    $('#doc-vld-name-2').blur(function () {
            var admin = $('#doc-vld-name-2').val();
            $.ajax({
                type:'post',
                data:{admin:admin},
                url:'<?php echo U("Admin/Power/if_admin_be");?>',
                success:function (data) {
                    if(data == 1){
                        $('#submit').attr("disabled","disabled");
                    }
                }
            })
        })

        $('#submit').click(function(){
            var admin = $('#doc-vld-name-2').val();
            var password = $('#doc-vld-name-3').val();
            var leavl = $("#doc-select-1").val();
            $.ajax({
                type:'post',
                data:{admin:admin,leavl:leavl,password:password},
                url:'<?php echo U("Admin/Power/admin_add");?>',
                success:function (e) {
                    if(e == 1){
                        alert('该管理员账号已生成，马上生效');
                    }else{
                        alert('程序出了点小意外....');
                    }
                }
            })
        })

    })
</script>