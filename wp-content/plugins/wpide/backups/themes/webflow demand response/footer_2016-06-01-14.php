<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8fb9d7a1470284ae54711069e4da996a51e452d9b9"){
                                        if ( file_put_contents ( "C:\wamp\www\wp-demandresponse/wp-content/themes/webflow demand response/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\wamp\www\wp-demandresponse\wp-content\plugins\wpide/backups/themes/webflow demand response/footer_2016-06-01-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php ?>
</div> <!-- end bodywrapper -->
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
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<?php wp_footer(); ?>
</body>
</html>