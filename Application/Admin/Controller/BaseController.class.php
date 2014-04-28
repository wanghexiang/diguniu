<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		//左边菜单
		$menus=M("menu")->select();
	}
	//菜单递归函数
	public static function maketree($menus, $pid = '0',$html1="",$html2="",$level="0") {
        foreach ($menus as $v) {
            if ($v['pid'] == $pid) {
				$html.='<li>
						<a href="'.$v['url'].'">'.$v['icon'].'
							<span class="menu-text">'.$v['name'].'</span>
						</a>
					</li>';
                $submenu=  self::maketree($menus,$v['id'],$html,$html1,$level+1);
                 
            }
        }
        return $arr;
    }
    public function index(){
        $this->display();
    }
	
}