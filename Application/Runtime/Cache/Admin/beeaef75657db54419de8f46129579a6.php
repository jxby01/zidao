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
								    <legend>添加权限信息</legend>
								    <div class="am-form-group">
								      <label for="doc-vld-name-2">权限名称：</label>
								      <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入权限名称" required/>
								    </div>
								    <div class="am-form-group">
								      <label class="am-form-label">爱好：</label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="橘子" name="docVlCb" minchecked="2" maxchecked="4" required> 橘子
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="苹果" name="docVlCb"> 苹果
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="菠萝" name="docVlCb"> 菠萝
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="芒果" name="docVlCb"> 芒果
								      </label>
								      <label class="am-checkbox-inline">
								        <input type="checkbox" value="香蕉" name="docVlCb"> 香蕉
								      </label>
								    </div>
								    <button class="am-btn am-btn-secondary" id="submit" type="submit">提交</button>
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
<script type="text/javascript" src="/zidao/Public/Admin/assetsl/js/jquery-2.1.0.js" ></script>
<script>
$(function(){
	$("#submit").click(function(){
		var title=$('#doc-vld-name-2').val();
		if(title=="" || title==null){
			alert("请输入权限名称");
			
		}else{
			
		}
	})
})
</script>