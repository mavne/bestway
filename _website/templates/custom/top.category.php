<?php defined('DIR') OR exit; ?>

<!DOCTYPE html>
<!-- saved from url=(0031)/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <base href="https://bestway.404.ge/">
<meta name="title" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Best</title>
<link rel="stylesheet" type="text/css" media="all" href="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/f7476e11845f15d504abee96d9fdffd1.min.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/styles-l.min.css">
<link rel="stylesheet" type="text/css" media="print" href="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/print.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script type="text/javascript">
    /*
        *
        Change feature product view
        */
        function changeSlick(view){
            jQuery('.featured-products-block .products').hide(); //Hide all blocks
            jQuery("#"+view+"-block").show(); //Show selected
            
            jQuery(".featured-product-category-filter a").removeClass("selected"); //Remove selected item idenifier for all
            jQuery("#"+view).addClass("selected"); //Add selected identifier for selected
        }
</script>

<script async="" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/optimize.js.download" type="text/javascript"></script>
<style>
.product-offers.category-view-offers .product-offer-trigger.secondary {
background-color: #7CC6D1;
}
.product-offers.category-view-offers .product-offer-trigger.secondary:focus,
.product-offers.category-view-offers .product-offer-trigger.secondary:hover {
background-color: #66acb2;
}
.product-offers.product-view-offers .product-offer-trigger.secondary {
color: #66acb2;
border-color: #7CC6D1;
}
.product-offers.product-view-offers .product-offer-trigger.secondary .icon {
background-color: #7CC6D1;
}
.product-offers.product-view-offers .product-offer-trigger.secondary:focus,
.product-offers.product-view-offers .product-offer-trigger.secondary:hover {
color: #66acb2;
border-color: #66acb2;
}
.product-offers.product-view-offers .product-offer-trigger.secondary:focus .icon,
.product-offers.product-view-offers .product-offer-trigger.secondary:hover .icon {
background-color: #66acb2;
}
.filter-content .items.am-filter-items-attr_spa_massage_system .item a {
padding-left: 28px;
}

/** hide pixiemedia trustpilot PLP/PDP */
.page-products .products-grid .product-item .details-container .trust-reviews,
.catalog-product-view.page-layout-1column .reviews-wrapper-container,
.product-info-main .product-info-review-short {
    display: none !important;
    visibility: hidden;
}

.checkout-index-index.page-layout-checkout .opc-trustpilot {
float: left;
margin: 0 auto;
width: 100%;
}
</style> <script type="text/javascript">

    let host = window.location.hostname.replace('www.', '');
    let domain = '.'+host;
    let additionalDomain = '.www.'+host;

    let cookieControlInit = getCookie('amcookie_policy_restriction');
    let cookieDisallow = getCookie('amcookie_allowed');
    let cookieDisallowed = getCookie('amcookie_disallowed');

    window.isAnalyticsAllowed = false;
    window.isMarketingAllowed = false;
    window.isDecisionMade = false;

    //make sure datalayer exists
    window.dataLayer = window.dataLayer || [];

    //output settings to window for usage elsewhere
    if ((cookieControlInit === 'allowed') && cookieDisallow) {
        window.isDecisionMade = true;
    }
    if ((!window.isDecisionMade) || (cookieControlInit === 'allowed') && cookieDisallow && (cookieDisallow.includes('2')) || cookieDisallow.includes('0') ) {
        window.isMarketingAllowed = true;
    }
    if ((!window.isDecisionMade) || (cookieControlInit === 'allowed') && cookieDisallow && (cookieDisallow.includes('3')) || cookieDisallow.includes('0') ) {
        window.isAnalyticsAllowed = true;
    }

    //Are we allowed to track if not send event
    if (window.isAnalyticsAllowed) {
        window.dataLayer.push({"event" : "allow_analytics"});
    }

    //remove cookies and storage when not allowed + have disable list
    if (window.isDecisionMade && cookieDisallowed) {

        let notAllowedArray  = cookieDisallowed.split(',');
        let currentCookies = getCookieList();
        let storageItems = getStorageList();

        notAllowedArray.forEach(function(item) {
            if (currentCookies.includes(item)) {
                removeCookie(item);
            }
            if (storageItems.includes(item)) {
                removeStorage(item);
            }
        })
    }

    function removeCookie(cookieName) {
        document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain="+domain+"; path=/;"
        document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain="+additionalDomain+"; path=/;"
    }

    function removeStorage(itemName) {
        if (window.localStorage.getItem(itemName)) {
            window.localStorage.removeItem(itemName);
        }
    }

    function getCookie(cname)
    {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');

        for (let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function getCookieList() {
        let theCookies = document.cookie.split(';');
        return theCookies.map(function(current) {
            let taken = current.split('=');
            return taken[0].replace(/\s/g, '');
        });
    }

    function getStorageList() {
        return Object.keys(localStorage);
    }

</script>
<script exclude-this-tag="text/x-magento-template" type="text/javascript">
        window.getWpGA4Cookie = function(name) {
            match = document.cookie.match(new RegExp(name + '=([^;]+)'));
            if (match) return decodeURIComponent(match[1].replace(/\+/g, ' ')) ;
        };

        window.dataLayer = window.dataLayer || [];
                var dl4Objects = [{"pageName":"Bestway Store UK | Leaders in Inflatables & Above Ground Pools","pageType":"home"}];
        for (var i in dl4Objects) {
            window.dataLayer.push({ecommerce: null});
            window.dataLayer.push(dl4Objects[i]);
        }
                var wpGA4Cookies = ['wp_ga4_user_id','wp_ga4_customerGroup'];
        wpGA4Cookies.map(function(cookieName) {
            var cookieValue = window.getWpGA4Cookie(cookieName);
            if (cookieValue) {
                var dl4Object = {};
                dl4Object[cookieName.replace('wp_ga4_', '')] = cookieValue;
                window.dataLayer.push(dl4Object);
            }
        });
    </script>





<style>
	@media (min-width: 100px) {
		.magezon-builder .mgz-container {width: 100%;}
	}
	</style>
<link rel="stylesheet" type="text/css" media="all" href="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/font-awesome.min.css"><script async="" type="text/javascript">
    var w = document.createElement("script");
    w.type = "text/javascript";
    w.src = "//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js";
    w.async = true;
    document.head.appendChild(w);
</script>
<script type="text/javascript">
    (function(w,d,s,r,n){w.TrustpilotObject=n;w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)};
    a=d.createElement(s);a.async=1;a.src=r;a.type='text/java'+s;f=d.getElementsByTagName(s)[0];
    f.parentNode.insertBefore(a,f)})(window,document,'script', 'https://invitejs.trustpilot.com/tp.min.js', 'tp');
    tp('register','wFI0cEr956nbE2kV');
</script>
<script type="text/javascript">
    function inIframe () {
        try {
            return window.self !== window.top;
        } catch (e) {
            return false;
        }
    }

    function tryParseJson(str) {
        if (typeof str === 'string') {
            try {
                return JSON.parse(str);
            } catch (e) {
                return false;
            }
        }
        return false;
    }

    if (inIframe()) {
        window.addEventListener('message', function(e) {
            var adminOrign = new URL(window.location).hostname;
            if (!e.data || e.origin.indexOf(adminOrign) === -1) {
                return;
            }
            if (typeof TrustpilotPreview !== 'undefined') {
                if (typeof e.data === 'string' && e.data === 'submit') {
                    TrustpilotPreview.sendTrustboxes();
                } else {
                    jsonData = tryParseJson(e.data);
                    if (jsonData.trustbox) {
                        TrustpilotPreview.setSettings(jsonData.trustbox);
                    } else if (jsonData.customised) {
                        TrustpilotPreview.updateActive(jsonData.customised);
                    }
                }
            } else {
                var settings = tryParseJson(e.data);
                if (settings) {
                    var p = document.createElement("script");
                    p.type = "text/javascript";
                    p.onload = function () {
                        const iFrame = e.source.parent.document.getElementById('configuration_iframe').contentWindow;
                        TrustpilotPreview.init(['//ecommplugins-scripts.trustpilot.com/v2.1/css/preview.min.css'], settings, iFrame, e.source);
                    };
                    p.src = '//ecommplugins-scripts.trustpilot.com/v2.1/js/preview.min.js';
                    document.head.appendChild(p);
                }
            }
        });
    }
</script><script async="" type="text/javascript">
    const trustpilot_trustbox_settings = {"trustboxes":[]};
    if (trustpilot_trustbox_settings) {
        document.addEventListener('DOMContentLoaded', function() {
            tp('trustBox', trustpilot_trustbox_settings);
        });
    }
</script>
<style>
        #confirmBox,
    .am-related-title > .am-title {
        background-color: #FFFFFF;
    }
    
        #confirmBox a,
    #confirmBox a:hover,
    #confirmBox a:active,
    #confirmBox .amrelated-confirm-header {
        color: #222222;
    }
        .amcart-confirm-buttons .button.am-btn-left {
    border: 1px solid #0A65AE;    background-color: #0A65AE;    color: #FFFFFF;    }

    .amcart-confirm-buttons .button.am-btn-right {
    border: 1px solid #7CC6D2;    background-color: #FFFFFF;    color: #7CC6D2;    }
        .amcart-confirm-buttons,
    .amcart-confirm-buttons .checkout,
    .amcart-confirm-buttons .checkout:hover,
    .amcart-confirm-buttons .checkout:active,
    .amcart-message-box,
    .am-related-box,
    #am-a-count,
    #am-a-count:visited,
    .am-related-title > .am-title {
        color: #222222;
    }
    </style>







<!-- <script async="" type="text/javascript" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/bv.js.download"></script> -->
<script type="text/javascript">
    window.isGdprCookieEnabled = true;
</script>
<!-- ko scope: 'gdpr-cookie-container' -->
<div data-role="gdpr-cookie-container" class="amgdprcookie-bar-template" data-bind="css: {&#39;-bottom&#39; : isScrollBottom, &#39;-popup&#39; : isPopup}">
<!-- ko template: getTemplate() --><!-- ko if: $data.isShowNotificationBar --><!-- /ko -->
<!-- ko if: $data.elems().length --><!-- /ko -->
<!-- /ko -->
</div>
<!-- /ko -->

<style>
        .amgdprcookie-bar-template {
                z-index: 15;
                            top: 0;
                    }
    </style>
<style>
    .amgdprcookie-modal-template,
    .amgdprcookie-bar-container {
            background-color: ;
    }
    .amgdprcookie-modal-template .amgdprcookie-policy,
    .amgdprcookie-bar-container .amgdprcookie-policy {
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-text,
    .amgdprcookie-bar-container .amgdprcookie-text {
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-header,
    .amgdprcookie-bar-container .amgdprcookie-header {
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-link,
    .amgdprcookie-modal-template .amgdprcookie-policy a,
    .amgdprcookie-bar-container .amgdprcookie-policy a {
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-save,
    .amgdprcookie-bar-container .amgdprcookie-button.-allow {
        background-color: ;
        border-color: ;
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-save:hover,
    .amgdprcookie-bar-container .amgdprcookie-button.-allow:hover {
        background-color: ;
        border-color: ;
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-allow,
    .amgdprcookie-bar-container .amgdprcookie-button.-settings {
        background-color: ;
        border-color: ;
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-allow:hover,
    .amgdprcookie-bar-container .amgdprcookie-button.-settings:hover {
        background-color: ;
        border-color: ;
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-decline,
    .amgdprcookie-bar-container .amgdprcookie-button.-decline {
        background-color: ;
        border-color: ;
        color: ;
    }

    .amgdprcookie-modal-template .amgdprcookie-button.-decline:hover,
    .amgdprcookie-bar-container .amgdprcookie-button.-decline:hover {
        background-color: ;
        border-color: ;
        color: ;
    }
</style>
<div class="page-wrapper">

<?php
    @include '_website/templates/widgets/header.php';
?>
<div class="md-menu-overlay">
</div>
<?php if(g_checkVisibility(346)): ?>
<div class="confidence-banner" id="topbanner">
    <div class="cb-columns">
        <div class="cb-col  nb">
            <div class="magezon-builder magezon-builder-preload">
                <div class="cufm6eo mgz-element mgz-element-row full_width_row">
                    <div class="mgz-element-inner cufm6eo-s">
                        <div class="inner-content mgz-container">
                            <div class="goq5t8b mgz-element mgz-element-column mgz-col-xs-12">
                                <div class="mgz-element-inner goq5t8b-s">
                                    <div class="myr0eeq mgz-element mgz-child mgz-element-text">
                                        <div class="mgz-element-inner myr0eeq-s">
                                            <?php echo text(346);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="close" onclick="document.getElementById('topbanner').style.display = 'none';">
        <img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/close.webp" alt="Close button">
    </span>
</div>
<?php endif; ?>
<style>
        .confidence-banner-wrapper {
            min-height: 60px;
            height: auto;
        }
        .confidence-banner {
            text-transform: none;
        }
        .confidence-banner a {
            transition: 0.3s;
        }
        .confidence-banner a:hover {
            opacity: 0.6;
        }
        .cb-columns {
            text-align: center;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
        }
        .cb-columns .cb-col {
            display: inline-block;
            flex: 1;
            box-sizing: border-box;
            padding: 5px 20px;
            text-align: center;
            border-right: 1px solid #ffffff;
        }
        .cb-columns .cb-col:last-child {
            border: none;
        }
        .cb-columns .cb-col p {
            padding: 0;
        }
        .cb-columns .cb-col.nb {
            border: none !important;
        }
    </style>


<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-placeholder="messages"></div>
<div data-bind="scope: &#39;messages&#39;">
<div data-bind="visible: isVisible()">
<!-- ko if: cookieMessages && cookieMessages.length > 0 --><!-- /ko -->
<!-- ko if: messages().messages && messages().messages.length > 0 --><!-- /ko -->
</div>
</div>
</div><div class="columns"><div class="column main">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"><div id="authenticationPopup" data-bind="scope:&#39;authenticationPopup&#39;, style: {display: &#39;none&#39;}" style="display: none;">
<script type="text/javascript">window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/www.bestwaystore.co.uk\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/www.bestwaystore.co.uk\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/www.bestwaystore.co.uk\/"}</script> <!-- ko template: getTemplate() -->

<!-- /ko -->

</div>




<div class="get_compare_list_bar"></div>
<div></div>

<style type="text/css">
    .featured-four .content-container .row, .featured-six .content-container .row{
        justify-content: flex-start;
    }
    .featured-four .content-container .row .column, .featured-six .content-container .row .column{
        max-width: 460px;
    }
</style>

<div class="homepage-wrapper"> 
    <div class="featured-six">
        <div class="content-limit">
            <!-- <h3>FEATURED CATEGORIES</h3> -->
            <h2 class="g-menuitem"><?=l('categories')?></h2>
            
            <div class="content-container">


                <?php
                    $g_categories = g_categories($id);

                    $slicedArray = array_chunk($g_categories, 3);

                    foreach($slicedArray as $sliced):
                    ?>
                    <div class="row">
                        <?php 
                        foreach($sliced as $cat): 
                            $href = href($cat['id']);
                        ?>
                        <div class="column">
                            <a href="<?=$href?>">
                                <img src="<?=$cat['image1']?>" alt="<?=htmlentities($cat['title'])?>">
                                <button class="action primary"><span class="g-menuitem"><?=$cat['title']?></span></button>
                            </a>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <?php
                    endforeach;
                    ?>

                
            </div>
        </div>
    </div>

</div></div></div></main>

<?php
    @include '_website/templates/widgets/footer.php';
?>
<style>
/*Hide qty input due to max order limit of 1 per customer*/
.product-view .add-to-cart .qty-wrapper,
.qty-wrapper {
display: none;
}
.checkout-cart-index .wrapper .cart #shopping-cart-table .product-cart-actions .qty-input-box {
display: none;
}
</style>

<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.bestwaystore.co.uk\/","name":"lay-z-spa.co.uk","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.bestwaystore.co.uk\/catalogsearch\/result\/?q={search_term_string}","query-input":"required name=search_term_string"}}</script><script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.bestwaystore.co.uk\/","name":"Lay-Z-Spa UK","logo":"https:\/\/www.lay-z-spa.co.uk\/static\/frontend\/Wilton\/LZS\/en_GB\/images\/logo.svg","description":"www.lay-z-spa.co.uk...","address":{"addressCountry":"United Kingdom"},"sameAs":["https:\/\/www.facebook.com\/LayZSpaUK","https:\/\/twitter.com\/layzspa","https:\/\/www.instagram.com\/layzspauk\/","https:\/\/www.youtube.com\/c\/Lay-z-spaUk","https:\/\/www.pinterest.co.uk\/layzspa\/"]}</script><div id="awin">
</div>
<div class="copyright-content-limit">
<div class="footer-payment-methods">
<p>Accepted payment methods</p>
<div class="icon-container">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Klarna.svg" alt="Klarna Logo" id="klarna-logo">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Visa_Brandmark_Blue_RGB_2021.svg" alt="Visa Logo" id="visa-logo">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/mc_symbol.svg" alt="Mastercard Logo" id="mastercard-logo">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/paypal-logo.svg" border="0" alt="PayPal Logo" id="paypal-logo">
</div>
</div>
<small class="copyright">
<span>© 2021 Bestway® UK. Company Registration No: 09476227. VAT No: GB 207409622</span>
</small>
</div>
</div> 


<div data-role="focusable-end" tabindex="0"></div>
</aside></div>



<script type="text/javascript">
    $(document).ready(function () {

            if ($('.confidence-banner-2-wrapper .columns3').length) {
                var item = $('.confidence-banner-2-wrapper .columns3');
                confidenceSlick();
            }

            $(window).resize(function(){
                $screensize = $('body').width();
                if ($screensize < 1024) {
                    confidenceSlick();
                }
            });

            function confidenceSlick() {
                if ( !item.hasClass('slick-initialized') ) {
                    item.slick({
                        slidesToShow: 1,
                        arrows: false,
                        dots: false,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        responsive: [
                            {
                                breakpoint: 9999,
                                settings: "unslick"
                            },
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 2
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                }
            }


        });


    $('#bannerslider-list-items-1-644f011594ea6').owlCarousel({
        "autoWidth":0,
        "autoHeight":0,
        "loop":0,
        "lazyLoad":0,
        "autoplay":0,
        "autoplayTimeout":5000,
        "nav":0,
        "dots":0,
        "items":1
    });
    
    if(/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        var widthMb = parseFloat($('.page-wrapper').width()) - 30;
        $('.mp-banner-sidebar').attr('style','max-width: '+widthMb+'px');
    }

    $(document).ready(function () {
            $('.slick-apply').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                slidesToShow: 5,
                variableWidth: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            centerMode: true,
                            centerPadding: '60px',
                            slidesToShow: 5,
                            variableWidth: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    }
                ]
            });
            scrollNumberSet();
        });

        $(window).resize(function() {
            scrollNumberSet();
        });

        function scrollNumberSet() {

            var item = $('.slick-apply');
            var windowSize = item.width();

            switch(true) {
                case (windowSize >= 1600):
                    item.slick('slickSetOption', 'slidesToScroll', 2, true);
                    break;
                default:
                    item.slick('slickSetOption', 'slidesToScroll', 1, true);
                    break;
            }
        }

        $(document).ready(function () {
            jQuery(".loading").hide();
            jQuery(".featured-product-category-filter a").first().addClass("selected");
                                            jQuery("#new-arrivals-block").hide();
                jQuery("#sale-block").hide();
                                        jQuery(".products").css("opacity","1");
            jQuery(".products").css("height","auto");

            jQuery('#bannerslider-list-items-1-64ddd630ef5be').owlCarousel({
                "autoWidth":0,
                "autoHeight":0,
                "loop":0,
                "lazyLoad":0,
                "autoplay":0,
                "autoplayTimeout":5000,
                "nav":0,
                "dots":0,
                "items":1
            });

            if(/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                var widthMb = parseFloat(jQuery('.page-wrapper').width()) - 30;
                jQuery('.mp-banner-sidebar').attr('style','max-width: '+widthMb+'px');
            }                
        });

        var gMenuClosed = true;

        $(document).on('click', '.g-toggle-menu', function(){
            if(gMenuClosed){
                gMenuClosed = false;
                $('html').addClass('nav-before-open');
                $('html').addClass('nav-open');
            }else{
                gMenuClosed = true;
                $('html').removeClass('nav-open');
                setTimeout(function(){
                    $('html').removeClass('nav-before-open');
                }, 300);               
                
            }
        });

        var nav = $('.horizontal-menu');
        if (nav.length) {
            var stickyHeaderTop = nav.offset().top;
            $(window).scroll(function () {
                if ($(window).width() >= 768) {
                    if ($(window).scrollTop() > stickyHeaderTop) {

                        if ($('.horizontal-menu .stickymenu').hasClass('vertical-right')) {
                            var outerWidth = $('.section-items.nav-sections-items').width();
                            var innerWidth = $('.menu-container.horizontal-menu').width();
                            var rightMargin = ((outerWidth - innerWidth) / 2) + 'px';
                            $('.horizontal-menu .stickymenu').css({position: 'fixed', top: '0px', right: rightMargin});
                        } else {
                            var stickyMenu = $('.horizontal-menu .stickymenu');
                            stickyMenu.css({position: 'fixed', top: '0px'});
                            $('.confidence-banner').css({
                                'position' : 'fixed',
                                'top' :  stickyMenu.outerHeight(),
                                'z-index' : 6
                            });
                        }

                        $('.stickyalias').css('display', 'block');
                    } else {
                        $('.confidence-banner').css({
                            'position' : 'relative',
                            'top' :  'inherit'
                        });
                        $('.horizontal-menu .stickymenu').css({position: 'static', top: '0px'});
                        $('.stickyalias').css('display', 'none');
                    }
                }
            });

            $('.section-item-content .menu-container.horizontal-menu .menu > ul li.dropdown').each(function (e) {
                $(this).children('a').after('<span class="plus"></span>');
            });

            if ($(window).width() < 768) {
                $('.section-item-content .menu-container.horizontal-menu .menu > ul li.dropdown span.plus').click(function (e) {
                    $(this).siblings('a').toggleClass('active');
                    $(this).toggleClass('active').siblings('ul').slideToggle('500').toggleClass('fadeInRight');
                    $(this).parent('li').siblings().toggle();
                });

                $('.section-item-content .menu-container.horizontal-menu .menu > ul li.dropdown > a').click(function (e) {
                    $(this).siblings('span.plus').toggleClass('active');
                    $(this).toggleClass('active').siblings('ul').slideToggle('500').toggleClass('fadeInRight');
                    $(this).parent('li').siblings().toggle();
                    return false;
                });

                $('.section-item-content .menu-container.horizontal-menu .menu > ul li.dropdown :not(>) a').click(function (e) {
                    $(this).siblings('span.plus').toggleClass('active');
                    $(this).toggleClass('active').siblings('ul').slideToggle('500').toggleClass('fadeInRight');
                    $(this).parent('li').siblings().toggle();
                });
            }

        }

        //Run on load
        $(document).ready(function () {

            var width = $(window).width();

            //mobile only
            if ( $(window).width() < 768) {
                footerAccordions(true);
            }
            scrollToTop();
        });

        /**
         * Magento widget for footer accordion
         */
        function footerAccordions(enable) {
            var currentAccordion = $(".footer-column");

            if(enable) {
                currentAccordion.accordion({
                    active: [],
                    animate: {
                        duration: 400
                    },
                    icons: {
                        "header": "plus",
                        "activeHeader": "minus"
                    },
                    "collapsible": true,
                    "multipleCollapsible": true
                });
                //clickable icons
                currentAccordion.find('span').on('click', function (event) {
                    $(this).siblings('div[data-role="trigger"]').click();
                    event.preventDefault();
                    event.stopPropagation();
                });
            }

        }

        /**
         * scroll to top button on all pages
         */
        function scrollToTop() {

            var toTop = $('#smoothup');

            toTop.hide();

            $(window).scroll(function () {
                if ($(this).scrollTop() < 200) {
                    toTop.fadeOut();
                } else {
                    toTop.fadeIn();
                }
            });

            toTop.on('click', function () {
                $('html, body').animate({scrollTop: 0}, 'fast');
                return false;
            });
        }
</script>

</body></html>