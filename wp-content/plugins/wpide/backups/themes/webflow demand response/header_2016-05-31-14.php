<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8fb9d7a1470284ae54711069e4da996a9e9da965f3"){
                                        if ( file_put_contents ( "C:\wamp\www\wp-demandresponse/wp-content/themes/webflow demand response/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\wamp\www\wp-demandresponse\wp-content\plugins\wpide/backups/themes/webflow demand response/header_2016-05-31-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php ?>

<!DOCTYPE html>
<!-- Last Published: Mon May 30 2016 07:55:40 GMT+0000 (UTC) -->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">  
  <title>Demand response</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/webflow.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/demand-response.webflow.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
  <?php wp_head(); ?>
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