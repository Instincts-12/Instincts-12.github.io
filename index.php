<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="shortcut icon" href="drawable/logo_new.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
        <link rel="stylesheet" href="libs/main.css"/>

        <meta name="keywords" content="instincts,ssn,culturals,chennai,march,roller,coaster,sri,siva,subramaniya"/>
        <meta name="description" content="So get ready to hop onto the wildest and most adventure.Get Ready for the Instincts 12.0"/>

        <meta property="og:title" content="SSN_INSTINCTS"/>
        <meta property="og:site_name" content="SSN_INSTINCTS_12.0"/>
        <meta property="og:url" content="http://ssninstincts.org.in"/>
        <meta property="og:type" content="website">
        <meta property="og:description" content="So get ready to hop onto the wildest and most adventure.Get Ready for the Instincts 12.0"/>
        <meta property="og:image" content="http://ssninstincts.org.in/drawable/cover.jpg"/>
        <meta property="fb:app_id" content="381315482203940"/>
        <meta property="fb:admins" content="100007479881813"/>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.min.js"></script>


        <title>INSTINCTS 12</title>
    </head>
    <script>
        window.addEventListener('load',function(){
//             document.getElementById("loading").style.display='none';

            $('loading').slideUp(1000);
        });
    </script>
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=381315482203940";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <body ng-app="instincts" ng-controller="instincts">

        <loading id="loading">
            <img src="drawable/logo_stroke (1)_animated.svg"/>
        </loading>
        <cover></cover>
        <landing class="star" id="home">
            <p>SSN COLLEGE OF ENGINEERING</p>
            <p>Presents</p>
            <h1>INSTINCTS</h1>
            <p>in association with</p>
            <h2><img src="sponsors/hcl.gif" /></h2>
        </landing>


        <sections>
            <wrapper class="texts star" id="aboutus">
                <circle>
                    <h3>About-Us</h3>
                </circle>
                    <p>SSN Institutions had its humble origins in 1996, when it was established by Dr.Shiv Nadar, eminent industrialist, philanthropist, and educationist. The small seed that was sown then has today grown into the foremost private engineering college in Tamil Nadu rolling out nothing less than the finest brains in the country.</p> <br/>
                    <p>    SSN prides itself a little in being among the top ten most serene and beautiful campuses in the country, prides itself a little more in having the best infrastructure in the country and prides itself the most in providing an amalgamation of stimulating environments for intellectual development, free thinking and personal growth, challenging its students with dynamic learning opportunities and equipping them with the skills, insights, attitudes and practical experiences that are necessary to carry forward the various roles of society.</p><br/>
                    <p>    So when it comes to learning , SSN doesn't stop at the educational front,it acts as a catalyst that ignites students to reach the point of zenith in the cultural sphere as well.</p><br/>
                    <p>    The future is set in motion when there is a confluence of youth; SSN takes pride in being responsible for the revolution that follows!</p>
            </wrapper>
            <wrapper class="texts star">
                <circle>
                    <h3>INSTINCTS</h3>
                </circle>

                    <p>Instincts, since its inception in 2006, has today become one of the largest campus festivals in South India, attracting crowds of well over 10,000, from over 150 institutions of higher learning.</p><br/>
                    <p>A number of celebrities, performers and eminent personalities from the literary,cine, musical, sporting and educational streams visit our campus across these three days.</p><br/>
                    <p>We have played host in the past to names of the calibre of Madhavan, Arya, Jeyam Ravi, Anirudh Ravichander, Prabhu Deva, Gautam Vasudev Menon, Sivamani, Shaktishree Gopalan, Keith Peters, Santhanam, RJ Balaji , Srikanth and many more.</p><br/>
                    <p>Our participants charm the country with the largest battle of intellect, culture and skill, providing a treat to anyone who is witness. Instincts is a combination of fun, learning and exposure all combined into one huge package. It is the ultimate battleground to unleash talent,showcase skills and soak in unlimited fun. At the end of it, anyone and everyone involved gains something massive from this cultural extravaganza - participant and organizer alike. Artistically and technically, INSTINCTS is a college cultural fest that stands unparalleled to this date.</p><br/>

                    <p>We welcome you to join us this year on the 9th, 10th and 11th of March for the 12th version of INSTINCTS!</p><br/>

                    <p>So get ready to hop onto the wildest and most adventurous roller coaster rides till date.</p><br/>

                    <p>Get Ready for SSN Instincts 2K17.</p>
            </wrapper>
            <wrapper id="event" class="star">
                <circle>
                    <h3>Events</h3>
                </circle>
                <events>
                    <eventlist>
                        <card ng-click="clubEvents(event.ClubName)" ng-repeat="event in eventlist | unique:'ClubName'">
                        
                        <img src="drawable/landing-01.svg"/>
                            <h3>{{event.ClubName}}</h3>
                            <!--<p>“Taking an image, freezing a moment, reveals how rich reality truly is”</p>-->
                        </card>
                    </eventlist>
                </events>
            </wrapper>
            <wrapper id="gallery" class="star">
                <circle>
                    <h3>Gallery</h3>
                </circle>
                <gallery>
                    <?php
                        foreach(new DirectoryIterator('./drawable/gallery/') as $file):
                            if($file->isFile()):?>

                    <!--<img onclick='big(this)' src="drawable/image.php?url=gallery/<?php echo $file->getFilename();?>&w=300"/>-->
                    <?php endif;endforeach;?>
                </gallery>
            </wrapper>
            <wrapper id="sponsor" class="star">
                <circle>
                    <h3>Sponsors</h3>
                </circle>
                <sponsor>
                    <Stitle>TITLE SPONSOR</Stitle><br/>
                    <titlesponsor>
                        <img src="sponsors/hcl.gif" width="300"/>
                    </titlesponsor>
                </sponsor>
                <sponsor>
                    <Stitle>ASSOCIATE SPONSORS</Stitle>
                    <associatesponsor>
                        <div>
                            <img src="drawable/image.php?url=../sponsors/asialogo1.jpg&w=250">
                        </div>
                        <div>
                            <img src="drawable/image.php?url=../sponsors/image1.JPG&w=250">

                        </div>
                        <div>
                            <img src="drawable/image.php?url=../sponsors/Logo-Big.jpg&w=250">
                        </div>
                        <div>
                            <img src="drawable/image.php?url=../sponsors/Blue-star-1.jpg&w=250">
                        </div>
                        <div>
                            <img src="drawable/image.php?url=../sponsors/archee.jpg&w=250">
                        </div>
                    </associatesponsor>
                </sponsor>
            </wrapper>
            <wrapper id="contact" class="star">
                <circle>
                    <h3>Contact-us</h3>
                </circle>
                <contactbox>
                    <contact>
                        <contactcontainer>
                            <h3>Address</h3>
                            <address>
                                SSN College of Engineering,<br>
                                Ragiv Gandhi Road, OMR,<br/>
                                Kalavakkam, Chennai - 603110.
                            </address>
                            <h3>Call Us</h3>
                            <a href="tel">2342342323434</a>
                            <h3>Mail us</h3>
                            <a href="mail">asfasfasfd</a>
                        </contactcontainer>
                    </contact>
                    <sayhello>
                        <formcontainer>
                            <form>
                                <input placeholder="Name" type="text" name="name"/>
                                <input placeholder='Email' type="email" name="email"/>
                                <textarea placeholder='Message' name="message"></textarea>
                                <input type="submit"/>
                            </form>
                        </formcontainer>
                    </sayhello>
                </contactbox>
            </wrapper>
            <wrapper id="maps" class="star">
                <circle>
                    <h3>Map</h3>
                </circle>
                <div id='map'>

                </div>
            </wrapper>
        </sections>
    <nav>
            <brand>
                <img src="drawable/logo_svg-01.svg"/>
                <!--<h1>INSTINCTS</h1>-->
            </brand>
            <!--<menubutton> </menubutton>-->
            <links>
                <a class="active" href="#home">HOME</a>
                <a href="#aboutus">ABOUT-US</a>
                <a href="#event">EVENTS</a>
                <a  href="#gallery">GALLERY</a>
                <a  href="#sponsor">SPONSORS</a>
                <a  href="#contact">CONTACT US</a>
                <a  href="#maps">MAP</a>
            </links>
    </nav>



         <modal id='event-modal'>
                <close onclick="this.parentElement.style.display='none'">X</close>
            <modal-content>
                <ul id='eventlist'>
                    <li ng-click="eventDetails(events.EventName)" ng-repeat="events in eventlist | filter:currentClub ">{{events.EventName}}</li>
                </ul>
                <detail>
                    <h3 id="title">{{currentEvent.EventName}}</h3>
                    <p id="desc">{{currentEvent.Descr}}</p>
                    <hr>
                    <h4>Rules</h4>
                    <ul id="rules">
                        <li ng-repeat="rule in currentEvent.Ruling">{{rule}}</li>
                    </ul>
                    <hr>
                    <h4 ng-show="currentEvent.Timimg">Timing</h4>
                    <timing>{{currentEvent.Timing}}</timing>
                    <h4 ng-show="currentEvent.Dating">Date</h4>
                    <date>{{currentEvent.Dating}}</date>
                    <h4 ng-show="currentEvent.Venue">Venue</h4>
                    <venue>{{currentEvent.Venue}}</venue>
                    <h4 ng-show="currentEvent.Info">Info</h4>
                    <p>{{currentEvent.Info}}</p>
                    <h4>COntact</h4>
                    <ul id="contacts" ng-if="currentEvent.ContactName">
                        <li ng-repeat="Contact in currentEvent.ContactName">
                            <a class="contact">
                                <name>{{currentEvent.ContactName[$index]}}</name>
                                <number>{{currentEvent.ContactNumber[$index]}}</number>
                            </a>
                        </li>
                    </ul>
                </detail>

            </modal-content>
        </modal>
        <modal onclick="this.style.display='none'" id='image-modal'>
            <img></img>
        </modal>
    <footer>
        <social>
            <boxes>
                <div class="fb-send" data-href="http://ssninstincts.org.in/"></div>
                <div class="fb-share-button" data-href="http://ssninstincts.org.in" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fssninstincts.org.in%2F&amp;src=sdkpreparse">Share</a></div>
                <div class="fb-like" data-href="http://facebook.com/instincts.ssn/" data-width="300" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
            </boxes>
            <comment>
                <div class="fb-comments"  data-href="http://ssninstincts.org.in" data-numposts="5"></div>
            </comment>
        </social>
        <p>
            Copyright &copy; 2016-2017 by Instincts - SSN. All Rights are Reserved.
        </p>
    </footer>
    </body>
    <script src="libs/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB73231zggkC-td1FP7UVHJN8op1ZqEy38&callback=myMap"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90358781-1', 'auto');
  ga('send', 'pageview');

    </script>
</html>
