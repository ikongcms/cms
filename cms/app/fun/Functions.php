<?php 
namespace app\fun;

use app;

class Functions extends app\Engine {

    // 设置SESSION链接
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

    // XAES加密
    public function getXAes($data = 'str', $id = 'e' , $expire = 0) {
        $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
        $this->loader->register('getTea', '\app\fun\Tea');
        $srt = $this->getTea();
        switch ($id) {
            case 'e':
                return str_replace(array('+', '/', '='), array('-', '_', '~'), $this->encrypt(base64_encode($srt->xencrypt($data, md5($config['private']), $expire)), substr(md5($config['private']),8,16))); // 加密
                break;
            case 'd':
                return $srt->xdecrypt(base64_decode($this->decrypt(str_replace(array('-', '_', '~'), array('+', '/', '='),$data), substr(md5($config['private']),8,16))), md5($config['private'])); // 解密
                break;
            default:
                return 'AES Error: Data not';
        }
    }

    // TOKEN 十六进制编码
    public function getToken($id = 'e', $data = 'public') {
        switch ($id) {
            case 'e':
                return strtoupper(bin2hex($this->encrypt($data,md5($this->getKey().'WziDyQxstem3bUrf'))));
                break;
            case 'd':
                return $this->decrypt(pack("H*",$data),md5($this->getKey().'WziDyQxstem3bUrf'));
                break;
            default:
                return 'TOKEN Error: Data not';
        }
    }

    // RSA 第三次公共证书
    public function getKey($name = 'public') {
        $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
        return trim(preg_replace('/[\r\n]/', '',$config[$name.'.third']));
    }

    // RSA加密
    public function getRSA($id = 're', $data, $sign = false, $third = false) {
        $config = $this->get('web.config');  // 禁止公共调用，否则会暴露密钥
        $this->loader->register('getRsaSrt', '\app\fun\Rsa',array(
            $config['public.third'],
            $config['private'],
            (empty($third)?$this->getKey():$this->getKey($third)),
        ));
        $srt = $this->getRsaSrt();
        switch ($id) {
            case 're':
                return $srt->privEncrypt(json_encode($data, JSON_UNESCAPED_UNICODE)); // 私钥加密
                break;
            case 'ud':
                return $srt->publicDecrypt($data); // 公钥解密
                break;
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

    /**
     * @param string $string 需要加密的字符串
     * @param string $key 密钥
     * @return string
     */
    public function encrypt($string, $key) {
        // openssl_encrypt 加密不同Mcrypt，对秘钥长度要求，超出16加密结果不变
        $data = openssl_encrypt($string, 'AES-256-ECB', $key, OPENSSL_RAW_DATA);
        return base64_encode($data);
    }

    /**
     * @param string $string 需要解密的字符串
     * @param string $key 密钥
     * @return string
     */
    public function decrypt($string, $key) {
        $decrypted = openssl_decrypt(base64_decode($string), 'AES-256-ECB', $key, OPENSSL_RAW_DATA);
        return $decrypted;
    }

}
