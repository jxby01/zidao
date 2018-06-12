<?php
namespace Admin\Controller;
use Think\Controller;
class NewsLogicController extends CommonController {
    /**
     * 新闻管理逻辑层控制器
     * 处理所有的新闻的逻辑
     */
    
    /**
     * [news_add description]
     * @return [type] [description]
     * 方法名：添加新闻
     *   过程：
     *         1、POST接收新闻添加数据
     *         2、处理接收数据，判读数据是否合法
     *         3、数据入库
     *         4、返回处理结果
     */
    public function news_add(){

    }
    /**
     * [news_eitd description]
     * @return [type] [description]
     * 方法名：修改新闻内容
     *   过程：
     *         1、post接收修改内容数据
     *         2、处理接收数据，判断数据是否合法
     *         3、数据入库
     *         4、返回处理结果
     */
    public function news_eitd(){

    }
    /**
     * [news_del description]
     * @return [type] [description]
     * 方法名：删除新闻
     *   过程：
     *         1、接收新闻id
     *         2、删除该id对应的数据
     *         3、返回处理结果
     */
    public function news_del(){

    }
    /**
     * [news_column_add description]
     * @return [type] [description]
     * 方法名：增加新闻分类栏目
     *   过程：
     *         1、post接收管理员输入内容（添加栏目分类的信息）
     *         2、处理接收数据，判断数据是否合法
     *         3、数据入库
     *         4、返回处理结果
     */
    public function news_column_add(){

    }
    /**
     * [news_column_eitd description]
     * @return [type] [description]
     * 方法名：修改新闻分类栏目
     *   过程：
     *         1、post接收管理员啊修改输入信息（修改栏目分类的信息）
     *         2、处理接收数据，判断数据是否合法
     *         3、修改数据入库
     *         4、返回处理结果
     */
    public function news_column_eitd(){

    }
    /**
     * [news_column_del description]
     * @return [type] [description]
     * 方法名：删除新闻分类栏目
     *   过程：
     *         1、接收当前分类栏目的id
     *         2、删除对应id分类栏目
     *         3、返回处理结果
     */
    public function news_column_del(){

    }
    /**
     * [news_search description]
     * @return [type] [description]
     * 方法名：搜索新闻列表
     *   过程：
     *         1、post接收搜索内容
     *         2、根据接收数据模糊查询数据库
     *         3、返回查询结果
     *         4、传值，渲染搜索列表
     */
    public function news_search(){

    }
}