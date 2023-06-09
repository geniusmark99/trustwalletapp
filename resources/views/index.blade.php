<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>trust wallet vip</title>
  <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://www.google.com/jsapi"></script>
<script> 
  function translateText() {
    const selectElement = document.getElementById("languageSelect");
    const selectedLanguage = selectElement.value;
    const textToTranslate = document.getElementById("textToTranslate").textContent; // Replace "textToTranslate" with the ID of the element containing the text to translate
    // Use Google Translate API
    const googleTranslateUrl = "https://translation.googleapis.com/language/translate/v2?key=YOUR_API_KEY";
    const apiUrl = `${googleTranslateUrl}&target=${selectedLanguage}&q=${encodeURIComponent(textToTranslate)}`;

    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        const translatedText = data.data.translations[0].translatedText;
        document.getElementById("translatedText").textContent = translatedText; // Replace "translatedText" with the ID of the element to display the translated text
      })
      .catch(error => {
        console.error("Error translating text:", error);
      });
  }

</script>

</head>


<body id="all">
  <header class="light-bb">
    <nav class="navbar navbar-expand-lg">
     <a class="navbar-brand" href="index.html"><img src="assets/img/trustwalletlogo.svg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Exchange
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="exchange-light.html">Exchange</a>
              <a class="dropdown-item" href="exchange-light-live-price.html">Exchange Live Price</a>
              <a class="dropdown-item" href="exchange-light-ticker.html">Exchange Ticker</a>
              <a class="dropdown-item" href="exchange-light-fluid.html">Exchange Fluid</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="markets-light.html">Markets</a>
              <a class="dropdown-item" href="market-capital-light.html">Markets Line</a>
              <a class="dropdown-item" href="market-capital-bar-light.html">Markets Bar</a>
              <a class="dropdown-item" href="market-overview-light.html">Market Overview</a>
              <a class="dropdown-item" href="market-screener-light.html">Market Screener</a>
              <a class="dropdown-item" href="market-crypto-light.html">Market Crypto</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="settings-profile-light.html">Profile</a>
              <a class="dropdown-item" href="settings-wallet-light.html">Wallet</a>
              <a class="dropdown-item" href="settings-light.html">Settings</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="technical-analysis-light.html">Technical Analysis</a>
              <a class="dropdown-item" href="cross-rates-light.html">Cross Rates</a>
              <a class="dropdown-item" href="symbol-info-light.html">Symbol Info</a>
              <a class="dropdown-item" href="heat-map-light.html">Heat Map</a>
              <a class="dropdown-item" href="signin-light.html">Sign in</a>
              <a class="dropdown-item" href="signup-light.html">Sign up</a>
              <a class="dropdown-item" href="404-light.html">404</a>

            </div>
            

          </li>
          <select id="languageSelect">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <!-- Add more language options as needed -->
          </select>
          
        </ul>
        <ul class="navbar-nav ml-auto">
          <a href="{{route('login')}}" class="btn-1">Sign In</a>
          <a href="signup-light.html" class="btn-2">Get Started</a>
        </ul>
      </div>
      
    </nav>
  </header>

  <div class="landing-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="margin-top: 100px;">
          <h2>Start Trading with Bonus up to $1,000</h2>
          <p>Trade Forex, Crypto, Stocks, Indices, Metals, and Energy with leverage up to 1000:1 and no requotes.</p>
          <div class="download-button">
            <div class="row download">
            <div class="col-12 col-lg-4 apple">
             <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" data-analytics="&quot;Download Clicks&quot;, {&quot;props&quot;:{&quot;Target&quot;:&quot;App Store&quot;}}" class="downloadapp" aria-label="goes to AppStore to download Trust Wallet for iphones">
            <img  class="all"    src="assets/img/google.png" >
            
            
            
            </a>
            </div>
            <div class="col-12 col-lg-4 googleplay">
            <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&amp;referrer=utm_source%3Dwebsite" data-analytics="&quot;Download Clicks&quot;, {&quot;props&quot;:{&quot;Target&quot;:&quot;Google Play&quot;}}" class="downloadapp" aria-label="goes to Google Play store to download Trust Wallet for Android phones">
              <img class="all" src="assets/img/google (1).png"> </a>
            </div>
            <div class="col-12 col-lg-4">
            <a href="https://chrome.google.com/webstore/detail/trust-wallet/egjidjbpglichdcondbcbdnbeeppgdph" data-analytics="&quot;Download Clicks&quot;, {&quot;props&quot;:{&quot;Target&quot;:&quot;Google Chrome extension&quot;}}" class="downloadapp" aria-label="goes to Google Chrome web store">
            <svg class="download-app-image download-chrome" loading="lazy" role="img" alt="goes to Google Chrome webs tore" aria-label="goes to Google Chrome web store" rel="noopener"></svg>
            </a>
            </div>
            </div>
            </div>
          
        </div>
        <div class="offset-md-1 col-md-5">
          <!-- TradingView Widget BEGIN -->
          <img src="assets/img/xmapp_isometric_crypto.png" alt="">

          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>
    

  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
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
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

  <div class="landing-info-one landing-info-one-bg mtb100">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>The most advance and secure cryptocurrency platform.</h2>
          <p>At trust wallet vip, we understand that traders need access to the best tools and resources in order to succeed in the markets. </p>
          <ul>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Technical Analysis</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Market Data</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Cryptocurrency Price</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Deposit & Withdraw</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Buy & Sell</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Coin Listing</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Manage Wallets</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Market depth</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="assets/img/landing/dash-preview.png" class="visible-mobile" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="landing-info-one mtb100">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container tradingview-gain-and-loser">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js"
              async>
                {
                  "colorTheme": "light",
                    "dateRange": "12M",
                      "exchange": "US",
                        "showChart": true,
                          "locale": "en",
                            "width": "100%",
                              "height": "600",
                                "largeChartUrl": "",
                                  "isTransparent": false,
                                    "showSymbolLogo": true,
                                      "plotLineColorGrowing": "rgba(28, 217, 121, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                          "gridLineColor": "rgba(240, 243, 250, 1)",
                                            "scaleFontColor": "rgba(120, 123, 134, 1)",
                                              "belowLineFillColorGrowing": "rgba(33, 222, 95, 0.12)",
                                                "belowLineFillColorFalling": "rgba(255, 0, 0, 0.12)",
                                                  "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
         <div class="offset-md-1 col-md-6">
          <h1>Live Market Gainers and Losers tracking</h1>
          <p>That's why our platform is designed to provide users with an exceptional trading experience, with a comprehensive suite of features and tools to help you stay on top of market movements and make informed trading decisions.</p>
          <ul>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Gainers Tracking</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Losers Tracking</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Market Data</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Live Cryptocurrency Price</li>
            <li><i class="icon ion-ios-checkmark-circle"></i> Past Coin Price check</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="landing-info-one ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Invest With Credit card</h2>
          <p>At trust wallet vip, we accept credit-cards </p>
          
        </div>
        <div class="offset-md-1 col-md-5">
        <img src="assets/img/home_cards.png">
        </div>
      </div>
    </div>
  </div>
  <div class="landing-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Here are a few reasons why <br> you should choose trust wallet vip</h2>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/stroge.svg" alt="">
            <h3>forex trading </h3>
            <p>50+ global currency pairs </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/backup.svg" alt="">
            <h3>Commodities</h3>
            <p>Gold, Silver, Palladuim and More</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/managment.svg" alt="">
            <h3>Industry best practices</h3>
            <p>Sugar Cocoa Wheat
              And more</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="landing-feature landing-start">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Get started in a few steps</h2>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/user.svg" alt="">
            <span>1</span>
            <h3>Create an account </h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/bank.svg" alt="">
            <span>
              2
            </span>
            <h3>Link your bank account </h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="landing-feature-item">
            <img src="assets/img/landing/trade.svg" alt="">
            <span>3</span>
            <h3>Start buying & selling</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="landing-sub">
    <div class="container">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="landing-sub-content">
            <h2>Become part of a global community of people who have found their path to the crypto world with trust wallet vip
            </h2>
            <a href="signup-light.html">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="landing-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>News Feed</h2>
        </div>
        <div class="col-md-12">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
              async>
                {
                  "colorTheme": "light",
                    "isTransparent": false,
                      "displayMode": "compact",
                        "width": "100%",
                          "height": 430,
                            "locale": "en"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>
  <div class="credit-cards" style="text-align: center; width: 100%">
  
    <img style="height:30px; width: 60px; margin-left: 20px;margin-right: 20px;" src="assets/img/mastercardsecurecode_logo.png"/>
  
    <img style="height: 55px; width: 60px; margin-left: 20px;margin-right: 20px;" src="assets/img/montegro.png"/>
    <img style="height: 30px; width: 60px; margin-left: 20px;margin-right: 20px;" src="assets/img/astronew.jpg"/>
    
    <img style="height: 30px; width: 60px;margin-left: 20px;margin-right: 20px;"src="assets/img/orangepay.png"/>
    <img style="height: 30px; width: 60px; margin-left: 20px;margin-right: 20px;" src="https://shoplineimg.com/assets/footer/card_visa.png"/>
  
    <img style="height: 30px; width: 60px; margin-left: 20px;margin-right: 20px;" src="assets/img/nett.png"/>
  </div>
  

  <footer class="landing-footer-two">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="assets/img/trust6walletblue.svg" alt="">
          <p> Whether you're a seasoned trader or just starting out, trust wallet vip offers the tools and resources you need to succeed in the markets. Join us today and experience the benefits of trading with a leading online platform.
          </p>
          <ul class="social-icon">
            <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-linkedin"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-pinterest"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-github"></i></a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Company</h3>
          <ul>
            <li><a href="signup-light.html">About</a></li>
            <li><a href="signup-light.html">Careers</a></li>
            <li><a href="signup-light.html">Affiliates</a></li>
            <li><a href="signup-light.html">Investors</a></li>
            <li><a href="signup-light.html">Legal & privacy</a></li>
            <li><a href="signup-light.html">Cookie policy</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Individuals</h3>
          <ul>
            <li><a href="signup-light.html">Buy & sell</a></li>
            <li><a href="signup-light.html">Earn free crypto</a></li>
            <li><a href="signup-light.html">Wallet</a></li>
            <li><a href="signup-light.html">Card</a></li>
            <li><a href="signup-light.html">Payment methods</a></li>
            <li><a href="signup-light.html">Account access</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Support</h3>
          <ul>
            <li><a href="signup-light.html">Help center</a></li>
            <li><a href="signup-light.html">Contact us</a></li>
            <li><a href="signup-light.html">Create account</a></li>
            <li><a href="signup-light.html">ID verification</a></li>
            <li><a href="signup-light.html">Account information</a></li>
            <li><a href="signup-light.html">Supported crypto</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Learn</h3>
          <ul>
            <li><a href="signup-light.html">Browse crypto prices</a></li>
            <li><a href="signup-light.html">Crypto basics</a></li>
            <li><a href="signup-light.html">Tips & tutorials</a></li>
            <li><a href="signup-light.html">Market updates</a></li>
            <li><a href="signup-light.html">How to send crypto</a></li>
            <li><a href="signup-light.html">What is a blockchain?</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/amcharts-core.min.js')}}"></script>
  <script src="{{ asset('assets/js/amcharts.min.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>
