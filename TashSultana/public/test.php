<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tash Sultana</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
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
      <li role="presentation"><a href="#home" class="active" aria-controls="home" role="tab" data-toggle="tab">Home<span class="sr-only">(current)</span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" aria-controls="music" data-toggle="tab" role ="tab" href="#music">Music <span class="caret"></span></a>
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
      music
    </div>
    <div id="tour" class="tab-pane fade contenu">
      tour
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
    });
    </script>
</body>
</html>
