<?php if (!defined('THINK_PATH')) exit();?><div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<!-- Row start -->
						<div class="am-u-sm-12">
							<div class="card-box">
								
								<form action="<?php echo U('Admin/Video/upload');?>" method="post" enctype="multipart/form-data">
									<input type="hidden" name="vi" id="vi" value="<?php echo ($vi); ?>"/>
									<input type="hidden" name="id" id="id" value="<?php echo ($video["id"]); ?>"/>
								    <legend>视频添加</legend>
								    <div class="am-form-group">
								      <label for="doc-vld-name-2">视频标题：</label>
								      <input style="width:100%;height:40px;padding-left: 1em;" value="<?php echo ($video["title"]); ?>" type="text" class="sptitle" name="title"  placeholder="输入视频标题"/>
								    </div>
									<div class="am-form-group">
								      <label for="doc-vld-name-2">视频文件：</label>
								      <input type="file" class="spwenjian" value="<?php echo ($video["vido_url"]); ?>" name='photo' id="doc-vld-name-2" />
								    </div>
								    <div class="am-form-group">
								      <label for="doc-vld-email-2">视频描述：</label>
								      <textarea style="width:100%;height:100px;" class="spmiaoshu" name="describe" placeholder="输入视频描述"><?php echo ($video["describe"]); ?></textarea>
								    </div>
								    <button class="am-btn am-btn-secondary tijiao" type="submit">提交</button>
								</form>
								
							</div>
						</div>
					<!-- Row end -->
				</div>

			
			
			</div>
		</div>