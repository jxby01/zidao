<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
    /**
     * 新闻管理视图层控制器
     * 渲染所有新闻视图层
     */

    /**
     * [news_list description]
     * @return [type] [description]
     * 方法名：新闻列表视图层
     *   过程：1、查询新闻表数据库
     *         2、获取新闻列表数据
     *         3、传值，渲染视图模板
     */
    public function news_list(){

        $this->view('news_list');
    }
    /**
     * [news_add description]
     * @return [type] [description]
     * 方法名：添加新闻
     *   过程：
     *         1、渲染添加新闻页面
     *         2、用户输入发表内容
     */
    public function news_add(){
        $this->view('news_add');
    }
    /**
     * [mews_eitd description]
     * @return [type] [description]
     * 方法名：新闻修改页面
     *   过程：
     *         1、get获取当期修改新闻id
     *         2、根据id查询当期新闻信息
     *         3、传值、渲染当前新闻信息在视图
     *         4、用户修改需要修改内容
     */
    public function news_eitd(){

    }
}