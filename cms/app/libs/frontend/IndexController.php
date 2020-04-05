<?php
namespace frontend;

use Api;

class IndexController {

    /**
     * 首页
     * @param  [type] $cid  [description]
     * @param  [type] $page [description]
     * @return [type]       [description]
     */
    public static function index() {
        //$srt = Api::fun()->getBit('我是谁','1');
        //echo $srt;
        //$srt = Api::fun()->getBit($srt,'2');
        //echo $srt;
        //$baidu1 = Api::fun()->getRSA('我是谁','e');
        //echo $baidu1.PHP_EOL;
        //$baidu2 = Api::fun()->getRSA($baidu1,'d');
        //echo $baidu2.PHP_EOL;
        //$baidu3 = Api::fun()->getRSA('我是谁','s');
        //echo $baidu3.PHP_EOL;
        //$baidu4 = Api::fun()->getRSA('我是谁','v',$baidu3);
        //echo $baidu4.PHP_EOL;
        Api::render('index', array('title' => '测试接口'));

    }

}
