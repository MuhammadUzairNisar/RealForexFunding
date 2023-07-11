@include('.components.navBar')
<style>
    body {
      background-color: #f2f2f2;
    }
    .card-title{
        font-size : 1.875rem;
        line-height: 2.25rem;
        font-weight: bold;
    }
    .custom-button {
    width: 160px;
    margin-left: 10px;
  }
    
  </style>
<div class="row" style="margin-top: 10px;padding: 25px 25px 0px 100px;">
  <div class="col-md-6">
    <!-- Left side with text -->
    <div>
      <!-- <h1>Be Your Own Hero</h1> -->
      <h2>We Fund</h2>
      <h2>We Trade!</h2>
      <h1>
      <span style="color: #A761FF;">BE YOUR OWN HERO</span>
</h1>
<a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">BUY INSTANT ACCOUNT</a>
    </div>
  </div>
  <div class="col-md-6">
    <!-- Right side with carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1629339942248-45d4b10c8c2f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1612178991541-b48cc8e92a4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1563986768711-b3bde3dc821e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=868&q=80" alt="Third slide">
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
  </div>
</div>

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

<div style="padding: 40px 25px 25px 25px;">
  <div class="card" style="margin-top: 50px; border-radius: 50px;">
  <center>
    <div class="card-body">
      <h5 class="card-title">Rise to the Challenge</h5>
      <button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="	fas fa-chart-pie" aria-hidden="true"></i>CFDs
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-file-signature" aria-hidden="true"></i>FUTURES
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fab fa-btc" aria-hidden="true"></i>CRYPTOS
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-chart-line" aria-hidden="true"></i>STOCKS
</button>
<br>
<br>

<div class="container">
<div class="row">
<span class="border border-warning"></span>
<div class="card" style="width: 17rem;">
<span class="border border-warning"></span>
  <div class="card-body">
    <h5 class="card-title text-warning">Lite</h5>
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $10,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <h2>$99</h2>
    <button type="button" class="btn btn-outline-warning">BUY NOW</button>
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$1,000 (10%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
    <b>Minimum Trading Days</b>
    <p class="card-text">3 Days</p>
  </div>
  <span class="border border-warning"></span>
  </div>
  
   
  <span class="border border-primary"></span>
    <div class="card" style="width: 17rem;">
    <span class="border border-primary"></span>
  <div class="card-body">
    <h5 class="card-title text-primary">Standard</h5>
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $20,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <h2>$179</h2>
    <button type="button" class="btn btn-outline-primary">BUY NOW</button>
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">2,000 (10%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
    <b>Minimum Trading Days</b>
    <p class="card-text">3 Days</p>
  </div> 
  <span class="border border-primary"></span>
  </div>
    
  <span class="border border-info"></span>
    <div class="card" style="width: 18rem;">
    <span class="border border-info"></span>
  <div class="card-body">
    <h5 class="card-title text-info">Exective</h5>
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $50,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <h2>$399</h2>
    <button type="button" class="btn btn-outline-info">BUY NOW</button>
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$5,000 (10%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
    <b>Minimum Trading Days</b>
    <p class="card-text">3 Days</p>
  </div> 
  <span class="border border-info"></span>
  </div>
   
  <span class="border border-success"></span>
    <div class="card" style="width: 18rem;">
    <span class="border border-success"></span>
  <div class="card-body">
    <h5 class="card-title text-success">VIP</h5>
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $100,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <h2>$999</h2>
    <button type="button" class="btn btn-outline-success">BUY NOW</button>
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$8,000 (8%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
    <b>Minimum Trading Days</b>
    <p class="card-text">3 Days</p>
  </div> 
  <span class="border border-success"></span>
</div>
<span class="border border-success"></span>
  </center>
    <center><a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Start</a>
    </center>
  </div>
   

  <div style="padding: 40px 25px 25px 25px;">
  <div class="card" style="margin-top: 50px; border-radius: 50px;">
  <div style="padding: 50px 25px 25px 25px;">

  
  <div class="container">
  <div class="lg:max-w-2xl lg:pl-16">
<h1 class="card-title">The Power of Multi-Asset Trading</h1>
<div style="padding: 40px 25px 25px 25px;">
<div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="btn-group-vertical flex-container">
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-chart-pie" aria-hidden="true"></i>CFDs
</button>
<br>
<br>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-file-signature" aria-hidden="true"></i>FUTURES
</button>
<br>
<br>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fab fa-btc" aria-hidden="true"></i>CRYPTOS
</button>
<br>
<br>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-chart-line" aria-hidden="true"></i>STOCKS
</button>
</div>
      </div>
      <div class="col-sm-4">
      <video width="400" height="385"  autoplay="" loop="" muted="" 
src="https://cdn.thetradingpit.com/pages/homepage/trading-side-video.mp4">
</video>

<p> Trade currencies on the global Forex CFDs market, which offers plenty of opportunities for those who understand its volatility.</p>
<section class="section-challenge lg:bg-gray-200">
<a href="#">Learn more -></a> 
</div>
<center>
</div>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>

<section class="section-challenge lg:bg-gray-200">
<center>
<div style="padding: 40px 25px 25px 25px;">
<div class="container">
  <h1>
  Get started in 3 steps
  </h1>
  
  <img class="mt-6" src="https://cdn.thetradingpit.com/pages/homepage/start-side-image-en-us.png" alt="">
  <br>
  <br>
 <a href="#" class="btn btn-primary">Get Started!</a></center>
 <center>
  <div style="padding: 25px 25px 25px 25px;">
  <div class="container">
    <div class="row">
  <div class="card bg-dark" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 25px 25px 25px 25px;">
                            <h5 class="text-white">CHOOSE A TRADING PROGRAM</h5>
                            <p class="text-white">To become a funded trader, you must undergo an evaluation challenge to show trading consistency and risk management qualities</p>
                        </div>
                    </div>
</div>
</div>


<div class="container">
    <div class="row">
  <div class="card bg-dark" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 25px 25px 25px 60px;">
                            <h5 class="text-white">PASS THE CHALLENGE</h5>
                            <p class="text-white">Step up your trading program with simple and clear rules. As you move through your plan’s steps, the possibilities increase</p>
                        </div>
                    </div>
</div>
</div>
<div class="container">
    <div class="row">
  <div class="card bg-dark" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 25px 25px 25px 60px;">
                            <h5 class="text-white">FUNDED PARTNER</h5>
                            <p class="text-white">You will become a funded partner of The Trading Pit with $5M in funding to keep up to 80% of your profits. Let’s get started!</p>
                        </div>
                    </div>
</div>
</div>
</div>
</center>
<div style="padding:80px 25px 25px 25px;">
<div class="container">
<div style="padding:25px 25px 25px 25px;">
<!-- <div class="card" style="margin-top: 25px; border-radius: 50px;">  -->
    <div style="padding: 25px 25px 25px 25px;">
    <center>
      <h1><span style="color: #000000;">How we empower you</span></h1>
    
  <!-- <h1 class="card-title">How we empower you</h1> -->
  </center>
<div style="padding:25px 25px 25px 25px;">
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">
        <img style= "width: 100%; height: 100%"  src="https://images.unsplash.com/photo-1468971050039-be99497410af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" class="rounded" alt="Rounded Image">
        <div class="carousel-caption">
              <p>At The Trading Pit, I have not only learned how to trade but also how to manage risk.
                 It’s awesome to work with a team that genuinely cares about your success.<p>
            </div>
      </a>
</div>
<div class="col-lg-6 col-md-6 col-xs-6">
        <img style= "width: 100%; height: 100%" src="https://images.unsplash.com/photo-1620228885847-9eab2a1adddc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80" class="rounded" alt="Rounded Image">
        <div class="carousel-caption">
              <p>The Trading Pit set-up is truly ingenious. They care about their traders and provide invaluable resources.
                 I’ve surpassed even my own expectations. I am a way better trader today because of it.<p>
            </div>
      </a>
</div>





<div class="card" style="margin-top: 80px; border-radius: 50px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
    <div>
  
    
                                <h5 class="fa fa-check-square">   BUILT FOR YOU</h5>
                                <p>Challenges, Multi-asset trading, and top-tier brokers adapted to you.</p>
                            
                                <h5 class="fa fa-check-square">   FAST PAYOUTS</h5>
                                <p>Instant withdrawal of profits. Get your money on the spot!</p>
                            
                                <h5 class="fa fa-check-square">   DIVERSE LEARNING</h5>
                                <p>Build your trading skills with targeted resources and experienced mentors.</p>
                           
                                <h5 class="fa fa-check-square">   SIMPLE RULES</h5>
                                <p>Clear steps and criteria. What you see is what you get.</p>
                           
    </div>
  </div>
  <div class="col-md-6">
    <div>
      <img alt="Web Studio" class="img-fluid" src="https://cdn.thetradingpit.com/pages/homepage/how-points-card-en-us.png">
    </div>
  </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<center><h2 class="card-title">Steps to Funding</h2>  </center>
<center>
    <div class="card-body">
      <button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-chart-pie" aria-hidden="true"></i>CFDs
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-file-signature" aria-hidden="true"></i>FUTURES
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fab fa-btc" aria-hidden="true"></i>CRYPTOS
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-chart-line" aria-hidden="true"></i>STOCKS
</button>
<div style="padding: 25px 25px 25px 25px;">
<div class="container">
  <div class="row">
<video class="border border-warning" autoplay="" loop="" muted="" width="300" height="200">
  <source src="https://cdn.thetradingpit.com/pages/homepage/journey-challenge-video.mp4" type="video/mp4">
</video>
    
<div style="padding: 25px 25px 25px 25px;">
  <div class="card bg-warning" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 50px 25px 25px 50px;">
<div class="text-left lg:px-8 py-8 lg:border-4 lg:border-white lg:rounded-2xl w-10/12 lg:w-8/12">
        <!-- <h6 class="flex font-bold text-xl pb-4 lg:pb-4 lg:pt-4 lg:px-8 items-center"> -->
         <center><h1>&#49;</h1>
                        <p><strong>CHALLENGE</strong></p>
        <p>Choose the program that fits you. The better you become, the more funds you unlock. Grow your account and start earning!</p>
        </center> 
        <ul class="list-check-mark-primary-300 pl-6 lg:pl-12">
                            <li class="text-white">Simple rules</li>
                            <li class="text-white">Flexilbe Trading</li>
                            <li class="text-white">Overnight &amp; weekend trades on Forex</li>
                            <li class="text-white">One-time fee 100% refundable</li>
                    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<div class="container">
<div style="padding: 25px 25px 25px 25px;">
  <div class="row">
<video class="border border-primary" autoplay="" loop="" muted="" width="300" height="200">
  <source src="https://cdn.thetradingpit.com/pages/homepage/journey-profit-video.mp4" type="video/mp4">
</video>
    
<div style="padding: 25px 25px 25px 25px;">
  <div class="card bg-primary" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 50px 25px 25px 50px;">
<div class="text-left lg:px-8 py-8 lg:border-4 lg:border-white lg:rounded-2xl w-10/12 lg:w-8/12">
          <center><h1>&#50;</h1>
                        <p><strong>PROP TRADING</strong></p>
        <p>Your account can grow to $5M funding power with no deadline to hit targets. Profits keep growing as we do!</p>
        </center>
        <ul class="list-check-mark-primary-300 pl-6 lg:pl-12">
                            <li class="text-white">Scale up to $5M</li>
                            <li class="text-white">Fast Payouts at each level</li>
                            <li class="text-white">Earn up to $562,400</li>
                    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
<div style="padding: 25px 25px 25px 25px;">
  <div class="row">
<video class="border border-success" autoplay="" loop="" muted="" width="300" height="200">
  <source src="https://cdn.thetradingpit.com/pages/homepage/journey-certified-video.mp4" type="video/mp4">
</video>
    
<div style="padding: 25px 25px 25px 25px;">
  <div class="card bg-success" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 50px 25px 25px 50px;">
<div class="text-left lg:px-8 py-8 lg:border-4 lg:border-white lg:rounded-2xl w-10/12 lg:w-8/12">
        <center><h1>&#51;</h1>
                        <p><strong>THE TRADING PIT CHAMPION</strong></p>
        <p>Your skills are fully funded by The Trading Pit. No more risking your money! Trade with our funds and even become a professional fund manager if you want!</p>
        </center>
        <ul class="list-check-mark-primary-300 pl-6 lg:pl-12">
                            <li class="text-white">Fully Funded</li>
                            <li class="text-white">Keep up to 80% of profits</li>
                            <li class="text-white">Pursue a professional career</li>
                    </ul>
                    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div style="padding: 25px 25px 25px 25px;">
    <center>
    <a href="#" class="btn btn-success">Learn More</a>
    </div>
    
  
  <div class="card" style="margin-top: 10px; border-radius: 30px;">
    <div style="padding: 50px 25px 25px 50px;">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/atas-v2.svg" alt=""width="100" height="200">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/quantower.svg" alt="">

    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/fxflat-bank.svg" alt="">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/gbe-borkers-logo.svg" alt="">
    
    </center>
    </div>
    </div>
    </div>
    </div>
    </div>


<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #454545"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #151515"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Real Forex Funds</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
          At Real Forex Funds platform, we understand the importance of staying ahead in the fast-paced world of trading. That's why we offer a comprehensive range of cutting-edge tools and features to help you make informed decisions and maximize your trading potential.
    
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">FOREX Product #1</a>
          </p>
          <p>
            <a href="#!" class="text-white">FOREX Product #2</a>
          </p>
          <p>
            <a href="#!" class="text-white">FOREX Product #3</a>
          </p>
          <p>
            <a href="#!" class="text-white">FOREX Product #4</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> Lahore, 05499, PK</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 92 123 456 789</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2023 Copyright:
    <a class="text-white" href="https://realforexfunds.com/"
       >Real Forex Funds</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->