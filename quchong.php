<?php 
set_time_limit(0);

$tel = file('qq.txt');
$bak = file('tel.txt');
$srt = array_flip(array_flip(array_diff($tel,$bak)));
file_put_contents ('ok.txt', '重复'.(count($tel)-count($srt)).'条数据'.PHP_EOL.implode('',$srt));
exit();
$tel = file('tel.txt');
foreach($tel as $value){
    if(mb_strlen(trim($value))==11){
        file_put_contents ('ok.txt', trim($value).PHP_EOL, FILE_APPEND);
    }
}
exit();
$tel = file('tel.txt');
$srt = array_flip(array_flip($tel));
file_put_contents ('ok.txt', implode('',$srt));
exit();
$tel = file('tel.txt');
foreach($tel as $value){
    $srt = explode(',', $value);
	$v = trim(str_replace('\'','',$srt[1]));
    if(mb_strlen(trim($v))==11){
        file_put_contents ('ok.txt', trim($v).PHP_EOL, FILE_APPEND);
    }
}
