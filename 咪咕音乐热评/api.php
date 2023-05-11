<?php
$url = @$_SERVER['REQUEST_URI'];
$url = explode('php',$url)[1];
echo $ip=get_curl("http://43.140.245.243:1080/migrp/api.php".$url);
function get_curl($url, $post = 0, $referer = 0, $cookie = 0, $header = 0, $ua = 0, $nobaody = 0)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
$httpheader[] = "Accept: application/json";
$httpheader[] = "Accept-Encoding: gzip";
$httpheader[] = "Accept-Language: zh-CN,zh;q=0.8";
$httpheader[] = "Connection: keep-alive";
curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
if ($post) {
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
if ($header) {
curl_setopt($ch, CURLOPT_HEADER, true);
}
if ($cookie) {
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
}
if ($referer) {
curl_setopt($ch, CURLOPT_REFERER, $referer);
}
if ($ua) {
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
} else {
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 7.0; MHA-AL00 Build/HUAWEIMHA-AL00; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.134 Mobile Safari/537.36 LeBrowser/7.4.0");
}
if ($nobaody) {
curl_setopt($ch, CURLOPT_NOBODY, 1);
}
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$ret = curl_exec($ch);
curl_close($ch);
return $ret;
}
?>