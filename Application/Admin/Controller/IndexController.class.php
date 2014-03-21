<?php

/**
 * 后台首页
 */

namespace Admin\Controller;

use Admin\Controller\BaseController;

class IndexController extends BaseController {

    public function index() {
        //print_r($_COOKIE);
        $this->display();
    }

    
}
