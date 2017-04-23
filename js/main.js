var hidden = document.getElementById('header');

$(document).ready(function() {
  
  var isPlayed = {
    videos: [],

    add: function (id) {
      this.videos.push(id);
    },

    exist: function (id) {
      if (this.videos.indexOf(id) >= 0) return true;

      return false;
    }
  };

  function vidplay(id) {
    if (isPlayed.exist(id)) return false;

    var video = document.getElementById("myVideo" + id);
    video.play();
    isPlayed.add(id);
  }

  $(document).foundation();

  $('#fullpage').fullpage({
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixPage', 'lastPage'],

    "afterLoad": function(anchorLink, index) {
      var idVideo = 0;

      switch (anchorLink) {
        case 'firstPage':
          hidden.style.display = "block";
          break;
        case 'secondPage':
          hidden.style.display = "none";
          $("#header").removeClass("fadeIn");
          idVideo = 1;
          break;
        case 'thirdPage':
          hidden.style.display = "none";
          idVideo = 2;
          break;
        case 'fourthPage':
          hidden.style.display = "none";
          idVideo = 3;
          break;
        case 'fifthPage':
          hidden.style.display = "none";
          idVideo = 4;
          break;
        case 'sixPage':
          $('#myModal').foundation('reveal', 'open');
          hidden.style.display = "none";
          idVideo = 5;
          break;
        case 'lastPage':
          $("#header").removeClass("fadeIn");
          hidden.style.display = "block";
          idVideo = 5;
          break;  
      }

      if (idVideo != 0) vidplay(idVideo);
    },

    sectionsColor: ['black', '#34495e', '#34495e', '#34495e', '#34495e', '#34495e', '#34495e'],
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['First page', 'Second page', 'Third page', 'Fourth page', 'Fifth page', 'Six page', 'Last Page'],
  });
});

$( "#scroll_down" ).on( "click", function(){
  $.fn.fullpage.moveSectionDown();
});