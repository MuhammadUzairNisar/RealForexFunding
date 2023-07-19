@include('bootStrap')

<style>

:root {
	--red: #ff3838;
	--white: #ffffff;
	--black: #000000;
}

@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');

body, html {
	font-family: 'Ubuntu', sans-serif;
	margin: 0;
	height: 100%;
}

.navbar {
	background-color: transparent;
	padding: 30px 10px;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	margin: auto;
	max-width: 1366px;
	z-index: 99;
}

.navbar a {
	float: left;
	color: var(--white);
	text-align: center;
	text-decoration: none;
	font-size: 18px;
	font-weight: bold;
	line-height: 25px;
	padding: 12px;
}

.navbar .logo {
	font-size: 35px;
	font-weight: bold;
	text-transform: uppercase;
}

.navbar-right a:hover {
	color: var(--red);
}

.navbar-right a.active {
	color: var(--red);
}

.navbar-right a {
	transition: color 0.5s ease;
}

.navbar-right {
	float: right;
}

.navbar .icon {
	display: none;
}

.slideshow-container {
	position: relative;
	height: 100%;
}

.slide-item {
	display: none;
}

.bgimg {
	height: 100%;
	position: relative;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.bgimg::after {
	content: '\A';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.4);
}

.caption {
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	z-index: 9;
}

.caption h2 {
	color: var(--white);
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 70px;
}

.caption p {
	color: var(--white);
	font-size: 20px;
}

.caption button {
	background-color: var(--white);
	border: 2px solid var(--red);
	color: var(--red);
	padding: 10px 40px;
	font-size: 16px;
	font-weight: bold;
	text-transform: uppercase;
	border-radius: 16px;
	margin-top: 30px;
	transition: background-color 0.5s ease, color 0.5s ease;
}

.caption button:hover {
	cursor: pointer;
	color: var(--white);
	background-color: var(--red);
}

.caption button:focus {
	outline: none;
}

.dot {
	cursor: pointer;
	height: 10px;
	width: 10px;
	margin: 0 2px;
	background-color: var(--white);
	border-radius: 5px;
	display: inline-block;
	transition: background-color 0.6s ease, height 0.6s;
}

.slide-control {
	position: absolute;
	left: 30px;
	top: 50%;
	width: 10px;
	text-align: center;
}

.dot:hover {
	background-color: var(--red);
}

.dot.active {
	background-color: var(--red);
	height: 60px;
}

/* fade animation */

/* .fade {
	animation-name: fade;
	animation-duration: 1.0s;
	-webkit-animation-name: fade;
	-webkit-animation-duration: 1.0s;
} */

@keyframes fade {
	from {
		opacity: .4
	} to {
		opacity: 1
	}
}

@-webkit-keyframes fade {
	from {
		opacity: .4
	} to {
		opacity: 1
	}
}

@media screen and (max-width: 600px) {
	.navbar {
		padding: 10px;
	}
	
	.navbar .menu {
		display: none;
	}

	.navbar .icon {
		display: block;
		position: absolute;
		top: 13px;
		right: 13px;
	}

	.navbar.show {
		background: var(--black);
	}

	.navbar.show .menu {
		display: block;
		width: 100%;
	}

	.navbar.show .menu a {
		width: 100%;
	}


}
.shrink {
  transform: translateY(-100%);
  transition: transform 0.3s;
}
/* .body{
	font-family: 'Gothic A1', sans-serif;
	font-size:16px;
	}
	p{
	color:#6c6c6f;
	font-size:1em;
	}
	h1,h2,h3,h4,h5,h6{color:#323233;text-transform:uppercase;}
.navbar-brand  span{
	color: #fed136;
	font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
	color: #fff;
	font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
	padding: 1.1em 1em!important;
	font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
	border-top:3px solid #fed136;
}
.dropdown-item:hover{background-color:#fed136;color:#fff;}
nav{-webkit-transition: padding-top .3s,padding-bottom .3s;
    -moz-transition: padding-top .3s,padding-bottom .3s;
    transition: padding-top .3s,padding-bottom .3s;
    border: none;
	}
	
 .shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
}
.banner{
	background-image:url('https://images.unsplash.com/photo-1642790106117-e829e14a795f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1230&q=80');
	text-align: center;
    color: #fff;
   
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.banner-text{
	padding:200px 0 150px 0;
}
.banner-heading{
	font-family: 'Lobster', cursive;
	font-size: 75px;
    font-weight: 700;
    line-height: 100px;
    margin-bottom: 30px;
	color:#fff;
}
.banner-sub-heading{
	font-family: 'Libre Baskerville', serif;
	font-size: 30px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 50px;
	color:#fff;
}

.btn-banner{
	padding:5px 20px;
	border-radius:10px;
	font-weight:700;
	line-height:1.5;
	text-align:center;
	color:#fff;
	text-transform:uppercase;
}
.text-intro{
	width:90%;
	margin:auto;
	text-align:center;
	padding-top:30px;
}



/* mobile view */
/* @media (max-width:500px)
{
	.navbar-nav{
		background-color:#000;
		border-top:3px solid #fed136;
		color:#fff;
		z-index:1;
		margin-top:5px;
		}
	.navbar-nav .nav-item .nav-link{
	padding: 0.7em 1em!important;
	font-size: 100%;
    font-weight: 500;
    }
	.banner-text{
	padding:150px 0 150px 0;
}
.banner-heading{
	font-size: 30px;
    line-height: 30px;
    margin-bottom: 20px;
}
.banner-sub-heading{
	font-size: 10px;
    font-weight: 200;
    line-height: 10px;
    margin-bottom: 40px;
}

}

@media (max-width:768px){
	.banner-text{
	padding:150px 0 150px 0;
}
	.banner-sub-heading{
	font-size: 23px;
    font-weight: 200;
    line-height: 23px;
    margin-bottom: 40px;
}
}
.shrink {
  transform: translateY(-100%);
  transition: transform 0.3s;
} */ */

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="topnav shrink" class="navbar shrink">
  <a href="#" class="logo">
    Real Forex
    <span style="color: red">Funds</span>
  </a>
  <div class="navbar-right menu">
    <a href="#" class="active">
      Home
    </a>
    <a href="#">
      Why RFF
    </a>
    <a href="#">
    Trading Rules
    </a>
    <a href="#">
    About us
    </a>
    <a href="#">
      Contact
    </a>
  </div>
  <div class="navbar-right">
    <a href="javascript:void(0);" class="icon" onclick="showMenu()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<div id="slideshow-container" class="slideshow-container">
  <div class="slide-item bgimg" style="background-image: url('https://images.unsplash.com/photo-1642790106117-e829e14a795f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1230&q=80');">
    <div class="caption">
      <h2>
      BE YOUR OWN HERO!
      </h2>
      <p>
      Unleash the power of trading with our user-friendly platform and seize every opportunity in the market
      </p>
      <button>
        Get Instant Account
      </button>
    </div>
  </div>

  <div class="slide-item bgimg" style="background-image: url('https://images.unsplash.com/photo-1642790261487-5b7e444c0dce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1429&q=80');">
    <div class="caption">
      <h2>
      We Fund We Trade!
      </h2>
      <p>
      Empower your financial journey with our cutting-edge trading platform.
      </p>
      <button>
      Get Instant Account
      </button>
    </div>
  </div>

  <div class="slide-item bgimg" style="background-image: url('https://images.unsplash.com/photo-1642790403805-a3835434499e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1495&q=80');">
    <div class="caption">
      <h2>
      Set Your Goals!
      </h2>
      <p>
      Unlock the potential of the markets with our intuitive trading platform and seize every opportunity.
      </p>
      <button>
      Get Instant Account
      </button>
    </div>
  </div>

  <div id="slide-control" class="slide-control">
    <span class="dot" onclick="chooseSlide(0)"></span>
    <span class="dot" onclick="chooseSlide(1)"></span>
    <span class="dot" onclick="chooseSlide(2)"></span>
  </div>
</div>
<script>
  var slideIndex = 0;

showSlide();

 var timer = setInterval(showSlide, 2000);

var slideContainer = document.getElementById('slideshow-container');
var slideControl = document.getElementById('slide-control');

slideContainer.onmouseover = function() {
	clearInterval(timer);
}

slideControl.onmouseover = function() {
	clearInterval(timer);
}

slideContainer.onmouseleave = function() {
	 timer = setInterval(showSlide, 2000);
}

slideControl.onmouseleave = function() {
	 timer = setInterval(showSlide, 2000);
}

function showSlide() {
	var i;
	var slides = document.getElementsByClassName('slide-item');
	var dots = document.getElementsByClassName('dot');
	for (var i = 0; i < slides.length; i++) {
		slides[i].style.display = 'none';
	}
	for (var i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slideIndex++;
	if (slideIndex > slides.length) slideIndex = 1;
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}

function chooseSlide(n) {
	slideIndex = n;
	showSlide();
	clearInterval(timer);
}

function showMenu() {
	var topNav = document.getElementById('topnav');
	if (topNav.className === "navbar") {
		topNav.className += " show";
	} else {
		topNav.className = "navbar";
	}
}

$(document).ready(function() {
    // Check if user has scrolled down
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        // Hide the navbar
        $('.navbar').addClass('shrink');
      } else {
        // Show the navbar
        $('.navbar').removeClass('shrink');
      }
    });
  });
</script>



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<center>
