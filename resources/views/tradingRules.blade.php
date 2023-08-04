

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

@media (max-width: 768px) {
    /* Adjust the styles for the first row of columns on smaller screens */
    .row > div[class^="col-"] {
      flex: 0 0 100%;
    }

    /* Adjust the styles for the cards on smaller screens */
    .card3 {
      margin-bottom: 20px;
    }
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



   
</style>


<div style="padding: 100px 25px 25px 25px;">
</div>
<div class="row">
  <div class="col-md-6 ">
    <div>
    <h1>Track market liquidity
with Rules</h1>
    <br>
    <p>Trade with confidence as you watch the market evolve</p>
    <br>
    
    <button class="glow-on-hover" type="button">Get Started</button>                              
                           
    </div>
  </div>
  
  <div class="col-md-6 ">
    <div>
	<img src="{{asset('images/trading-rules.png')}}" class="img-fluid" alt="Responsive image">

      
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

<div style="padding: 50px 25px 25px 25px;">

<center><h1 style="margin-bottom: 10px;">Trading Rules</h1> </center>

  <div class="card" style=" border-radius: 20px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6  ">
    <div>
   

<img src="{{asset('images/trading-rule1.png')}}"  alt="Responsive image">

<!--     -->
  </div>
  </div>
  <div class="col-md-5">
    <div>

     
    <h3 class="card-title"></h3>
    <h3 class="card-title">Rule No. 1</h3>
      <br>
        <div class="btn-group-vertical flex-container">
        
        <p style="font-size: 16px; text-align: left;">
RealForex  Funds is a unique, popular analysis and trading platform for futures that allows you to visualize the entire market liquidity and order flow as you trade. Refreshing at 40 frames per second and with a configurable heatmap, Bookmap gives you the tools to understand the market in real-time, enabling you to trade with full awareness of the changes taking place.

The platform’s in-depth tools including heatmaps, volume tools, and a range of indicators, including imbalance and strength level indicators, large lot trackers, advanced volume deltas, and more, give unparalleled insight into the market. Users can leverage Bookmap’s powerful offerings to gain an understanding of the market, identify trends, discover hidden price patterns, and understand order flow.

Bookmap is used by traders worldwide to better understand the market, to leverage trading intelligence, and to better position themselves in the market.
</p>

    </div>
   

    </div>
    
  </div>
  
    </div>
    
  </div>
  </div>



  <!-- 2nd Cards starts  -->

  

  <div class="card" style="margin-top: 80px; border-radius: 20px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6  ">
    <div>
       
    <h3 class="card-title">Rule No. 2</h3>
    <br>
   
<p style="font-size: 16px; text-align: left;">
RealForex is a unique, popular analysis and trading platform for futures that allows you to visualize the entire market liquidity and order flow as you trade. Refreshing at 40 frames per second and with a configurable heatmap, Bookmap gives you the tools to understand the market in real-time, enabling you to trade with full awareness of the changes taking place.

The platform’s in-depth tools including heatmaps, volume tools, and a range of indicators, including imbalance and strength level indicators, large lot trackers, advanced volume deltas, and more, give unparalleled insight into the market. Users can leverage Bookmap’s powerful offerings to gain an understanding of the market, identify trends, discover hidden price patterns, and understand order flow.

Bookmap is used by traders worldwide to better understand the market, to leverage trading intelligence, and to better position themselves in the market.
</p>
  </div>
  </div>
  <div class="col-md-5">
    <div>

    

        <div class="btn-group-vertical flex-container">
       
        

<img src="https://cdn.thetradingpit.com/pages/platforms/rithmic-intro-side-img.png.png" class="img-fluid" alt="Responsive image">

    </div>
   

    </div>
    
  </div>
  
    </div>
   
  </div>
  </div>
  <!-- 2nd rule cards ends -->
  
  </section>



  </div>

  
  @include('.components.fooTer')