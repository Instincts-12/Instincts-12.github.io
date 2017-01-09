<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
         <meta charset="UTF-8">
        <title>Support Jallikattu</title>
        <meta property="og:title" content="SupportJallikattu"/>
        <meta property="og:site_name" content="Support Jallikattu - Jocose App"/>
        <meta property="og:url" content="http://apps.thejocose.com/jallikattu/"/>  
        <meta property="og:type" content="website"> 
        <meta property="og:description" content="Create overlay on your profile pictures and support jallikattu. Save Indian breed."/>
        <meta property="og:image" content="http://apps.thejocose.com/output/"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta property="fb:app_id" content="1388172724534777"/>
        <meta property="fb:admins" content="100007479881813"/>
        <title>SSN INSTINCTS</title>
        <link rel="stylesheet" href="main.css"/>
    </head>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=381315482203940";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <style>
     
        /*modal*/
    </style>
    <script>
     

    </script>
    <body>
<div class="fb-like" data-href="https://www.facebook.com/ssninstincts/" data-width="400" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
        <showcase>
        
        <?php
            foreach (new DirectoryIterator("small") as $file):
                if ($file->isFile()): ?>
                     <img onclick="big(this)" bigsrc="large/<?php echo $file->getFileName(); ?>" src="small/<?php echo $file->getFileName(); ?>"/>
        <?php endif;?>
        <?php endforeach; ?>
        </showcase>
        <overlay>
            <h1>INSTINCTS</h1>
            <p><box><mon> MARCH</mon><date> 9 </date></box-- <box><mon>MARCH</mon><date>10</date> </box></p>
        </overlay>

        <div onclick="this.style.display='none'" id="myModal" class="modal">

        <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
                <img class="modal-content" id="img01">
        </div>
    </body>
    <script>
    
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById("img01");
         function big(img){
            modal.style.display = "block";
            modalImg.src = img.src.replace("small","large");
        }
       
        
    </script>
</html>
