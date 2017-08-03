<?php
/**
 * Created by PhpStorm.
 * User: aqie
 * Date: 2017/8/4 6:56
 */

namespace Admin\Controller;
use Think\Controller;

// http://tp3shop.com/index.php/admin/index/index
class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function top()
    {
        $this->display();
    }
    public function menu()
    {
        $this->display();
    }
    public function main()
    {
        $this->display();
    }

}