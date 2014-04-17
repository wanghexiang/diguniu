<?php

/* 
 * 
 * 后台文章管理
 * 
 */
namespace Admin\Controller;
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
		//上传图片
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
		}
		
		$article->lit_pic=$info['litpic']['savepath'].$info['litpic']['savename'];
		
        if(empty($id)){
            if($article->add()){
                $this->success("新增成功！");
            }else{
                $this->error("新增失败！");
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
