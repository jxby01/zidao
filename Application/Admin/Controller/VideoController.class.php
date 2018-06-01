<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function index(){
       $this->view('index/index');
    }
}