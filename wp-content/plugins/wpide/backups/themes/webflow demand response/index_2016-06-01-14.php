<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8fb9d7a1470284ae54711069e4da996a51e452d9b9"){
                                        if ( file_put_contents ( "C:\wamp\www\wp-demandresponse/wp-content/themes/webflow demand response/index.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\wamp\www\wp-demandresponse\wp-content\plugins\wpide/backups/themes/webflow demand response/index_2016-06-01-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>
<div class="bodywrapper">
<?php if(is_page('home')) : ?>
  <div id="Hero" class="w-section hero-section centered">
    <div data-ix="new-interaction" class="w-container">
      <div data-ix="fade-in-bottom-page-loads" class="hero-text-block">
        <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading">Let us &nbsp;<span>help </span>you save on electricity</h1>
        <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus.</div><a href="#Solutions" class="button">Learn more</a>
      </div>
    </div>
    <a href="#Solutions" class="w-inline-block arrow"><img alt="arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social-35-white.svg" class="arrow">
    </a>
  </div>
  <div id="Solutions" class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">how it works</h2>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="white-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social-35-white.svg" class="grid-image">
            <h3 class="section-h3">reduce your expenses</h3>
            <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices turpis et dui egestas, vitae consectetur erat iaculis. Etiam sem turpis, tincidunt vitae venenatis sit amet, hendrerit in purus. Vivamus eros elit, vehicula vel consequat quis, scelerisque a diam. Proin lacinia diam nisi, ac congue ipsum euismod quis.</p>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="white-box"><img width="210" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social-34-white.svg" class="grid-image">
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
  
<?php else : ?>
  
<?php endif; ?>

<?php get_footer(); ?>
 