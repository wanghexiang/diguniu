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
        
    }

    /**
     * 添加、编辑分类页面
     */
    public function edit() {
        $id = I("id");
        $category = M("category");
        $category->where("id=$id");
        $result = $category->find();
        $categorys = $category->select();
        $arr=$this->tree($categorys);
        print_r($arr);

        $this->assign("base_category", $base_category);
        $this->assign("category", $result);
        $this->display();
    }

    /**
     * 对分类进行树形输出
     */
    public function tree($cate, $p_id = '0') {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['p_id'] == $p_id) {
                $v['child']=$this->tree($cate,$v['id']);
                $arr[]=$v;
            }
        }
        return $arr;
    }

}
