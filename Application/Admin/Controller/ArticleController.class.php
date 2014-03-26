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
        $category_array= $category->select();
        $categories= \Admin\Controller\CommonController::tree($category_array);
        $this->assign("categorys",$categories);
        $this->display();
    }
    //保存文章
    public  function save(){
        $id=I('id');
        $title=I("title");
        if(empty($title)){
            $this->error("文章标题不能为空");
        }
        $cate_id=I("cate_id");
        $content=I('content');
        if(empty($content)){
            $this->error("文章内容不能为空");
        }
        //echo $content;exit();
        $article=M("article");
        $article->title=$title;
        $article->create_time=time();
        $article->cate_id=$cate_id;
        if(empty($id)){
            $article_id=$article->add();
            $article_content=M("arc_content");
            $article_content->arc_id=$article_id;
            $article_content->content=$content;
           
            $article_content->add();
            if($article_id){
                $this->success("插入成功");
            }else{
                $this->error("插入失败");
            }
        }else{
            $article->where("id='".$id."'");
            $arc_content=M("arc_content");
            $arc_content->where("arc_id='".$id."'");
             echo $content;
            $arc_content->save();
           
            if($article->save()){
                // echo $arc_content->getlastsql();exit();
                $this->success("修改成功");
            }else{
               // echo $arc_content->getlastsql();exit();
                $this->error("修改失败");
            }
        }
        
    }
    //文章列表
    public function article_list(){
        $article=M("article");
        $result=$article->select();
        $this->assign("articles",$result);
        $this->display();
    }
}
