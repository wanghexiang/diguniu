<?php

// 管理员管理

namespace Admin\Controller;

use Admin\Controller\BaseController;
class AdminController extends BaseController {

    public function index() {
        
    }

	//添加、编辑用户
	public function edit(){
		$id=$_GET['id'];
		$admin=M('admin');
		$datas=$admin->where("id=$id")->find();
		//print_r($datas);
		$this->assign('admin',$datas);
		$this->display();
		
	}

    public function save() {
        $admin = M("admin");
		$id=I("id");
		$password=I("password");
        $username=I("username");
		$count=$admin->where("username='".$username."' and id<>'".$id."'")->count();
		//$admin->getLastSql();
		if($count>0){
			$this->error("用户名已经存在");
		}
        $admin->create();
        $admin->password=md5($password);
		if(empty($id)){
			$admin->add_time = time();
			if ($admin->add()) {
				$this->success( "数据保存成功！");
			}else{
				$this->error( "管理员添加失败！");
			} 
		}else{
			$admin->where("id='".$id."'");
			if ($admin->save()) {
				$this->success( "数据保存成功！");
			} else{
				$this->error( "没有要更新的数据！");
			} 
		}
        
    }

    public function admin_list() {
        $admin = M("admin");
		$current_page=empty($_GET['p'])?1:$_GET['p'];
        $datas = $admin->page($current_page,10)->select();
        $this->assign('data', $datas);
		$count      = $admin->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出      
        $this->display();
        
    }
	
	//删除用户
	public function delete(){
		$id=I("id");
		$admin=M("admin");
		$admin->where("id=$id");
		if($admin->delete()){
			$this->success("删除成功!");
		}else{
			$this->error("删除失败！");
		}
	}
	//检查用户名称是否正常
	public function check(){
		$id=I("id");
		$username=I("username");
		$admin=M("admin");
		$admin->where("id<>'".$id."' and username='".$username."'" );
		if($admin->count()>0){

			echo "该用户已经存在";
		}else{
			echo "该用户名可用";
		}

	}

}
