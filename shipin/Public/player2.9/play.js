﻿document.write('<style>.FF{background:#000000;font-size:13px;color:#F6F6F6;margin:0px;padding:0px;position:relative;overflow:hidden;width:100%;height:100%;}.FF table{text-align:center;width:100%;}.FF a{color:#F6F6F6;text-decoration:none}.FF a:hover{text-decoration:underline;}.FF a:active{text-decoration:none;}.FF ul,.FF li,.FF h2{margin:0px;padding:0px;list-style:none}.FF .top{text-align:center;width:100%}.FF #topleft,.FF #topright{width:100px;}.FF #topleft{text-align:left;padding-left:5px}.FF #topright{text-align:right;padding-right:5px}.FF #playleft{width:100%;height:100%;overflow:hidden;}.FF #playright{font-family:"宋体";}.FF #list{width:120px;overflow:auto;overflow-x:hidden;scrollbar-face-color:#2c2c2c;scrollbar-arrow-color:#fff;scrollbar-track-color:#a3a3a3;scrollbar-highlight-color:#2c2c2c;scrollbar-shadow-color:#adadad;scrollbar-3dlight-color:#adadad;scrollbar-darkshadow-color:#48486c;scrollbar-base-color:#fcfcfc;text-align:left}.FF #list div{color:#F6F6F6;padding-left:2px;}.FF #list span{height:21px;line-height:21px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}.FF #list span a{background:url('+ff_root+'Public/images/player/list.gif) no-repeat 2px 5px;padding-left:15px;display:block;font-size:12px}.FF #list h2{cursor:pointer;font-size:13px;font-weight:normal;height:25px;line-height:25px;background:#333;color:#fff;padding-left:5px;margin-bottom:1px}.FF #list .h2{color:#666666}.FF #list .h2_on{color:#FFFFFF}.FF #list .ul_on{display:block}.FF #list .list_on{color:#FF0000}</style>');
var video_player = JSON.parse(player_urls);
document.write('<div id="adPlayer" style=""></div><div class="FF"><div id="idVideo" style="margin: 0 auto;"></div><script>var flashChecker = function() {var hasFlash = 0;var flashVersion = 0;if (document.all) {var swf = new ActiveXObject(\'ShockwaveFlash.ShockwaveFlash\');if (swf) {hasFlash = 1;VSwf = swf.GetVariable("$version");flashVersion = parseInt(VSwf.split(" ")[1].split(",")[0]);}} else {if (navigator.plugins && navigator.plugins.length > 0) {var swf = navigator.plugins["Shockwave Flash"];if (swf) {hasFlash = 1;var words = swf.description.split(" ");for (var i = 0; i < words.length; ++i) {if (isNaN(parseInt(words[i]))) continue;flashVersion = parseInt(words[i]);}}}}return {f: hasFlash,v: flashVersion};};var fls = flashChecker();var s = "";if (!fls.f) {var lheight = ff_height+26/2;document.getElementById("idVideo").innerHTML=\'<p style="text-align:center;line-height:\'+lheight+\'px;"><a href="https://get.adobe.com/cn/flashplayer/" target="_blank">您的浏览器未加载Flash插件，现在安装？</a></p>\';}</script><script src="'+ff_root+'Public/ckplayer/ckplayer.min.js" type="text/javascript"></script><div id="player_video" class="player_video" style="width:100%;height:100%"></div><script type="text/javascript">var videoObject = {container: \'.player_video\',variable: \'player\',autoplay:false,mobileCkControls:true,mobileAutoFull:false,video:\''+video_player['Data'][0]['playurls'][player_pid-1][1]+'\'};var player=new ckplayer(videoObject);</script></div>');
//console.log();


    