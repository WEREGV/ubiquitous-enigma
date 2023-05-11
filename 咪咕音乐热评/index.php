
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <title>咪咕音乐热评</title>
    <!--强制极速模式模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动适配-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--UC强制全屏-->
    <meta name="full-screen" content="yes">
    <!--UC应用模式-->
    <meta name="browsermode" content="application">
    <!--QQ强制全屏-->
    <meta name="x5-fullscreen" content="true">
    <!--QQ应用模式-->
    <meta name="x5-page-mode" content="app">
    <!--删除默认的苹果工具栏和菜单栏-->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--Cache-Control头域-->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <!--网站关键词-->
    <meta name="keywords" content="">
    <!--网站描述-->
    <meta name="description" content="">
    <!--favicon-->
    <link rel="shortcut icon" href="https://webimg.kgimg.com/a9affa130c01e3e05399eb1ec92c6665.png?<?php echo time(); ?>">
    <!--主体css-->
    <link rel="stylesheet" href="./css/baoguo.css?<?php echo time(); ?>">
    <!--loading-->
    <link rel="stylesheet" href="./css/loading.css?<?php echo time(); ?>">
    <!--baoguo_icon字体图标-->
    <!-- <link rel="stylesheet" type="text/css" href="./plugins/baoguo_icon/baoguo_icon.css"> -->
</head>

<body>
<div class="box">
    <div id="search_button">
        <!--歌曲封面-->
        <div id="pic"><img src="https://q1.qlogo.cn/g?b=qq&nk=10001&s=140"></div>
        <!--播放按钮-->
        <div id="PlayerBtn"><img src="./images/play.png"></div>
    </div>
    <div id="info-top">
        <!--歌曲名-->
        <div id="infoSong"></div>
        <!--歌曲作者-->
        <div id="infoSongAuther"></div>
        <!--水波-->
        <div class="watertiv">
            <div class="water_1"></div>
            <div class="water_2"></div>
        </div>
    </div>
    <div class="info">
        <!--评论-->
        <div id="info-tag"></div>
    </div>
    <!--切换下一条-->

        <div id="next" style="font-size: 13px;">切换下一首歌曲</div>
<br/>
    <!--包裹开源-->
    <!--版权-->
    <div id="about">
    关于：<a href="https://jq.qq.com/?_wv=1027&k=Y1yhB6Mb" style="color:#0000FF">点击链接加音乐交流q群聊</a>

    </div><br>
</div>
<!--audio-->
<div id="music" style="display: none"></div>
<!--背景-->
<div class="bgImage"></div>
<div class="bgImagePattern"></div>
<!--loading-->
<div class="loading-baoguo">
<div class="loading-body"></div>
  <div class="loading">
  <div class="loading-light"></div>
  <div class="loading-track"></div>

</div>
</div>
<!--jQuery-->
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
<!--核心js-->
<script type="text/javascript" src="./js/baoguo.js?<?php echo time(); ?>"></script>
</body>

</html>