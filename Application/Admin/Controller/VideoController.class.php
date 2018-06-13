<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function video(){
    	$video = M('video')->order('id desc')->select();
    	$num = M('video')->count();
    	$this->assign('video',$video);
    	$this->assign('num',$num);
       	$this->view();
    }
    public function add_video(){
    	$vi = I('vi');
    	if($vi==2){
    		$vid = I('vid');
    		$video = M('video')->where("id=$vid")->find();
    		$this->assign('video',$video);
    	}
    	$this->assign('vi',$vi);
       	$this->view();
    }
    //添加、修改视频
    public function upload(){
    	$vi = I('vi');
    	$data['title'] = I('title');
    	$data['describe'] = I('describe');
    	$data['admin_id'] = $_SESSION['admin_id'];
    	if($vi==1){
    		$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     0 ;// 设置附件上传大小
		    $upload->exts      =     array('rm', 'rmvb', 'wmv', 'avi','mp4','rmvb','3gp');// 设置附件上传类型
		    $upload->rootPath  =     './Public/video/'; // 设置附件上传根目录
		    $upload->savePath  =     ''; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();
	    	$data['vido_url'] = "./Public/video/".$info['photo']['savepath'].$info['photo']['savename'];
	    	$data['add_time'] = time();
	    	if($data['title']==''){
    			$this->error('添加失败,请输入标题！');
	    	}else if($data['vido_url']==''){
	    		$this->error('添加失败,请选择视频文件！');
	    	}else if($data['describe']==''){
	    		$this->error('添加失败,请输入视频描述！');
	    	}else{
	    		M('video')->add($data);
	    		$this->success('添加成功', '/Admin/video/video');
	    	}
    	}else if($vi==2){
    		$ph = $_FILES['photo']['name'];
    		if($ph!=''){
    			$upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =     0 ;// 设置附件上传大小
			    $upload->exts      =     array('rm', 'rmvb', 'wmv', 'avi','mp4','rmvb','3gp');// 设置附件上传类型
			    $upload->rootPath  =     './Public/video/'; // 设置附件上传根目录
			    $upload->savePath  =     ''; // 设置附件上传（子）目录
			    // 上传文件 
			    $info   =   $upload->upload();
		    	$data['vido_url'] = "./Public/video/".$info['photo']['savepath'].$info['photo']['savename'];
		    	
    		}else{
    			$data['vido_url'] = I('photos');
    		}
    		if($data['title']==''){
    			$this->error('修改失败,请输入标题！');
	    	}else if($data['vido_url']==''){
	    		$this->error('修改失败,请选择视频文件！');
	    	}else if($data['describe']==''){
	    		$this->error('修改失败,请输入视频描述！');
	    	}else{
	    		if($ph!=''){
		    		unlink(I('photos'));//删除原有的视频文件
	    		}
	    		$id = I('id');
	    		M('video')->where("id=$id")->save($data);
	    		$this->success('修改成功', '/Admin/video/video');
	    	}
    	}
	}
	//视频分类列表
	public function video_fenl(){
		$video = M('videofenlei')->select();
    	$num = M('videofenlei')->count();
    	$this->assign('video',$video);
    	$this->assign('num',$num);
		$this->view();
	}
	//删除视频信息
	public function shancsp(){
		$data['id'] = I('id');
		unlink(M('video')->where($data)->getField('vido_url'));
		$vo = M('video')->where($data)->delete();
		if($vo){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(2);
		}
	}
	public function add_videofenl(){
		$vi = I('vi');
    	if($vi==2){
    		$vid = I('vid');
    		$video = M('videofenlei')->where("id=$vid")->find();
    		$this->assign('video',$video);
    	}
    	$this->assign('vi',$vi);
		$this->view();
	}
	public function add_spfenl(){
		$vi = I('vi');
		$data['title'] = I('title');
		$data['describe'] = I('describe');
		if($vi==1){
			if($data['title']==''){
				$this->error('添加失败,请输入标题！');
			}else if($data['describe']==''){
				$this->error('添加失败,请输入描述！');
			}else{
				$addsp = M('videofenlei')->add($data);
				if($addsp){
					$this->success('添加成功', '/Admin/video/video_fenl');
				}else{
					$this->error('添加失败！');
				}
			}	
		}else if($vi==2){
			$id['id'] = I('id');
			M('videofenlei')->where($id)->save($data);
	    	$this->success('修改成功', '/Admin/video/video_fenl');
		}
		
	}
	public function shancspfl(){
		$id['id'] = I('id');
		$vo = M('videofenlei')->where($id)->delete();
		if($vo){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(2);
		}
	}
}