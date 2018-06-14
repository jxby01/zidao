<?php if (!defined('THINK_PATH')) exit();?>
		
	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box">
								
								<h4 class="header-title m-t-0 m-b-30">输入框类型</h4>
								
								<div class="am-g">
									<div class="am-u-md-6">
										<form class="am-form am-text-sm" >
											<div class="am-form-group">
												<div class="am-g">
											      <label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ipt-text-1">标题</label>
											      <input class="am-u-md-10 form-control" name="title" id="doc-ipt-text-1" placeholder="输入标题信息">
										      </div>
										    </div>

										    <div class="am-form-group">
										    	<div class="am-g">
										    		<label class="am-u-md-2 am-md-text-right" for="doc-select-1">选择栏目</label>
												      <select name="news_cloumn_id" id="doc-select-1">
												        <option value="option1">选项一...</option>
												      </select>
												      <span class="am-form-caret"></span>
										    	</div>
										    </div>
										    
										    <div class="am-form-group">
												<div class="am-g">
											      <label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ipt-text-1">新闻图片</label>
											      <input class="am-u-md-10 form-control" type="file" name="img" accept="image/*" id="doc-ipt-text-1" placeholder="选择上传图片">
										      </div>
										    </div>

											<div class="am-form-group">
										    	<div class="am-g">
											      <label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ta-1">详情内容</label>
											      <textarea name="content" placeholder="摘要信息" class="am-u-md-10 form-control textarea" style="min-height: 700px;min-width: 730px;" rows="5" id="doc-ta-1"></textarea>
										    	</div>
										    </div>

											<button type="submit" class="am-btn am-btn-primary">确定</button>

										</form>
									</div>
									
									
							</div>
						</div>
					<!-- Row end -->
				</div>
			
			
			
				<!-- col end -->
				
				
			<!-- row end -->
			
			
			
				<!-- col end -->
				
				
				<!-- col end -->
			</div>
			<!-- row end -->
			
			</div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="../assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js" ></script>
		<script type="text/javascript" src="../assets/js/blockUI.js" ></script>
		<script charset="utf-8" src="/Public/Admin/kindeditor/kindeditor-all.js"></script>
		<script charset="utf-8" src="/Public/Admin/kindeditor/lang/zh-CN.js"></script>
		<script>
		        KindEditor.ready(function(K) {
		                window.editor = K.create('.textarea',{
						pasteType:1,designMode:false
						});
						
		        });
		</script>
	</body>
	
</html>