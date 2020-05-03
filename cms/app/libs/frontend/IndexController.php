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

        //$srt = Api::fun()->getToken('e', '我和你心连心');
        //echo $srt.PHP_EOL;
        //$srt = Api::fun()->getToken('d', $srt);
        //echo $srt.PHP_EOL;

        //$srt = Api::fun()->getXAes('我和你心连心','e',86400);
        //echo $srt.PHP_EOL;
        //$srt = Api::fun()->getXAes($srt,'d');
        //echo $srt.PHP_EOL;

        //$data['name'] = '网红';
        //$data['age'] = '26';
        //$data['title'] = '我和你心连心';
        //$data['english'] = 'baidu.com';

        //$baidu1 = Api::fun()->getRSA('re',$data);
        //echo $baidu1.PHP_EOL;
        //$baidu2 = Api::fun()->getRSA('ud',$baidu1);
        //echo $baidu2.PHP_EOL;
        //$baidu1 = Api::fun()->getRSA('ue',$data);
        //echo $baidu1.PHP_EOL;
        //$baidu2 = Api::fun()->getRSA('rd',$baidu1);
        //echo $baidu2.PHP_EOL;
        //$baidu3 = Api::fun()->getRSA('rs',$data);
        //echo $baidu3.PHP_EOL;
        //$baidu4 = Api::fun()->getRSA('uv',$data,$baidu3);
        //echo $baidu4.PHP_EOL;
        //$baidu4 = Api::fun()->getRSA('tv',$data,$baidu3,'alipay'); // 留空为公共密钥，alipay为第三次密钥
        //echo $baidu4.PHP_EOL;
        Api::render('index', array('title' => '测试接口', 'token' => Api::fun()->getToken(), 'publicKey' => Api::fun()->getKey()));
    }

}
