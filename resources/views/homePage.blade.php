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
<div class="row" style="margin-top: 10px;padding: 25px 25px 25px 100px;">
  <div class="col-md-6">
    <!-- Left side with text -->
    <div>
      <h2>Be Your Own Hero</h2>
      <p>We Funds</p>
      <p>We Trades</p>
      <button type="button" class="btn btn-secondary">Buy Instant Funded Account</button>
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
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1620266757065-5814239881fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHJhZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1620266757065-5814239881fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHJhZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1620266757065-5814239881fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHJhZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Third slide">
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
<!-- <div class="tradingview-widget-container">
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
</div> -->
<!-- TradingView Widget END -->

<div style="padding: 25px 25px 25px 25px;">
  <div class="card" style="margin-top: 10px; border-radius: 30px;">
  <center>
    <div class="card-body">
      <h5 class="card-title">Rise to the Challenge</h5>
      <p class="card-text">THE POWER OF MULTI-ASSET TRADING</p>
      <button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-sun pr-2" aria-hidden="true"></i>Sunny
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-sun pr-2" aria-hidden="true"></i>Sunny
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-sun pr-2" aria-hidden="true"></i>Sunny
</button>
<button type="button" class="btn btn-outline-primary waves-effect rounded-pill custom-button">
  <i class="fas fa-sun pr-2" aria-hidden="true"></i>Sunny
</button>

    </div>
    </center>
  </div>
</div>
