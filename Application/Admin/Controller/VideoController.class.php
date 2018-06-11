<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function video(){
    	$video = M('video')->select();
    	$this->assign('video',$video);
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
		    $data['add_time'] = time();
	    	$data['vido_url'] = "./Public/video/".$info['photo']['savepath'].$info['photo']['savename'];
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
    		$data['vido_url'] = I('photo');
    		if($data['title']==''){
    			$this->error('修改失败,请输入标题！');
	    	}else if($data['vido_url']==''){
	    		$this->error('修改失败,请选择视频文件！');
	    	}else if($data['describe']==''){
	    		$this->error('修改失败,请输入视频描述！');
	    	}else{
	    		$id = I('id');
	    		M('video')->where("id=$id")->save($data);
	    		$this->success('添加成功', '/Admin/video/video');
	    	}
    	}
	}
}