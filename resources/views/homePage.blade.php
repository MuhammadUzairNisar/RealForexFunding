@include('bootStrap')
@include('.components.navBar')
<style>
h1 { color: #B67FFA; font-family: 'Raleway',
sans-serif; font-size: 40px; font-weight: 800; line-height: 50px; margin: 0 32 0px;
  text-transform: uppercase; }

 h2 { color: black; font-family: 'Raleway',sans-serif;
  font-size: 40px; font-weight: 800; line-height: 15px; margin: 0  32px;  }

  h3 { color: black; font-family: 'Raleway',
sans-serif; font-size: 30px; font-weight: 800; line-height: 50px; margin: 0 0 0px;
  text-transform: uppercase; }

  h4 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 25px; font-weight: 800; line-height: 
    36px; margin: 24 0 24px; text-align: center; }

 h5 { color: #301934; font-family: 'Raleway',sans-serif; font-size: 43px; font-weight: 800;
       line-height: 72px; margin: 0 0 24px; text-align: center; }

h6 { color: #301934; font-family: 'Raleway',sans-serif; font-size: 20px; font-weight: 800; line-height: 
    36px; margin: 24 0 24px; }
    h7 { color: #BF40BF; font-family: 'Raleway',sans-serif; font-size: 15px; font-weight: 800; line-height: 
    10px; margin: 15 0 15px; }
    

  p { color: black; font-family:
   'Lucida Sans', Arial, sans-serif; font-size: 25px; line-height: 26px; text-indent: 0px; margin: 0 32 0px; }
   p2 { color: #B67FFA; font-family: 'Raleway',sans-serif; font-size: 18px;
     font-weight: 700; line-height: 32px; margin: 0 0 24px; }
     p3 { color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 
      18px; font-weight: 500; line-height: 32px; margin: 0 24 24px; }
   video {
    float: right;
  
}

/* button */
.glow-on-hover {
    width: 180px;
    height: 50px;
    margin: 32px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.video {
      flex: 1;
      padding: 1px;
    }
    video {
      max-width: 100%;
      height: auto;
      display: block;
    }

    .card3{
  position: relative;
  max-width: 400px;
  height: auto;
  background: white;
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
-webkit-transition: .5s;
transition: .5s;
}
.card3:hover{
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.col-sm-4:nth-child(1) .card3 ,
.col-sm-4:nth-child(1) .card1 .title .fa{
  background:white;
 
}
.col-sm-4:nth-child(2) .card3,
.col-sm-4:nth-child(2) .card3 .title .fa{
  
 
}
.col-sm-4:nth-child(3) .card3,
.col-sm-4:nth-child(3) .card3 .title .fa{
  
 
}
.card3::before{
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40%;
  background: rgba(255, 255, 255, .1);
z-index: 1;
-webkit-transform: skewY(-5deg) scale(1.5);
        transform: skewY(-5deg) scale(1.5);
}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: blck;
  font-size: 28px;
 z-index: 2;
}
.price,.option{
  position: relative;
  z-index: 2;
}
.price h4 {
margin: 0;
padding: 20px 0 ;
color: #B67FFA;
font-size: 60px;
}
.option ul {
  margin: 0;
  padding: 0;
 
}
.option ul li {
margin: 0 0 10px;
padding: 0;
list-style: none;
color: black;
font-size: 16px;
}
.card3 a {
  position: relative;
  z-index: 2;
  background: #fff;
  color : black;
  width: 150px;
  height: 40px;
  line-height: 40px;
  border-radius: 40px;
  display: block;
  text-align: center;
  margin: 20px auto 0 ;
  font-size: 16px;
  cursor: pointer;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
 
}
.card3 a:hover{
    text-decoration: none;
}
.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 12px;
}

.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 6px 12px rgba(174,4,204);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #AE04CC;
  box-shadow: 0px 10px 15px rgba(174,4,204);
  color: #fff;
  transform: translateY(-7px);
}
img {
  display: block;
  margin: left;
  width: 75%;
}
.container-1 {
  display: block;
  margin: left;

}
.card-1{
  display: block;
  margin: right;

}

    /* Optional: Add some styling to the images and container */
    .image-container {
      display: flex;
      justify-content: space-between;
      margin: 5px 0;
      
    }
    
    .image-container img {
      max-width: 45%; /* Adjust this value as needed */
      height: auto;
      border-radius: 4%;
    }

    
    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");
  
  ol {
    max-width: 350px;
    counter-reset: my-awesome-counter;
    list-style: none;
    padding-left: 40px;
  }
  ol li {
    margin: 0 0 0.5rem 0;
    counter-increment: my-awesome-counter;
    position: relative;
  }
  ol li::before {
    content: counter(my-awesome-counter);
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    position: absolute;
    --size: 32px;
    left: calc(-1 * var(--size) - 10px);
    line-height: var(--size);
    width: var(--size);
    height: var(--size);
    top: 0;
    transform: rotate(-10deg);
    background: #BF40BF;
    border-radius: 50%;
    text-align: center;
    box-shadow: 1px 1px 0 #999;
  }
  
#checkmark
{
    transform: rotate(45deg);
    height: 25px;
    width: 14px;
    
    border-bottom: 5px solid purple;
    border-right: 5px solid purple;
}


@media only screen and (max-width: 768px) {
    /* Adjust font sizes for smaller screens */
    h1 { font-size: 32px; line-height: 40px; }
    h2 { font-size: 32px; line-height: 15px; }
    h3 { font-size: 24px; line-height: 40px; }
    h4 { font-size: 20px; line-height: 28px; }
    h5 { font-size: 36px; line-height: 60px; }
    h6 { font-size: 16px; line-height: 28px; }
    h7 { font-size: 12px; line-height: 8px; }
    p { font-size: 18px; line-height: 20px; }
    p2 { font-size: 16px; line-height: 28px; }
    p3 { font-size: 16px; line-height: 28px; }
  }
  @media only screen and (max-width: 600px) {
    /* Adjust layout for smaller screens */
    .video {
      float: none;
      display: block;
      margin: 0 auto;
    }

    /* Add responsiveness to the .card3 */
    .card3 {
      max-width: 100%;
      margin: 0 12px;
    }
  }
 #myImage {
        height: 500px; /* Set the desired height here */
        width: 600px;  /* Set the desired width here */
    }
    #myImage1 {
        height: 444px; /* Set the desired height here */
        width: 600px;  /* Set the desired width here */
    }  
</style>


<div style="padding: 0px 25px 25px 25px;">
</div>
<div class="row">
  <div class="col-md-6 ">
    <div>
  <h2>We Fund,</h2>
  <br>
  <h2>You Trade!</h2>
  <br>
    <h1>BE YOUR OWN HERO</h1>
    <br>
    <p>$5M funding and up to 80% profit share</p>
    <br>
    
    <button class="glow-on-hover" type="button">Get Started</button>                              
                           
    </div>
  </div>
  
  <div class="col-md-6 ">
    <div>
    <video width="600" height="800" autoplay="" loop="" muted="" 
src="https://cdn.thetradingpit.com/pages/homepage/hero-side-video-en-us-hq.mp4">
</video>

      
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
</div>

<div style="background-color:lightgray;">
<center>
<div style="padding: 2px 25px 25px 25px;">


<div class="card" style="margin-top: 50px; border-radius: 20px;">
  <div class="container">
    <div class="lg:max-w-2xl lg:pl-16">
      <div style="padding: 40px 25px 25px 40px;">
        <h2 class="card-title">Rise to the Challenge</h2>
        <br>
        <p2>THE POWER OF MULTI-ASSET TRADING</p2>
      </div>

      <div class="container-fluid">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 1</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>49</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $5,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$500 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">60 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 2</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>69</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $7,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$700 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">75 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 3</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>89</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $8,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$800 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">80 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-sm-4" style="margin-top: 40px;">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 4</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>119</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $12,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$1,200 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">100 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-sm-4" style="margin-top: 50px;">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 5</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>149</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $15,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$1,500 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">120 Days</p1>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

      <div style="padding: 40px 25px 25px 25px;">
        <center>
          <button class="glow-on-hover" type="button">Get Started</button>
        </center>
      </div>
    </div>
  </div>
</div>

 
  
  
  </section>

  
<div class="card" style="margin-top: 50px; border-radius: 20px;">
  <div class="container">
    <div class="lg:max-w-2xl lg:pl-16">
      <div style="padding: 40px 25px 25px 40px;">
        <h2 class="card-title">Rise to the Challenge</h2>
        <br>
        <p2>THE POWER OF MULTI-ASSET TRADING</p2>
      </div>

      <div class="container-fluid">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 1</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>49</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $5,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$500 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">60 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 2</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>69</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $7,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$700 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">75 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-sm-4">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 3</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>89</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $8,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$800 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">80 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-sm-4" style="margin-top: 40px;">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 4</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>119</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $12,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$1,200 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">100 Days</p1>
          <br>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-sm-4" style="margin-top: 50px;">
      <div class="card3" style="padding: 40px 25px 25px 40px;">
        <div class="title">
          <h2>CARD 5</h2>
        </div>
        <div class="price">
          <h4><sup>$</sup>149</h4>
        </div>
        <button class="glow-on-hover" type="button">BUY NOW</button>
        <br>
        <div class="option">
          <p1 class="card-text">CHALLENGE ACCOUNT BALANCE: $15,000</p1>
          <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
          <p1 class="card-text">One-Time Payment Only</p1>
          <br>
          <b>Profit Target</b>
          <br>
          <p1 class="card-text">$1,500 (10%)</p1>
          <br>
          <b>Total Challenge Duration</b>
          <br>
          <p1 class="card-text">120 Days</p1>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

      <div style="padding: 40px 25px 25px 25px;">
        <center>
          <button class="glow-on-hover" type="button">Get Started</button>
        </center>
      </div>
    </div>
  </div>
</div>

 
  
  
  </section>









  





  
  













  <div class="card" style="margin-top: 80px; border-radius: 20px;">
  <div style="padding: 80px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6  ">
    <div>
  
    
    <h3 class="card-title">The Power of Multi-Asset Trading</h3>
      <br>
        <div class="btn-group-vertical flex-container">
        <div class="wrap">
  <button class="button">CFDs</button>
</div>
<br>
<br>
<div class="wrap">
  <button class="button">FUTURES</button>
</div>
    </div>
  </div>
  </div>
  <div class="col-md-5">
    <div>
    <video width="400" height="550"  autoplay="" loop="" muted="" 
src="https://cdn.thetradingpit.com/pages/homepage/trading-side-video.mp4">
</video>

    </div>
  </div>
    </div>
  </div>
  </div>





  
  </div>
  <div style="padding: 50px 25px 25px 25px;">
  <div class="container-1">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
<div class="col-md-6">
    <div>
    <h3>Get started in 3 steps</h3>
    <br>
    <button class="glow-on-hover" type="button">Get Started!</button>
    <br>
    <img src="{{asset('images/model1.png')}}" class="img-fluid-steps" alt="Responsive image" id="myImage">

    </div>
    </div>
    <div class="col-md-6">
    <div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4>CHOOSE A TRADING PROGRAM</h4>
    
    <p3>
    To become a funded trader, you must undergo an evaluation challenge
     to show trading consistency and risk management qualities
    </p3>
</div>
<div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4>PASS THE CHALLENGE</h4>
   
    <p3>
    Step up your trading program with simple and clear rules. As you move through your plan’s steps,
     the possibilities increase
    </p3>
</div>
<div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4>FUNDED PARTNER</h4>
    
    <p3>
    You will become a funded partner of The Trading Pit with $5M in funding to keep up to 80% of your profits.
     Let’s get started!
    </p3>
</div>
</div>
</div>
<div style="padding: 60px 25px 25px 25px;">
</div>
<h5>How we empower you</h5>
<div style="padding: 25px 25px 25px 25px;">
</div>
<div class="image-container">
    <img src="{{asset('images/rffbottomSheet.jpg')}}">
    <img src="{{asset('images/rffbottomSheet2.jpg')}}" alt="rounded-corner">
  </div>
  </div>
  </div>
  </div>
  

  <div class="card" style="margin-top: 80px; border-radius: 20px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6">
    <div>
  
    
 <h6>&#10004; BUILT FOR YOU</h6>
 
  <p4>Challenges, Multi-asset trading, and top-tier brokers adapted to you.</p4>
  
<h6> &#10004;   FAST PAYOUTS</h6>
  <p4>Instant withdrawal of profits. Get your money on the spot!</p4>
  
  <h6> &#10004;   DIVERSE LEARNING</h6>
  <p4>Build your trading skills with targeted resources and experienced mentors.</p4>
  
 <h6>  &#10004;  DIVERSE LEARNING</h6>
  <p4>Build your trading skills with targeted resources and experienced mentors.</p4>
  

                           
    </div>
  </div>
  <div class="col-md-6">
    <div>
    <img src="{{asset('images/model00.png')}}" class="img-fluid-steps" alt="Responsive image" id="myImage1">

    </div>
  </div>
    </div>
  </div>
  </div>
  
  <div style="padding: 40px 25px 25px 25px;">
  <h5>Steps to Funding</h5>
  <div style="padding: 40px 25px 25px 25px;">
  <div class="row">
  <div class="col-md-6">
    

    

    <div class="container">
    <img width="80" height="800" src="https://cdn.thetradingpit.com/pages/homepage/journey-side-img.png" >
    
    </div></div>
    <div class="col-md-6">
    <div>

    <ol>
    <li><h6>EVALUATION PHASE</h6>
  <h7>&#10004; Accessible Entry:</h7> Challenges start at just $99.
  <br>
  <h7> &#10004;   Streamlined Process:</h7> Simple 1-step challenges available.
  <br>
    <h7> &#10004;   Risk-Free Participation: </h7> Full refund promise after Level
    <br>
  <h7>  &#10004;  Skill Recognition: </h7> Earn your official TTP Certification.</li>

  <li><h6>TRADING SIGNAL PARTNER</h6>
    <h7>&#10004; Accessible Entry:</h7> Challenges start at just $99.
  <br>
  <h7> &#10004;   Streamlined Process:</h7> Simple 1-step challenges available.
  <br>
    <h7> &#10004;   Risk-Free Participation: </h7> Full refund promise after Level
    <br>
  <h7>  &#10004;  Skill Recognition: </h7> Earn your official TTP Certification.</li>

  <li>
    <h6>TRADING PIT CHAMPION</h6>
    <h7>&#10004; Accessible Entry:</h7> Challenges start at just $99.
  <br>
  <h7> &#10004;   Streamlined Process:</h7> Simple 1-step challenges available.
  <br>
    <h7> &#10004;   Risk-Free Participation: </h7> Full refund promise after Level
    <br>
  <h7>  &#10004;  Skill Recognition: </h7> Earn your official TTP Certification.</li>
</ol>
  
    
 <!-- <h7>&#10004; Accessible Entry:</h7>Challenges start at just $99.
 <br>
<h7> &#10004;   Streamlined Process:</h7>Simple 1-step challenges available.
  <br>
  <h7> &#10004;   Risk-Free Participation: </h7> Full refund promise after Level
  <br>
 <h7>  &#10004;  Skill Recognition: </h7>Earn your official TTP Certification. -->
  
  

                           
    </div>
    </div> </div> </div> </div>
    @include('.components.fooTer')