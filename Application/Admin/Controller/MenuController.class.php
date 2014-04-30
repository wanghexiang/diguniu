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
		$menuid=I("menuid");
		$menu=M("menu");
	
		$data['name']=I("name");
		$data['url']=I("url");
		$data['icon']=I("icon");
		//print_r(I("icon"));exit();
		$data['pid']=I("pid");
		$data['sort']=I('sort');
		if(empty($menuid)){
			if($menu->add($data)){
				$this->success("新增成功！");
			}else{
				$this->error("新增失败！");
		}
		}else{
			$menu->where("id=$menuid");
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