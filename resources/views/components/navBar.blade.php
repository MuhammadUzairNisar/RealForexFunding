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
    <a href="{{url('/whyRff')}}">
      Why RFF
    </a>
    <a href="{{url('/tradingRules')}}">
    Trading Rules
    </a>
    <a href="{{url('/affiliatedPrograms')}}">
    Affiliate Program
    </a>
    <a href="{{url('/FAQs')}}">
      FAQs
    </a>
	<!-- <a href="#">
      Contact
    </a> -->
  </div>
  <div class="navbar-right">
    <a href="javascript:void(0);" class="icon" onclick="showMenu()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

