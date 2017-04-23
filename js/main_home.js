$(document).foundation();
$(document).ready(function() {
  $('#fullpage').fullpage({
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'lastPage'],
    verticalCentered: true,
    slidesNavigation: true,
    sectionsColor: ['#F2F2F2', '#F2F2F2', '#F2F2F2', '#F2F2F2', '#F2F2F2'],
      afterRender: function(){
        //playing the video
  $('video').get(0).play();
    }
  });
});

$( "#scroll_down" ).on( "click", function(){
  $.fn.fullpage.moveSectionDown();
});

$( "#scroll_down2" ).on( "click", function(){
  $.fn.fullpage.moveSectionDown();
});

$("#bouton").hover(inFunction,outFunction)