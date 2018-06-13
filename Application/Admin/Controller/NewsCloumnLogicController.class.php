<?php
namespace Admin\Controller;
use Think\Controller;
class NewsCloumnLogicController extends CommonController {
    /**
     * 新闻分类栏目逻辑处理管理层控制器
     * 处理所有数据交换逻辑层
     */
    
    /**
     * [cloumn_list description]
     * @return [type] [description]
     * 方法名：新闻分类栏目
     *   过程：
     *         1、查询所有新闻分类栏目
     *         2、返回所有查询数据
     */
    public function cloumn_list(){
        $cloumn=M('news_cloumn')->where(array('state'=>1))->select();
        foreach ($cloumn as $key => $value) {
            
        }
        return $cloumn;
    }
    /**
     * [cloumn_add description]
     * @return [type] [description]
     * 方法名：添加新闻分类栏目
     *   过程：
     *         1、post接收管理员输入内容数据
     *         2、处理接收数据，判断数据是否合法
     *         3、数据入库
     *         4、返回处理结果
     */
    public function cloumn_add(){
            $file = $_FILES['img'];
            $date['name']=$_POST['name'];
            $date['starttime']=time();
            //创建添加的文件夹和权限
            $fl=date("Ymd",time());
            mkdir('./Public/upload/news/'.$fl);
            chmod('./Public/upload/news/'.$fl,0777);
            //创建的文件夹路径
            $file_path='./Public/upload/news/'.$fl.'/'.time();
            $rtn = $this->upload($file['tmp_name'],$file_path,$file['name']);
            $date['img']=$rtn;
            M('news_cloumn')->add($date);
            $this->success('添加成功',U("NewsCloumn/cloumn_add"),2);
            
    }
    /**
     * [cloumn_eitd description]
     * @return [type] [description]
     * 方法名：修改新闻分类栏目
     *   过程：
     *         1、接收管理员修改数据信息
     *         2、处理接收数据，判断数据是否合法
     *         3、数据入库
     *         4、返回处理结果
     */
    public function cloumn_eitd(){

    }
    /**
     * [cloumn_del description]
     * @return [type] [description]
     * 方法名：删除新闻分类栏目
     *   过程：
     *         1、get接收删除的id
     *         2、删除该id对应的数据
     *         3、返回处理结果
     */
    public function cloumn_del(){

    }
}