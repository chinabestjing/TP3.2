<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //商城首页
    public function index(){
        //__ROOT__ 根目录 /demo
       $this->display();
    }
}