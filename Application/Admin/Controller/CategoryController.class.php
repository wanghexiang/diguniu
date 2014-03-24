<?php

/*
 * 文章分类处理
 */

namespace Admin\Controller;

use Admin\Controller\BaseController;

class CategoryController extends BaseController {

    /**
     * 分类列表
     */
    public function category_list() {
        $categories=M("category");
        $results=$categories->select();
        $arr = \Admin\Controller\CommonController::tree($results);
        $this->assign("categories",$arr);
        $this->display();
    }

    /**
     * 添加、编辑分类页面
     */
    public function edit() {
        $id = I("id");
        $category = M("category");
        $category->where("id='".$id."'");
        $result = $category->find(); 
        //print_r($result);
        $categorys = $category->select();
        // use Admin\Controller\CommonController;
        $arr = \Admin\Controller\CommonController::tree($categorys);
        $this->assign("categorys", $arr);

        $this->assign("base_category", $base_category);
        $this->assign("category", $result);
        $this->display();
    }

    /**
     * 保存数据
     */
    public function save() {
        $id = I("id");
        $p_id = I("p_id");
        $name = I("category_name");
        if (empty($name)) {
            $this->error("分类名称不能为空");
        }
        $category = M("category");
        $category->name = $name;
        $category->p_id = $p_id;
        if (empty($id)) {
            if ($category->add()) {

                $this->success("添加成功");
            }  else {
                $this->error("添加失败");
            }
        } else {
            $category->where("id='".$id."'");
            
            if ($category->save()) {
                $this->success("修改成功");
            }else{
               // echo $category->getLastSql();
                $this->error("保存成功，您没有改变任何内容");
                
            }
        }
    }
    /**
     * 删除分类
     * 
     */
    public  function delete(){
        $id=I("id");
        $category=M("category");
        $category->where("p_id='".$id."'");
        if($category->count()>0){
            $this->error("该分类下面还有子分类，请先删除子分类！",U('category_list'));
        }else{
            if($category->where("id=$id")->delete()){
                $this->success("删除成功");
            }else{
                $this->error("删除失败");
            }
        }
    }
}
