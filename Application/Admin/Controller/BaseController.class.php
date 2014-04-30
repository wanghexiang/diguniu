<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		//左边菜单
		$menus=M("menu")->select();
		$menutree=self::maketree($menus);
		$htmltree=self::htmltree($menutree);
		$htmltree= '<ul class="nav nav-list">'.$htmltree.'</ul>';
		$this->assign('htmltree',$htmltree);
	}
	//菜单转换成递归数组
	public static function maketree($menus, $pid = '1',$html1="",$html2="",$level="0") {
       $arr=array();
	   foreach ($menus as $v) {
            if ($v['pid'] == $pid) {
				
                $v['submenu']=self::maketree($menus,$v['id'],$html,$html1,$level+1);
				$v['level']=$level;
				$arr[]=$v;
               
            }
        }
        return $arr;
    }
	//菜单数组转换成html
	public static function htmltree($submenu){
		$html="";
		foreach($submenu as $v){
			//如果该菜单存在子菜单
			if($v['submenu']){
				$html.='<li ';
				//判断是否打开此菜单
				//print_r( self::get_top_menu(I('menu_id')));
				if(in_array($v['id'],self::get_top_menu(I('menu_id')))){
					$html.='class="active open"';
				}
				$html.='><a href="#" class="dropdown-toggle">';
				
				//第一级菜单的样式
				if($v['level']==1){
					$html.='<i class="icon-double-angle-right"></i>';
				}
				//其它级都显示图片
				else{
					$html.=htmlspecialchars_decode($v['icon']);
				}	
				$html.='<span class="menu-text">'.$v['name'].'</span><b class="arrow icon-angle-down"></b></a><ul class="submenu">';
				$sub_html=self::htmltree($v['submenu']);
				$html.=$sub_html;
				$html.='</ul></li>';		
			}else{
				//该菜单没有子菜单
				$html.='<li ';
				if($v['id']==I("menu_id")){
					$html.='class="active"';
				}
				$html.='><a href="'.U($v['url'].'?menu_id='.$v['id']).'">';
				if($v['level']==1){
					$html.='<i class="icon-double-angle-right"></i>';
				}else{
					$html.=htmlspecialchars_decode($v['icon']);
				}
				if($v['level']==0){
					$html.='<span class="menu-text"> '.$v['name'].' </span>';
				}else{	
					$html.=$v['name'];
				}
				$html.='</a></li>';
			}
		} //print_r($html);echo "<br/>";
		return $html;
	}
	//查询上级菜单数组
	public static function get_top_menu($id,$arr){
		$menu=M('menu')->where("id='".$id."'")->find();
		$pid=$menu['pid']; 
		$arr[]=$pid;
		if($pid>0){	
			$pid=self::get_top_menu($pid,$arr);	
			return $pid;
		}else{
			return $arr;
		} 
		
	}
   
	
}