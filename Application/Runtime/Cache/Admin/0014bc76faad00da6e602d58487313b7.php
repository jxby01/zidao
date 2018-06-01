<?php if (!defined('THINK_PATH')) exit();?><div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box">
								
								<form action="<?php echo U('Admin/Video/upload');?>" method="post" enctype="multipart/form-data" class="am-form" data-am-validator>
								  <fieldset>
								    <legend>视频添加</legend>
								    
								    <div class="am-form-group">
								      <label for="doc-vld-name-2">视频标题：</label>
								      <input type="text" class="sptitle"  minlength="3" placeholder="输入用户名"/>
								    </div>
									<div class="am-form-group">
								      <label for="doc-vld-name-2">视频文件：</label>
								      <input type="file" class="spwenjian" name='photo' id="doc-vld-name-2" />
								    </div>
								    <div class="am-form-group">
								      <label for="doc-vld-email-2">视频描述：</label>
								      <textarea class="spmiaoshu" minlength="50" maxlength="100" placeholder="输入视频描述"></textarea>
								    </div>
								
								    <button class="am-btn am-btn-secondary tijiao" type="submit">提交</button>
								  </fieldset>
								</form>
								
							</div>
						</div>
					<!-- Row end -->
				</div>
				<script type="text/javascript" src="/Public/Admin/assetsl/js/jquery-2.1.0.js" ></script>
				<script type="text/javascript">
//					$('.tijiao').click(function(){
////						var title = $('.sptitle').val();
////						var vido_url = $('.spwenjian').val();
////						var describe = $('.spmiaoshu').val();
////						if(title==''){
////							alert('请填写标题！');
////						}else if(vido_url==''){
////							alert('请选择视频文件！');
////						}else if(describe==''){
////							alert('请填写视频描述！');
////						}else{
////							$.ajax({
////								data: {
////									title:title
////									vido_url:vido_url
////									describe:describe
////								},
////								type:"post",
////								url:"<?php echo U('Admin/Video/exit_video');?>",
////								async:true,
////						        dataType: "json",
////						        success: function(e){
////						          	alert(e);
////						        }
////						    });
////						}
//							var vido_url = $('.spwenjian').val();
//							$.ajax({
//								url:"<?php echo U('Admin/Video/upload');?>",
//								type:"post",
//								data: {
//									photo:vido_url
//								},
//						        dataType: "json",
//						        success: function(e){
//						          	alert(e);
//						        }
//						    });
//					})
				</script>
			
			
			</div>
		</div>