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
/* Six cards css starts here */
.custom-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}

.package-card {
  font-family: 'Helvetica', sans-serif;
  width: 350px;
  height: 400px; /* Set a fixed height for the cards */
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 40px;
  margin: 20px;
  background-color: #e5e7eb; /* Grey background color */
  border: 2px solid #fff; /* White border */
  text-align: center;
  overflow: hidden; /* Hide overflowing content */
}

.package-card img {
  width: 30%;
  height: 100px; 
  object-fit: cover;
  border-radius: 8px;
}

.package-card-content {
  height: 100px; 
  overflow-y: auto; 
}

.package-card h3 {
  margin-top: 10px;
  font-size: 24px;
  color: #333;
}

.package-card p {
  margin-top: 10px;
  font-size: 14px;
  color: #666;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
  .package-card {
    width: 45%; /* Reduce card width for smaller screens */
  }
}

@media screen and (max-width: 576px) {
  .package-card {
    width: 90%; /* Further reduce card width for smaller screens */
  }
}
/* Six cards css ends here */


#myImage {
        height: 500px; /* Set the desired height here */
        width: 600px;  /* Set the desired width here */
    }
   
</style>


<div style="padding: 120px 25px 25px 25px;">
</div>
<div class="row">
  <div class="col-md-6 ">
    <div>
  <h2>Unlock the Secret to</h2>
  <br>
  <h2>Passive Income</h2>
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
src="https://cdn.thetradingpit.com/pages/affiliates/affiliate-v3-hero-side-video-eu-us.mp4">
</video>

      
    </div>
    </div>
    </div>
    
  
  




<div style="background-color:lightgray;">
<div style="padding: 50px 25px 25px 25px;">
  <div class="container-1">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
<div class="col-md-6">
    <div>
    <h3>Program Overview</h3>
    <br>
    <button class="glow-on-hover" type="button">Join Now!</button>
    <br>
    <img src="{{asset('images/model1.png')}}" class="img-fluid-steps" alt="Responsive image" id="myImage">
    </div>
    </div>
    <div class="col-md-6">
    <div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4 style=" color: #39e4a4;">CHOOSE A TRADING PROGRAM</h4>
    
    <p3>
    To become a funded trader, you must undergo an evaluation challenge
     to show trading consistency and risk management qualities
    </p3>
</div>
<div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4 style=" color: #39e4a4;">PASS THE CHALLENGE</h4>
   
    <p3>
    Step up your trading program with simple and clear rules. As you move through your plan’s steps,
     the possibilities increase
    </p3>
</div>
<div class="card bg-dark text-white" style="margin-top: 40px; border-radius: 10px;">
    <h4>FUNDED PARTNER</h4>
    
    <p3>
    You will become a funded partner of The Trading Pit with $5M in funding to keep up to 80% of your profits.
     Lets get started!
    </p3>
</div>
</div>
</div>
<center>

 
  
  
  </section>



  <div class="card" style="margin-top: 80px; border-radius: 20px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6  ">
    <div>
  
    
    <h3 class="card-title">How To Start</h3>
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
    <img src="https://cdn.thetradingpit.com/pages/affiliates/affiliate-v3-how-side-image.png" class="img-fluid" alt="Responsive image">

    </div>
  </div>
    </div>
  </div>
  </div>
  </div>
  


  </div>
  <center>
  <p style="font-weight: 700; font-size: 1.875rem; line-height: 3.50rem;margin-top: 50px;">Why become an Affiliate?</p>
        <p style="font-weight: 700;margin-bottom: 25px;">Here are some reasons why you should consider becoming an affiliate:</p>
        </center>

<!-- ////////////////////// Six Cards Div Starts Here ////////////////////// -->
<div class="custom-container">
    <!-- Card 1 -->
    <div class="package-card">
      <img src="{{asset('images/infinity.png')}}" alt="Package 1">
      <h3>UNLIMITED INCOME</h3>
      <p>The more sales start, the more commission you earn.</p>
    </div>
    
    <!-- Card 2 -->
    <div class="package-card">
      <img src="https://cdn.thetradingpit.com/pages/affiliates/hand-point-x.png" alt="Package 2">
      <h3>EASY TO EASY</h3>
      <p>For our affiliate program is straightforward. Register and start promoting The Trading Pit.</p>
    </div>
    
    <!-- Card 3 -->
    <div class="package-card">
      <img src="{{asset('images/bar-chart.png')}}" alt="Package 3">
      <h3>WIDE RANGE OF PRODUCTS</h3>
      <p>Choose between real Futures, Forex, Commodities, Indices, Crypto & Stocks CFDs that you want to promote.</p>
    </div>
    
    <!-- Card 4 -->
    <div class="package-card">
      <img src="{{asset('images/support.png')}}" alt="Package 4">
      <h3>SEAMLESS SUPPORT</h3>
      <p>We are here to support you every step of the way. We provide you with marketing materials and resources to help you succeed.</p>
    </div>
    
    <!-- Card 5 -->
    <div class="package-card">
      <img src="{{asset('images/shield.png')}}" alt="Package 5">
      <h3>TRUSTWORTHY PARTNER</h3>
      <p>We have a strong reputation for providing high-quality products and excellent customer service. If you refer people to us, you can be confident they will receive a great experience.</p>
    </div>
    
    <!-- Card 6 -->
    <div class="package-card">
      <img src="{{asset('images/working-time.png')}}" alt="Package 6">
      <h3>FLEXIBLE WORKING HOURS</h3>
      <p>You can work from anywhere, anytime, as an affiliate. This means you can work on your own schedule and from the comfort of your home.</p>
    </div>
  </div>
<!-- ////////////////////// Six Cards Div Ends Here ////////////////////// -->

<center><p style="color: purple;">Sign up now and start earning today!</p></center>
<center> <button class="glow-on-hover" type="button">Become an Affiliate</button> </center>
 
<div class="card" style="margin-top: 80px; border-radius: 20px;">
  <div style="padding: 25px 25px 25px 25px;">
<div class="row">
  <div class="col-md-6  ">
    <div>
    <img src="https://cdn.thetradingpit.com/pages/affiliates/perfect-match-side-image.png" class="img-fluid" alt="Responsive image">
<!--     -->
  </div>
  </div>
  <div class="col-md-5">
    <div>

     
    <h3 class="card-title">Are you a perfect match</h3>
      <br>
        <div class="btn-group-vertical flex-container">
       

        <p style="color: purple;">&#10003; <span style="color: black;">Traders</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Trading Schools and Academies</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Bloggers</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Traffic arbitrageurs
</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Trading signals providers</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Website owners</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Expert Advisor (EA) Algorithms</span></p>
<p style="color: purple;">&#10003; <span style="color: black;">Forum owners</span></p>

    </div>
   

    </div>
    
  </div>
  
    </div>
    <center> <button class="glow-on-hover" type="button">Join NOW</button> </center>
  </div>
  </div>

  <center><p style="margin-top: 100px; font-weight: bold; font-size: 40px; color: purple;">Awards</p></center>



  <div class="image-row">
        <div class="image-with-text">
            <img src="https://cdn.thetradingpit.com/sections/awards/award-1.png" alt="Image 1">
            <p>Fastest Growing Proprietary Firm in Europe 2022</p>
        </div>
        <div class="image-with-text">
            <img src="https://cdn.thetradingpit.com/sections/awards/award-2.png" alt="Image 2">
            <p>Most Trusted Proprietary Firm in Europe 2022</p>
        </div>
        <div class="image-with-text">
            <img src="https://cdn.thetradingpit.com/sections/awards/award-3.png" alt="Image 3">
            <p>Best Futures Prop Firm 2022</p>
        </div>
        <div class="image-with-text">
            <img src="https://cdn.thetradingpit.com/sections/awards/award-4.png" alt="Image 4">
            <p>Best Fintech Startup Germany 2022</p>
        </div>
        <div class="image-with-text">
            <img src="https://cdn.thetradingpit.com/sections/awards/award-5.png" alt="Image 5">
            <p>Best Cutting-Edge Prop Trading Technology Liechtenstein 2022</p>
        </div>
    </div>
    <style>
.image-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.image-with-text {
    text-align: center;
    flex: 1;
    
}

.image-with-text img {
  max-width: 60%; /* Set the maximum width to 60% of the container */
    height: auto; /* Let the height adjust proportionally */
    display: block; /* To center the image within its container */
    margin: 0 auto; 
}

.image-with-text p {
    margin-top: 10px;
    font-size: .875rem;
    line-height: 1.25rem;

}</style>
 
  </div>
  </div>
  

  



  
    @include('.components.fooTer')