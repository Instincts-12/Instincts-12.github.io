$.getJSON('events/events.json',function(data){
eventlist=data.eventlist.event;
      console.log(eventlist);
});
$(document).ready(function(){    
    $("modal").hide();
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
//      $(window).scroll(function(){
//          if($("aboutus").offset().top<=$(window).scrollTop()){
//              $("nav").addClass("affix");
//          }
//          else{
//              $("nav").removeClass("affix");
//          }
//      });

});
function big(img){
      $("#image-modal img").attr("src",img.src.replace("w=300","w=800"));
      
      $("#image-modal").show();
    }  
    
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng( 12.7501954, 80.1964977),
        zoom: 12
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}