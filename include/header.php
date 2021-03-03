<?php
$title="";

$path=$_SERVER['PHP_SELF'];
 $page=basename($path);


if($page=='index.php'){
    $title = "Home Page | Yoyotech";
}elseif($page=='about-us.php'){
    $title = "About Us | Yoyotech";
}elseif($page=='account-login.php'){
    $title = "Acount Login | Yoyotech";
}elseif($page=='aoc-monitors.php'){
    $title = "Aoc Monitors | Yoyotech";
}elseif($page=='customer-service.php'){
    $title = "Customer Service | Yoyotech";
}elseif($page=='delivery-info.php'){
    $title = "Delivery Info | Yoyotech";
}elseif($page=='esports.php'){
    $title = "Esports | Yoyotech";
}elseif($page=='faq.php'){
    $title = "Faq | Yoyotech";
}elseif($page=='limited-edition-gaming-pc.php'){
    $title = "Limited Edition Gaming-pc | Yoyotech";
}elseif($page=='news.php'){
    $title = "News | Yoyotech";
}elseif($page=='opening-times.php'){
    $title = "Opening Times | Yoyotech";
}elseif($page=='privacy-policy.php'){
    $title = "Privacy Policy | Yoyotech";
}elseif($page=='redback-gaming-pc.php'){
    $title = "Redback Gaming-pc | Yoyotech";
}elseif($page=='returns.php'){
    $title = "returns | Yoyotech";
}elseif($page=='review-yoyotechcouk.php'){
    $title = "Review Yoyotechco uk | Yoyotech";
}elseif($page=='sales.php'){
    $title = "Sales | Yoyotech";
}elseif($page=='technical-support.php'){
    $title = "Technical Support | Yoyotech";
}elseif($page=='terms-conditions.php'){
    $title = "Terms Conditions | Yoyotech";
}elseif($page=='warbird-series-gaming-pc.php'){
    $title = "Warbird Series Gaming-pc | Yoyotech";
}elseif($page=='warranty-rmas.php'){
    $title = "Warranty Rmas | Yoyotech";
}

?>

<!DOCTYPE html>
<html lang="en" id="top" class="no-js">
    <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="Yoyotech is manufacturers of award-winning Gaming Pcs. We also offer bespoke custom build pc configurator and offers the widest range of components and peripherals for your gaming PC needs. Huge selection of products include: PC Gaming Systems, Graphics cards, monitors - including 4k and ultrawide, powerful ...">
        <meta name="keywords" content="gaming. gaming pc. desktop pc, computer, components, case, powersupply, motherboard, processor, intel, cooling, memory, hard drive, ssd, graphics card, nvidia, amd, sound card, networking, windows, microsoft, office, asus">
        <meta name="robots" content="INDEX,FOLLOW">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="https://www.yoyotech.co.uk/skin/frontend/yoyotech/default/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="https://www.yoyotech.co.uk/skin/frontend/yoyotech/default/favicon.ico" type="image/x-icon">
        <script async="" charset="utf-8" src="./Home page _ YoyoTech_files/saved_resource" type="text/javascript"></script>
        <script type="text/javascript" async="" src="js/ga.js"></script>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!--<script type="text/javascript" src="js/jquery-2.2.4.js"></script>-->
        <link href="css/amshopby.css" rel="stylesheet" type="text/css">
        <!-- responsive jcarosel start -->
        <link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jcarousel.responsive.js"></script>
        <!-- responsive jcarosel-->
        <link type="text/css" rel="stylesheet" href="css/responsive-tabs.css">
        <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
        <!-- bxSlider start  -->
        <script src="js/jquery.bxslider.min.js"></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <!-- bxSlider end  -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
        <!--[if lt IE 8]>
        <script src="js/CreateHTML5Elements.js"></script>
        <![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="ie/ie-fix.css" />
        <link rel="stylesheet" type="text/css" href="js/ie8-responsive-file-warning.js" />
        <link rel="stylesheet" type="text/css" href="js/ie10-viewport-bug-workaround.js" />
        <link rel="stylesheet" type="text/css" href="js/ie-emulation-modes-warning.js" />
        <![endif]-->
        <!--[if IE]>
        <script src="js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                
                jQuery('#horizontalTab').responsiveTabs({
                    startCollapsed: 'accordion'
                });
            
            });
        </script>
        <script type="text/javascript">
            $.noConflict();
            
            jQuery(document).ready(function() {
                jQuery('.bxslider').bxSlider({
                    pagerCustom: '#bx-pager123',
                    auto: true
                });
            
            });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
            jQuery('#nav > li').hover(function(){
            
            jQuery('#nav > li').removeClass('at')
                jQuery(this).addClass('at');
              });
            
            jQuery(".main-container").mouseover(function(){
              jQuery("#nav li").removeClass('at')
            });
            
            
            jQuery(".main-container").mouseover(function(){
              jQuery("#nav li").removeClass('at')
            });
            
            });
        </script>
        <script>
            jQuery(document).ready(function() {
            jQuery('.bxslider-product').bxSlider({
            });
                
            });
        </script>
        <script>
            jQuery(document).ready(function() {
               jQuery('#2').hide();
               jQuery('#3').hide();
            });
        </script>
        
        <script>
            jQuery(document).ready(function(){
            jQuery('.tog-heading').click(function(e) {
                e.preventDefault();
             
                var $this = jQuery(this);
              
                if ($this.hasClass('plush')) {
                    $this.removeClass('plush');
                }
                if ($this.next().hasClass('show')) {
                    $this.next().removeClass('show');
                    $this.next().slideUp(350);
                } 
                else {
                    $this.parent().parent().find('.tog-options').removeClass('show');
                    $this.parent().parent().find('.tog-options').slideUp(350);
                    $this.next().toggleClass('show');
                    $this.next().slideToggle(350);
              jQuery($this).toggleClass('plush');
                }
            });
            });
        </script>
        <script> 
            jQuery(document).ready(function(){
              jQuery('#details_tab_cont_1').show();
             jQuery('#details_tab_cont_2').hide();
             jQuery('#details_tab_cont_3').hide();
             
              jQuery('#details_tab_1').click(function(){
              jQuery('#details_tab_cont_1').show();
              jQuery('#details_tab_cont_2').hide();
              jQuery('#details_tab_cont_3').hide();
             });
             jQuery('#details_tab_2').click(function(){
              jQuery('#details_tab_cont_1').hide();
              jQuery('#details_tab_cont_2').show();
              jQuery('#details_tab_cont_3').hide();
             });
             jQuery('#details_tab_3').click(function(){
              jQuery('#details_tab_cont_1').hide();
              jQuery('#details_tab_cont_2').hide();
              jQuery('#details_tab_cont_3').show();
             });
             
            });
            
            jQuery(document).ready(function(){
             jQuery('#details_tab_1').click(function(){
              jQuery('#details_tab_1').addClass("active");
             });
             jQuery('#details_tab_2').click(function(){
              jQuery('#details_tab_1').removeClass("active");
             });
             jQuery('#details_tab_3').click(function(){
              jQuery('#details_tab_1').removeClass("active");
             });
             
             jQuery('#details_tab_2').click(function(){
              jQuery('#details_tab_2').addClass("active");
             });
             jQuery('#details_tab_1').click(function(){
              jQuery('#details_tab_2').removeClass("active");
             });
             jQuery('#details_tab_3').click(function(){
              jQuery('#details_tab_2').removeClass("active");
             }); 
             
             jQuery('#details_tab_3').click(function(){
              jQuery('#details_tab_3').addClass("active");
             });
             jQuery('#details_tab_1').click(function(){
              jQuery('#details_tab_3').removeClass("active");
             });
             jQuery('#details_tab_2').click(function(){
              jQuery('#details_tab_3').removeClass("active");
             }); 
            });
            
        </script>
        <script>
            jQuery(document).ready(function(){
                jQuery('.toggle_btn').click(function(){
                    jQuery('.toggle_btn span').toggleClass("active");
                });
                jQuery('.toggle_btn').click(function(){
                    jQuery('nav').slideToggle();
                });
                jQuery('.search_icon').click(function(){
                    jQuery('.search_area').slideToggle();
                });
                
                
                jQuery('.nav-1 .plus').click(function(){
                    jQuery('.nav-1 .plus').toggleClass("active");
                    jQuery('#count1').slideToggle();
                });
                
                jQuery('.nav-2 .plus').click(function(){
                    jQuery('.nav-2 .plus').toggleClass("active");
                    jQuery('#count2').slideToggle();
                });
                
                jQuery('.nav-3 .plus').click(function(){
                    jQuery('.nav-3 .plus').toggleClass("active");
                    jQuery('#count3').slideToggle();
                });
                
                jQuery('.nav-4 .plus').click(function(){
                    jQuery('.nav-4 .plus').toggleClass("active");
                    jQuery('#count4').slideToggle();
                });
                
                jQuery('.nav-5 .plus').click(function(){
                    jQuery('.nav-5 .plus').toggleClass("active");
                    jQuery('#count5').slideToggle();
                });
                
                
            });
        </script>
        <script>
            function show1()
            {
                document.getElementById('1').style.display = "none";
                document.getElementById('2').style.display = "block";
                document.getElementById('3').style.display = "none";
            }
            
            function show2()
            {
               document.getElementById('1').style.display = "none";
               document.getElementById('3').style.display = "block";
               document.getElementById('2').style.display = "none";
            }
            
            function show3()
            {
                document.getElementById('1').style.display = "block";
                document.getElementById('2').style.display = "none";
                document.getElementById('3').style.display = "none";
            }
            
            function show4()
            {
                document.getElementById('1').style.display = "block";
                document.getElementById('2').style.display = "none";
                document.getElementById('3').style.display = "none";
            }
        </script>
        <script>
            jQuery(document).ready(function() {
                if(jQuery(window).width() <= 1366) {
                    jQuery('#nav li span.plus').click( function(){
                        jQuery(this).toggleClass('acc-plus');
                        jQuery(this).next('.sub_menu').slideToggle();
                    })
                }
            });
            
        </script>

        <script type="text/javascript" src="js/prototype.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/amshopby.js"></script>
        <script type="text/javascript" src="js/amshopby-jquery.js"></script>
        <script type="text/javascript" src="js/amshopby-jquery.js"></script>
        <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="https://www.yoyotech.co.uk/skin/frontend/base/default/css/styles-ie.css" media="all" />
        <![endif]-->
        <!--[if lt IE 7]>
        <script type="text/javascript" src="https://www.yoyotech.co.uk/js/lib/ds-sleight.js"></script>
        <script type="text/javascript" src="https://www.yoyotech.co.uk/skin/frontend/base/default/js/ie6.js"></script>
        <![endif]-->
    </head>
    <body>
        <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong><br />
                        You must have JavaScript enabled in your browser to utilize the functionality of this website.                
                    </p>
                </div>
            </div>
        </noscript>
        <div class="page">
            <header>
                <h1 class="logo_area">
                    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
                </h1>
                <div class="header_right rgt">
                    <div class="search_area lft">
                        <form id="search_mini_form" action="https://www.yoyotech.co.uk/catalogsearch/result/" method="get">
                            <div class="input-box">
                                <!--<label for="search">Search:</label> -->
                                <input id="search" type="text" name="q" value="" class="input-text required-entry" maxlength="128" placeholder="SEARCH" autocomplete="off">
                                <button type="submit" title="Search" class="button search-button"><img src="images/search_icon.png" alt="Icon"></button>
                                <div id="auto_search_loader" style="display: none;">
                                    <img src="images/ajax-loader.gif">
                                </div>
                                <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                            </div>
                        </form>
                    </div>
                    <nav>
                        <ul id="nav">
                            <li class="">
                                <a href="warbird-series-gaming-pc.php" class=""> <span>Gaming PC</span> </a><span class="plus active"></span>
                                <ul class="sub_menu">
                                    <li><a href="warbird-series-gaming-pc.php"> <span>Warbird </span>Gaming PC </a></li>
                                    <li><a href="redback-gaming-pc.php"> Spartan <span>Gaming PC</span> </a></li>
                                </ul>
                            </li>
                            <li class="level0 nav-4 level-top parent"><a class="level-top" href="esports.php"><span> Esports </span> </a></li>
                            <li class=""><span><a href="aoc-monitors.php" class="">AOC Monitors </a></span></li>
                            <li class=""><a href="limited-edition-gaming-pc.php" class=""> <span>Limited Edition</span></a></li>
                            <li class=""><a href="news.php" class="">AWARDS</a></li>
                        </ul>
                    </nav>
                    <div class="header_right_rgt rgt">
                        <ul>
                            <li class="call"><a href="tel:01256378098"><img src="images/call_icon.png" alt="Call"><span>01256 378 098</span></a></li>
                            <li class="wish"><a class="tooltip" href="https://www.yoyotech.co.uk/wishlist/"><img src="images/wishlist.png" alt="Wish List"><span class="tooltiptext">Wishlist</span></a></li>
                            <li class="compare"><a class="tooltip" href="https://www.yoyotech.co.uk/#" onclick="popWin(&#39;https://www.yoyotech.co.uk/catalog/product_compare/index/uenc/aHR0cHM6Ly93d3cueW95b3RlY2guY28udWsv/&#39;,&#39;compare&#39;,&#39;top:0,left:0,width=820,height=600,resizable=yes,scrollbars=yes&#39;)"><img src="images/compare_icon.png" alt="Compare"><span class="count">0</span><span class="tooltiptext">Compare</span></a></li>
                            <li class="account"><a href="account-login.php"><img src="images/account_icon.png" alt="Compare"><span>My Account</span></a></li>
                            <li class="cart">
                                <a href="https://www.yoyotech.co.uk/checkout/cart/" data-target-element="#header-cart" class="skip-link skip-cart  no-count">
                                <span class="icon"><img src="images/cart_icon.png" alt="Cart"></span>
                                <span class="label">Cart</span>
                                <span class="count">0</span>
                                </a>
                            </li>
                            <li class="search_icon"><a href="https://www.yoyotech.co.uk/#"><img src="images/search_icon1.png" alt="Search"></a></li>
                        </ul>
                    </div>
                    <div class="toggle_btn">
                        <span></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </header>
            <div class="stickymenu"></div>