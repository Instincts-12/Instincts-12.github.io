<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <script src='libs/jquery.js'></script>
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
        <link rel="stylesheet" href="libs/main.css"/>


        <!--<script src="libs/paperfold.min.js"></script>-->
        <title>INSTINCTS 12</title>
    </head>
    <script>
        window.addEventListener('load',function(){
            document.getElementById("loading").style.display='none';
        });
    </script>
    <body>
       
        <loading id="loading">
            <img src="drawable/logo_stroke (1)_animated.svg"/>
        </loading>
        
        <landing>
            <p>SSN PRESENTS</p>
            <h1>INSTINCTS</h1>
            <p>in association with</p>
            <h2>HCL</h2>
        </landing>
        
        <sections>
            <wrapper>
                <circle>
                    <h3>About-Us</h3>
                </circle>
                <p>
                    SSN Institutions had its humble origins in 1996, when it was established by Dr.Shiv Nadar, eminent industrialist, philanthropist, and educationist. The small seed that was sown then has today grown into the foremost private engineering college in Tamil Nadu rolling out nothing less than the finest brains in the country.
SSN prides itself a little in being among the top ten most serene and beautiful campuses in the country, prides itself a little more in having the best infrastructure in the country and prides itself the most in providing an amalgamation of stimulating environments for intellectual development, free thinking and personal growth, challenging its students with dynamic learning opportunities and equipping them with the skills, insights, attitudes and practical experiences that are necessary to carry forward the various roles of society.
So when it comes to learning , SSN doesn't stop at the educational front,it acts as a catalyst that ignites students to reach the point of zenith in the cultural sphere as well.
The future is set in motion when there is a confluence of youth; SSN takes pride in being responsible for the revolution that follows!

                </p>
            </wrapper>
            <wrapper>
                <circle>
                    <h3>INSTINCTS</h3>
                </circle>
                <p> 
                    Instincts, since its inception in 2006, has today become one of the largest campus festivals in South India, attracting crowds of well over 10,000, from over 150 institutions of higher learning. 
A number of celebrities, performers and eminent personalities from the literary,cine, musical, sporting and educational streams visit our campus across these three days.
We have played host in the past to names of the calibre of Madhavan, Arya, Jeyam Ravi, Anirudh Ravichander, Prabhu Deva, Gautam Vasudev Menon, Sivamani, Shaktishree Gopalan, Keith Peters, Santhanam, RJ Balaji , Srikanth and many more.
Our participants charm the country with the largest battle of intellect, culture and skill, providing a treat to anyone who is witness. Instincts is a combination of fun, learning and exposure all combined into one huge package. It is the ultimate battleground to unleash talent,showcase skills and soak in unlimited fun. At the end of it, anyone and everyone involved gains something massive from this cultural extravaganza - participant and organizer alike. Artistically and technically, INSTINCTS is a college cultural fest that stands unparalleled to this date.

We welcome you to join us this year on the 9th, 10th and 11th of March for the 12th version of INSTINCTS!

So get ready to hop onto the wildest and most adventurous roller coaster rides till date.

Get Ready for SSN Instincts 2K17.
                </p>
            </wrapper>
            <wrapper>
                <circle>
                    <h3>Events</h3>
                </circle>
                <events>
                    <eventlist>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>d</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                        <card>
                        <img src="drawable/landing-01.svg"/>
                            <h3>dance</h3>
                            <p>The definition or any quote to title.Lorem Ipsum
                                    ion or any quote to title.Lorem Ipsum</p>
                        </card>
                       
                        
                    </eventlist>
                </events>
            </wrapper>
            <wrapper>
                <circle>
                    <h3>Gallery</h3>
                </circle>
                <gallery>
                    <?php
                        foreach(new DirectoryIterator('./drawable/gallery/') as $file):
                            if($file->isFile()):?>

                    <img onclick='big(this)' src="drawable/image.php?url=gallery/<?php echo $file->getFilename();?>&w=300"/>
                    <?php endif;endforeach;?>
                </gallery>
            </wrapper>
            <wrapper>
                <circle>    
                    <h3>Contact-us</h3>
                </circle>
                <contactbox>
                    <contact>
                        <h3>Address</h3>
                        <address>
                            SSN COLLEGE of ENGINEERING,<br>
                        </address>
                        <h3>Call Us</h3>
                        <a href="tel">2342342323434</a>
                        <h3>Mail us</h3>
                        <a href="mail">asfasfasfd</a>
                    </contact>
                    <sayhello>
                        <form>
                            <input placeholder="Name" type="text" name="name"/>
                            <input placeholder='Email' type="email" name="email"/>
                            <textarea placeholder='Message' name="message"></textarea>
                            <input type="submit"/>
                        </form>
                    </sayhello>
                </contactbox>
            </wrapper>
            <wrapper>
                <circle>
                    <h3>Map</h3>
                </circle>
                <div id='map'>
                    
                </div>
            </wrapper>
        </sections>
    <nav>
            <brand>
                <img src="drawable/logo_new.svg"/>
                <!--<h1>INSTINCTS</h1>-->
            </brand>
            <links>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </links>
    </nav>
    
         <modal id='event-modal'>
            <close onclick="this.parentElement.style.display='none'">X</close>
            <modal-content>
                <ul id='eventlist'>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                </ul>
                <detail>
                    <h3 id="title">EventofDance</h3>
                    <p id="desc">Description goe shere.</p>
                    <hr>
                    <h4>Rules</h4>
                    <ul id="rules"><li>Rule1</li><li>Rule2</li><li>Rule3</li></ul>
                    <hr>
                    <h4>COntact</h4>
                    <ul id="contacts"><li>AkashMilton</li><li>9443807686</li></ul>
                </detail>
                   
            </modal-content>
        </modal>
        <modal onclick="this.style.display='none'" id='image-modal'>
            <img></img>
        </modal>
        <footer>
            
        </footer>
    </body>
    <script src="libs/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB73231zggkC-td1FP7UVHJN8op1ZqEy38&callback=myMap"></script>

</html>
