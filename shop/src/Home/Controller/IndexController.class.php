<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //不加任何参数则默认找index.html做为模板,即和自己的方法名一样
        $this->display();
    }

    public function cat() {
        $this->display('category');
    }

    public function goods() {
        $this->display();
    }
}
