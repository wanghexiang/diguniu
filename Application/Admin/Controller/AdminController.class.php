<?php
// 管理员管理
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){ 
		
    }
	public function add(){
		$admin=M("admin");
		//print_r($admin->select());
		$this->display();
	}
	public function save(){
		$admin=M("admin");
		$admin->create();
		$admin->password=md5($admin->password);
		$admin->add_time=time();
		if($admin->add()){
			echo "数据保存成功！";
		}
	}
	public function admin_list(){
		$admin=M("admin");
		$datas=$admin->select();
		$this->assign('data',$datas);
		$this->display();
	}
}