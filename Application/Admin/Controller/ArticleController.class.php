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
        $article->where("id=$id");
        $result=$article->find();
        $this->assign("article",$result);
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
		$article->content=$content;
        if(empty($id)){
            if($article->add()){
                $this->success("插入成功");
            }else{
                $this->error("插入失败");
            }
        }else{
            $article->where("id='".$id."'"); 
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
		//print_r($_SESSION);
		//PRINT_R($_COOKIE);
        $article=M("article");
        $result=$article->select();
        $this->assign("articles",$result);
        $this->display();
    }
	//删除文章
	public function delete(){
		$id=I("id");
		$article=M("article");
		$article->where("id='".$id."'");
		if($article->delete()){
			$this->success("删除成功!");
		}else{
			$this->error("删除失败!");
		}
	}
}
