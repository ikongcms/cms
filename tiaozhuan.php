<?php
if(empty($_GET['igfw'])&&empty($_GET['t'])&&empty($_GET['d'])){
    echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>document</title><meta http-equiv="Cache-Control" content="no-cache"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="renderer" content="webkit"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=0"><meta name="apple-mobile-web-app-capable" content="yes"><style type="text/css">*{margin:0;padding:0;box-sizing:border-box}a{color:inherit;text-decoration:none;background-color:transparent}li{list-style:none}.clearfix:after{content:\'\';display:table;clear:both}body{font-size:14px;color:#494949;overflow:auto}.wrap{position:relative;min-height:580px}.wrap-bg circle,.wrap-bg rect{stroke-width:0;-ms-transform:rotate(30deg) scale(1.1);transform:rotate(30deg) scale(1.1);-ms-transform-origin:center;transform-origin:center}.main{position:absolute;top:50%;left:50%;z-index:2;width:970px;background:#effbff;-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);box-shadow:0 0 50px rgba(0,0,0,.1)}.header-tabs{width:100%;height:55px;padding:0 30px;background:linear-gradient(45deg,#4c75e9,#2c7ce3);overflow:hidden}.header-tabs .tab{float:left;height:40px;width:200px;padding:0 18px;margin-top:15px;border-radius:10px 10px 0 0;background:#fbfdff;line-height:40px;color:#113c73}.header-tabs .tab:after{content:\'\';display:table;clear:both}.header-tabs .tab span{float:left}.header-tabs .tab i{position:relative;float:right;width:11px;height:11px;margin-top:14px;cursor:pointer;-ms-transform:rotate(45deg);transform:rotate(45deg)}.header-tabs .tab i:before{content:\'\';position:absolute;top:5px;left:0;display:block;width:100%;height:1px;background:#113c73}.header-tabs .tab i:after{content:\'\';position:absolute;left:5px;top:0;display:block;width:1px;height:100%;background:#113c73}.header-tabs .tab-add{position:relative;float:left;width:28px;height:28px;margin:20px 0 0 15px;border-radius:50%;background:#a9cdf7}.header-tabs .tab-add:before{content:\'\';position:absolute;top:13px;left:9px;display:block;width:10px;height:2px;background:#113c73}.header-tabs .tab-add:after{content:\'\';position:absolute;left:13px;top:9px;display:block;width:2px;height:10px;background:#113c73}.header-tabs .tabs-tool{float:right;height:100%}.header-tabs .tabs-tool a{position:relative;float:left;width:14px;height:100%;margin:0 15px}.header-tabs .tabs-tool .btn-min:before{content:\'\';position:absolute;top:27px;left:0;width:100%;height:1px;background:#113c73}.header-tabs .tabs-tool .btn-max:before{content:\'\';position:absolute;top:20px;left:0;width:14px;height:14px;border:1px solid #113c73;box-sizing:border-box}.header-tabs .tabs-tool .btn-close{width:15px;-ms-transform:rotate(45deg);transform:rotate(45deg)}.header-tabs .tabs-tool .btn-close:before{content:\'\';position:absolute;top:27px;left:0;display:block;width:15px;height:1px;background:#113c73}.header-tabs .tabs-tool .btn-close:after{content:\'\';position:absolute;left:7px;top:20px;display:block;width:1px;height:15px;background:#113c73}.header-url{width:100%;height:54px;padding:10px 20px 10px 15px;background:#f2f2f2}.header-url a{float:left;height:100%;margin:0 9px;overflow:hidden}.header-url a svg{margin-top:9px}.header-url a .arrow{fill:none;stroke:#494949;stroke-width:2px;stroke-linecap:round;stroke-linejoin:round}.header-url .btn-next .arrow{-ms-transform-origin:center;transform-origin:center;-ms-transform:rotate(180deg);transform:rotate(180deg);stroke:#d4d5d6}.header-url .btn-refresh path{fill:none;stroke:#494949;stroke-width:2px;stroke-linecap:round;stroke-linejoin:round;-ms-transform-origin:center;transform-origin:center;-ms-transform:rotate(40deg);transform:rotate(40deg)}.header-url .btn-refresh polyline{fill:#494949;-ms-transform-origin:center;transform-origin:center;-ms-transform:rotate(40deg);transform:rotate(40deg)}.header-url input[type=text]{height:100%;width:820px;margin-left:6px;padding:0 1em;border:1px solid #a9a9a9;border-radius:4px;background:#fff}.main-content{height:470px;border:1px solid #c4dce5;background:#f4fcff}.main-content h5{padding:110px 0;font-weight:400;text-align:center}.main-content h5 span{position:relative;display:inline-block;font-size:60px;color:#2c7ce3}.main-content h5 span:before{content:\'\';position:absolute;top:48px;left:-36px;display:block;width:14px;height:14px;border-radius:50%;background:linear-gradient(45deg,#ded9ff,#2c7ce3);opacity:.2}.main-content h5 span:after{content:\'\';position:absolute;top:32px;left:-80px;display:block;width:20px;height:20px;border-radius:50%;background:linear-gradient(45deg,#ded9ff,#2c7ce3);opacity:.2}.main-content h5 span i:before{content:\'\';position:absolute;top:32px;right:-72px;display:block;width:14px;height:14px;border-radius:50%;background:linear-gradient(45deg,#ded9ff,#2c7ce3);opacity:.2}.main-content h5 span i:after{content:\'\';position:absolute;top:48px;right:-40px;display:block;width:20px;height:20px;border-radius:50%;background:linear-gradient(45deg,#ded9ff,#2c7ce3);opacity:.2}.main-content p{font-size:26px;text-align:center}</style></head><body><div class="wrap"><svg class="wrap-bg" width="98vw" height="99vh" viewBox="0 0 400 400"><defs><linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="20%" stop-color="#fff" stop-opacity="0.2"/><stop offset="40%" stop-color="#c4efff" stop-opacity="0.2"/><stop offset="100%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#fff" stop-opacity="0.2"/><stop offset="30%" stop-color="#e7c4ff" stop-opacity="0.2"/><stop offset="50%" stop-color="#fff" stop-opacity="0.2"/><stop offset="70%" stop-color="#c4d6ff" stop-opacity="0.2"/><stop offset="100%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#fff" stop-opacity="0.2"/><stop offset="30%" stop-color="#a3bbff" stop-opacity="0.2"/><stop offset="50%" stop-color="#fff" stop-opacity="0.2"/><stop offset="70%" stop-color="#73dcfe" stop-opacity="0.2"/><stop offset="100%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><linearGradient id="gradient4" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#fff" stop-opacity="0.2"/><stop offset="30%" stop-color="#fec0dd" stop-opacity="0.2"/><stop offset="50%" stop-color="#fff" stop-opacity="0.2"/><stop offset="70%" stop-color="#a3bbff" stop-opacity="0.2"/><stop offset="100%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><linearGradient id="gradient5" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#fff" stop-opacity="0.2"/><stop offset="30%" stop-color="#c4d6ff" stop-opacity="0.2"/><stop offset="50%" stop-color="#fff" stop-opacity="0.2"/><stop offset="70%" stop-color="#e7c4ff" stop-opacity="0.2"/><stop offset="100%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><linearGradient id="gradient6" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="40%" stop-color="#fff" stop-opacity="0.2"/><stop offset="70%" stop-color="#c4efff" stop-opacity="0.2"/><stop offset="90%" stop-color="#fff" stop-opacity="0.2"/></linearGradient><radialGradient id="gradient7" fx="50%" fy="50%" r="65%" spreadMethod="pad"><stop offset="0%" stop-color="#eefafe" stop-opacity="0.2"></stop><stop offset="100%" stop-color="#fff" stop-opacity="0.2"></stop></radialGradient></defs><rect x="50" y="0" width="50" height="400" style="fill:url(#gradient1)"></rect><rect x="100" y="0" width="50" height="400" style="fill:url(#gradient2)"></rect><rect x="150" y="0" width="50" height="400" style="fill:url(#gradient3)"></rect><rect x="200" y="0" width="50" height="400" style="fill:url(#gradient4)"></rect><rect x="250" y="0" width="50" height="400" style="fill:url(#gradient5)"></rect><rect x="300" y="0" width="50" height="400" style="fill:url(#gradient6)"></rect><circle cx="200" cy="200" r="300" style="fill:url(#gradient7)"></circle></svg><div class="main"><header><div class="header-tabs clearfix"><a href="javascript: void(0);" class="tab"><span>新建标签页</span> <i></i> </a><a href="javascript: void(0);" class="tab-add"></a><div class="tabs-tool"><a href="javascript: void(0);" class="btn-min"></a> <a href="javascript: void(0);" class="btn-max"></a> <a href="javascript: void(0);" class="btn-close"></a></div></div><div class="header-url clearfix"><svg style="display:none"><defs><g id="arrow"><path d="M8,2 L1,8 8,14"></path><path d="M2,8 L15,8"></path></g></defs></svg> <a href="javascript: void(0);" class="btn-back"><svg width="16" height="16"><use class="arrow" xlink:href="#arrow"></use></svg> </a><a href="javascript: void(0);" class="btn-next"><svg width="16" height="16"><use class="arrow" xlink:href="#arrow"></use></svg> </a><a href="javascript: void(0);" class="btn-refresh"><svg width="16" height="16"><path class="refresh-arc" d="M15,8  A7,7 0 1,1 8,1"></path><polyline points="8,-3  11,1  8,5"></polyline></svg> </a><input type="text" readonly class="url-value"></div></header><div class="main-content"><h5><span>网站正在建设中<i></i></span></h5><p>合作洽谈请联系 Administrator@'.$_SERVER['HTTP_HOST'].'</p></div></div></div></body></html>';
}
if(!empty($_GET['t'])&&$_GET['t']=='admin'){
    session_start();
    $inToken = md5($_SERVER['HTTP_HOST'].time());
    if(empty($_SESSION['token'])) {
        $_SESSION['token'] = $inToken;
    } else {
        $inToken = $_SESSION['token'];
    }
	if(!empty($_POST['token'])&&$_POST['token']==$_SESSION['token']&&!empty($_POST['p'])&&$_POST['p']=='abc123'){
        $_SESSION['u'] = 1;$_SESSION['token'] = md5($_SERVER['HTTP_HOST'].time());$inToken = $_SESSION['token'];
        $_SESSION['time'] = time() + 600;
    }
    if(empty($_SESSION['u'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" hidden="hidden" name="token" value="<?php echo $inToken; ?>" />
    <p>管理密码：<input type="password" name="p" /></p>
    <p><input type="submit" value="提交登陆" /></p>
</form>
</body>
</html>
<?php 
    } else {
    if($_SESSION['time']<time()){
        $_SESSION['u'] = 0;
        exit('<script>window.location.replace(\''.getHttpType().$_SERVER['HTTP_HOST'].'/?t=admin\');</script>');
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="" method="post">
    <p><input type="hidden" name="t" value="admin" /></p>
    <p><input type="hidden" name="token" value="<?php echo $inToken; ?>" /></p>
    <p>污染地址：<input type="text" name="i" /> <em style="color: #EA0000; font-style:normal;">格式：wei.com</em></p>
    <p>新域地址：<input type="text" name="n" /> <em style="color: #EA0000; font-style:normal;">格式：mei.com</em></p>
    <p><input type="submit" value="提交地址" /></p>
</form>
<?php 
        $dirJson = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR;
        if(!empty($_POST['token'])&&$_POST['token']==$_SESSION['token']&&!empty($_SESSION['u'])&&!empty($_POST['i'])&&!empty($_POST['n'])&&$_POST['t']=='admin'){
            preg_match('/^[a-zA-z0-9\.\-\/]{1,}$/', $_POST['i'], $i);
            preg_match('/^[a-zA-z0-9\.\-\/]{1,}$/', $_POST['n'], $n);
            if(empty($i[0])){exit('<em style="color: #EA0000; font-style:normal;">污染域名</em> 格式不正确');}
            if(empty($n[0])){exit('<em style="color: #EA0000; font-style:normal;">新域地址</em> 格式不正确');}
            $gfw = $i[0];$_SESSION['url'] = $dwz = trim(shorturl($gfw));$new = $n[0];$_SESSION['time']=time()+600;
            if(!is_dir($dirJson)) {mkdirs($dirJson);}$_SESSION['token'] = md5($_SERVER['HTTP_HOST'].time());
            file_put_contents($dirJson.$dwz.'.json', serialize(array(trim($dwz),trim($gfw),trim($new))));
            echo '<script>window.location.replace(\''.getHttpType().$_SERVER['HTTP_HOST'].'/?t=admin\');</script>';
        }
        echo !empty($_SESSION['url'])?'<p>301新短地址：'.getHttpType().$_SERVER['HTTP_HOST'].'/'.$_SESSION['url'].'</p>':'';
        $file = getFileAll();
        foreach($file as $i => $key){
            $_array[] = getTxt(substr($file[$i],0,strpos($file[$i], '.')));
        }
        if(!empty($_array)){
            $table = '<table width="50%" cellpadding="0">';
            $table .= '<tr style="text-align: center;"><td>排序</td><td>短地址</td><td>老域名</td><td>新域名</td></tr>';
            foreach($_array as $i => $key){
                $table .= '<tr style="text-align: center;">';
                $table .= '<td>'.($i+1).'</td>';
                $table .= '<td>'.getHttpType().$_SERVER['HTTP_HOST'].'/'.$key[0].'</td>';
                $table .= '<td>'.$key[1].'</td>';
                $table .= '<td>'.$key[2].'</td>';
                $table .= '</tr>';
            }
            echo $table .= '</table>'.PHP_EOL;
		}
    ?>
</body>
</html>
<?php
    }
}

if(!empty($_GET['d'])){
    preg_match('/^[a-zA-z0-9\.\-\/]{1,}$/', $_GET['d'], $id);
    $igfw = getTxt(shorturl($id[0]));
    if(!empty($igfw[1])){
        exit('<html><head><meta http-equiv="Content-Language" content="zh-CN"><meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"><script>window.location.replace(\''.getHttpType().$_SERVER['HTTP_HOST'].'/'.shorturl($id[0]).'\');</script><meta http-equiv="refresh" content="0.1;url='.getHttpType().$_SERVER['HTTP_HOST'].'/'.shorturl($id[0]).'"><title></title></head><body></body></html>');
    }
}

if(!empty($_GET['igfw'])){
    preg_match('/^[a-zA-z0-9\.\-\/]{1,}$/', $_GET['igfw'], $id);
    $igfw = getTxt($id[0]);
    if(!empty($igfw[0])&&$igfw[0]==$_GET['igfw']){
        if(!empty($_POST['pass'])){
            exit('<html><head><meta http-equiv="Content-Language" content="zh-CN"><meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"><script>window.location.replace(\'http://'.trim($igfw[2]).'/'.(trim($igfw[2])=='m.baidu.com'?'s':'').'?ie=utf-8&word=site%3A'.(trim($igfw[2])=='m.baidu.com'?$_SERVER['HTTP_HOST']:getHttpType().$_SERVER['HTTP_HOST'].'/'.trim($igfw[0])).'\');</script><meta http-equiv="refresh" content="0.1;url=http://'.trim($igfw[2]).'/'.(trim($igfw[2])=='m.baidu.com'?'s':'').'?ie=utf-8&word=site%3A'.(trim($igfw[2])=='m.baidu.com'?$_SERVER['HTTP_HOST']:getHttpType().$_SERVER['HTTP_HOST'].'/'.trim($igfw[0])).'"><title></title></head><body></body></html>');
        }
        echo '<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Just a moment...</title>
  <style type="text/css">
    html, body {width: 100%; height: 100%; margin: 0; padding: 0;}
    body {background-color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-size: 100%;}
    h1 {font-size: 1.5em; color: #404040; text-align: center;}
    p {font-size: 1em; color: #404040; text-align: center; margin: 10px 0 0 0;}
    #spinner {margin: 0 auto 30px auto; display: block;}
    .attribution {margin-top: 20px;}
    @-webkit-keyframes bubbles { 33%: { -webkit-transform: translateY(10px); transform: translateY(10px); } 66% { -webkit-transform: translateY(-10px); transform: translateY(-10px); } 100% { -webkit-transform: translateY(0); transform: translateY(0); } }
    @keyframes bubbles { 33%: { -webkit-transform: translateY(10px); transform: translateY(10px); } 66% { -webkit-transform: translateY(-10px); transform: translateY(-10px); } 100% { -webkit-transform: translateY(0); transform: translateY(0); } }
    .bubbles { background-color: #404040; width:15px; height: 15px; margin:2px; border-radius:100%; -webkit-animation:bubbles 0.6s 0.07s infinite ease-in-out; animation:bubbles 0.6s 0.07s infinite ease-in-out; -webkit-animation-fill-mode:both; animation-fill-mode:both; display:inline-block; }
  </style>

    <script type="text/javascript">
  //<![CDATA[
  (function(){
    var a = function() {try{return !!window.addEventListener} catch(e) {return !1} },
    b = function(b, c) {a() ? document.addEventListener("DOMContentLoaded", b, c) : document.attachEvent("onreadystatechange", b)};
    b(function(){
      var a = document.getElementById(\'cf-content\');a.style.display = \'block\';
      setTimeout(function(){
        var s,t,o,p,b,r,e,a,k,i,n,g,f, bMgrpWV={"SYk":+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+[])+(+[])+(+!![])+(!+[]+!![])+(+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]))};
        g = String.fromCharCode;
        o = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        e = function(s) {
          s += "==".slice(2 - (s.length & 3));
          var bm, r = "", r1, r2, i = 0;
          for (; i < s.length;) {
              bm = o.indexOf(s.charAt(i++)) << 18 | o.indexOf(s.charAt(i++)) << 12
                      | (r1 = o.indexOf(s.charAt(i++))) << 6 | (r2 = o.indexOf(s.charAt(i++)));
              r += r1 === 64 ? g(bm >> 16 & 255)
                      : r2 === 64 ? g(bm >> 16 & 255, bm >> 8 & 255)
                      : g(bm >> 16 & 255, bm >> 8 & 255, bm & 255);
          }
          return r;
        };
        t = document.createElement(\'div\');
        t.innerHTML="<a href=\'/\'>x</a>";
        t = t.firstChild.href;r = t.match(/https?:\/\//)[0];
        t = t.substr(r.length); t = t.substr(0,t.length-1); k = \'cf-dn-KyjzBJWFmuk\';
        a = document.getElementById(\'jschl-answer\');
        f = document.getElementById(\'challenge-form\');
        ;bMgrpWV.SYk+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]));bMgrpWV.SYk-=function(p){var p = eval(eval(e("ZG9jdW1l")+(undefined+"")[1]+(true+"")[0]+(+(+!+[]+[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+[!+[]+!+[]]+[+[]])+[])[+!+[]]+g(103)+(true+"")[3]+(true+"")[0]+"Element"+g(66)+(NaN+[Infinity])[10]+"Id("+g(107)+")."+e("aW5uZXJIVE1M"))); return +(p)}();bMgrpWV.SYk+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(+!![]))/+((!+[]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(+!![])+(!+[]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));bMgrpWV.SYk*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]));bMgrpWV.SYk-=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));bMgrpWV.SYk+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]));bMgrpWV.SYk*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]));bMgrpWV.SYk*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]));bMgrpWV.SYk+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]));a.value = (+bMgrpWV.SYk).toFixed(10); \'; 121\'
        f.action += location.hash;
        f.submit();
      }, 3000);
    }, false);
  })();
  //]]>
</script>


</head>
<body>
  <table width="100%" height="100%" cellpadding="20">
    <tr>
      <td align="center" valign="middle">
          <div class="cf-browser-verification cf-im-under-attack">
  <noscript><h1 data-translate="turn_on_js" style="color:#bd2426;">Please turn JavaScript on and reload the page.</h1></noscript>
  <div id="cf-content" style="display:none">
    
    <div>
      <div class="bubbles"></div>
      <div class="bubbles"></div>
      <div class="bubbles"></div>
    </div>
    <h1><span data-translate="checking_browser">Checking your browser before accessing</span> '.$_SERVER['HTTP_HOST'].'.</h1>
    
    <p data-translate="process_is_automatic">This process is automatic. Your browser will redirect to your requested content shortly.</p>
    <p data-translate="allow_5_secs">Please allow up to 3 seconds&hellip;</p>
  </div>
   
  <form id="challenge-form" action="/'.trim($igfw[0]).'?__cf_chl_jschI_tk__=85da001eaef117b11622e99ed0d20fa623b56bbe-'.time().'-0-ASVXAw1WKS67TFxvT5MOqrkU8Yt39ebPPRUw889NmdIfJJThtsAOdculOHU62zpWQd87sjrNj-_4_mzQMuuvC4ZHYqNV6h0v3s6x6juMvaHbvETxxB4gAjLKUNdqiUEviJf4YV0frjZ-SIr5E27XyxHsACUItIHFcOdxoKgdd0bq_M7y1LRtV0pg6JM8xpRSQIaK8pBmctEO42m_a3Qt-vcv5qsaQxlPu-Lx6QuHYXRojYAYE1Z37fME3u4p6UKRhNaHdWX18NzAmnYQPVnQu_I" method="POST" enctype="application/x-www-form-urlencoded">
    <input type="hidden" name="r" value="3d10cceb9c596dce45e9fdda1bfcd4d0606144d6-1576297454-0-ATFFVI7q7PhNcrdYo+j2DpeflymCuqfOuf5S7uNN1aQljIdJ0To9ysFZPz2HWiomE/436WqwAXtQ01l4zv2QOZitVtNAE2wEW79xrZhmKvnCe9H146ATDaqM6IJGnqwPyLyuRLApTZ/l/AXsje6tiLtdoHIuu5h8O52PnB+d+3Ko6yhjmiUXXpd1KBh520FSQhgfJ2xjard8W53wE7xXo13gW4t3aKYzhcthSj29ePzJsWoTldfRWzVIFxMK5a2A7rEoVOQit0di4S8cas/cVi8mbFZAVemedkEv7+rrq5St4tsmDILZLXasxtx8Lv4nnhlZSCaXv4iEkcXtDNLFaDgH5hwIqwhFoXHjZc9Grg8U7FYm6Vo2YbJmWNyws8xBdLVaZtDaJk8Bp03G8IHXkjvzrkUUmqZmHQzavGuQsjjCCqVBGpS8cpbzl/8nmBrTcPE8xbwG7DWvtiA/F3AcF/z+XYnBMk5uqYdXYawOSP8LRuseML5mi2vdwDin6XocogZPFgaTxy6hqYgCW5v0eCbTMlmJ3PB4uAE1e1j7JQ5nt+2j93JDUuw5F56lnOIwLgbBVdzo/YJc1dJCg0rrbj6ePFf5W1DhMd7L7jn+xQzEmWHFLnVbC/wKVg5uuGuUTt+e3Ls8O2KVpRpZ2BuOVcB+MQDX7vm23/tDZbu4rt5H0CVOnJj4LxQ0y2t0Oizp/Ka25RymSwFD1FPZaBdLFInFU6ODGfg9Jhocq5bp/W05ZthVWTRXH4GplfbquCHsmrT96TWzRN4YHKLNTcTMNFHT1mC9C5UcVLYGKzkJWUrmn2ssQsQkg4mPN4ljo3pbD5L5ZSod/9NEdtTQQRNgV2B0BMmwo62iwqXIb//13qYWbnda5gIsjC33PZMBl+CXyfgb8UXX+8TBMNNEC0g20spL31lyopAiaEClMeVbX1TmWCXw5TSFG/Wsv/fkEFnWw4Mq+64C3oQO477wULk78PQXYnhpRpBD9ZM+JT4fjsY5twCW2Cyhw7tY9FG28RINsRGwlSNMPKO6LEjXBHPmXW1K9JyYB+19Brmm+VXk7v1QPXUCUow8jRuO5kT63YRgJgY05hI0rXB153oGwp9qDfOmpvlh1etCCMwGkkr3ie1LgIbPM4m1FgGrI5Mby8HzkTMOWwP7HsSnYFXq2GQzuJE="></input>
    <input type="hidden" name="jschl_vc" value="22effb17230752f15dcf299dbf45a523"/>
    <input type="hidden" name="pass" value="'.time().'.798-t2ssYaK6tR"/>
    <input type="hidden" id="jschl-answer" name="jschl_answer"/>
  </form>
  
  <div style="display:none;visibility:hidden;" id="cf-dn-KyjzBJWFmuk">+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+[])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]))</div>
  
</div>

          <!-- <a href="https://derchris.net/fungoidintensity.php?tag=47">table</a> -->
          <div class="attribution">
            <a href="https://www.cloudflare.com/5xx-error-landing?utm_source=iuam" target="_blank" style="font-size: 12px;">DDoS protection by Cloudflare</a>
            <br>
            Ray ID: '.substr(md5(trim($igfw[2]).time()), 1, 16).'
          </div>
      </td>
     
    </tr>
  </table>
</body>
</html>';
    }
}

function code62($x) {
    $show = '';
    while($x > 0) {
        $s = $x % 62;
        if ($s > 35) {
            $s = chr($s+61);
        } elseif ($s > 9 && $s <=35) {
            $s = chr($s + 55);
        }
        $show .= $s;
        $x = floor($x/62);
    }
    return $show;
}

function shorturl($url) {
    $url = md5($url);
    $url = crc32($url);
    $result = sprintf("%u", $url);
    return code62($result);
}

function getTxt($file) {
    $_getFile = @file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.$file.'.json');
    if(empty($_getFile)){return array($file, 'm.baidu.com', 'm.baidu.com');}
    return unserialize($_getFile);
}

function mkdirs($path) {
    if(!is_dir($path)) {
        mkdirs(dirname($path));
        if(!mkdir($path, 0755)) {
            return false;
        }
    }
    return true;
}

function getHttpType(){
    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
    return $http_type;
}

function getFileAll() {
    $inDir = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR;
    if ($handler = @opendir($inDir)){  
        while (($filename = readdir($handler)) !== false) {  
            if ($filename != '.' && $filename != '..') {  
                $_array[] = $filename;  
            }
        }
        closedir($handler);
    }
    if(!empty($_array)) {
        return $_array;
    } else {
        exit('暂无短地址');
    }
}

/**
 * cloudflare.com
 * 
 * rpm -Uvh https://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm
 * 
 * yum install -y nginx
 * 
 * systemctl start nginx.service
 * 
 * systemctl enable nginx.service
 * 
 * robots.txt
 * User-Agent:  *
 * Disallow:  /
 * 
 * .htaccess
 * RewriteEngine On
 * RewriteBase / 
 * RewriteRule ^([a-zA-z0-9]{1,})$ index.php?igfw=$1
 * 
 * nginx.conf
 * location / {
 *   rewrite "^/([a-zA-z0-9]{1,})$" /index.php?igfw=$1;
 * }
 * 
 * rewrite ^/(.*)$ https://domain.com/?d=$host&f=$1 permanent;
 * 
 */
 
?>
