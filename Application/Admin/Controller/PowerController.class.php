<?php
namespace Admin\Controller;
use Think\Controller;
class PowerController extends CommonController{
    public function power_list(){//权限列表
		$leavl = M('leavl'); // 实例化User对象
		$count = $leavl->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $leavl->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//rint_r($list);
		$this->assign('count',$count);
		$this->assign('row',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->view('power/power_list');
    }
	
	public function power_add(){//添加权限
		if(!empty($_POST)){
			$data['name']=$_POST['name'];
			$data['leavls'] = json_encode($_POST['leavls']);
			$data['cre_time'] = time();
			if(M('leavl')->add($data)){
				echo 1;
			}else{
				echo 2;
			}
		}else{
			$this->view('power/power_add');
		}
	}
	
	public function power_del(){//删除权限
		if(!empty($_POST)){
			$id = $_POST['id'];
			if(M('leavl')->where(array('id'=>$id))->delete()){
				echo 1;
			}
		}
	}
	
	public function power_edit(){//权限修改
		if(!empty($_POST)){
			$id = $_POST['id'];
			$data['name']=$_POST['name'];
			$data['leavls'] = json_encode($_POST['leavls']);
			$data['cre_time'] = time();
			if(M('leavl')->where(array('id'=>$id))->save($data)){
				echo 1;
			}else{
				echo 2;
			}
		}else{
			$id = $_GET['id'];
			$row = M('leavl')->where(array('id'=>$id))->find();
			$this->assign('row',$row);
			$this->assign('cow',json_decode($row['leavls']));
			$this->view('power/power_add');
		}
	}
	
	public function admin_list(){
		$admin = M('admin'); // 实例化User对象
		$count = $admin->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $admin->join('zd_leavl ON zd_leavl.id = zd_admin.level_id')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//rint_r($list);
		$this->assign('count',$count);
		$this->assign('row',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->view('power/admin_list');
	}
	
	public function admin_add(){
		$this->view('power/admin_add');
	}
}

?>