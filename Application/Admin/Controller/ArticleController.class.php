<?php

/* 
 * 
 * 后台文章管理
 * 
 */
namespace Admin\Controller;
use Admin\Controller\BaseController;
class ArticleController extends BaseController{
    /**
     * 编辑文章页面
     */
    public function edit(){
        $id=I("id");
        $article=M("article");
        $content=M("arc_content");
        $article->where("id=$id");
        $content->where("arc_id=$id");
        $result=$article->find();
        $result2=$content->find();
        $this->assign("article",$result);
        $this->assign("content",$result2);
        $category=M("category");
        $categories= \Admin\Controller\CommonController::tree($category);
        $this->assign("categorys",$categories);
        $this->display();
    }
}
