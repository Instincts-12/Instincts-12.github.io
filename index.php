<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <script src='libs/jquery.js'></script>
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
        <link rel="stylesheet" href="libs/main.css"/>

        <script src="libs/paperfold.min.js"></script>
        <script src="libs/main.js"></script>
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
                <p> Instincts, the annual cultural extravaganza of the SSN College of Engineering is back this year with its usual bang! This year we are booting up to spread our vibes throughout the city on the 10th, 11th and 12th of March.
                    Being the 11th version of Instincts, we are not about to disappoint you this year! With an exciting lineup of events, and legends in each field prepared to judge you, this version of Instincts is only going to get better. It doesn’t stop there! Every night of Instincts is filled with some crazy singing and dancing with leading DJs, professional dance teams and enchanting voices from the cine industry set to startle you with their stellar performances. 
                        This year, we, at SSN are celebrating the comeback of our beautiful city, after the recent disasters. Come, be a part of us, and contribute your part to the city.
                </p>
            </wrapper>
            <wrapper>
                <circle>
                    <h3>About-Us</h3>
                </circle>
                <p> Instincts, the annual cultural extravaganza of the SSN College of Engineering is back this year with its usual bang! This year we are booting up to spread our vibes throughout the city on the 10th, 11th and 12th of March.
                    Being the 11th version of Instincts, we are not about to disappoint you this year! With an exciting lineup of events, and legends in each field prepared to judge you, this version of Instincts is only going to get better. It doesn’t stop there! Every night of Instincts is filled with some crazy singing and dancing with leading DJs, professional dance teams and enchanting voices from the cine industry set to startle you with their stellar performances. 
                        This year, we, at SSN are celebrating the comeback of our beautiful city, after the recent disasters. Come, be a part of us, and contribute your part to the city.
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
                    <h3>adf</h3>
                    <p>asfasf</p>
                    <h4>Rules</h4>
                    <ul>
                        <li>one
                        <li>one
                        <li>one
                        <li>one
                    </ul>
                    <h4>COntact</h4>
                    <ul>
                        <li>aasdaf
                    </ul>
                </detail>
            </modal-content>
        </modal>
<!--         <modal id='image-modal'>
            <close onclick="this.parentElement.style.display='none'">X</close>
            
        </modal>-->
      
    </body>
</html>
