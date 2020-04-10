<!doctype html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8">
<title>{$title}</title>
<link rel="stylesheet" href="/static/css/jsequencing.css" />
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery.cookie.min.js"></script>
<script src="/static/js/jsencrypt.min.js"></script>
<script src="/static/js/jsequencing.js"></script>
</head>
<body>
<h1>{$title}</h1>

<input id="se_token" type="hidden" value="{$token}" class="btn btn-danger radius" />
<input id="pubKey" type="hidden" value="{$publicKey}" class="btn btn-danger radius" />
<label><span class="btn btn-danger radius">选择文件</span><input id="uploader" type="file" multiple="multiple" accept="image/*" style="display: none"></label>
<input id="uploadel" type="button" value="删除图片" class="btn btn-danger radius" />
<input id="uploadto" type="button" value="提交图片" class="btn btn-danger radius" />
<div class="cl imglist" id="img_ul"></div>

<script>
$(function () {
    var imgulp = new Jsequencing({
        listid:"img_ul",//页面图片列表ID
        thumbherf:"",//列表图片前缀
        bigherf:"",//原图前缀[同列表图相同时，省略]
        jsondata:true,
        imgsrcarr:[//图片数据数组
            //{src:"a1.png?id=0",title:"客厅0"},
        ],
    });
    $("#uploadel").click(function () {
        imgulp.datadel();
    });
    $("#uploader").change(function () {
        run(this, function (data) {
	        imgulp.addimgarr([{src:data}]);
        });
    });
    $("#uploadto").click(function () {
        $.ajax({
            url: "", // POST 数据接收地址
            type: "POST",
            dataType: "json",
            data: {
                "content": JSON.stringify(imgulp.getnewarr()),
            },
            async: false,
            success: function (result) {
                if (result.Code == 200) {
                    alert(result.Data);
                } else {
                    alert(result.Data);
                }
            }
        });
    });
    function run(input_file, get_data) {
        /*input_file：文件按钮对象*/
        /*get_data: 转换成功后执行的方法*/
        if (typeof (FileReader) === 'undefined') {
            alert("抱歉，你的浏览器不支持 FileReader，不能将图片转换为Base64，请使用现代浏览器操作！");
        } else {
            try {
                for(var i = 0; i<input_file.files.length; i++){
                    /*图片转Base64 核心代码*/
                    var file = input_file.files[i];
                    //这里我们判断下类型如果不是图片就返回 去掉就可以上传任意文件
                    if (!/image\/\w+/.test(file.type)) {
                        alert("请确保文件为图像类型");
                        return false;
                    }
                    var reader = new FileReader();
                    reader.onload = function () {
                        get_data(this.result);
                    }
                    reader.readAsDataURL(file);
                }
            } catch (e) {
                alert('图片转Base64出错啦！' + e.toString());
            }
        }
    }
    function get_RsaData(get_data) {
        var publicKey = $("#pubKey").val();
        var publicKeyArr = [];
        var publicKeyn = 64;
        var publicKeyReg = new RegExp("-","g");
        var publicKey = publicKey.replace(publicKeyReg,"");
        var publicKey = publicKey.replace("BEGIN PUBLIC KEY","");
        var publicKey = publicKey.replace("END PUBLIC KEY","");
        for (var publicKeyi = 0, publicKeyl = publicKey.length; publicKeyi < (publicKeyl/publicKeyn); publicKeyi++) {
            var publicKeya = publicKey.slice(publicKeyn*publicKeyi, publicKeyn*(publicKeyi+1));
            publicKeyArr.push(publicKeya);
        }
        var publicKey = "-----BEGIN PUBLIC KEY-----\n"+publicKeyArr.join("\n")+"\n-----END PUBLIC KEY-----";
        var js_rasEncrypt = new JSEncrypt();
        js_rasEncrypt.setPublicKey(publicKey);
        var rasEncrypted = js_rasEncrypt.encrypt(get_data);
        console.log(rasEncrypted);
        return rasEncrypted;
    }
});
</script>

</body>
</html>
