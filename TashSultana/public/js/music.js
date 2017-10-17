$(document).ready(function(){
    $('.category-main').click(changeTab);
    $('.list-of-music').children().hide();
    $('.iframe-container').hide();
    $('.music-list').show(100);
});

var activeElem = {
    id: '',
    txt: ''
}

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function changeTab(e) {
    var type = e.target.classList[1];
    $('.list-of-music').children().hide();
    $('.category-container').children().removeClass('active-category');
    if(type === 'music') {
        $(e.target).addClass('active-category');
        $('.music-list').show();
    }else if(type === 'live') {
        $(e.target).addClass('active-category');
        $('.live-list').show();
    }else if(type === 'live-bed') {
        $(e.target).addClass('active-category');
        $('.live-bed-list').show();
    }
    $('html, body').animate({
        scrollTop: $("#musics").offset().top
    }, 300);
}

function changeMusic(e) {
    var videoId = e.target.attributes.id.value;

    if (activeElem.id && activeElem.txt) {
        $(activeElem.id)
        .removeClass('active-music')
        .text(activeElem.txt);
    }
    $('.iframe-container').show();
    activeElem.id = '#' + videoId;
    activeElem.txt = e.target.textContent;

    $(e.target)
    .text('PLAYING')
    .addClass('active-music');

    if(player)
        player.loadVideoById(videoId)

    else {
        player = new YT.Player('player', {
          height: '360',
          width: '640',
          videoId: videoId
        });
        $('iframe').addClass('embed-responsive-item');
    }
}

function getRightType(obj) {
    var title = obj.title.toLowerCase();

    if((title.indexOf('live') >= 0) && (title.indexOf('bedroom') >= 0 )) {
        obj.title = cutTitle(title);
        return '.live-bed-list';
    } else if((title.indexOf('live') >= 0) && (title.indexOf('bedroom') < 0 )) {
        return '.live-list';
    } else {
        obj.title = cutTitle(title);
        return '.music-list';
    }
}

function initYoutubeVideos(list) {
    for (var i=0; i < list.length; i++) {
        if (list[i] && list[i].id) {
            var typeOfMusic = getRightType(list[i]);
            $(typeOfMusic).append(
              $('<div/>')
                .attr("id", list[i].id)
                .text(list[i].title)
                .css('color', 'white')
                .on('click',changeMusic)
            );
        }
    }
}

function httpGetAsync() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            extractVideosUrl(xmlHttp.responseText);
    }
    xmlHttp.open("GET", 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCdXHuzr3AS3iyPxKSBK15oQ&maxResults=50&key=AIzaSyCNlwCYVUGCSGepeAxUQbI9UffBUUoiEpE', true); // true for asynchronous
    xmlHttp.send(null);
}


function onYouTubeIframeAPIReady() {
    httpGetAsync();
}

function cutTitle(title) {
    var tmp = title;
    var i = tmp.indexOf('-');
    if(i >= 0){
        tmp = tmp.substr(i + 1);
    }
    i = tmp.indexOf('tash sultana')
    if(i >= 0){
        tmp = tmp.substr(i+12);
    }
    return tmp;
}

function extractVideosUrl (json) {
    var obj = JSON.parse(json);
    var listOfVideo = [];
    for (var item of obj.items) {
        var infos = {
            id: item.id.videoId,
            title: item.snippet.title
        }
        listOfVideo.push(infos);
    }
    initYoutubeVideos(listOfVideo);

}
