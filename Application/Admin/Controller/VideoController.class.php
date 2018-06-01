<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function video(){
    	
       $this->view();
    }
    public function add_video(){
       $this->view();
    }
    public function exit_video(){
    	$data['title'] = I('title');
    	$data['vido_url'] = I('vido_url');
    	$data['describe'] = I('describe');
    	$data['add_time'] = time();
    	$data['admin_id'] = $_SESSION['admin_id'];
    	if($data['title']!='' || $data['vido_url']!='' || $data['describe']!='' || $data['add_time']!='' || $data['admin_id']!=''){
    		M('video')->add($data);
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     0 ;// 设置附件上传大小
	    $upload->exts      =     array('rm', 'rmvb', 'wmv', 'avi','mp4','rmvb','3gp','jpg');// 设置附件上传类型
	    $upload->rootPath  =     './Public/video/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    var_dump($info);
	    $data['title'] = I('title');
    	$data['vido_url'] = "/Public/video/".$info['photo']['savepath'].$info['photo']['savename'];
    	$data['describe'] = I('describe');
    	$data['add_time'] = time();
    	$data['admin_id'] = $_SESSION['admin_id'];
    	if($data['title']!='' || $data['vido_url']!='' || $data['describe']!='' || $data['add_time']!='' || $data['admin_id']!=''){
    		M('video')->add($data);
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
	}
}