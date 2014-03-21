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

    /**
     *  ******
     * 登陆处理
     * *********
     */
    public function login() {
        $verify = I("verify");
        $username = I("username");
        $password = I("password");
        $remenber_me=I('remenber-me');
        $Verify = new \Think\Verify();
        if ($Verify->check($verify)) {
            $admin = M("admin");
            $admin->where("username='" . $username . "' and password='" . md5($password) . "'");
            //echo $admin->getLastSql();exit();
            if ($admin->count() > 0) {
                $admin->where("username='" . $username . "' and password='" . md5($password) . "'")->find();
                session("username", $admin->username);
                session("user_id", $admin->id);
                //如果选择了记住登陆
                if (!empty($remenber_me)){
                    cookie("username", $admin->username, 3600 * 24 * 7);
                    cookie("password", $admin->password, 3600 * 24 * 7);
                }
                $this->success("登陆成功", U('Admin/Index/index'));
            } else {

                $this->error("用户名或者密码错误!", U('index'));
            }
        } else {

            $this->error("验证码输入错误！", U('index'));
        }
    }

    /**
     * 登出
     */
    public function loginout() {

        session(null);
        cookie(null);
        $this->error("退出成功", U('Admin/Login/index'));
    }

}
