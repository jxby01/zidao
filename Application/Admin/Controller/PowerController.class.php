<?php
namespace Admin\Controller;
use Think\Controller;
class PowerController extends CommonController{
    public function power_list(){
		$this->view('power/power_list');
    }
}

?>