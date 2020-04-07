<?php 
namespace app\fun;

use app;

class Functions extends app\Engine {

    //设置SESSION链接
    public function getSESS($name = 'sess') {
        if (!isset(self::$dbInstances[$name])) {
            $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
            $this->loader->register('getRedisSESS', '\app\fun\RedisSess',array (
                $config[$name.'.host'],   // 服务器连接地址。默认='127.0.0.1'
                $config[$name.'.port'],   // 端口号。默认='6379'
                $config[$name.'.auth'],   // 连接密码，如果有设置密码的话
                $config[$name.'.db'],     // 缓存库选择。默认0
                $config[$name.'.ttl'],    // 连接超时时间（秒）。默认10
                $config['usertime'],      // 默认用户登录过期时间，单位秒。不填默认3600
                $config['timeout'],       // 默认用户未登录过期时间，单位秒。不填默认3600
                $config[$name.'.name'],   // SESSION name
                $config[$name.'.domain'], // 作用域
            ));
            try {
                $dbs = $this->getRedisSESS();
                if (!$dbs) {
                    throw new \Exception();
                }
                self::$dbInstances[$name] = $dbs;
            } catch (\Exception $e) {
                die(json_encode(array('code'=>500, 'msg'=>'Redis数据库连接失败', 'data'=>false), JSON_UNESCAPED_UNICODE));
            }
        }
        return self::$dbInstances[$name];
    }

    //二进制加密
    public function getBit($data = 'str', $id = 1 , $expire = 0) {
        $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
        $this->loader->register('getBinary', '\app\fun\Binary');
        $srt = $this->getBinary();
        if($id == 1) {
            return $srt->encrypt($data, md5($config['private']), $expire); // 加密
        } else {
            return $srt->decrypt($data, md5($config['private'])); // 解密
        }
    }

    //RSA加密
    public function getRSA($id = 're', $data, $sign = false, $third = false) {
        $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
        $this->loader->register('getRsaSrt', '\app\fun\Rsa',array(
            $config['public'],
            $config['private'],
            (empty($third)?$config['third']:$third),
        ));
        $srt = $this->getRsaSrt();
        switch ($id) {
            case 're':
                return $srt->privEncrypt(json_encode($data, JSON_UNESCAPED_UNICODE)); // 私钥加密
                break;
            case 'ud':
                return $srt->publicDecrypt($data); // 公钥解密

            case 'ue':
                return $srt->publicEncrypt(json_encode($data, JSON_UNESCAPED_UNICODE)); // 公钥加密
                break;
            case 'rd':
                return $srt->privDecrypt($data); // 私钥解密
                break;
            case 'rs':
                return $srt->privSign($data); // 私钥签名
                break;
            case 'uv':
                return $srt->publicVerifySign($data, $sign); // 公钥验证
                break;
            case 'tv':
                return $srt->publicVerifySignThird($data, $sign); // 第三方公钥验证
                break;
            default:
                return 'RSA Error: Data not';
        }
    }

}
