<?php if (!defined('THINK_PATH')) exit();?><div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="card-box">
					<!-- Row start -->
					<div class="am-g">
						<div class="am-u-sm-12 am-u-md-6">
				          <div class="am-btn-toolbar">
				            <div class="am-btn-group am-btn-group-xs">
				              <button type="button" class="am-btn am-btn-default"><a href="<?php echo U('Admin/Video/add_video?vi=1');?>" style="color: #000;"><span class="am-icon-plus"></span> 新增</a></button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
				            </div>
				          </div>
				        </div>	
				        
						<div class="am-u-sm-12 am-u-md-3">
				          <div class="am-input-group am-input-group-sm">
				            <input type="text" class="am-form-field">
				          <span class="am-input-group-btn">
				            <button class="am-btn am-btn-default" type="button">搜索</button>
				          </span>
				          </div>
				        </div>
				      </div>
					  <!-- Row end -->
					  
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">ID</th>
                <th class="table-title">标题</th>
                <th class="table-type">类别</th>
                <th class="table-author am-hide-sm-only">视频描述</th>
                <th class="table-date am-hide-sm-only">添加日期</th>
                <th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              
             	<?php if(is_array($video)): foreach($video as $key=>$v): ?><tr>
	                <td><input type="checkbox" /></td>
	                <td><?php echo ($v["id"]); ?></td>
	                <td><?php echo ($v["title"]); ?></td>
	                <td>default</td>
	                <td class="am-hide-sm-only"><?php echo ($v["describe"]); ?></td>
	                <td class="am-hide-sm-only"><?php echo date('Y-m-d H:i',$v['add_time']); ?></td>
	                <td>
	                  <div class="am-btn-toolbar">
	                    <div class="am-btn-group am-btn-group-xs">
	                      <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><a href="<?php echo U('Admin/Video/add_video?vi=2&vid='.$v['id']);?>"><span class="am-icon-pencil-square-o"></span> 编辑</a></button>
	                      <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
	                    </div>
	                  </div>
	                </td>
	              </tr><?php endforeach; endif; ?>
              </tbody>
            </table>
            <div class="am-cf">
              共 15 条记录
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            
          </form>
        </div>

      </div>
					  <!-- Row end -->
					  
					</div>
				
				
				
				
				</div>
			

			</div>