@include('bootStrap')
<style>
  .carousel-item {
  height: 100vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption {
  bottom: 270px;
}

.carousel-caption h5 {
  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 25px;
}

.carousel-caption p {
  width: 75%;
  margin: auto;
  font-size: 18px;
  line-height: 1.9;
}

.navbar-light .navbar-brand {
  color: #fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 2px;
}

.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
  color: #fff;
}

.navbar-light .navbar-nav .nav-link {
  color: #fff;
}

.navbar-toggler {
  background: #fff;
}

.navbar-nav {
  text-align: center;
}

.nav-link {
  padding: .2rem 1rem;
}

.nav-link.active,.nav-link:focus{
  color: #fff;
}

.navbar-toggler {
  padding: 1px 5px;
  font-size: 18px;
  line-height: 0.3;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #fff;
}






/* ignore the code below */


.link-area
{
  position:fixed;
  bottom:20px;
  left:20px;  
  padding:15px;
  border-radius:40px;
  background:tomato;
}
.link-area a
{
  text-decoration:none;
  color:#fff;
  font-size:25px;
}

@import url("https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap");

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  font-size: 48.5%;
}



.grids {
  max-width: 136rem;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-column-gap: 3rem;
  grid-row-gap: 3rem;
}

.card-one {
  grid-column: 1/4;
}

.card-two {
  grid-column: 1/4;
}

.card-three {
  grid-column: 1/4;
}

.card-four {
  grid-column: 1/4;
}

.card-five {
  grid-column: 1/4;
}

.card-six {
  grid-column: 1/4;
}

.card-seven {
  grid-column: 1/4;
}

.card {
  perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 25rem;
  width: 100%;
  transition: all ease-in-out 400ms;
  cursor: pointer;
}

.card:hover {
  transform: scale(1.05);
}

.card:active {
  transform: translateY(-1px);
}

.card__side {
  transition: all 0.8s ease;
  color: white;
  font-size: 2rem;
  position: absolute;
  top: 0;
  left: 0;
  height: 25rem;
  width: 100%;
  backface-visibility: hidden;
  box-shadow: 2px 4px 16px rgba(0, 0, 0, 0.4);
  border-radius: 8px;
}

.card__side--front {
  background-color: #2196f3;
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.card__side--back {
  background-color: #303f9f;
  transform: rotateY(180deg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.showGreen {
  transform: rotateY(-180deg);
}

.showRed {
  transform: rotateY(0);
}

.text-box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
}

.text-box-top {
  font-size: 2.2rem;
  text-shadow: 2px 2px 10px #0000006c;
  font-weight: 400;
}

.text-box-middle {
  font-size: 5.5rem;
  font-weight: 700;
  text-shadow: 2px 2px 10px #0000006c;
}

.text-box-lower {
  font-size: 2rem;
  text-shadow: 2px 2px 10px #0000006c;
  font-weight: 400;
}

.heading {
  transition: all 0.6s linear;
}

.hide {
  visibility: hidden;
  opacity: 0;
}

.show {
  visibility: visible;
  opacity: 1;
}

#front-1 {
  background-image: linear-gradient(
      rgba(204, 30, 88, 0.6),
      rgba(20, 20, 20, 0.6)
    ),
    url("https://wallpaper.dog/large/20563721.jpg");
}


#front-7 {
  background-image: linear-gradient(
      rgba(31, 136, 168, 0.767),
      rgba(14, 46, 65, 0.9)
    ),
    url("https://images.unsplash.com/photo-1620266757065-5814239881fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHJhZGluZ3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
}

/* Back */

#back-1 {
  background-image: linear-gradient(
      rgba(204, 30, 88, 0.6),
      rgba(20, 20, 20, 0.6)
    ),
    url("https://wallpapers.com/images/featured/forex-v9gj4lh8tr1xnbyp.jpg");
  }

#back-7 {
  background-image: linear-gradient(
      rgba(31, 136, 168, 0.767),
      rgba(14, 46, 65, 0.9)
    ),
    url("https://cdn.pixabay.com/photo/2021/08/08/15/06/stock-market-6531146_1280.jpg");
}

@media screen and (min-width: 1024px) {
  html {
    font-size: 62.5%;
  }

  .grids {
    max-width: 136rem;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-column-gap: 3rem;
    grid-row-gap: 3rem;
  }

  .card-one {
    grid-column: 1/3;
  }

  
  .card-seven {
    grid-column: 2/4;
  }
}
.site-footer
{
  background-color:#26272b;
  padding:30px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
.shrink {
  transform: translateY(-100%);
  transition: transform 0.3s;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shrink">
  <div class="container">
    <a class="navbar-brand" href="#">Real Forex Funds</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1265&q=80" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Affiliated Programs</h5>
        <p>Are you a savvy affiliate looking to make serious money? </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1515343480029-43cdfe6b6aae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1228&q=80" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Affiliated Programs</h5>
        <p>Look no further than the Rff Affiliate Program! With our amazing commission and salary packages, 
just use your affiliate email to help out real traders open an account and start earning commission immediately. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://w.forfun.com/fetch/0b/0bc739968eeb709d8eebbdb132141cb8.jpeg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Affiliated Programs</h5>
        <p>Start earning today! So why wait? Get started today!
</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br><br><br><br>


<!--- ignore the code below-->



<!-- <div style="padding: 40px 25px 25px 25px;">
<div style="padding: 40px 25px 25px 25px;"> -->
    <div class="grids">
      <div class="card-one">
        <div class="card">
          <div class="card__side card__side--front" id="front-1">
            <div class="text-box">
              <h3 class="text-box-top">Affiliated Program</h3>
              <h1 class="text-box-middle">How It Works?</h1>
              <h3 class="text-box-lower">By Joining Our Affiliate Program, You Can Get Commission plus Salary. Have Any Doubt About How It Works? Then The Below Text Will Help You To Understand The Process.
First, You Have To Apply For Our Affiliate Program.
Then Share Our Packages With Traders Or Anybody You Can.
</h3>
            </div>
          </div>
          <div class="card__side card__side--back" id="back-1">
            <div class="text-box">
              <h3 class="text-box-top"></h3>
              <h1 class="text-box-middle"></h1>
              <h3 class="text-box-lower">If They Purchase Any Of Our Packs and give your registered email in affiliate email field. Then You Will Get A Commission & Salary. That Was The Referring Process. Now The Question Is How Much You'll Get Paid?
                 Below You Will Found The Answer RF funded affiliate program to earn high commissions. 
                 Earn up to 5% on every sale you make.</h3>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card-seven">
        <div class="card">
          <div class="card__side card__side--front" id="front-7">
            <div class="text-box">
              <h3 class="text-box-top"></h3>
              <h1 class="text-box-middle">Awesome!</h1>
              <h3 class="text-box-lower">That Was The Referring Process. Now The Question Is How Much You'll Get Paid? Below You Will Found The Answer

RFF funded affiliate program to earn high commissions. Earn up to 5% on every sale you make.

Enjoy the most powerful affiliate program in the market, with a guaranteed salary package that pays.</h3>
            </div>
          </div>
          <div class="card__side card__side--back" id="back-7">
            <div class="text-box">
              <h3 class="text-box-top"></h3>
              <h1 class="text-box-middle"></h1>
              <h3 class="text-box-lower">1% of your total sales will be added to your salary, giving you a steady income every month.(salary start after compelet $30,000 sales)

Surprise gifts and rewards given out periodically.

Monthlypayments so you can start enjoying your rewards sooner.

Make more than $1000 per month with an easy and secure way of making money through our affiliates </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <script>
      var flipCheck = 0;

function rotateCards() {
  if (flipCheck === 0) {
    

    document.getElementById("front-1").classList.add("showGreen");
    document.getElementById("back-1").classList.add("showRed");

    flipCheck = 1;

    

      setTimeout(function () {
        

        document.getElementById("front-7").classList.add("showGreen");
        document.getElementById("back-7").classList.add("showRed");
      }, 500);
    
  } else {
    document.getElementById("front-1").classList.remove("showGreen");
    document.getElementById("back-1").classList.remove("showRed");

    flipCheck = 0;

    

    
      
      setTimeout(function () {
        document.getElementById("front-7").classList.remove("showGreen");
        document.getElementById("back-7").classList.remove("showRed");

      
    }, 500);
  }
}

setInterval(rotateCards, 3000); // Time in milliseconds

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

      <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">1. Trading small accounts, and attempting to achieve large profits (undercapitalization). 
              <i>2.Fear of losingyour own money. Let’s face it, most of us don’t have money to truly risk and this creates added pressure.
 </i> 3. Psychological pressures to make unrealistic returns. <i>4. Lack of discipline (no set in stone rules) Growth limitations due to lack of funding options.</i><i>5. Insufficient support from others and a lack of community or trading information.</i></p>
          </div>

          

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
         <a href="#">Real Forex Funds</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>