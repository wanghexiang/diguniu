<?php
namespace Admin\Controller;
class AdminController extends BaseController {
	/**
	 *管理员列表
	 */
    public function index(){
		$id=I("id");
		$admin = M('admin'); // 实例化User对象
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list = $admin->order('add_time')->page(I('p',1).',10')->select();
		$this->assign('admin',$list);// 赋值数据集
		$count      = $admin->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
	/**
	 *新增、编辑管理员页面
	 */
	public function edit(){
		$id=I("id");
		$admin=M("admin");
		$result=$admin->where("id='".$id."'")->find();
		$this->assign("admin",$result);
		
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