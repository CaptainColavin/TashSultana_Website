@extends('layouts.app')

@section('content')

<div class="bgimg">
    <div class="top">
        <h1 style="background-color: rgba(201, 201, 201, 0.16); margin-right:30%; margin-left:30%;">Next Concert</h1>
        <p style="background-color: rgba(201, 201, 201, 0.16); margin-top: 20px; margin-right:40%; margin-left:40%;"> {{ $tours[0]->venue->displayName }}</p>
        <p style="background-color: rgba(201, 201, 201, 0.16); margin-right:35%; margin-left:35%;">{{ $tours[0]->location->city }}</p>
        <p style="background-color: rgba(201, 201, 201, 0.16); margin-right:30%; margin-left:30%;">
            {{ $nextTour }}</p>
    </div>
    <div class="middle">
      <ul style="background-color: rgba(201, 201, 201, 0.16); margin-right:auto; margin-left:auto;">
        <li id="days" class="circle">00 Days</li>
        <li id="hours" class="circle">00</li>
        <li id="minutes" class="circle">00</li>
        <li id="seconds" class="circle">00</li>
      </ul>
      <ul style="background-color: rgba(201, 201, 201, 0.16); margin-right:auto; margin-left:auto;">
        <li class="countdownValues">Days</li>
        <li class="countdownValues">Hours</li>
        <li class="countdownValues">Minutes</li>
        <li class="countdownValues">Seconds</li>
      </ul>
    </div>
    <div class="bottom" style="left: 0px;">
      <img src="./powered-by-songkick-white.png" class="songkick-logo">
    </div>
    <div class="bottom">
      <a href="https://www.songkick.com/artists/5112228-tash-sultana" target="_blank"><button type="button" class="button button1">Buy Ticket</button></a>
    </div>
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

<script>
    var NextConcertDate =' {{ $nextTour }} ';
</script>
@stop
