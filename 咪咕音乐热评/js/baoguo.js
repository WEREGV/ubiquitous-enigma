//网站标题
var webTitle = $('title').text();

//加载歌曲
loading();

//加载歌曲函数
function loading() {
    $.ajax({
        type: 'GET',
        url: 'api.php',
        data: 'cid=27186466',
        dataType: 'json',
        success: function (baoguo) {
            if (baoguo['code'] == 200) {
            
                $('#pic').html('<img src="' + baoguo.data.songPic + '?param=150y150">');
                $('#infoSong').html(baoguo.data.songName);
                $('#infoSongAuther').html('歌手-' + baoguo.data.songAuthor);
                 $('.bgImage').css({ 'background': 'url(' + baoguo.data.songPic + ') no-repeat center' });

                //如果歌曲链接失效则不显示播放按钮
                if (baoguo.data.songUrl) {
                    $('#music').html('<audio id="player" src="' + baoguo.data.songUrl + '" controls="controls"></audio>')
                    $('#PlayerBtn').html('<img src="./images/play.png">');
                }

                // for (i = 0; i < 1; i++) {
                //     html = '<div id="info-content">';
                //     html += baoguo.content[i].content;
                //     html += '</div>';
                //     $('#info-tag').append(html);
                // }
                if(baoguo.data.pimg){
                $('#info-tag').html('<img width="50%" src="'+baoguo.data.pimg+'">'+'<div id="info-content">'+baoguo.data.content+'</div>');
                }else{
                $('#info-tag').html('<div id="info-content">'+baoguo.data.content+'</div>');
                }
                
                
                
                $('.loading-baoguo').hide()
                
                cookiePlayer()
            }
        }
    });
}

//切换下一首
$('#next').on('click', function () { next() });

//切换下一首函数
function next() {
    $('title').text(webTitle)
    $('.loading-baoguo').show();
    
    loading();
    // $('#info-content').remove()
    // cookiePlayer()
}

//播放音乐
$('#PlayerBtn').on('click', function () { isPlayer() });

//判断是否播放
function isPlayer() {
    var audio = $('#player')[0];
    //是否暂停
    if (audio.paused) {
        //播放
        audio.play();
        $('title').text('正在播放-♫' + $('#infoSong').text())
        setCookie('player', '1')
        $('#pic img').css({ '-webkit-animation': 'baoguo infinite 5s linear', 'animation': 'baoguo infinite 10s linear' });
        $('#PlayerBtn').html('<img src="./images/pause.png">');
    } else {
        //暂停
        audio.pause();
        $('title').text(webTitle)
        setCookie('player', '0')
        $('#pic img').removeAttr('style', '');
        $('#PlayerBtn').html('<img src="./images/play.png">');
    }

    //播放完毕切换下一首
    audio.loop = false;
    audio.addEventListener('ended', function () { next() }, false);
}

//cookies记忆播放
function cookiePlayer() {
    if (getCookie('player') == 1) setTimeout(function () { isPlayer(); }, 1000);
}

//写入cookies函数
function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + '=' + escape(value) + '; expires = ' + exp.toGMTString();
}

//读取cookies函数
function getCookie(name) {
    var arr, reg = new RegExp('(^| )' + name + '=([^;]*)(;|$)');
    if (arr = document.cookie.match(reg)) return unescape(arr[2]);
    else return null;
}

//删除cookies函数
function delCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getCookie(name);
    if (cval !== null) document.cookie = name + '=' + cval + '; expires = ' + exp.toGMTString();
}