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
        //$data['name'] = '网红';
        //$data['age'] = '26';
        //$data['title'] = '我是谁';
        //$data['english'] = 'litblc.com';
        //$third = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCBu3+RFDCScUZj4zwvSpRR463o3LqVqGt7qotHUeEp5kdIXDdk/wJ13GPf+BKUfnnjjjZwivBegNL33ewqQhm7OB93tdsm2JrfOwZh3BbBifm17cCGU4U/+O7FJPG2P16EslqESjOP4VehhGnG4h4g/GUMOCjXEy0MWgbUApwQgwIDAQAB-----END PUBLIC KEY-----';

        //$srt = Api::fun()->getBit('我是谁','1',86400);
        //echo $srt.PHP_EOL;
        //$srt = Api::fun()->getBit($srt,'2');
        //echo $srt.PHP_EOL;
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
        //$baidu4 = Api::fun()->getRSA('tv',$data,$baidu3,$third); // $third 是第三方公钥
        //echo $baidu4.PHP_EOL;
        Api::render('index', array('title' => '测试接口'));

    }

}
