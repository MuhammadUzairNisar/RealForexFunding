
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
      .bg-one {
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
      }
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
  background:rgba(233,33,99,1);
  border-radius:50%;
  box-shadow:0 0 0 3px rgba(233,33,99,0.2);
}
.timeline ul li h3{
  padding:0;
  margin:0;
  color:rgba(233,33,99,1);
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
  box-shadow:0 0 0 3px rgba(233,33,99,0.3);
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
  box-shadow:0 0 0 3px rgba(233,33,99,0.3);
}
@media(max-width:1000px)
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

/* footer */


.footer{
background:#000;
padding:30px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer .row{
width:100%;
margin:1% 0%;
padding:0.6% 0%;
color:gray;
font-size:0.8em;
}

.footer .row a{
text-decoration:none;
color:gray;
transition:0.5s;
}

.footer .row a:hover{
color:#fff;
}

.footer .row ul{
width:100%;
}

.footer .row ul li{
display:inline-block;
margin:0px 30px;
}

.footer .row a i{
font-size:2em;
margin:0% 1%;
}

@media (max-width:720px){
.footer{
text-align:left;
padding:5%;
}
.footer .row ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer .row a i{
margin:0% 3%;
}
}

</style>




  
    <div class="wrapper">
      <div class="container">
        <div class="child bg-one">
          <span>RFF Contributions</span>
        </div>
      </div>
      
      
    
    <div class="container">
  <h2 contenteditable>Why RFF?</h2>
  
</div>


  
  <div class="timeline">
    <ul>
      <li>
        <div class="content">
          <h3>No Profit Targets</h3>
          <p> We offer payouts after month . Most funding companies pays only after reaching profit targets. </p>
        </div>
        <div class="time">
          <h4>Step 1</h4>
        </div>
      </li>
      
      <li>
        <div class="content">
          <h3>Monthly Payouts</h3>
          <p>We payouts profit instantly once month is closed. Other firms payouts are received on average after 2-3 months from the purchase.</p>
        </div>
        <div class="time">
          <h4>Step 2</h4>
        </div>
      </li>
      
      <li>
        <div class="content">
          <h3>Lifelong Accounts</h3>
          <p>If you want to continue to work with us, and follow our rules we never close contract with you.</p>
        </div>
        <div class="time">
          <h4>Step 3</h4>
        </div>
      </li>
      
      <li>
        <div class="content">
          <h3>No Fixed Limits on Risk</h3>
          <p>There is no limit on lots limit and open positions. Most funded companies restrict lot size and open positions.</p>
        </div>
        <div class="time">
          <h4>Step 4</h4>
        </div>
      </li>
      
      <li>
        <div class="content">
          <h3>Leverage is 1:100</h3>
          <p>RFF leverage is 1:100 in every purchasable account. Most Instant funding prop firms offer leverages between 1:10 and 1:30. </p>
        </div>
        <div class="time">
          <h4>Step 5</h4>
        </div>
      </li>
      
      <li>
        <div class="content">
          <h3>2 Account Types</h3>
          <p>We offer 2 type of accounts (Individual & Partnership), so that you have option to trade with a budget of your convenience.</p>
        </div>
        <div class="time">
          <h4>Step 6</h4>
        </div>
      </li>
      
     
      <div style="clear:both;"></div>
    </ul>
  </div>
  
  <h2 contenteditable>Profit Sharing</h2>
  <!-- <div class=container>
  <div class="row">
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>
</div>
<div>
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>
</div>
<div>
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>
</div>
<div>
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>
</div>
<div>
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>
</div>
<div>
    <h1>
    15%
    </h1>
    <p>
    1st Month
    </p>

</div>
</div> -->




<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>
<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row">
Copyright © 2023 Real Forex Funds - All Rights Reserved.
</div>
</div>
</footer>