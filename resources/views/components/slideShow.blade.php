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

.caption h6 {
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

</style>


<div id="slideshow-container" class="slideshow-container">
  <div class="slide-item bgimg" style="background-image: url('https://images.unsplash.com/photo-1642790106117-e829e14a795f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1230&q=80');">
    <div class="caption">
      <h6>
      BE YOUR OWN HERO!
      </h6>
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
      <h6>
      We Fund We Trade!
      </h6>
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
      <h6>
      Set Your Goals!
      </h6>
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
