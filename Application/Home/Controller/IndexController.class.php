<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //__ROOT__ 根目录 /demo
        //
        var_dump(__JS__);die;
       $this->display();
    }

}