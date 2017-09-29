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
}

.music {
    padding-top: 50px;
    background-color: red;
}

.live {
    padding-top: 50px;
    background-color: blue;
}

.live-bed {
    padding-top: 50px;
    background-color: green;
}

.player-container {
    width: 500px;
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
#music {

}

#player {

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
    <div id="home" class="tab-pane fade in active contenu">
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

    <div id="music" class="tab-pane fade contenu">
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

        <div class="player-container">
            <div class="owl-carousel">
                <!-- <div class="music-player">
                    <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/XGSy3_Czz8k">
                    </iframe>
                </div>
                <div class="music-player">
                    <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/XGSy3_Czz8k">
                    </iframe>
                </div>
                <div class="music-player">
                    <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/XGSy3_Czz8k">
                    </iframe>
                </div> -->


            </div>`
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

        $( ".owl-next" ).empty();
        $( ".owl-prev" ).empty();
    });

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    function initYoutubeVideos(list) {
        for (var i=0; i < list.length; i++) {
            if (list[i]) {
                var classCount = 'music' + i;
                $('.owl-carousel').append(
                  $('<div/>')
                    .attr("id", classCount)
                );

                player = new YT.Player('music1', {
                    width: '500px',
                    videoId: 'list[i]',
                    events: {}
                });
            }
        }
        $(".owl-carousel").owlCarousel({
            center: true,
            items: 1,
            nav: true,
            video:true,
            infinite: true,
            margin: 30
        });

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

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {

    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
      if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
        }
    }
    function stopVideo() {
      player.stopVideo();
    }

    function extractVideosUrl (json) {
        var obj = JSON.parse(json);
        console.log(obj);
        var listOfVideo = [];
        for (var item of obj.items) {
            listOfVideo.push(item.id.videoId);
        }
        initYoutubeVideos(listOfVideo);

    }



    </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
</html>
