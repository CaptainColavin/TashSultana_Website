<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tash Sultana</title>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>

<!--<link rel="stylesheet" type="text/css" href="./css/about.css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- css import-->
<link rel="stylesheet" type="text/css"  href="./css/countdown.css">
<link rel="stylesheet" type="text/css"  href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/contact.css">
<link rel="stylesheet" type="text/css" href="./css/music.css">

</head>

<body style="background-image:url(BackgroundTS.png); background-repeat: no-repeat; background-size: cover;">
<div class="row">
  <div class="span12"> <img src="TSTitle.png" alt="TashSultanaTitle" style="width: 504px; height: 76px; object-fit: cover; text-align: center; margin-right: auto; margin-left: auto; display: block; margin-bottom: 10px;"> </div>
</div>
<div class="row">
  <div class="container-fluid">

<div class="col-md-2 col-md-offset-2" id="col-side">
  <iframe src="https://open.spotify.com/embed?uri=spotify:album:7JV505O1I9Sc3uHtFEFtkf" width="250" height="380" frameborder="0" allowtransparency="true"></iframe>
  <br/>
  <iframe src="https://open.spotify.com/embed?uri=spotify:album:00yAwDfu7JLRlhvHSchMzu" width="250" frameborder="0" allowtransparency="true"></iframe>
</div>


  <div class="col-md-8 col-md-offset-2" id="col">
    <nav class="my_nav" id="nav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <?php /*<div class="navbar-header">
        Bonjour
      </div>*/ ?>
    <!-- Brand and toggle get grouped for better mobile display -->
    <ul class="topmenu" role="tablist">
      <li role="presentation"><a href="#home" class="active" aria-controls="home" role="tab" data-toggle="tab">Home<span class="sr-only">(current)</span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" aria-controls="music" data-toggle="tab" role ="tab" href="#music">Music <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#section41">Section 4-1</a></li>
          <li><a href="#section42">Section 4-2</a></li>
        </ul>
      </li>
      <li role="presentation"><a href="#tour" aria-controls="tour" role="tab" data-toggle="tab">Tour</a></li>
      <li role="presentation"><a href="https://24hundred.net/collections/tash-sultana?Tash+Sultana+Store" target="_blank">Store</a></li>
      <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
      <li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
      <li role="presentation"><a href="#livre" aria-controls="livre" role="tab" data-toggle="tab">Livre d'or</a></li>
    </ul>
</nav>

<?php
  $json = file_get_contents('http://api.songkick.com/api/3.0/artists/5112228/calendar.json?apikey=5OnUMhFOovUJseOG');

  $array = json_decode($json);

  $tours=array();
  foreach ($array->resultsPage->results->event as $key => $value) {
      $tours[$key]=$value;
  }

  function TimeFormat($date) {
    $time = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date);
    $raw = $time->format(DateTime::RFC850);

    return $raw;
  }
?>

<div class="center">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active contenu">

      <div class="bgimg">
        <div class="top">
          <h1 style="background-color: rgba(201, 201, 201, 0.16); margin-right:30%; margin-left:30%;">Next Concert</h1>
          <p style="background-color: rgba(201, 201, 201, 0.16); margin-top: 20px; margin-right:40%; margin-left:40%;"><?= $tours[0]->venue->displayName ?></p>
          <p style="background-color: rgba(201, 201, 201, 0.16); margin-right:35%; margin-left:35%;"><?= $tours[0]->location->city ?></p>
          <p style="background-color: rgba(201, 201, 201, 0.16); margin-right:30%; margin-left:30%;"><?= TimeFormat($tours[0]->start->datetime); ?></p>
        </div>
        <div class="middle">
          <ul style="background-color: rgba(201, 201, 201, 0.16); margin-right:15%; margin-left:15%;">
            <li id="days" class="circle">00 Days</li>
            <li id="hours" class="circle">00</li>
            <li id="minutes" class="circle">00</li>
            <li id="seconds" class="circle">00</li>
          </ul>
          <ul style="background-color: rgba(201, 201, 201, 0.16); margin-right:15%; margin-left:15%;">
            <li class="countdownValues">Days</li>
            <li class="countdownValues">Hours</li>
            <li class="countdownValues">Minutes</li>
            <li class="countdownValues">Seconds</li>
          </ul>
        </div>
        <div class="bottom"><a href="https://www.songkick.com/artists/5112228-tash-sultana" target="_blank"><button type="button" class="button button1">Buy Ticket</button></a></div>
      </div>
      <hr>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="youtube_video" width="1100" height="620" frameborder="0" allowfullscreen></iframe>
      </div>
      <hr>
      <h2>Last Tash Sultana's Song : Mystik</h2>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="1100" height="620" src="https://www.youtube.com/embed/NAlt1aWdfe4" frameborder="0" allowfullscreen></iframe>
      </div>


    </div>

    <div id="music" class="tab-pane fade contenu">
        <?php
        include("music.php");
        ?>
    </div>

    <div id="tour" class="tab-pane fade contenu">
      <h1>Tours</h1>
      <br/>
      <br/>
<div class="table-responsive">
<table class="table table-striped table-data">
<tr>
<th>Place</th>
<th>City</th>
<th>Time</th>
<th>Buy Ticket</th>
</tr>

<?php foreach($tours as $key => $value) { $date = new DateTime($value->start->datetime); $date = $date->format('Y-m-d H:i');?>
<tr>
<td><?= $value->venue->displayName ?></td>
<td><?= $value->location->city ?></td>
<td><?= $date ?></td>
<td><a href="<?= $value->uri ?>" target="_blank">Buy Ticket</a></td>
</tr>
<?php } ?>

</table>
</div>
    </div>

    <div id="about" class="tab-pane fade contenu container">
      <div class="row">
        <img class="col-lg-5 col-lg-offset-1  img-responsive"  src="About_Tash.png" alt="Tash Sultana">
        <div class="col-lg-4 col-lg-offset-1">
            Tash Sultana is a young, dynamic Melbourne artist creating waves and generating massive street buzz by playing sold out shows all over the World.
               Tash has made a name for herself busking on the streets of Melbourne and having homemade videos go viral getting millions of views online. <br/><br/>
               Since having her hands wrapped around a guitar at the age of three, the self taught artist quickly developed her own unique style that has people
                lining up to see her perform. Her vocal shines with a magical quality, she has a natural gift for melody and her virtuosic guitar playing is from another planet.
        </div>
      </div>
      <hr/>
      <div class="row">
          <div class="col-lg-4 col-lg-offset-1">
            The young, one-woman powerhouse has literally sold out every headline show booked across multiple countries and played dozens of high profile festivals including
            Laneway and Splendour In The Grass 2017. Both singles ‘Jungle’ and ‘Notion’ were quick to receive high rotation on Australian broadcaster triple j with ‘Jungle’ been
            added as mega hit of the week on Netherlands 3FM radio and is picking up rotation on stations across North America. <br/><br/>
            Accolades include a #8 ARIA album chart, topping the iTunes chart with her “Notion EP”, ‘Jungle’ coming in at #3 on triple j’s hottest 100, exceeding platinum sales
            for ‘Jungle’, winning a J award in 2016, an APRA Award nomination and tens of millions of streams Worldwide.
          </div>
            <img class="col-lg-5 col-lg-offset-1 col-xs-offset-1 img-responsive" src="About_Tash2.jpg" alt="Tash Sultana">

      </div>
      <br/><hr><br/>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="col-md-12"  height="720" src="https://www.youtube.com/embed/RBw08GbrR-g" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

<!------------------------------------------------------------------------------>
    <div id="contact" class="tab-pane fade contenu">
      <div class="row">
        <div class="col-md-12">
          <h1 class="title text-center">Contact</h1>
            <div class="row">
              <div class="col-md-6">
                <div class="subtitle management">
                  <h2 >Management</h2> <br/><br/>

                  <div>
                    <h4>Lemon Tree Music (ww) </h4>
                    <h4>REGAN LETHBRIDGE & DAVID MORGAN</h4>
                    <h5>info@lemontreemusic.com.au</h5>
                  </div>
                  <hr style="border-top: dotted 1px;" />
                  <div>
                    <h4>LTM / UNIFIED (USA co mgmt)</h4>
                    <h4>JADDAN COMERFORD</h4>
                    <h5>www.weareunified.com​</h5>
                  </div>
                  <hr style="border-top: dotted 1px;" />
                  <div>
                    <h4>LTM / PLUG N PLAY (UK / EU co mgmt)</h4>
                    <h4>DAVE TOETHUIS</h4>
                    <h5>dave.plugandplay@gmail.com</h5>
                  </div>

                </div>
              </div>
              <div class="col-md-6">
                <div class="subtitle booking">
                  <h2>Booking</h2> <br/><br/>

                  <div>
                    <h4>FREE TRADE AGENCY (UK / EU) </h4>
                    <h4>PAUL BOSWELL</h4>
                    <h5>paulb@freetradeagency.co.uk</h5>
                  </div>
                  <hr style="border-top: dotted 1px;" />
                  <div>
                    <h4>123 AGENCY (AUS / NZ / ROW)</h4>
                    <h4>REGAN LETHBRIDGE</h4>
                    <h5>regan@123agency.com.au</h5>
                  </div>
                  <hr style="border-top: dotted 1px;" />
                  <div>
                    <h4>PARADIGM AGENCY (AMERICAS)</h4>
                    <h4>TOM WINDISH - JACKIE NALPANT - AARON PINKUS</h4>
                    <h5>tashsultanateam@paradigmagency.com</h5>
                  </div>
                  <hr style="border-top: dotted 1px;" />
                  <div>
                    <h4>PARADIGM AGENCY (CANADA)</h4>
                    <h4>ROB ZIFARELLI</h4>
                    <h5>rzifarelli@paradigmagency.com</h5>
                  </div>

                </div>
              </div>
            </div>
        </div>
      </div>

    </div>
<!------------------------------------------------------------------------------>
    <div id="livre" class="tab-pane fade contenu">
      livre
    </div>

  </div>
</div>

</div>

<div class="col-md-2 col-md-offset-2" id="col-side">
  <a href="https://www.facebook.com/tashsultanamusic/" target="_blank">
    <img src="FacebookLogo.png" alt="Logo Instagram">
  </a> <br/>
  <a href="https://www.instagram.com/tashsultanaofficial/" target="_blank">
    <img src="InstaLogo.png" alt="Logo Instagram"> <br/>
  </a>
  <a href="https://twitter.com/tashsultanaa" target="_blank">
    <img src="TwitterLogo.png" alt="Logo Twitter"> <br/>
  </a>
  <a href="https://www.youtube.com/user/tashsultana01" target="_blank">
    <img src="YTLogo.png" alt="Logo Youtube"> <br/>
  </a>
</div>

</div>
</div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#myTab a").click(function(e){
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>

    <script type="text/javascript">
        function countdown() {
          var NextConcertDate = "<?php echo TimeFormat($tours[0]->start->datetime); ?>";
          //document.write(NextConcertDate);
          var now = new Date();
          var eventDate = new Date(NextConcertDate);
    });
</script>

<script type="text/javascript">
$(".topmenu li a").click(function() {
    $(".topmenu li a").removeClass("active");
    $(this).parent().children().addClass("active");
  });


    function countdown() {
      var NextConcertDate = "<?php echo TimeFormat($tours[0]->start->datetime); ?>";
      //document.write(NextConcertDate);
      var now = new Date();
      var eventDate = new Date(NextConcertDate);
          var currentTime = now.getTime();
          var eventTime = eventDate.getTime();

          var finalTime = eventTime - currentTime;

          var s = Math.floor(finalTime / 1000);
          var m = Math.floor(s / 60);
          var h = Math.floor(m / 60);
          var d = Math.floor(h / 24);

          h %= 24;
          m %= 60;
          s %= 60;

          h = (h < 10) ? "0" + h : h;
          m = (m < 10) ? "0" + m : m;
          s = (s < 10) ? "0" + s : s;

          document.getElementById("days").textContent = d;
          document.getElementById("days").innerText = d;

          document.getElementById("hours").textContent = h;
          document.getElementById("minutes").textContent = m;
          document.getElementById("seconds").textContent = s;

          setTimeout(countdown, 1000);
        }

        countdown();
    </script>

    <script>var channelID = "UCdXHuzr3AS3iyPxKSBK15oQ";
      $.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
         var link = data.items[0].link;
         //alert(link);
         var id = link.substr(link.indexOf("=")+1);
          $("#youtube_video").attr("src","https://youtube.com/embed/"+id);
      });
    </script>

    <!-- javascript import-->
    <script src="./js/music.js"></script>
</body>
</html>
