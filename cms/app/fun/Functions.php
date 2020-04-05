<?php 
namespace app\fun;

use app;

class Functions extends app\Engine {

    //设置SESSION链接
    public function getSESS($name = 'sess') {
        if (!isset(self::$dbInstances[$name])) {
            $config = $this->get('web.config');
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
                die(json_encode(array('code'=>500, 'msg'=>'Redis数据库连接失败', 'data'=>''), JSON_UNESCAPED_UNICODE));
            }
        }
        return self::$dbInstances[$name];
    }

    //二进制加密
    public function getBit($data = 'str', $id = 1) {
        $config = $this->get('web.config');
        $this->loader->register('getBinary', '\app\fun\Binary');
        $srt = $this->getBinary();
        if($id == 1) {
            return $srt->encrypt($data, md5($config['private'])); // 加密
        } else {
            return $srt->decrypt($data, md5($config['private'])); // 解密
        }
    }

    //RSA加密
    public function getRSA($data, $id = 'e', $sign = '') {
        $config = $this->get('web.config');
        $this->loader->register('getRsaSrt', '\app\fun\Rsa',array(
            $config['public'],
            $config['private'],
        ));
        $srt = $this->getRsaSrt();
        switch ($id) {
            case 'e':
                return $srt->encrypt($data); // 加密
                break;
            case 'd':
                return $srt->decrypt($data); // 解密
                break;
            case 's':
                return $srt->sign($data); // 生成
                break;
            case 'v':
                return $srt->verify($data, $sign); // 验证
                break;
            default:
                return 'RSA Error: Data not';
        }
    }
}
