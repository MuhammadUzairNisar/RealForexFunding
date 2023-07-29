@include('bootStrap')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
} 
 nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  position: relative;
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: white;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('https://images.unsplash.com/photo-1664575599730-0814817939de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-size: 20px;
  font-family: 'Lato', 'Signika', sans-serif;
  font-weight: 400;
}

.wrapper {
  width: 100%;
  height: 60vh;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-around;
  background-color: rgba(248,248,248,1);
}

.card {
  width: 500px;
  height: 300px;
  background-color: #fff;
  box-shadow: 0 2px 6px 0 hsla(0,0%,0%,0.2);
  border-radius: 10px;
  padding: 38px 0 0 110px ;
  position: relative;
  overflow: hidden;
}

h5 {
  margin-bottom: 15px;
}

p {
  font-size: 80%;
  color: rgba(0,0,0,0.5);
  max-width: 350px;
}

.icon {
  width: 25%;
  height: auto;
  position: absolute;
  left: -35px;
}

.red { color: #E53935; }
.blue { color: #1E88E5; }
.green { color: #00C853; }

@media (max-width: 767px) {
  .card {
  width: 200px;
  height: 320px;
  background-color: #fff;
  box-shadow: 0 2px 6px 0 hsla(0,0%,0%,0.2);
  border-radius: 10px;
  padding: 10px 0 0 20px ;
  position: relative;
  overflow: hidden;
}

h5 {
  margin-bottom: 5px;
}

p {
  font-size: 45%;
  color: rgba(0,0,0,0.5);
  max-width: 100px;
}

.icon {
  width: 15%;
  height: auto;
  position: absolute;
  left: -35px;
}
}

</style>

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trading Rules</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
   <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Trading Rules</a>
      </div>
      
    </div>
  </nav>
  @include('.components.navBar')

  <div class="img"></div>
  <div class="center">
    <div class="title">Trading Rules</div>
    <div class="sub_title">You Must Know</div>
    <div class="btns">
      <button>Learn More</button>
      <button>Subscribe</button>
    </div>
  </div>
<div class="container-1">
  <div class="wrapper">
  <div class="card">
    <img class="icon" src="https://static.vecteezy.com/system/resources/previews/011/031/597/original/stock-exchange-and-trading-icon-design-element-png.png">
    <h5 class="red">5% daily drawdown</h5>
    <p>Traders are allowed a maximum of 5% drawdown in a single trading day.
      <br>
    Example: If your initial account balance is $10,000, then 5% of the amount is $500. 
At any point in a day, if the (running + closed) loss exceeds $500 it will be considered as '5% Daily Drawdown' rule violation.
    </p>
  </div>
  <div class="card">
    <img class="icon" src="https://cdn-icons-png.flaticon.com/512/6460/6460358.png">
    <h5 class="blue">40% overall drawdown</h5>
    <p>Traders are allowed a maximum of 40% loss from the initial balance they start with.
<br>
Example: If your starting account balance is $10,000, then 40% of the amount is $4000. At any point during your assessment, 
if your account equity reaches below $6000, this will mean that you have violated the '40% Overall Loss’ rule.
</p>
  </div>
  <div class="card">
    <img class="icon" src="https://static.vecteezy.com/system/resources/previews/011/031/598/original/stock-exchange-and-trading-icon-design-element-png.png">
    <h5 class="green">4 Day/Week</h5>
    <p>The minimum number of trading days is 4 every 7 days. If a trade is held over multiple days, only the day when the trade was executed is considered to be the trading 
day. Your first day in the program will be considered the date when you receive the account logins. Breaking the rule will lead to the account closure.</p>
  </div>
</div>
<div class="wrapper">
<div class="card">
    <img class="icon" src="https://cdn.iconscout.com/icon/free/png-256/free-trading-11-443319.png">
    <h5 class="red">3Minutes Trading</h5>
    <p>Please keep in mind that all trading positions can not be held for less than second Minutes
Each trader is allowed to make 2 mistake a month on this policy, multiple violations will result in the account suspension. 
Only trades that hit SL under 3 minutes will not be considered a violation.</p>
  </div>
  <div class="card">
    <img class="icon" src="https://www.stellartradingsystems.com/wp-content/uploads/2015/05/market-maker1.png">
    <h5 class="blue">4 Day/Week</h5>
    <p>The minimum number of trading days is 4 every 7 days. If a trade is held over multiple days, only the day when the trade was executed is considered to be the trading 
day. Your first day in the program will be considered the date when you receive the account logins. Breaking the rule will lead to the account closure.</p>
  </div>
  <div class="card">
    <img class="icon" src="https://icons.veryicon.com/png/o/business/domain-icon/foreign-economy-and-trade.png">
    <h5 class="green">Consistency</h5>
    <p>We want to onboard promising & rising traders who can trade consistently over a long period of time.</p>
  </div>
  </div>
  <div class="wrapper">
<div class="card">
    <img class="icon" src="data:image/png;base64,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">
    <h5 class="red">Trading Style</h5>
    <p>We want to sharpen your trading style more than ever. We believe you will perform best when you are in your comfort zone.  
So you’re allowed to trade with any trading style that you like most. We aim to get the best out of you, and once you trade freely. 
We all will grow together. So choose your trading plan wisely. But Gambling and arbitrage hedging is not allowed.</p>
  </div>
  <div class="card">
    <img class="icon" src="https://www.stellartradingsystems.com/wp-content/uploads/2015/04/StellarTrader.png">
    <h5 class="blue">Overnight / Weekend Trading</h5>
    <p>You're permitted to hold your trades overnight, but you're not allowed to hold trades over the weekend. 
All positions must be closed 15 minutes before the market closes on weekends.violations will result in the account suspension</p>
  </div>
  
<div class="card">
    <img class="icon" src="https://static.vecteezy.com/system/resources/previews/020/995/167/original/3d-minimal-data-analysis-icon-soaring-finances-stock-up-strengthening-currency-a-bar-graph-with-an-arrow-up-3d-illustration-png.png">
    <h5 class="green">News Trading</h5>
    <p>Yes! You can trade during the news without restrictions.</p>
  </div>
  </div>
  </div>



  @include('.components.fooTer')
   
