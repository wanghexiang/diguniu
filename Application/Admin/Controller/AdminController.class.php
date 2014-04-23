<?php
namespace Admin\Controller;
class IndexController extends BaseController {
	/**
	 *管理员列表
	 */
    public function index(){
        $this->display();
    }
	/**
	 *新增、编辑管理员页面
	 */
	public function edit(){
		
		$this->display();
	}
}