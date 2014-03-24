<?php

/* *
 * 后台公共文件
 * 
 */
namespace Admin\Controller;
class CommonController {
    /**
     * 对分类进行树形输出
     */
    public static function tree($cate, $p_id = '0',$html="&nbsp;&nbsp;",$html1="└",$level="0") {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['p_id'] == $p_id) {
                $v['html']=  str_repeat($html, $level);
                if($p_id<>'0'){
                    $v['html'].=$html1;
                }
                $arr[]=$v;
                $arr1=  self::tree($cate,$v['id'],$html,"$html1",$level+1);
                $arr=array_merge($arr,$arr1);   
            }
          //  $arr=array_merge($arr,$arr1);
        }
        return $arr;
    }
}

