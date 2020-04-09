<!doctype html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8">
<title>{$title}</title>
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery.cookie.min.js"></script>
<script src="/static/js/jsencrypt.min.js"></script>
</head>
<body>
<h1>{$title}</h1>

    <input id="testFile" type="file">
    <hr>
    <img id="testImg" style="max-height: 300px; height: 8em; min-width:8em;">
    <hr>
    <textarea id="testArea" style="display: block; width: 100%;height: 30em;"></textarea>
    <input id="btnTest" type="button" value="提交base" />
    <script>
        $("#testPhone").click(function () {
            $("#testFile").click();
        });
 
        $("#testFile").change(function () {
            run(this, function (data) {
                $('#testImg').attr('src', data);
                $('#testArea').val(data);
            });
        });
 
        $("#btnTest").click(function () {
            $.ajax({
                url: "/usercenter/testbaseaction",
                type: "post",
                dataType: "json",
                data: {
                    "content": $("#testArea").val(),
                },
                async: false,
                success: function (result) {
                    if (result.Code == 200) {
                        alert(result.Data);
                    } else {
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
                    /*图片转Base64 核心代码*/
                    var file = input_file.files[0];
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
                } catch (e) {
                    alert('图片转Base64出错啦！' + e.toString())
                }
            }
        }
    </script>

<script type="text/javascript">
// RSA 数据加密
$(function () {
var data = 'my message';
var publicKey = "{$publicKey}"
var publicKeyArr = [];
var publicKeyn = 64;
var publicKeyReg = new RegExp("-","g");
var publicKey = publicKey.replace(publicKeyReg,"");
var publicKey = publicKey.replace("BEGIN PUBLIC KEY","");
var publicKey = publicKey.replace("END PUBLIC KEY","");
for (var publicKeyi = 0, publicKeyl = publicKey.length; publicKeyi < (publicKeyl/publicKeyn); publicKeyi++) {
var publicKeya = publicKey.slice(publicKeyn*publicKeyi, publicKeyn*(publicKeyi+1));
publicKeyArr.push(publicKeya);}
var publicKey = "-----BEGIN PUBLIC KEY-----\n"+publicKeyArr.join("\n")+"\n-----END PUBLIC KEY-----";
var js_encrypt = new JSEncrypt();
js_encrypt.setPublicKey(publicKey);
var encrypted = js_encrypt.encrypt(data);
console.log(encrypted);
});
</script>

</body>
</html>
