<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	// public function __construct(){
		// parent::__construct();
		// $this->CheckLogin();
	// }
	
	// public function CheckLogin(){
		// if(empty($_SESSION['name'])){
			// $this->error('未登录',U('Admin/Login/login'),2);
		// }
	// }
	
    public function view($view){
		$menu = simplexml_load_file('Public/Admin/data/menu.xml');
		//print_r($menu);exit;
		$getU = CONTROLLER_NAME.'/'.ACTION_NAME;
		$this->assign('menu',$menu);
		$this->assign('getU',$getU);
		$this->display('public/header');
		$this->display($view);
		$this->display('public/footer');
	}
}
?>