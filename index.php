<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cole Geerts&#39; Works</title>
<meta name="theme-color" content="#191919" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i|Source+Sans+Pro" rel="stylesheet">
</head>
<body>
<canvas id="canvas"></canvas>
<section id="onTop">
    <header id="mainHeader">
        <div id="logo"><img src="images/logo.svg"></div>
        <nav id="mainNav">
            <a class="mainNavButton" href="#">Home</a>
            <a class="mainNavButton" href="#">About</a>
            <a class="mainNavButton" href="#">Library</a>
            <a class="mainNavButton" href="#">Resume</a>
            <a class="mainNavButton" href="#">Contact</a>
        </nav>
        <a class="mainNavButton" id="stickyTop" href="#">^Top^</a>
    </header>
    <section id="container">
        <div id="typed">
            <span class="moving"></span>
        </div>
    </section>
    <a id="downRockerButton">
        <div id="downRockerHold">
            <div id="downRocker">
                <img src="images/rocker.png">
            </div>
        </div>
    </a>
</section>
<section id="underneath">
    <div id="switcher">
        <div id="currentCanvas"></div>
        <div id="currentTitle">Bubble Background</div>
        <div id="canvasSwitcher">
            <a href="#"><div class="canvasButton" id="canvas1"></div></a>
            <a href="#"><div class="canvasButton" id="canvas2"></div></a>
            <a href="#"><div class="canvasButton" id="canvas3"></div></a>
        </div>
    </div>
    <div id="about">
        <h2>What I Do</h2>
        <p class="white">I&#39;m Cole Geerts and I am a Web Developer out of London Ontario. I've been learning and refining my skills for a little over a year now and have a lot of active projects that I am interested in. Below are my project quick-link cards that thread off to different parts of the internet that I am involved in. I primarily write small projects on my <a href="https://codepen.io/ColeyG/">codepen</a> and <a href="https://github.com/ColeyG">github</a> accounts respectively but you'll see my main muses below. On top of that you'll see some of my work I&#39;ve collaborated on. Please take a look and do get in touch! Keep in mind I <span class="italics">am</span> accepting clients and <span class="italics">will</span> work on your projects so do not hesitate to talk about your ideas.</p>
    </div>
    <div id="library">
        <h2 class="black">My Projects</h2>
        <section class="cardBanner">
            <!--Start of the card-->
            <a href="#">
              <div class="card">
                <div class="cardImg"><img src="images/canvas.png"></div>
                <h2 class="cardTitle">title</h2>
                <h2 class="cardSubTitle">subtitle description goes here, explain the project within four lines minumum and lowercase.</h2>
                <h2 class="cardDate">august, 2009</h2>
              </div>  
            </a>
            <!--End of the card-->
          </section>
    </div>
    <div id="resumeCon">
        <h2>Resum&#233</h2>
        <p class="white">My work and study comprises of all things vaguely &#39;full stack&#39; as I have a wide reach of knowledge from CSS/SASS, JS, PHP, and beyond. While most of my work focuses on the entire development process I like to work with javascript and its plethora of libraries and frameworks like node.js. On top of that I also like to stay frequent with the CSS spec studying CSS-flexbox and CSS-grid on my own time. These prices of tech in conjunction ensure that I am able to assemble great pieces of web tech alone or in a group. Take a full look down below.</p>
        <a href="resume.html"><p>See my full Resum&#233 here</p></a>
    </div>
    <div id="contactCon">
        <h2 id="letsTalk" class="black">Let&#39;s talk:</h2>
        <div class="formWrapper">
        <form class="form" name="contact" method="post" action="form.php">
            <p class="italics">first name:</p>
            <input placeholder="John" class="input" type="text" name="first_name" maxlength="100" size="30">
            <p class="italics">last name:</p>
            <input placeholder="Doe" class="input" type="text" name="last_name" maxlength="100" size="30">
            <p class="italics">email:</p>
            <input placeholder="email123@gmail.com" class="input" type="text" name="email" maxlength="150" size="40">
            <p class="italics">message:</p>
            <textarea placeholder="What is your perogative?" class="input" type="message" name="message" maxlength="1500" cols="30" rows="8"></textarea>
            <input id="submitButton" class="input" type="submit" value="Submit" name="submitBut">
        </form>
        </div>
    </div>
    <footer id="footer">
        <a href="https://github.com/ColeyG"><div class="social"><img src="images/git.png"></div></a>
        <a href="https://codepen.io/ColeyG/"><div class="social"><img src="images/codepen.png"></div></a>
        <a href="https://twitter.com/ColeyGeerts"><div class="social"><img src="images/twitter.svg"></div></a>
    </footer>
    <div id="versioning">
        <p>version 0.81 d</p>
    </div>
</section>
<script src="js/canvasCircle.js"></script>
<script src="js/typed.js"></script>
<script src="js/main.js"></script>
</body>
</html>
