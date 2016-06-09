<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8fb9d7a1470284ae54711069e4da996a6954ba7bf1"){
                                        if ( file_put_contents ( "C:\wamp\www\wp-demandresponse/wp-content/themes/webflow demand response/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\wamp\www\wp-demandresponse\wp-content\plugins\wpide/backups/themes/webflow demand response/functions_2016-06-06-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 


register_nav_menu( 'primary', 'Primary Menu' ); //our common page menu
register_nav_menu( 'home', 'Home Menu' ); //our home page menu


?>