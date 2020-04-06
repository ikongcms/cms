<?php
return array(
# ======> 公共配置
    # SESSION 数据用户未登录过期时间 秒
    'timeout' => '60',
    # SESSION 数据用户登陆后过期时间 秒
    'usertime' => '86400',
# ======> Mysql数据库配置
    # 数据库主机地址
    'db.host' => '127.0.0.1',
    # 数据库端口
    'db.port' => '3306',
    # 数据库用户名
    'db.user' => 'root',
    # 数据库密码
    'db.pass' => 'root',
    # 数据库名称
    'db.name' => 'root',
    # 数据库表前缀
    'db.prefix'=>'info_',
    # 数据库编码，默认utf8
    'db.charset' => 'utf8',
# ======> 保存 会员ID 到 Redis
    # Redis主机地址
    'user.host' => '127.0.0.1',
    # Redis端口，默认6379
    'user.port' => '6379',
    # Redis数据库号，范围1~16，默认无需修改，0默认预留给杂项使用
    'user.db' => '0',
    # Redis密码
    'user.auth' => '123456',
    # Redis链接时间 秒
    'user.ttl' => '10',
# ======> 保存 SESSION 到 Redis
    # Redis 主机地址
    'sess.host' => '127.0.0.1',
    # Redis端口，默认6379
    'sess.port' => '6379',
    # Redis数据库号，范围1~16，默认无需修改，0默认预留给杂项使用
    'sess.db' => '0',
    # Redis密码
    'sess.auth' => '123456',
    # Redis链接时间 秒
    'sess.ttl' => '10',
    # SESSION名称 #默认：PHPSESSID
    'sess.name' => 'UAID',
    # SESSION作用域
    'sess.domain' => '.a.com',
# ======> RSA 公钥, 私钥
    # RSA 私钥
    'private' => '
-----BEGIN RSA PRIVATE KEY-----MIICWwIBAAKBgQCBu3+RFDCScUZj4zwvSpRR463o3LqVqGt7qotHUeEp5kdIXDdk/wJ13GPf+BKUfnnjjjZwivBegNL33ewqQhm7OB93tdsm2JrfOwZh3BbBifm17cCGU4U/+O7FJPG2P16EslqESjOP4VehhGnG4h4g/GUMOCjXEy0MWgbUApwQgwIDAQABAoGAIkL+YbZPTZ2U1XSBxIuRuD7FAyaoMDYWjMZxmhhJuuMSGE4iYw3l/HKD/fZqEcWFM0+vmPFYodyr2sJFSLPET4iPmhORAzAIW/6HeSIJQTzTFWWxorOtouJGHICcx/nx0KBYk4Z8s5inRcqq4dOPhz4fe4jRL0ID3b1nM+3Gm2ECQQDMldk+q9kEJRGGLfQoN0jUinJMP/DVALMFmKa5n1G0H6RG5rGjb4Jcc2E9YXtffN769woEGYn4XvfRtobRckNtAkEAolXuK8PSk737g+zYSvDgVQ1+TzhmFbwCCUVz7eBgTZIkAvO8a3sS0uK8X6Johftwx4cRwkcme5v48Y0pNMs9rwJAG2O8b/2F0l48GGCynWe5YmsenkK5NWsgjJFBUPyZbaoGzk84XQ8ivsnbrOIOKFyJZcQJHT9mD1B3kSYEqqnHiQJAMHhX1NlzVomzP4DIVBf3421T+XNth6/LK9mA89W6625nMjp0V+M3i6AHfsaPTvH0ip7Zvphf9Shs/DKZyxmkIQJAbmcZp0/ogEUHbar76E1EJELbFQ0v+b5K/m6xA/ksTJTq4wij3UV/xVndxnY4ruMyZGWVd4WnjMOK1helLGSCww==-----END RSA PRIVATE KEY-----
',
    # RSA 公钥
    'public' => '
-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCBu3+RFDCScUZj4zwvSpRR463o3LqVqGt7qotHUeEp5kdIXDdk/wJ13GPf+BKUfnnjjjZwivBegNL33ewqQhm7OB93tdsm2JrfOwZh3BbBifm17cCGU4U/+O7FJPG2P16EslqESjOP4VehhGnG4h4g/GUMOCjXEy0MWgbUApwQgwIDAQAB-----END PUBLIC KEY-----
',
    # RSA 第三方公钥
    'third' => '
-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCBu3+RFDCScUZj4zwvSpRR463o3LqVqGt7qotHUeEp5kdIXDdk/wJ13GPf+BKUfnnjjjZwivBegNL33ewqQhm7OB93tdsm2JrfOwZh3BbBifm17cCGU4U/+O7FJPG2P16EslqESjOP4VehhGnG4h4g/GUMOCjXEy0MWgbUApwQgwIDAQAB-----END PUBLIC KEY-----
',

);
