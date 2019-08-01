<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/eab6fcb376.js"></script>
    <script>
        // init controller
        
    </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/images/interval logo italic.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#">Početna</a></li>
                <li><a href="#">O nama</a></li>
                <li><a href="#">Usluge</a></li>
                <li><a href="#">Proizvodi</a></li>
                <li><a href="#">Reference</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    
        <!-- Slideshow container -->
    
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="images/interval.crop-5.jpg" style="width:100%">
                <div class="textContainer">
                    <div class="text">
                        <div class="text-naslov">Projektiranje</div>
                        <hr>
                        <div class="text-sadržaj"></div>
                        <br>
                        <a href="#">Saznaj više</a>
                     </div>
                </div>
            </div>
            
            <div class="mySlides fade">
                <img src="images/interval.crop-2.jpg" style="width:100%">
                <div class="text">
                    <div class="text-naslov">Izrada električnih ormara</div>
                    <hr>
                    <div class="text-sadržaj"></div>
                    <br>
                    <a href="#">Saznaj više</a>
                </div>
            </div>
            
            <div class="mySlides fade">
                <img src="images/interval-automatika.jpeg" style="width:100%">
                <div class="text">
                    <div class="text-naslov">Automatika</div>
                    <hr>
                    <div class="text-sadržaj"></div>
                    <br>
                    <a href="#">Saznaj više</a>
                </div>
            </div>
            
            <div class="mySlides fade">
                <img src="images/Interval-15.jpg" style="width:100%">
                <div class="text">
                    <div class="text-naslov">Servis i prematanje električnih strojeva</div>
                    <hr>
                    <div class="text-sadržaj"></div>
                    <br>
                    <a href="#">Saznaj više</a>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="images/interval-testing v2.jpg" style="width:100%">
                <div class="text">
                    <div class="text-naslov">Ispitivanje i puštanje u rad pogona</div>
                    <hr>
                    <div class="text-sadržaj"></div>
                    <br>
                    <a href="#">Saznaj više</a>
                </div>
            </div>
        
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
        </div>
        <hr class="onama-hr">
        <div class="onama-pocetna" id="reveal2">
            
            <h1>About Us</h1>
            <p>Company Inteval d.o.o. was founded in 1996.and restructured to nowdays
                    organisation as a company mostly related to marine design of electric plants ,
                    automation production , electrical motors & generator maintenance, diesel generator
                    assembly and electrical switchboards design & manufacturing. As a reliable and
                    trustworthy partner, Interval regards the development of alternative, inventive and
                    unique tailor made solutions that suits its client’s requirements, not as a technical
                    problem, but as a challenge. Interval is capable of accomplishing any complex task
                    involving design, manufacture and commissioning of mechanical, electrical and
                    electronical equipment. We design, develop, build, install, program, commission and
                    maintain control systems that processes making facilities operate more effectively,
                    with lower cost and improved quality.</p>
            <br>
            <a href="#">Saznaj više</a>
        </div>
        <hr class="poslovi-hr-gornja">
        <div id="trigger2" class="spacer s0"></div>
        <div id="trigger1"></div>
        <div class="poslovi" id="reveal1">
            <div class="lijevo1">
                <h3>Brodogradnja</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nobis illum dolor ut debitis asperiores soluta quod necessitatibus, repellendus reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus in molestias dolor velit similique perferendis mollitia doloribus sit, libero eius.</p>
                <br>
                <p>Usluge:</p>
                <ul>
                    <li>Distribucija električne energije</li>
                    <li>Sustavi nadzora i upravljanja električnom energijom</li>
                    <li>Brodska automatizacija i upravljanje</li>
                    <li>Telemetrija i daljinski SCADA softver</li>
                </ul>
            </div>
            <div class="desno1">
                <img src="images/oob4.jpg" alt="">
            </div>
            <div class="lijevo2">
                <img src="images/cimos.jpg" alt="">
            </div>
            <div class="desno2">
                <h3>Industrija</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nobis illum dolor ut debitis asperiores soluta quod necessitatibus, repellendus reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus in molestias dolor velit similique perferendis mollitia doloribus sit, libero eius.</p>
                <br>
                <p>Usluge:</p>
                <ul>
                    <li>Distribucija električne energije</li>
                    <li>Automatizacija postrojenja ili dijelova postrojenja</li>
                    <li>Instaliranje i spajanje kabineta za distribuciju el. energije i automatizaciju</li>
                </ul>
            </div>
        </div>
        <hr class="poslovi-hr-donja">
        <div class="partneri">
            <h1>Naši partneri</h1>
            <div class="partneri-loga">
                <img src="images/Siemens-Logo.png" alt="">
                <img src="images/comap-logo.png" alt="">
                <img src="images/logo-schneider-electric-1.png" alt="">
                <img src="images/scam-logo.png" alt="">
                <img src="images/imc-logo.png" alt="">
            </div>
        </div>
        <br>
        <div class="klijenti">
            <h1>Naši klijenti</h1>
            <div class="klijenti-loga">
                <img src="images/viktor_lenac_logo.png" alt="">
                <img src="images/cimos-logo.png" alt="">
                <img src="images/brodosplit-logo.jpg" alt="">
                <img src="images/scam-logo.png" alt="">
            </div>
        </div>
        <footer>
            Copyright@Interval d.o.o.
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js" integrity="sha256-2p2tRZlPowp3P/04Pw2rqVCSbhyV/IB7ZEVUglrDS/c=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js" integrity="sha256-XBVALc3QsDSQiDtiaBwNZ2rxCJTHzlUhhlDQ84J8bw8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" integrity="sha256-+9YNuItWuR4sbqeaNiJOxG0BvptYz4fbUXbIZoH5Jwo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js" integrity="sha256-VV47uJSoHZUeiBcCs3FcBOQLMn++yeG/zqZvaUkvGZM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js" integrity="sha256-nuhNsfXzBFR6G1lKP8bK77dakkQDqdHcQ4OCFZvk6Qo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js" integrity="sha256-LBjlnpPrM6Aig8LDFc9PJctPHLGUc6RaUvnmXE4hV5Y=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/BezierPlugin.min.js" integrity="sha256-5jxCMRC1PYU02qJn+fj+DPuxcQZCh0DR8GRwi4iKoRc=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script>
        var controller = new ScrollMagic.Controller();
        
        new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".lijevo1", "lijevo1-animacija") // add class toggle
						.addTo(controller);
                        
        new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".desno1", "desno1-animacija") // add class toggle
						.addTo(controller);
                        
        new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".lijevo2", "lijevo2-animacija") // add class toggle
						.addTo(controller);
                        
        new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".desno2", "desno2-animacija") // add class toggle
						.addTo(controller);
                        
        new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".poslovi-hr-gornja", "poslovi-hr-gornja-animacija") // add class toggle
						.addTo(controller);
        
        new ScrollMagic.Scene({
							triggerElement: ".desno2",
							triggerHook: 0.5,
							offset: 50, // move trigger to center of element
							reverse: false // only do once
						})
						.setClassToggle(".poslovi-hr-donja", "poslovi-hr-donja-animacija") // add class toggle
						.addTo(controller);
    </script>
</body>
</html>