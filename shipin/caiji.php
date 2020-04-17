<?php
/*
 01 = 视频
 02 = 视频频
 03 = 东京热
 04 = VR视频
 05 = 自拍视频
 06 = 亚洲视频
 07 = 欧美视频
 08 = 动漫视频
 09 = 伦理片
 10 = 一本道
 11 = JAVHD
 12 = 无码视频
 13 = 有码视频
 14 = 女女视频
 15 = 群交视频
 16 = 福利视频
 17 = 中文字幕
 */

$caiji = getVideo(3, 1);

if(!empty($caiji)&&is_array($caiji)) {
    foreach($caiji['data'] as $key => $value) {
        preg_match_all('/([a-zA-Z0-9\_\～\-\.\s]+|[\x{4e00}-\x{9fff}]+|[\x{0800}-\x{4e00}]+|[\x{AC00}-\x{D7A3}]+|[\x{4e00}-\x{9fa5}]+)/u', $value['vod_name'], $vod_name);
        $vod_all = explode("番号", implode('',$vod_name[1]));
        $vod_name = (empty($vod_all[1])?array($vod_all[0],''):$vod_all);
        preg_match_all('/([a-zA-Z0-9\:\_\/\-\.]+m3u8)/u', $value['vod_url'], $vod_url);
        $vod_url = $vod_url[1][0];
        preg_match_all('/([a-zA-Z0-9\:\_\/\-\.]+jpg)/u', $value['vod_pic'], $vod_pic);
        $vod_pic = $vod_pic[1][0];
        preg_match_all('/([\x{4e00}-\x{9fff}]+)/u', $value['vod_area'], $vod_area);
        $vod_area = $vod_area[1][0];
        $vod_addtime = time();
        $data[] = (($key<1)?'INSERT INTO `ff_vod` (`vod_cid`, `vod_name`, `vod_title`, `vod_keywords`, `vod_color`, `vod_actor`, `vod_director`, `vod_content`, `vod_pic`, `vod_area`, `vod_language`, `vod_year`, `vod_continu`, `vod_total`, `vod_isend`, `vod_addtime`, `vod_hits`, `vod_hits_day`, `vod_hits_week`, `vod_hits_month`, `vod_hits_lasttime`, `vod_stars`, `vod_status`, `vod_up`, `vod_down`, `vod_play`, `vod_server`, `vod_url`, `vod_inputer`, `vod_reurl`, `vod_jumpurl`, `vod_letter`, `vod_skin`, `vod_gold`, `vod_golder`, `vod_isfilm`, `vod_filmtime`, `vod_length`, `vod_weekday`) VALUES ':'').'(4, \''.trim($vod_name[0]).'\', \''.trim($vod_name[1]).'\', \'\', \'\', \'\', \'\', \''.trim($vod_name[0]).'\', \''.trim($vod_pic).'\', \''.$vod_area.'\', \'\', 0, \'0\', \'\', 1, \''.$vod_addtime.'\', '.mt_rand(60500,96080).', '.mt_rand(5080,8090).', '.mt_rand(500,900).', '.mt_rand(50,90).', \''.$vod_addtime.'\', 1, 1, '.mt_rand(20800,40900).', '.mt_rand(108,809).', \'m3u8\', \'\', \''.$vod_url.'\', \'admin\', \'\', \'\', \'G\', \'\', \''.mt_rand(6,9).'.'.mt_rand(2,5).'\', '.mt_rand(3050,7608).', 1, 0, 0, 0)'.((count($caiji['data'])-1)>$key ? ',' : ';');
    }
    if(!empty($data)&&is_array($data)) {
        print_r(implode('',$data));
    }
}

function getVideo($cid = 1, $p = 1) {
    $jsonVideo = getJson('http://api.iixxzyapi.com/inc/feifei3/?a=json&cid='.ceil($cid).'&g=plus&m=api&p='.ceil($p),getRandIP());
    if(!empty($jsonVideo[1])&&$jsonVideo[1] == 200) {
        return json_decode($jsonVideo[0], true);
    }
    return '404';
}

function getJson($url, $randIP) {
    $ch = curl_init();
    $user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0';
    $options =  array(
        CURLOPT_URL => $url,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_HTTPGET => TRUE,
        CURLOPT_NOBODY => FALSE,
        CURLOPT_HEADER => FALSE,
        CURLOPT_REFERER => $url,
        CURLOPT_USERAGENT => $user_agent,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_SSL_VERIFYHOST => FALSE,
        CURLOPT_COOKIEFILE => __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'cookie.txt',
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain', 'X-FORWARDED-FOR:' . $randIP, 'CLIENT-IP:' . $randIP),
    );
    curl_setopt_array($ch, $options);
    $result = curl_exec ($ch);
    $Code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return array($result, $Code);
}

function getRandIP() {
    $ip2id= round(rand(600000, 2550000) / 10000);
    $ip3id= round(rand(600000, 2550000) / 10000);
    $ip4id= round(rand(600000, 2550000) / 10000);
    $_array = array('218','218','66','66','218','218','60','60','202','204','66','66','66','59','61','60','222','221','66','59','60','60','66','218','218','62','63','64','66','66','122','211');
    $randarr= mt_rand(0,count($_array)-1);
    $ip1id = $_array[$randarr];
    return $ip1id.'.'.$ip2id.'.'.$ip3id.'.'.$ip4id;
}
