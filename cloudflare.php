<?php 
$header = array(
    "X-Auth-Email:admin@admin.com",
    "X-Auth-Key:HaHaHaHaHaHaHaHaHaHaHaHa",
    "Content-Type:application/json"
);

$domain = file(__DIR__.DIRECTORY_SEPARATOR.'dom'.DIRECTORY_SEPARATOR.'domain.txt');

$record = file(__DIR__.DIRECTORY_SEPARATOR.'dom'.DIRECTORY_SEPARATOR.'record.txt');

// 删除域名
foreach ($domain as $v_domain) {
    sleep(2);
    $url = 'https://api.cloudflare.com/client/v4/zones?name='.trim($v_domain);
    $rs = post_data($url, 0, $header, 8, 1);
    $rs = json_decode($rs, true);
    if(!empty($rs['result'][0]['id'])){
        $url = 'https://api.cloudflare.com/client/v4/zones/'.$rs['result'][0]['id'];
        $rs = post_data($url, 0, $header, 8, 1, 0, 1);
        $rs = json_decode($rs, true);	
        echo '删除成功: ' . $v_domain;
    } else{
        echo '无记录: ' . $v_domain;
    }
}

// 创建域名
foreach ($domain as $id => $v_domain) {
    sleep(2);
    $url = "https://api.cloudflare.com/client/v4/zones";
    $post = array(
        "name" => trim($v_domain),
        "jump_start" => true
    );

    $post = json_encode($post);
    $rs = post_data($url, $post, $header, 8, 1);
    $rs = json_decode($rs, true);

    if ($rs['success'] == false) {
        echo '添加失败，错误原因：' . $rs['errors'][0]['message'] . "\n";
        continue;
    } else {
        echo '添加域名成功' . "\n";
        echo '域名id：'     . $rs['result']['id'] . "\n";
        echo '域名：'       . $rs['result']['name'] . "\n";
        echo '域名状态：'   . $rs['result']['status'] . "\n";
        echo '开始添加解析' . "\n";
        $zoneid = $rs['result']['id'];
    }

    // 域名解析
    $records = explode('|', $record[$id]);
    foreach ($records as $v_record) {
        $url_add_records = 'https://api.cloudflare.com/client/v4/zones/'.$zoneid.'/dns_records';
        $record_detail = explode(',', trim($v_record));
        $name = strtolower($record_detail[0]);
        $type = strtoupper($record_detail[1]);
        $ip   = $record_detail[2];
        $post = array(
            "type"     => $type,
            "name"     => $name,
            "content"  => $ip,
            "ttl"      => 1, // 1 为自动
            "priority" => 10,
            "proxied"  => true //false 为关闭 true 为开启 dns and http proxy (cdn)
        );

        $post = json_encode($post);
        $add_records_rs = post_data($url_add_records, $post, $header, 8, 1);
        $rs = json_decode($add_records_rs, true);

        if ($rs['success'] == false) {
            echo '记录添加失败，错误原因：'.trim($v_domain).': '.$rs['errors'][0]['message'].PHP_EOL;
        } else {
            echo '记录添加成功'.trim($v_domain).PHP_EOL;
        }
    }

    // 开启HSTS
    $url = 'https://api.cloudflare.com/client/v4/zones/'.$zoneid.'/settings/security_header';
    $hsts = '{"value":{"strict_transport_security":{"enabled":true,"include_subdomains":true,"max_age":15552000,"nosniff":true,"preload":true}}}';
    $rs = post_data($url, 0, $header, 8, 1, $hsts);
    $rs = json_decode($rs, true);
    if($rs['success'] == false){
        echo 'HSTS失败原因：'.trim($v_domain).': '.$rs['errors'][0]['message'].PHP_EOL;
    } else {
        echo 'HSTS成功: '.trim($v_domain).PHP_EOL;
    }

    // 开启SSL
    $url = 'https://api.cloudflare.com/client/v4/zones/'.$zoneid.'/settings/always_use_https';
    $rs = post_data($url, 0, $header, 8, 1, '{"value":"on"}');
    $rs = json_decode($rs, true);
    if($rs['success'] == false){
        echo '开启SSL失败原因：'.trim($v_domain).': '.$rs['errors'][0]['message'].PHP_EOL;
    } else {
        echo '开启SSL成功: '.trim($v_domain).PHP_EOL;
    }
}

function post_data($url, $post=null, $header=array(), $timeout=8, $https=0, $pat=null, $del=0) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    if ($https){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
    }

    if ($header){
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }

    if ($post){
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($post) ? http_build_query($post) : $post);
    }

    if($del){
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    }

    if($pat){
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $pat);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($ch);
    curl_close($ch);

    return $content;
}

