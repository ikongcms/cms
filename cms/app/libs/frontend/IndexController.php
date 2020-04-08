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
        //$third = '-----BEGIN PUBLIC KEY-----MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2KJ4i1DKa1TLCqjwRIA+BQw/zqIjey6FIL4G2qfSE4MKUbSCeZ1UKehLJyaweD4s9l9k7QOA87t3HtGWeMGxlam9kLCijc/XDdR3cD98ncfl8t+k6HsIORCcKXEbbOg/He0BrkbCSn2hzpXZEY1iIrG4w070XsV8WsNpkYkWU12F3mGwK1GW093tmNaqu5iz9Ra6peARI3231Ef7cAeSqJwzICLtE/QqYW1k9y8TXHT1kwbM4IG1jv/LOyjQoqcNk7v09wcDAOl3V0obI/BVF7jqweYZ1QOkUjr5asJ7+Dl2x9hzQMzvZA8NKDioXb7gwftn2KSFXFvVi8yiITnyDwIDAQAB-----END PUBLIC KEY-----';

        $srt = Api::fun()->getXAes('我是谁我和你','e',86400);
        echo $srt.PHP_EOL;
        $srt = Api::fun()->getXAes($srt,'d');
        echo $srt.PHP_EOL;
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
