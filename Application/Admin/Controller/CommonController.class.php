<?php
namespace Admin\Controller;
class CommonController {
	/**
	 *递归排序
	 */
    public static function tree($cate, $pid = '0',$html="&nbsp;&nbsp;",$html1="└",$level="0") {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['pid'] == $pid) {
                $v['html']=  str_repeat($html, $level);
                if($pid<>'0'){
                    $v['html'].=$html1;
                }
                $arr[]=$v;
                $arr1=  self::tree($cate,$v['id'],$html,$html1,$level+1);
                $arr=array_merge($arr,$arr1);   
            }
        }
        return $arr;
    } 
	
}