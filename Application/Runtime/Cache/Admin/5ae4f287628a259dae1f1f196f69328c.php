<?php if (!defined('THINK_PATH')) exit();?>	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box">
								<form class="am-form" data-am-validator>
								  <fieldset>
								    <legend>修改权限信息</legend>
								    <div class="am-form-group">
								      <label for="doc-vld-name-2">权限名称：</label>
								      <input type="text" id="doc-vld-name-2" name="name"  minlength="3" value="<?php echo ($row['name']); ?>" required/>
								    </div>
								    <div class="am-form-group">
								      <label class="am-form-label">权限：</label><br />
									  <?php foreach($menu->module as $t):?>
									   <label class="am-checkbox-inline">
										   <input type="hidden" id="power_id" value="<?php echo ($row["id"]); ?>">
								        <input type="checkbox" id="leavls" value="<?php echo $t->name->attributes()->id;?>" name="level" minchecked="1" <?php if(in_array($t->name->attributes()->id,$cow)){echo 'checked="checked"';}?>  required> <strong><?php echo $t->name;?></strong><br />
								      </label><br />
									  <?php foreach($t->controller as $k):?>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" id="leavls" value="<?php echo $k->name->attributes()->id;?>" name="level" <?php if(in_array($k->name->attributes()->id,$cow)){echo 'checked="checked"';}?> required><?php echo $k->name;?>
								      </label>
									  <?php endforeach;?>
										<br />
									  <?php endforeach;?>
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
		<!-- end right Content here -->
		<!--</div>-->
		</div>
<script type="text/javascript" src="/Public/Admin/assetsl/js/jquery-2.1.0.js" ></script>
<script>
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