<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tash Sultana</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
<style>
body{
    margin:0;
    padding: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float:none;
    display:inline-block;
    border-right: 1px solid #bbb;
    text-align:center;
    width:15%;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

#nav {
    text-align:center;
}

#col {
  margin-left: 0px;
  margin-right: 0px;
}

#col-side {
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 70px;
}

.contenu {
  background-color: #333
}

.category-container {
    margin-bottom: 20px;
    text-align: center;
}

.category-main {
    height: 150px;
    width: 250px;
    border: 1px black solid;
    display: inline-block;
    color: white;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    -webkit-transition: all 200ms ease-in;
    -ms-transition: all 200ms ease-in;
    -moz-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
}

.category-main:active {
    filter: brightness(50%);
}
.music {
    padding-top: 50px;
    background-size: cover;
    background-image: url('./images/music-music.jpg');
}

.live {
    padding-top: 50px;
    background-size: cover;
    background-image: url('./images/music-live.jpg');
}

.live-bed {
    padding-top: 50px;
    background-size: cover;
    background-image: url('./images/music-bedroom.jpg');
}

.player-container {
    width: 700px;
    margin-right: auto;
    margin-left: auto;
    display: block;
}

.owl-prev {
    width: 85px;
    height: 85px;
    top: 50%;
    margin-left: -100px;
    position: absolute;
    border-radius: 50%;
    background-color: white;
    background-image: url('./images/arrow-prev.jpg');
    background-size: 50px;
    background-position: 18px;
    background-repeat: no-repeat;
}

.owl-next {
    width: 85px;
    height: 85px;
    top: 50%;
    right: -100px;
    position: absolute;
    border-radius: 50%;
    background-color: white;
    background-image: url('./images/arrow-next.jpg');
    background-size: 50px;
    background-position: 20px;
    background-repeat: no-repeat;
}
.music-list div, .live-bed-list div, .live-list div{
    width: 340px;
    height: 55px;
    padding-top: 8px;
    font-size: 15px;
    font-weight: 500;
    border-radius: 500px;
    margin-bottom: 8px;
    margin-right: 8px;
    vertical-align: middle;
    text-align: center;
    transition: all 200ms ease-in;
    background: hsla(0,0%,9%,.7);
    border: 0;
    box-shadow: inset 0 0 0 2px #a0a0a0;
    cursor: pointer;
    display: inline-block;
    text-transform: uppercase;
}
.music-list div:hover{
    box-shadow: inset 0 0 0 2px #fff, 0 0 0 1px transparent;
    transform: scale(1.05);
}

.iframe-container {
    margin-bottom: 15px;
}

.active-music {
    background-color: #1db954 !important;
    box-shadow: none !important;
}

.active-txt {
    display: block !important;
    pointer-events: none;
}

.hide-txt {
    display: none;
}

.live-list div{
    display: inline-block;
}
.live-bed-list div{
    display: inline-block;
}
#player {
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    display: block;
}

</style>
</head>
<body style="background-image:url(BackgroundTS.png)">
<div class="row">
  <div class="span12"> <img src="TSTitle.png" alt="TashSultanaTitle" style="width: 504px; height: 76px; object-fit: cover; text-align: center; margin-right: auto; margin-left: auto; display: block; margin-bottom: 10px;"> </div>
</div>

<div class="col-md-2 col-md-offset-2" id="col-side">
<iframe src="https://open.spotify.com/embed?uri=spotify:album:7JV505O1I9Sc3uHtFEFtkf" width="250" height="380" frameborder="0" allowtransparency="true"></iframe>
</div>


  <div class="col-md-8 col-md-offset-2" id="col">

    <nav class="navbar navbar-default" id="nav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <?php /*<div class="navbar-header">
        Bonjour
      </div>*/ ?>
  <div class="collapse navbar-collapse" style="padding-right:0px; padding-left:0px">
    <!-- Brand and toggle get grouped for better mobile display -->
    <ul role="tablist">
      <li role="presentation"><a href="#home"  aria-controls="home" role="tab" data-toggle="tab">Home<span class="sr-only">(current)</span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" class="active" aria-controls="music" data-toggle="tab" role ="tab" href="#music">Music <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#section41">Section 4-1</a></li>
          <li><a href="#section42">Section 4-2</a></li>
        </ul>
      </li>
      <li role="presentation"><a href="#tour" aria-controls="tour" role="tab" data-toggle="tab">Tour</a></li>
      <li role="presentation"><a href="#store" aria-controls="store" role="tab" data-toggle="tab">Store</a></li>
      <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
      <li role="presentation"><a href="#livre" aria-controls="livre" role="tab" data-toggle="tab">Livre d'or</a></li>
    </ul>
</div>
</nav>

<div class="center">
  <div class="tab-content">
    <div id="home" class="tab-pane fade   contenu">
okokookokokko
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
    </div>

    <div id="music" class="tab-pane fade in active contenu">
        <!-- MUSIC A RECOPIER DANS UN FICHIER A PART -->
        <div class="category-container" >
            <div class="category-main music">
                Music
            </div>
            <div class="category-main live">
                Live
            </div>
            <div class="category-main live-bed">
                Live Bedrooms
            </div>
        </div>
        <div class="iframe-container embed-responsive embed-responsive-16by9">
            <div id="player"></div>
        </div>
        <div class="player-container">
            <div class="list-of-music">
                <div class="music-list"></div>
                <div class="live-list"></div>
                <div class="live-bed-list"></div>
            </div>

        </div>



        <!-- MUSIC A RECOPIER DANS UN FICHIER A PART -->
    </div>
    <div id="tour" class="tab-pane fade contenu">
        <!-- TOUR A RECOPIER DANS UN FICHIER A PART -->
        <div>

        </div>

        <!-- TOUR A RECOPIER DANS UN FICHIER A PART -->
    </div>
    <div id="store" class="tab-pane fade contenu">
      store
    </div>
    <div id="contact" class="tab-pane fade contenu">
      contact
    </div>
    <div id="livre" class="tab-pane fade contenu">
      livre
    </div>
  </div>
</div>

</div>

<div class="col-md-2 col-md-offset-2" id="col-side">
Facebook logo<br/>
Twitter logo<br/>
Youtube logo<br/>
Instagram logo<br/>
...
</div>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#myTab a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });

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
        $('.list-of-music').children().hide(100);
        if(type === 'music') {
            $('.music-list').show(100);
        }else if(type === 'live') {
            $('.live-list').show(100);
        }else if(type === 'live-bed') {
            $('.live-bed-list').show(100);
        }
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
        console.log(tmp);
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

    </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
</html>
