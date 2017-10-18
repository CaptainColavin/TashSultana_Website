<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tash Sultana</title>

        <!-- import de librairies -->
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- import de CSS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/contact.css">
        <!--<link rel="stylesheet" type="text/css" href="./css/about.css">-->
        <link rel="stylesheet" type="text/css" href="./css/countdown.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
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
                    <nav class="navbar my_nav" id="nav">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <?php /*<div class="navbar-header">
                            Bonjour
                          </div>*/ ?>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <ul role="tablist" id="navbar">
                          <li role="presentation"><a href="/home" class="active" >Home<span class="sr-only">(current)</span></a></li>
                          <li><a href='/music'>Music</a></li>
                          <li role="presentation"><a href="/tour">Tour</a></li>
                          <li role="presentation"><a href="https://24hundred.net/collections/tash-sultana?Tash+Sultana+Store" target="_blank">Store</a></li>
                          <li role="presentation"><a href="/contact">Contact</a></li>
                          <li role="presentation"><a href="/about">About</a></li>
                          <li role="presentation"><a href="#livre">Livre d'or</a></li>
                        </ul>
                    </nav>

                    <div class="center">
                      <div class="tab-content">
                        <section class="contenu container">
                            @yield('content')
                        </section>

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

        <script src="./js/music.js"></script>

    </body>
</html>
