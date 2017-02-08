$.getJSON('events/events.json',function(data){
eventlist=data.eventlist.event;
      console.log(eventlist);
});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top-175
        }, 1000);
        return false;
      }
    }
  });
});




$(document).ready(function(){
    $('#loading').hide(100);
    $("modal").hide();
    var homeheight= $('#home').height();
    var aboutheight = $('#aboutus').height() + $('#instincts').height();
    var eventheight = $('#event').height();
    var galleryheight = $('#gallery').height();
    var sponsorheight = $('#sponsor').height();
    var contactheight = $('#contact').height();

    var scrollchange=   function(){
        var scroll = $(document).scrollTop();
        if(scroll>50){
            $('nav').addClass('nav_scroll');
        }else{
            $('nav').removeClass('nav_scroll');
        }

        if(scroll>=homeheight+aboutheight+eventheight+galleryheight+sponsorheight+contactheight){
            $('.navactive').removeClass('navactive');
            $('#map').addClass('navactive');
        }else if (scroll>=homeheight+aboutheight+eventheight+galleryheight+sponsorheight) {
            $('.navactive').removeClass('navactive');
            $('#contact').addClass('navactive');
        }else if (scroll>=homeheight+aboutheight+eventheight+galleryheight) {
            $('.navactive').removeClass('navactive');
            $('#sponsor').addClass('navactive');
        }else if (scroll>=homeheight+aboutheight+eventheight) {
            $('.navactive').removeClass('navactive');
            $('#gallery').addClass('navactive');
        }else if (scroll>=homeheight+aboutheight) {
            $('.navactive').removeClass('navactive');
            $('#event').addClass('navactive');
        }else if (scroll>=homeheight) {
            $('.navactive').removeClass('navactive');
            $('#aboutus').addClass('navactive');
        }else{
            $('.navactive').removeClass('navactive');
            $('#home').addClass('navactive');
        }

        if (scroll>1000) {
            $('#home').addClass('navactive');
        }
    };

    scrollchange();
    $(window).scroll(scrollchange);

    $("card").click(function(){
        $("card").removeClass("active");
        $(this).addClass("active");
          cat=$(this).children('h3').text().toUpperCase();
          eventsForCard=eventlist.filter(function(event){
              return event.category.toUpperCase()==cat;
          });
          list="";

          for(var x in eventsForCard){
              list+="<li>"+eventsForCard[x].name+"</li>";
          }

          $("#eventlist").html(list);
          $("detail").hide();
          $("#event-modal").show();
      });
      function tag(tag,val){
          return "<"+tag+">"+val+"</"+tag+">";
      }
      $(document).on('click','#eventlist li',function(){
           $("#eventlist li").removeClass("active");
          $(this).addClass("active");
          eventname=$(this).text().toUpperCase();
          event=eventlist.filter(function(event){
              return event.name.toUpperCase()==eventname;
          });
          txt="";
          $('#title').text(event[0].name);
          $('#desc').text(event[0].desc);
          rule="";
          for(x in event[0].rules.rule){
              rule+=tag("li",event[0].rules.rule[x]);
          }
          $('#rules').html(rule);
          contact="";
          for(x in event[0].contacts.contact){
              console.log(event[0].contacts.contact[x]);
              contact+=tag("li",event[0].contacts.contact[x]);

          }
          $('#contacts').html(contact);
          $("detail").show();

      });
      $("close").click(function(){
          $("card").removeClass("active");
      });



//
    //  $(window).scroll(function(){
    //      if($("aboutus").offset().top<=$(window).scrollTop()){
    //          $("nav").addClass("affix");
    //      }
    //      else{
    //          $("nav").removeClass("affix");
    //      }
    //  });
// <<<<<<< HEAD
    if($(window).width()<450){
        $('menubutton').show();
    }
// =======
//
    var movementStrength = 25;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();
$("#home").mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);
          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;
          $("#home").css("background-position", newvalueX+"px   "+newvalueY+"px");
          });
// >>>>>>> b5420f37e8524a72e5f72c08e00c81f58a8213df
});
function big(img){
      $("#image-modal img").attr("src",img.src.replace("w=300","w=800"));

      $("#image-modal").show();
    }

function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng( 12.7501954, 80.1964977),
        zoom: 14,
        scrollwheel: false,

    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
          position:{lat: 12.7501954 ,lng: 80.1964977 } ,
          map: map,
          title: 'Instincts'
        });
    marker.setMap(map);
}
