@include('bootStrap')
@include('.components.navBar')
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

</style>


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
 @include('.components.fooTer')