<?php
namespace Admin\Controller;
class MenuController extends BaseController {
	/**
	 *菜单列表
	 */
    public function index(){
		
        $this->display();
    }
	/**
	 *新增、编辑菜单
	 */
	public function edit(){
		$menus=M("menu")->select();
		//print_r($menu);
		$result=CommonController::tree($menus);
		$this->assign("menus",$result);
		$menu=M("menu")->where("id='".I('id')."'")->find();
		$this->assign("menu",$menu);
		$this->display();
	}
	/**
	 *保存数据
	 */
	public function save(){
		$menu_id=I("menu_id");
		$menu=M("menu");
		$menu->create();
		if(!empty($menu_id)){
		if($menu->add()){
			$this->success("新增成功！");
		}else{
			$this->error("新增失败！");
		}
		}else{
			if($menu->save()){
				$this->success("保存成功！");
			}else{
				$this->error("保存失败!");
			}
		}
		
	}
	/**
	 *删除
	 */
	public function del(){
		$id=I("id");
		$admin=M("admin");
		$admin->where("id='".$id."'");
		if($admin->delete()){
			$this->success("删除成功！");
			
		}else{
			echo $admin->getlastsql();
			//$this->error("删除失败！");
		}
	} 
	
}