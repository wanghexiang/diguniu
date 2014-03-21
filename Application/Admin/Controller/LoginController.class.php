<?php

/* * *************
 * 管理员登陆
 * ************** */

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {
        $this->display();
    }

    public function verify() {
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

    /*     * ******
     * 登陆处理
     * *********
     */

    public function login() {
        $verify = I("verify");
        $usernmae = I("usernmae");
        $password = I("password");
        $Verify = new \Think\Verify();
        if ($Verify->check($verify)) {
            $admin = M("admin");
            $admin->where("username='" . $usernmae . "' and password='" . md5($password) . "'")->count();
            //echo $admin->getLastSql();exit();
            if ($admin->count() > 0) {
                $admin->find();
                session("username", $admin->username);
                session("user_id", $admin->id);
                $this->success("登陆成功", U('Admin/Index/index'));
            } else {

                $this->error("用户名或者密码错误!", U('index'));
            }
        } else {

            $this->error("验证码输入错误！", U('index'));
        }
    }

}
