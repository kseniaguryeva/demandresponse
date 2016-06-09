<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8fb9d7a1470284ae54711069e4da996aaa3cbcdb32"){
                                        if ( file_put_contents ( "C:\wamp\www\wp-demandresponse/wp-content/themes/webflow demand response/index.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\wamp\www\wp-demandresponse\wp-content\plugins\wpide/backups/themes/webflow demand response/index_2016-05-31-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html>
<!-- Last Published: Mon May 30 2016 07:55:40 GMT+0000 (UTC) -->
<head>
  <meta charset="utf-8">
  <title>Demand response</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/demand-response.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<body>
  <div data-ix="modal-interaction" class="modal-wrapper">
    <div class="signup-wrapper"><a href="#" data-ix="close-ineraction" class="close-link">Close X</a>
      <p class="modal-text">Please enter your access details below.</p>
      <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
          <label for="email-3" class="form-label">Email:</label>
          <input id="email-3" type="email" placeholder="Enter your email address" name="email" data-name="Email 3" required="required" class="w-input form-field">
          <label for="field" class="form-label">Password:</label>
          <input id="field" type="password" placeholder="Enter your password" name="field" required="required" class="w-input form-field">
          <input type="submit" value="Log in" data-wait="Please wait..." class="w-button button big">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
  </div>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container"><a href="#Hero" class="w-nav-brand brand-link"><h1 class="brand-text">LOGO</h1></a>
      <nav role="navigation" class="w-nav-menu navigation-menu"><a href="#About" class="w-nav-link navigation-link">ABOUT</a><a href="#Solutions" class="w-nav-link navigation-link">SOLUTIONS</a><a href="#Sustainability" class="w-nav-link navigation-link"><span>SUSTAINABILITY</span></a><a href="#" data-ix="log-in-interaction" class="w-nav-link navigation-link log-in">CLIENT ZONE</a>
      </nav><a href="#Contact-us" class="w-button contact-us">CONTACT US</a>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="Hero" class="w-section hero-section centered">
    <div data-ix="new-interaction" class="w-container">
      <div data-ix="fade-in-bottom-page-loads" class="hero-text-block">
        <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading">Let us &nbsp;<span>help </span>you save on electricity</h1>
        <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus.</div><a href="#Solutions" class="button">Learn more</a>
      </div>
    </div>
    <a href="#Solutions" class="w-inline-block arrow"><img alt="arrow" src="images/social-35-white.svg" class="arrow">
    </a>
  </div>
  <div id="Solutions" class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">how it works</h2>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="white-box"><img src="images/social-35-white.svg" class="grid-image">
            <h3 class="section-h3">reduce your expenses</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus. Vivamus eros elit, vehicula vel consequat quis, scelerisque a diam. Proin lacinia diam nisi, ac congue ipsum euismod quis.</p>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="white-box"><img width="210" src="images/social-34-white.svg" class="grid-image">
            <h3 class="section-h3">get additional money</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus. Vivamus eros elit, vehicula vel consequat quis, scelerisque a diam. Proin lacinia diam nisi, ac congue ipsum euismod quis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="Sustainability" class="w-section section accent">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered white">why is this important</h2>
      </div>
      <h3 class="white-text section-h3">contribute to sustainability</h3>
      <p class="white-text section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus. Vivamus eros elit, vehicula vel consequat quis, scelerisque a diam. Proin lacinia diam nisi, ac congue ipsum euismod quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus.&nbsp;</p>
    </div>
  </div>
  <div id="About" class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">who we are</h2>
      </div>
      <div class="w-row">
        <div class="w-col w-col-4 about-column">
          <div>
            <h3 class="section-h3">team</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div>
            <h3 class="section-h3">technology</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div>
            <h3 class="section-h3">partners</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="Contact-us" class="w-section section contact">
    <div class="w-container">
      <h2 class="section-heading centered">contact us and start saving today</h2>
      <div class="w-form form-wrapper">
        <form id="email-form" name="email-form" data-name="Email Form">
          <label for="name" class="form-label">Name:</label>
          <input id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" class="w-input form-field">
          <label for="Email-2" class="form-label">Email Address:</label>
          <input id="Email-2" type="email" placeholder="Enter your email" name="Email" required="required" data-name="Email" class="w-input form-field">
          <label for="Company" class="form-label">Company Name</label>
          <input id="Company" type="text" placeholder="Enter your company name" name="Company" data-name="Company" required="required" class="w-input form-field">
          <label for="Message" class="form-label">Message</label>
          <textarea id="Message" placeholder="Please enter your message here." name="Message" data-name="Message" class="w-input form-field message"></textarea>
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button button big">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section footer center">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 w-clearfix">
          <div class="footer-text">Company name</div>
        </div>
        <div class="w-col w-col-6 w-clearfix">
          <div class="w-clearfix footer-text right"><span class="footer-text">© All rights reserved. 2016</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>