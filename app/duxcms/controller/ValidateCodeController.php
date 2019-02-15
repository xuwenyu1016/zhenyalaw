<?php
namespace app\duxcms\controller;
use app\home\controller\SiteController;
/**
 * TAG列表
 */

class ValidateCodeController extends SiteController {

    public function index(){
        session_start();
        $_vc = new \framework\ext\ValidateCode();
        $_SESSION['VC'] = $_vc->createCode();
        $_vc->doimg();  
    }

}

