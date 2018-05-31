<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends CommonController {
    public function login(){
		$verify = new \Think\Verify();
		if(!empty($_POST)){
			//print_r($_POST);exit;
			$admin = M('admin');
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$code = $_POST['yanzhengma'];
			$ruselt = $admin->where(array('username'=>$username,'password'=>$password))->find();
				if(!empty($ruselt)){
					if(!empty($_POST['yanzhengma'])){
						if($verify->check($code)){
							$_SESSION['name'] = $username;
							$this->success('登录成功',U('Common/welcome'),3);
						}else{
							$this->error('验证码错误',U('Login/login'),3);
						}
					}
			}else{
				$this->error('账户或密码错误',U('Login/login'),3);
			}
		}else{	
			
		$this->display('login/login');
		
		}
    }
	
	public function verify(){//验证码
		$Verify =     new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
		
	}
	public function logout(){
		unset($_SESSION['name']);
		$this->redirect('Login/login',array(),2,'<meta charset="utf-8"/>安全退出中...');
	}
	public function checkname(){//是否重名
		$username = $_POST['username'];
		$sql = M('admin')->where(array('username'=>$username))->select();
		if(!empty($sql)){
			echo 1;
		}else{
			echo 0;
		}
	}
}