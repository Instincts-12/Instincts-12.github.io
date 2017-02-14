function smoothScroll(){
     $("links a").on('click', function(event) {
      event.preventDefault();
      var hash = this.hash;
      if($(window).scrollTop()> $(hash).offset().top){
          lift=-200;
      }else{
          lift=200;
      }
      $('html, body').animate({
        scrollTop: $(hash).offset().top+lift
      }, 800, function(){
        window.location.hash = hash;
      }).animate({
        scrollTop: $(hash).offset().top
      }, 800);
    
  });
}

var scrollChange=function(){
        var stop=$(document).scrollTop();
        var navheight=$("nav").height();
        if(stop>navheight){
            $('nav').addClass('nav_scroll');
        }else{
            $('nav').removeClass('nav_scroll');
        }
        
        $(".star").each(function(index){
            if(stop-50 >= $(this).offset().top){
                $("links a").removeClass("active");
                $("links a").eq(index).addClass("active");
            }
        });
};

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



$(function() {
    $("modal").hide();
    smoothScroll();
    $(window).scroll(scrollChange);
});




//$(document).ready(function(){
//    var homeheight= $('#home').height();
//    var aboutheight = $('#aboutus').height() + $('#instincts').height()+250;
//    var eventheight = $('#event').height()+100;
//    var galleryheight = $('#gallery').height()+100;
//    var sponsorheight = $('#sponsor').height()+100;
//    var contactheight = $('#contact').height()+100;
//    var mapheight = $('#maps').height();
//    $("#home").css("background-size","cover");
//   
        // if(scroll<=homeheight){
        //     $('.navactive').removeClass('navactive');
        //     $('.hlink').addClass('navactive');
        // }else if (scroll<=homeheight+aboutheight) {
        //     $('.navactive').removeClass('navactive');
        //     $('.alink').addClass('navactive');
        // }else if (scroll<=homeheight+aboutheight+eventheight) {
        //     $('.navactive').removeClass('navactive');
        //     $('.elink').addClass('navactive');
        // }else if (scroll<=homeheight+aboutheight+eventheight+galleryheight) {
        //     $('.navactive').removeClass('navactive');
        //     $('.glink').addClass('navactive');
        // }else if (scroll<=homeheight+aboutheight+eventheight+galleryheight+sponsorheight) {
        //     $('.navactive').removeClass('navactive');
        //     $('.slink').addClass('navactive');
        // }else if (scroll<=homeheight+aboutheight+eventheight+galleryheight+sponsorheight+contactheight) {
        //     $('.navactive').removeClass('navactive');
        //     $('.clink').addClass('navactive');
        // }else if(scroll<=homeheight+aboutheight+eventheight+galleryheight+sponsorheight+contactheight+mapheight){
        //     $('.navactive').removeClass('navactive');
        //     $('.hlink').addClass('navactive');
        // }
        // console.log(scroll);

//    scrollchange();
//    $(window).scroll(scrollchange);


//    if($(window).width()<=450){
//        $('menubutton').show();
//        $('links').hide();
//        $('nav').css("z-index","3");
//        $('links a').css("display","list-item");
//        $('menubutton').click(function(){
//            $("links").addClass("navsmall");
//            // $('links').width($(window).width());
//            $('links').toggle();
//            $('cover').toggle();
//        });
//        $('links a').click(function(){
//            $('links').toggle();
//            $('cover').hide();
//        });
//    }else if($(window).width()<=650){
//        $('menubutton').show();
//        $('links').hide();
//        $('nav').css("z-index","3");
//        $('links a').css("display","list-item");
//        $('menubutton').click(function(){
//            $("links").addClass("navsmall");
//            $('links').toggle();
//            $('cover').toggle();
//        });
//        $('links a').click(function(){
//            $('links').toggle();
//            $('cover').hide();
//        });
//    }else if($(window).width()<=820){
//        $('menubutton').show();
//        $('links').hide();
//        $('nav').css("z-index","3");
//        $('links a').css("display","list-item");
//        $('menubutton').click(function(){
//            $("links").addClass("navsmall");
//            $('links').toggle();
//            $('cover').toggle();
//        });
//        $('links a').click(function(){
//            $('links').toggle();
//            $('cover').hide();
//        });
//    }

//});

var app=angular.module("instincts",['angular.filter']);
app.controller('instincts',function($http,$scope){
    $http.get('events.json').success(function(data) {
        $scope.eventlist=data;
    });
    
    $scope.clubEvents=function(clubname){
        $scope.currentClub=clubname;
        $("#event-modal").show();
        $("detail").hide();
        
    };
    $scope.eventDetails=function(eventname){
        $scope.currentEvent=$scope.eventlist.filter(function(event){
             return event.EventName.toUpperCase()==eventname.toUpperCase();
        })[0];
        console.log($scope.currentEvent);
        $("detail").show();
        
    };

});
