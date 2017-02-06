$.getJSON('events/events.json',function(data){
eventlist=data.eventlist.event;
      console.log(eventlist);
});
$(document).ready(function(){    

//    var paperfold = $('eventlist').paperfold();

//	$('events img').click(paperfold.toggle);
//        $("modal").hide();
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
          
          list="<ul id=eventlist>"+list+"</ul><detail></detail>";
          
          
          $("modal-content").html(list);
          $("modal").show();
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
          txt=tag("h3",event[0].name)+tag("p",event[0].desc);
          rule="<h4>RULE</h4>";
          for(x in event[0].rules.rule){
              rule+=tag("li",event[0].rules.rule[x]);
          }
          rule=tag("ul",rule);
          txt+=rule;
          contact="<h4>CONTACT</h4>";
          for(x in event[0].contacts.contact){
              console.log(event[0].contacts.contact[x]);
              contact+=tag("li",event[0].contacts.contact[x]);
              
          }
          
          contact=tag("ul",contact);
          txt+=contact;
          
          
          $("detail").html(txt);
          
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
      src = img.src.replace("w=300","w=800");
      txt="<img src='"+src+"'/>";
      $("modal-content").html(txt);
      $("modal").show();
    }  