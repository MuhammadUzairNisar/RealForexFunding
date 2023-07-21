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

 
.card1{
  position: relative;
  max-width: 260px;
  height: auto;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
-webkit-transition: .5s;
transition: .5s;
}
.card1:hover{
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.col-sm-4:nth-child(1) .card1 ,
.col-sm-4:nth-child(1) .card1 .title .fa{
  background: linear-gradient(-45deg,#f403d1,#64b5f6);
 
}
.col-sm-4:nth-child(2) .card1,
.col-sm-4:nth-child(2) .card1 .title .fa{
  background: linear-gradient(-45deg,#ffec61,#f321d7);
 
}
.col-sm-4:nth-child(3) .card1,
.col-sm-4:nth-child(3) .card1 .title .fa{
  background: linear-gradient(-45deg,#24ff72,#9a4eff);
 
}
.card1::before{
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
.title .fa{
  color:#fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius:  50%;
  text-align: center;
  line-height: 100px;
  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
 
}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: #fff;
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
color: #fff;
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
color: #fff;
font-size: 16px;
}
.card1 a {
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
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
 
}
.card1 a:hover{
    text-decoration: none;
}

.card2{
  position: relative;
  max-width: 260px;
  height: auto;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
-webkit-transition: .5s;
transition: .5s;
}
.card2:hover{
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.col-sm-4:nth-child(1) .card1 ,
.col-sm-4:nth-child(1) .card1 .title .fa{
  background: linear-gradient(-45deg,#f403d1,#64b5f6);
 
}
.col-sm-4:nth-child(2) .card1,
.col-sm-4:nth-child(2) .card1 .title .fa{
  background: linear-gradient(-45deg,#ffec61,#f321d7);
 
}
.col-sm-4:nth-child(3) .card1,
.col-sm-4:nth-child(3) .card1 .title .fa{
  background: linear-gradient(-45deg,#24ff72,#9a4eff);
 
}
.card2::before{
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
.title .fa{
  color:#fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius:  50%;
  text-align: center;
  line-height: 100px;
  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
 
}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: #fff;
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
color: #fff;
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
color: #fff;
font-size: 16px;
}
.card2 a {
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
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
 
}
.card2 a:hover{
    text-decoration: none;
}


.card3{
  position: relative;
  max-width: 360px;
  height: auto;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
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
  background: linear-gradient(-45deg,#f403d1,#64b5f6);
 
}
.col-sm-4:nth-child(2) .card3,
.col-sm-4:nth-child(2) .card3 .title .fa{
  background: linear-gradient(-45deg,#ffec61,#f321d7);
 
}
.col-sm-4:nth-child(3) .card3,
.col-sm-4:nth-child(3) .card3 .title .fa{
  background: linear-gradient(-45deg,#24ff72,#9a4eff);
 
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
.title .fa{
  color:#fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius:  50%;
  text-align: center;
  line-height: 100px;
  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
 
}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: #fff;
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
color: #fff;
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
color: #fff;
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
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
 
}
.card3 a:hover{
    text-decoration: none;
}



/* BEGIN CARD DESIGN */
.hero {
  display: inline-block;
  position: relative;
  width: 400px;
  min-width: 400px;
  height: 400px;
  border-radius: 30px;
  overflow:hidden;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
  margin: 30px;
}

.hero-profile-img {
  height: 70%;
}

.hero-description-bk {
  background-image: linear-gradient(0deg , #3f5efb, #fc466b);
  border-radius: 30px;
  position: absolute;
  top: 55%;
  left: -5px;
  height: 65%;
  width: 108%;
  transform: skew(19deg, -9deg);
}

.second .hero-description-bk {
  background-image: linear-gradient(-20deg , #bb7413, #e7d25c)
}
.third .hero-description-bk {
  background-image: linear-gradient(-20deg , #1353e8, #56a0f0)
}
.hero-logo {
  height: 80px;
  width: 80px;
  border-radius: 20px;
  background-color: #fff;
  position: absolute;
  bottom: 30%;
  left: 30px;
  overflow:hidden;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.7);
}

.hero-logo img {
  height: 100%;
}

.hero-description {
  position: absolute;
  color: #fff;
  font-weight: 900;
  left: 150px;
  bottom: 26%;
}

.hero-btn {
  position: absolute;
  color: #fff;
  right: 30px;
  bottom: 10%;
  padding: 10px 20px;
  border: 1px solid #fff;
}

.hero-btn a {
  color: #fff;
}

.hero-date {
  position: absolute;
  color: #fff;
  left: 30px;
  bottom: 10%;
}
/* END CARD DESIGN */

body {
  font-family: 'Open Sans', sans-serif;
  margin: 0;
  background-color: #eee;
  min-height: 100vh;
}
/* .btn i:before {
  width: 14px;
  height: 14px;
  position: fixed;
  color: #fff;
  background: #0077B5;
  padding: 10px;
  border-radius: 50%;
  top:5px;
  right:5px;
} */



.dark {
	background: #110f16;
}


.light {
	background: #f3f5f7;
}

a, a:hover {
	text-decoration: none;
	transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
	margin: 2rem 0;
	text-transform: uppercase;
	text-align: center;
	font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;
  
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;

	&.dark {
		background-color: #18151f;
	}
	&.light {
		background-color: #e1e5ea;
	}
	
	.t-dark {
		color: #18151f;
	}
	
  a {
    color: inherit;
  }
	
	h1,	.h1 {
		margin-bottom: 0.5rem;
		font-weight: 500;
		line-height: 1.2;
	}
	
	.small {
		font-size: 80%;
	}

  .postcard__title {
    font-size: 1.75rem;
  }

  .postcard__img {
    max-height: 180px;
    width: 100%;
    object-fit: cover;
    position: relative;
  }

  .postcard__img_link {
    display: contents;
  }

  .postcard__bar {
    width: 50px;
    height: 10px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
  }

  .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
  }

  .postcard__tagbox {
    display: flex;
    flex-flow: row wrap;
    font-size: 14px;
    margin: 20px 0 0 0;
		padding: 0;
    justify-content: center;

    .tag__item {
      display: inline-block;
      background: rgba(83, 83, 83, 0.4);
      border-radius: 3px;
      padding: 2.5px 10px;
      margin: 0 5px 5px 0;
      cursor: default;
      user-select: none;
      transition: background-color 0.3s;

      &:hover {
        background: rgba(83, 83, 83, 0.8);
      }
    }
  }

  &:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 1;
    border-radius: 10px;
  }

  &:hover .postcard__bar {
    width: 100px;
  }
}

@media screen and (min-width: 769px) {
  .postcard {
    flex-wrap: inherit;

    .postcard__title {
      font-size: 2rem;
    }

    .postcard__tagbox {
      justify-content: start;
    }

    .postcard__img {
      max-width: 300px;
      max-height: 100%;
      transition: transform 0.3s ease;
    }

    .postcard__text {
      padding: 3rem;
      width: 100%;
    }

    .media.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      background: #18151f;
      top: -20%;
      height: 130%;
      width: 55px;
    }

    &:hover .postcard__img {
      transform: scale(1.1);
    }

    &:nth-child(2n+1) {
      flex-direction: row;
    }

    &:nth-child(2n+0) {
      flex-direction: row-reverse;
    }

    &:nth-child(2n+1) .postcard__text::before {
      left: -12px !important;
      transform: rotate(4deg);
    }

    &:nth-child(2n+0) .postcard__text::before {
      right: -12px !important;
      transform: rotate(-4deg);
    }
  }
}
@media screen and (min-width: 1024px){
		.postcard__text {
      padding: 2rem 3.5rem;
    }
		
		.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      
      top: -20%;
      height: 130%;
      width: 55px;
    }
	
  .postcard.dark {
		.postcard__text:before {
			background: #18151f;
		}
  }
	.postcard.light {
		.postcard__text:before {
			background: #e1e5ea;
		}
  }
}

/* COLORS */
.postcard .postcard__tagbox .green.play:hover {
	background: $main-green;
	color: black;
}
.green .postcard__title:hover {
	color: $main-green;
}
.green .postcard__bar {
	background-color: $main-green;
}
.green::before {
	background-image: linear-gradient(
		-30deg,
		$main-green-rgb-015,
		transparent 50%
	);
}
.green:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
	background: $main-blue;
}
.blue .postcard__title:hover {
	color: $main-blue;
}
.blue .postcard__bar {
	background-color: $main-blue;
}
.blue::before {
	background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
}
.blue:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .red.play:hover {
	background: $main-red;
}
.red .postcard__title:hover {
	color: $main-red;
}
.red .postcard__bar {
	background-color: $main-red;
}
.red::before {
	background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
}
.red:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .yellow.play:hover {
	background: $main-yellow;
	color: black;
}
.yellow .postcard__title:hover {
	color: $main-yellow;
}
.yellow .postcard__bar {
	background-color: $main-yellow;
}
.yellow::before {
	background-image: linear-gradient(
		-30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}
.yellow:nth-child(2n)::before {
	background-image: linear-gradient(
		30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}

@media screen and (min-width: 769px) {
	.green::before {
		background-image: linear-gradient(
			-80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}
	.green:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}

	.blue::before {
		background-image: linear-gradient(
			-80deg,
			$main-blue-rgb-015,
			transparent 50%
		);
	}
	.blue:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
	}

	.red::before {
		background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
	}
	.red:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
	}
	
	.yellow::before {
		background-image: linear-gradient(
			-80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
	.yellow:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
}


/* .card-container{
  display: flex; */
  
  .card5{
    margin: 20px;
    border-radius: 10px;
    background-color: #ffffff;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    
    .card-count-container{
      display: flex;
      align-items: center;
      width: 100%;
      height: 200px;
      padding: 20px 0px;
    }
    
    .card-count{
      font-weight: bold;
      font-size: 100px;
      width: 150px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin: auto;
      margin-right: -50px;
      padding-right: 25px;
      overflow: hidden;
      color: #ffffff;
      box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
      text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
      transition: all 0.2s ease-in-out;
    }
    
    .card-content{
      padding: 20px;
      padding-top: 0px;
      
      > h2{
        margin-top: 0px;
        text-align: center;
      }
    }
    
    .card-footer{
      padding: 20px;
      color: #ffffff;
    }
    
    &:nth-child(1){
      .card-count, .card-footer{
        background-image: linear-gradient(90deg, #f6671f, #c01b1c);
      }
    }
    
    &:nth-child(2){
      .card-count, .card-footer{
        background-image: linear-gradient(90deg, #fec22f, #ea9826);
      }
    }
    
    &:nth-child(3){
      .card-count, .card-footer{
        background-image: linear-gradient(90deg, #6fc6a9, #058ba9);
      }
    }
    
    &:hover{
      .card-count{
        width: 160px;
        height: 160px;
      }
    }
  }
  
  media (max-width: 767px){
    flex-wrap: wrap;
  }


  </style>



    



<div style="padding: 40px 25px 25px 40px;">
  <div class="card" style="margin-top: 50px; border-radius: 50px;">
  <center>
  <div style="padding: 40px 25px 25px 40px;">
    <div class="card-body">
      <h2 class="card-title">Rise to the Challenge</h2>
      <!-- <button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
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
<br> -->
<div style="padding: 40px 25px 25px 25px;">


<section>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
      <div class="col-sm-4">
          <div class="card3">
            <div class="title">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              <h2>LITE</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>99</h4>
            </div>
            <div class="option">
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $10,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$1,000 (10%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
            </div>
            <a href="#">Buy Now </a>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card3">
            <div class="title">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <h2>STANDARD</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>179</h4>
            </div>
            <div class="option">
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $10,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$2,000 (10%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
            </div>
            <a href="#">Buy Now </a>
          </div>
        </div>
  
  
        
        <div class="col-sm-4">
          <div class="card3">
            <div class="title">
              <i class="fa fa-rocket" aria-hidden="true"></i>
              <h2>VIP</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>999</h4>
            </div>
            <div class="option">
    <p class="card-text">CHALLENGE ACCOUNT BALANCE: $10,000</p>
    <hr class="border-t-2 border-gray-200 w-28 mx-auto my-2">
    <p class="card-text">One-Time Payment Only</p>
    <b>Profit Target</b>
    <p class="card-text">$8,000 (8%)</p>
    <b>Total Challenge Duration</b>
    <p class="card-text">90 Days</p>
            </div>
            <a href="#">Buy Now </a>
          </div>
        </div>
  
      </div>
    </div>
    </div>
</section>
<div style="padding: 40px 25px 25px 25px;">
    <center><a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Start</a>
    </center>
  </div>
  </div>
  </div>
  </div>
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
      <div class="col-sm-6">
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
  
  <img width="750" height="500"class="mt-6" src="https://www.pngall.com/wp-content/uploads/8/Stock-Trading-Transparent.png" alt="">
  <br>
  <br>
  <a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started!</a>
 <center>
  <div style="padding: 25px 25px 25px 25px;">


		


	<div class="container py-2">
	

		<article class="postcard light blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://images.unsplash.com/photo-1635501300433-ed4e02fce51c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="#">CHOOSE A TRADING PROGRAM</a></h1>
				
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Choosing a trading program can be a strategic decision for individuals looking to participate in financial markets and achieve their investment goals. Here are several compelling reasons why one might choose a trading program.
           Trading programs provide individuals with direct access to financial markets that may otherwise be difficult to navigate. They offer the opportunity to trade a wide range of financial instruments such as stocks, bonds, commodities, currencies, and derivatives.</div>
				
			</div>
		</article>
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80" alt="Image Title" />	
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title red"><a href="#">PASS THE CHALLENGE</a></h1>
			
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">"Passing the challenge" in trading refers to successfully meeting specific requirements or criteria set by a trading firm or platform in order to gain access to additional trading capital or advanced features. These challenges are often designed to assess a trader's skills, risk management abilities, and consistency in generating profits. Step up your trading program with simple and clear rules. As you move through your plan’s steps, the possibilities increase.</div>
				
			</div>
		</article>
		</article>
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://images.unsplash.com/photo-1645731504636-72725e46b26b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80" alt="Image Title" />	
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title red"><a href="#">FUNDED PARTNER</a></h1>
			
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">"To become a funded trader, you must undergo an evaluation challenge to show trading consistency and risk management qualities.
        As a funded partner, traders gain access to substantial trading capital provided by the trading firm or platform. This capital allows them to trade with larger sums of money than they may have had access to previously, amplifying their profit potential.
        </div>
				
			</div>
		</article>
	</div>
</section>
  

    <div style="padding: 25px 25px 25px 25px;">
    <center>
      <h1><span style="color: #000000;">How we empower you</span></h1>
    
  <!-- <h1 class="card-title">How we empower you</h1> -->
  </center>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


<div class="first hero">
  <img class="hero-profile-img" src="https://images.unsplash.com/photo-1642790261487-5b7e444c0dce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1429&q=80" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://w7.pngwing.com/pngs/384/814/png-transparent-market-market-text-investment-logo.png" alt="">
  </div>
  <div class="hero-description">
    <p>I have managed how to manage risk.
                 </p>
  </div>
  <div  class="hero-date">
    <p>14.07.2023</p>
  </div>
  <div class="hero-btn">
    <a href="#">Learn More</a>
  </div>
</div>

<div class="second hero">
  <img class="hero-profile-img" src="https://images.unsplash.com/photo-1609554496796-c345a5335ceb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://cdn.pixabay.com/photo/2016/11/10/05/25/bitcoin-1813507_1280.png" alt="">
  </div>
  <div class="hero-description">
    <p>The Trading set-up is truly ingenious.</p>
  </div>
  <div  class="hero-date">
    <p>14.07.2023</p>
  </div>
  <div class="hero-btn">
    <a href="#">Learn More</a>
  </div>
</div>

<div class="third hero">
  <img class="hero-profile-img" src="https://images.unsplash.com/photo-1639803812188-ace8ef36f8b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://cdn-icons-png.flaticon.com/512/3310/3310653.png" alt="">
  </div>
  <div class="hero-description">
    <p>I have managed how to manage risk.
                 </p>
  </div>
  <div  class="hero-date">
    <p>14.07.2023</p>
  </div>
  <div class="hero-btn">
    <a href="#">Learn More</a>
  </div>
</div>
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
      <img alt="Web Studio" class="img-fluid" src="https://img.freepik.com/free-vector/trading-linear-design_1284-36136.jpg?w=996&t=st=1689332736~exp=1689333336~hmac=22c233a9b08373213046a37c7fed603f2584a4c86f88554939e1899af9b169fd">
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


<div class="card-container">
  <div class="card5">
    <div class="card-count-container">
      <div class="card-count">1</div>
    </div>
    
    <div class="card-content">
      <h2>CHALLENGE</h2>
      Simple rules
      <br>
      Flexilbe Trading
      <br>
      Overnight weekend trades on Forex
      <br>
      One-time fee 100% refundable
    </div>
    
    <div class="card-footer">
    Choose the program that fits you. The better you become, the more funds you unlock. Grow your account and start earning!
    </div>
  </div>
  
  <div class="card5">
    <div class="card-count-container">
      <div class="card-count">2</div>
    </div>
    <div class="card-content">
      <h2>PROP TRADING</h2>
      Scale up to $5M
      <br>
      Fast Payouts at each level
      <br>
      Earn up to $562,400                     
                   
    </div>
    
    <div class="card-footer">
    Your account can grow to $5M funding power with no deadline to hit targets. Profits keep growing as we do!
    </div>
  </div>
  
  <div class="card5">
    <div class="card-count-container">
      <div class="card-count">3</div>
    </div>
    <div class="card-content">
      <h2>The Forex Trading</h2>
      Fully Funded. 
                            <br>
                            Keep up to 80% of profits
                            <br>
                           Pursue a professional career
    </div>
    
    <div class="card-footer">
    No more risking your money! Trade with our funds and even become a professional fund manager if you want!
    </div>
  </div>
</div>


    
    <div style="padding: 25px 25px 25px 25px;">
    <center>
    <a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Learn more!</a>
    </div>
    
  
  <!-- <div class="card" style="margin-top: 10px; border-radius: 30px;"> -->
    <div style="padding: 50px 25px 25px 50px;">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/atas-v2.svg" alt=""width="100" height="200">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/quantower.svg" alt="">

    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/fxflat-bank.svg" alt="">
    <img class="w-full max-w-28 max-h-16" src="https://cdn.thetradingpit.com/global/partners/gbe-borkers-logo.svg" alt="">
    
    </center>
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