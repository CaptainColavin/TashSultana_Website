if(window.location.toString().indexOf('home') >= 0 ) {
    function countdown() {
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

    var channelID = "UCdXHuzr3AS3iyPxKSBK15oQ";
      $.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
         var link = data.items[0].link;
         //alert(link);
         var id = link.substr(link.indexOf("=")+1);
          $("#youtube_video").attr("src","https://youtube.com/embed/"+id);
      });

    countdown();
}
