<?php

/*
 * 后台基类，主要判断登陆状态和一些初始化信息等
 */

namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {

    function _initialize() {
        //parent::_initialize();
       //判断登陆状态
       // echo "1212121";
       // print_r($_SESSION);exit();
       if(!session("usernmae")){
           $this->error("您还没有登陆!",U('Admin/Login/index'));
          // $this->redirect(U('Admin/Login/index'));
       }else{
           $this->success("登陆成功！",U('Admin/Index/Index'));
       }
    }

}
