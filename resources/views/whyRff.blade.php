@include('bootStrap')


<style>
/* .container {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
} */

h2 {
  font-size: 50px;
  text-transform: uppercase;
  font-family: 'Gambetta', serif;
  letter-spacing: -3px;
  transition: 700ms ease;
  font-variation-settings: "wght" 311;
  margin-bottom: 0.8rem;
  color: black;
  outline: none;
  text-align: center;
}

h2:hover {
  font-variation-settings: "wght" 582; 
  letter-spacing: 1px;
}

      
      .child {
        height: 70%;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
      }
      /* .bg-one {
        background-image: url(https://cdn.pixabay.com/photo/2018/01/17/04/14/stock-exchange-3087396_1280.jpg);
      }
    
      span {
        display: none;
        font-size: 35px;
        color: #ffffff !important;
        font-family: sans-serif;
        text-align: center;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        height: 50px;
        cursor: pointer;
        text-decoration: none;
      } */
      .container:hover .child,
      .container:focus .child {
        -ms-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.1);
      }
      .container:hover .child:before,
      .container:focus .child:before {
        display: block;
      }
      .container:hover span,
      .container:focus span {
        display: block;
      }
      .child:before {
        content: "";
        display: none;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(52, 73, 94, 0.75);
      }
      @media screen and (max-width: 960px) {
        .container {
          width: 100%;
          margin: 20px 0;
        }
        .wrapper {
          padding: 20px;
        }
      }

      @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600');
body{
  padding:0;
  margin:0;
  font-family: 'Montserrat', sans-serif;
}

.timeline{
  position:relative;
  margin:50px auto;
  padding:40px 0;
  width:1000px;
  box-sizing:border-box;
}
.timeline:before{
  content:'';
  position:absolute;
  left:50%;
  width:2px;
  height:90%;
  background:#c5c5c5;
}
.timeline ul{
  padding:0;
  margin:0;
}
.timeline ul li{
  list-style:none;
  position:relative;
  width:50%;
  padding:20px 40px;
  box-sizing:border-box;
}
.timeline ul li:nth-child(odd){
  float:left;
  text-align:right;
  clear:both;
}
.timeline ul li:nth-child(even){
  float:right;
  text-align:left;
  clear:both;
}
.content{
  padding-bottom:20px;
}
.timeline ul li:nth-child(odd):before
{
  content:'';
  position:absolute;
  width:10px;
  height:10px;
  top:24px;
  right:-6px;
  background:rgba(0,0,0);
  border-radius:50%;
  box-shadow:0 0 0 3px rgba(233,33,99,0.2);
}
.timeline ul li:nth-child(even):before
{
  content:'';
  position:absolute;
  width:10px;
  height:10px;
  top:24px;
  left:-4px;
  background:purple;
  border-radius:50%;
  box-shadow:0 0 0 3px rgba(233,33,99,0.2);
}
.timeline ul li h3{
  padding:0;
  margin:0;
  color: purple;
  font-weight:600;
}
.timeline ul li p{
  margin:20px 0 0;
  padding:0;
}
.timeline ul li .time h4{
  margin:0;
  padding:0;
  font-size:14px;
}
.timeline ul li:nth-child(odd) .time
{
  position:absolute;
  top:12px;
  right:-165px;
  margin:0;
  padding:8px 16px;
  background:rgba(0,0,0);
  color:white;
  border-radius:18px;
  box-shadow:0 0 0 3px rgba(255,0,0,0.5);
}
.timeline ul li:nth-child(even) .time
{
  position:absolute;
  top:12px;
  left:-165px;
  margin:0;
  padding:8px 16px;
  background:rgba(0,0,0);
  color:#fff;
  border-radius:18px;
  box-shadow:0 0 0 3px rgba(255,0,0,0.5);
}
@media(max-width:767px)
{
  .timeline{
    width:100%;
  }
}
@media(max-width:767px){
  .timeline{
    width:100%;
    padding-bottom:0;
  }
  h1{
    font-size:40px;
    text-align:center;
  }
  .timeline:before{
    left:20px;
    height:100%;
  }
  .timeline ul li:nth-child(odd),
  .timeline ul li:nth-child(even)
  {
    width:100%;
    text-align:left;
    padding-left:50px;
    padding-bottom:50px;
  }
  .timeline ul li:nth-child(odd):before,
  .timeline ul li:nth-child(even):before
  {
    top:-18px;
    left:16px;
  }
  .timeline ul li:nth-child(odd) .time,
  .timeline ul li:nth-child(even) .time{
    top:-30px;
    left:50px;
    right:inherit;
  }
}





/* cards */
.ag-format-container {
  width: 1142px;
  margin: 0 300;
}


body {
  background-color: white;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 100px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 34px);
  flex-basis: calc(33.33333% - 34px);

  margin: 0 50px 100px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 15px 100px;
  background-color: #121212;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 50px;
  margin: 0 0 10px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}
.container-hero {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
@media (max-width: 767px) {
  .container-hero {
     /* Adjust the width to your preference */
  }
}
</style>




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
    <h1>Unlock Your Trading Potential</h1>
    <br>
    <p>Trade with Confidence, Win with Precision</p>
    <br>
    
    <button class="glow-on-hover" type="button">Get Started</button>                              
                           
    </div>
  </div>
  
  <div class="col-md-6 ">
    <div>
    <video width="600" height="800" autoplay="" loop="" muted="" 
src=" https://cdn.thetradingpit.com/pages/platforms/overview/overview-hero-side-video.mp4">
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



  <div class="card" style=" border-radius: 20px;">
  
  </div>



  <!-- 2nd Cards starts  -->

  

  <!-- 2nd rule cards ends -->
  
  </section>





  <style>
    /* Reduce font size for h1 and h2 */
    h1 {
      font-size: 24px;
    }

    h2 {
      font-size: 18px;
    }

    /* Reduce font size for h3 and p */
    h3 {
      font-size: 16px;
    }

    p {
      font-size: 14px;
    }
  </style>
  <


  <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card" style="border-radius: 20px;">
          <div class="card-body">
        
            <div class="container-hero">

              <div class="timeline">
                <ul>
                <li>
                      <div class="content">
                        <h3>No Profit Targets</h3>
                        <p>We offer payouts after month. Most funding companies pay only after reaching profit targets.</p>
                      </div>
                      <div class="time">
                        <h4>Step 1</h4>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <h3>Monthly Payouts</h3>
                        <p>We payout profit instantly once a month is closed. Other firms payouts are received on average after 2-3 months from the purchase.</p>
                      </div>
                      <div class="time">
                        <h4>Step 2</h4>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <h3>Lifelong Accounts</h3>
                        <p>If you want to continue to work with us, and follow our rules we never close the contract with you.</p>
                      </div>
                      <div class="time">
                        <h4>Step 3</h4>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <h3>No Fixed Limits on Risk</h3>
                        <p>There is no limit on lot size and open positions. Most funded companies restrict lot size and open positions.</p>
                      </div>
                      <div class="time">
                        <h4>Step 4</h4>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <h3>Leverage is 1:100</h3>
                        <p>RFF leverage is 1:100 in every purchasable account. Most Instant funding prop firms offer leverages between 1:10 and 1:30.</p>
                      </div>
                      <div class="time">
                        <h4>Step 5</h4>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <h3>2 Account Types</h3>
                        <p>We offer 2 types of accounts (Individual & Partnership), so that you have the option to trade with a budget of your convenience.</p>
                      </div>
                      <div class="time">
                        <h4>Step 6</h4>
                      </div>
                    </li>
                    <div style="clear:both;"></div>
                  <!-- Timeline items go here -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>




  
  




@include('.components.fooTer')
