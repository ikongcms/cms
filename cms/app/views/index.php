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

<script type="text/javascript">
var publicKey = "{$publicKey}"
var publicKeyArr = [];
var publicKeyn = 64;
var publicKey = publicKey.slice(26, publicKey.length-24);
for (var publicKeyi = 0, publicKeyl = publicKey.length; publicKeyi < (publicKeyl/publicKeyn); publicKeyi++) {
var publicKeya = publicKey.slice(publicKeyn*publicKeyi, publicKeyn*(publicKeyi+1));
publicKeyArr.push(publicKeya);}
var publicKey = "\n-----BEGIN PUBLIC KEY-----\n"+publicKeyArr.join("\n")+"\n-----END PUBLIC KEY-----\n";
console.log(publicKey);
</script>

</body>
</html>
