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
		$menu=M("menu")->select();
		//print_r($menu);
		$result=CommonController::tree($menu);
		$this->assign("menu",$result);
		$this->display();
	}
	/**
	 *保存数据
	 */
	public function save(){
		$id=I("id");
		$admin=M("admin");
		$admin->username=I("username");
		$admin->password=md5(I("password"));
		$admin->email=I("email");
		if(empty($id)){
			$admin->add_time=time();
			if($admin->add()){
				$this->success("新增成功！");
			}else{
				$this->error("新增失败!");
			}
		}else{
			if($admin->save()){
				$this->success("保存成功!");
			}else{
				$this->error("保存失败!");
			}
		}
	}
	/**
	 *删除管理员
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