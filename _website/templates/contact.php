<?php defined('DIR') OR exit; ?>
<link rel="stylesheet" type="text/css" media="all" href="/static/version1681722880/_cache/merged/5e6c9b3fbe6ed62ec75f68beb3f09ba5.min.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="/static/version1681722880/frontend/Wilton/BW/en_GB/css/styles-l.min.css" />
<link rel="stylesheet" type="text/css" media="print" href="/static/version1681722880/frontend/Wilton/BW/en_GB/css/print.min.css" />
<script type="e028b536ec15088aeba82394-text/javascript" src="/static/version1681722880/_cache/merged/09ff3364690b2ed9bd8ad0ab7a717fd4.min.js"></script>
<link rel="preload" as="font" crossorigin="anonymous" href="/static/version1681722880/frontend/Wilton/BW/en_GB/fonts/opensans/light/opensans-300.woff2" />
<link rel="preload" as="font" crossorigin="anonymous" href="/static/version1681722880/frontend/Wilton/BW/en_GB/fonts/opensans/regular/opensans-400.woff2" />
<link rel="preload" as="font" crossorigin="anonymous" href="/static/version1681722880/frontend/Wilton/BW/en_GB/fonts/opensans/semibold/opensans-600.woff2" />
<link rel="preload" as="font" crossorigin="anonymous" href="/static/version1681722880/frontend/Wilton/BW/en_GB/fonts/opensans/bold/opensans-700.woff2" />
<link rel="preload" as="font" crossorigin="anonymous" href="/static/version1681722880/frontend/Wilton/BW/en_GB/fonts/Luma-Icons.woff2" />

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>


<script async src="https://www.googleoptimize.com/optimize.js?id=OPT-TQJT2MC" type="e028b536ec15088aeba82394-text/javascript"></script>

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

@media only screen and (max-width: 767px){
    .nav-open .nav-sections, .nav-before-open .nav-sections{
        top: 173px;
        height: calc(100% - 173px);
    }    
}

</style> 
<script type="e028b536ec15088aeba82394-text/javascript">

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
<script exclude-this-tag="text/x-magento-template" type="e028b536ec15088aeba82394-text/javascript">
        window.getWpGA4Cookie = function(name) {
            match = document.cookie.match(new RegExp(name + '=([^;]+)'));
            if (match) return decodeURIComponent(match[1].replace(/\+/g, ' ')) ;
        };

        window.dataLayer = window.dataLayer || [];
                var dl4Objects = [{"pageName":"Swimming Pool Accessories | Pool Accessories & Chemicals | Bestway UK","pageType":"category","ecommerce":{"items":[{"item_name":"Filter Cartridge (Size 1) ","item_id":"6012","price":"6.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":1,"currency":"GBP"},{"item_name":"Filter Cartridge (Size 2) ","item_id":"6013","price":"10.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":2,"currency":"GBP"},{"item_name":"Bestway Pool Heater                        ","item_id":"6050","price":"229.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":3,"currency":"GBP"},{"item_name":"18ft Steel Pro Max Pool & Swimfinity Machine Bundle","item_id":"6435","price":"1499.98","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":4,"currency":"GBP"},{"item_name":"16ft Swim Vista Pool & Swimfinity Machine Bundle ","item_id":"6436","price":"1499.98","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":5,"currency":"GBP"},{"item_name":"18ft Power Steel Pool & Swimfinity Machine Bundle ","item_id":"6437","price":"1699.98","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":6,"currency":"GBP"},{"item_name":"24ft Power Steel Pool & Swimfinity Machine Bundle","item_id":"6438","price":"1999.98","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":7,"currency":"GBP"},{"item_name":"Pool Canopy ","item_id":"6463","price":"139.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":8,"currency":"GBP"},{"item_name":"Pool Heater 4KW ","item_id":"6474","price":"799.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":9,"currency":"GBP"},{"item_name":"Flowclear 2200gal Sand Filter","item_id":"6483","price":"349.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":10,"currency":"GBP"},{"item_name":"5\" Chemical Floater","item_id":"5389","price":"4.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":11,"currency":"GBP"},{"item_name":"80\" Maintenance Kit                ","item_id":"5998","price":"19.99","item_category":"Pool Accessories and Chemicals","item_category_2":"Pool Accessories","item_list_name":"Pool Accessories and Chemicals\/Pool Accessories","item_list_id":"225","index":12,"currency":"GBP"}]},"event":"view_item_list"}];
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

    @media(max-width:960px){
        .columns .column.main{
            padding-bottom: 0 !important;
        }

        .products-related .product-items .action.primary{
            width: 60% !important;
        }
    }
    </style>
<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<script type="e028b536ec15088aeba82394-text/javascript">
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
</script><script type="e028b536ec15088aeba82394-text/javascript" async>
    const trustpilot_trustbox_settings = {"trustboxes":[]};
    if (trustpilot_trustbox_settings) {
        document.addEventListener('DOMContentLoaded', function() {
            tp('trustBox', trustpilot_trustbox_settings);
        });
    }
</script><script async src="https://eu-library.klarnaservices.com/lib.js" data-client-id="5648178a-8d7b-597b-be1a-d805d650ca77" type="e028b536ec15088aeba82394-text/javascript"></script>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>
<body data-container="body" class="page-with-offers page-product-bundle catalog-product-view product-18ft-steel-pro-max-pool-set-with-swimming-machine categorypath-pools-above-ground-pools-24ft-pools-under-7-32m category-24ft-pools-under-7-32m page-layout-1column">


<div id="cookie-status">
The store will not work correctly in the case when cookies are disabled.</div>
<script type="text&#x2F;javascript">document.querySelector("#cookie-status").style.display = "none";</script>
<script type="text/x-magento-init">
    {
        "*": {
            "cookieStatus": {}
        }
    }
</script>
<noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>
                        For the best experience on our site, be sure to turn on Javascript in your browser.                    </span>
                </p>
            </div>
        </div>
    </noscript>



<script async type="e028b536ec15088aeba82394-text/javascript" src="//apps.bazaarvoice.com/deployments/bestwaystore-uk/main_site/production/en_GB/bv.js"></script>
<script type="e028b536ec15088aeba82394-text/javascript">
    window.isGdprCookieEnabled = true;
</script>
<!-- ko scope: 'gdpr-cookie-container' -->
<div data-role="gdpr-cookie-container" class="amgdprcookie-bar-template" data-bind="css: {'-bottom' : isScrollBottom, '-popup' : isPopup}">
<!-- ko template: getTemplate() --><!-- /ko -->
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
<div class="confidence-banner" style="display: none">
<div class="cb-columns">
<div class="cb-col ">
<div class="magezon-builder magezon-builder-preload"><div class="cufm6eo mgz-element mgz-element-row full_width_row"><div class="mgz-element-inner cufm6eo-s"><div class="inner-content mgz-container"><div class="goq5t8b mgz-element mgz-element-column mgz-col-xs-12"><div class="mgz-element-inner goq5t8b-s"><div class="myr0eeq mgz-element mgz-child mgz-element-text"><div class="mgz-element-inner myr0eeq-s"><p style="text-align: center;"><a href="/sale.html" title="Bestway Sale"><strong>UP TO 50% OFF</strong></a></p><p style="text-align: center;"><a href="/sale.html" title="Bestway Sale">On Selected Pools, Hot Tubs And More...</a></p></div></div></div></div></div></div></div></div> </div>
</div>
<span class="close"><img src="/media/wysiwyg/close.webp" alt="Close button"></span>
</div>
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
<div data-bind="scope: 'messages'">
<div data-bind="visible: isVisible()">
<!-- ko if: cookieMessages && cookieMessages.length > 0 -->
<div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
<div data-bind="attr: {
                class: 'message-' + message.type + ' ' + message.type + ' message',
                'data-ui-id': 'message-' + message.type
            }">
<div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
</div>
</div>
<!-- /ko -->
<!-- ko if: messages().messages && messages().messages.length > 0 -->
<div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
            data: messages().messages, as: 'message'
        }">
<div data-bind="attr: {
                class: 'message-' + message.type + ' ' + message.type + ' message',
                'data-ui-id': 'message-' + message.type
            }">
<div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
</div>
</div>
<!-- /ko -->
</div>
</div>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                        "messages": {
                            "component": "Magento_Theme/js/view/messages"
                        }
                    }
                }
            }
    }
</script></div><div class="columns">
    <div class="column main">

<div class="product-view-product-wrapper">

    <style type="text/css">
        .g-cover{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 500px;
            background-size: cover;
            background-position: top center;
        }

        @media(max-width: 960px){
            .g-cover{
                height: 300px;
            }
        }
    </style>

<div class="g-cover" style="background-image: url('<?=$image1?>');"></div>


<?php 

$imgx = true;
?>

<div class="product-info-main"<?=($imgx) ? ' style="margin-left: 10% !important; width:80% !important;"' : ''?>>
    <style>
    [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text {
        text-decoration: underline !important;
    }
    [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text::before {
        content: '(';
    }
    [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text::after{
        content: ')';
    }
    [data-bv-show="rating_summary"] .bv_main_container .bv_avgRating_component_container {
        margin-left: 5px !important;
    }
    .product-bazaarvoice-reviews .reviews-wrapper {
        max-width: 1220px !important;
        margin: 70px auto 0 auto !important;
    }
    </style>

    

    <div class="product-features-wrapper g-menuitem-sub">
        <div class="page-title-wrapper&#x20;product" style="margin-top:40px;">
            <h1 class="page-title g-product-title" style="text-align: left; margin: 0 0 15px 0;">
                <span class="base g-menuitem" data-ui-id="page-title-wrapper">
                    <?=$title?>
                </span>
            </h1>
        </div>

        <div style="clear: both;"></div>
        <div class="g-images-box ggg-show">
        <div class="g-thumbs g-hidemobimages" style="display:none">
        </div>
        </div>

        <div style="clear: both;"></div>

        <div class="mobile-price-button-box"></div>

        <div style="clear: both;"></div>

        <style>
        #g-map {
            height: 400px;
            width: 100%;
        }

        .g-left{
            width: 30%;
            float: left;
        }

        .g-left .row .col-sm-12{
            margin-bottom: 15px;
        }

        .g-left .row .col-sm-12 .Info{
            font-size: 16px;
        }

        .g-right{
            width: 70%;
            float: left;
        }

        @media(max-width: 960px){
            #g-map {
                height: 300px;
                margin-top: 40px;
            }

            .g-left{
                width: 100%;
                float: none;
            }

            .g-right{
                width: 100%;
                float: none;
                margin-top: 40px;
            }
        }
       </style>

        <div class="g-left">
            <div class="row">
                <div class="col-sm-12">
                    <div class="Item">
                        <div class="Icon Mail"></div>
                        <div class="Info">
                            <strong><span><?php echo l('e.mail');?>:</span></strong>
                            <label><a href="mail:<?php echo s('mail');?>"><?php echo s('mail');?></a></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="Item">
                        <div class="Icon Mobile"></div>
                        <div class="AllInfo">
                            <div class="Info Info1">
                                <strong><span><?php echo l('mobile')?>:</span></strong>
                                <label><a href="tel:<?=str_replace(array(' '), '' , s('telephone'))?>"><?=s('telephone')?></a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="Item">
                        <div class="Icon Address"></div>
                        <div class="Info">
                            <strong><span><?php echo l('address')?>:</span></strong>
                            <label><?php echo s('address');?></label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="Item">
                        <div class="Icon Address"></div>
                        <div class="Info">
                            <strong><span><?php echo l('address')?> 2:</span></strong>
                            <label><?php echo s('address2');?></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="ContactSocial HideMobile">
                        <a href="<?php echo s('facebook');?>" target="_blank" class="Facebook" style="margin-right:10px;"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo s('instagram');?>" target="_blank" class="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="g-right">        
            <div id="g-map"></div>
        </div>

        <div style="clear: both;"></div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLSXv1i5iAG3WdJzqWsVOaFddXAxiDUQ&callback=initMap" 
            async defer></script>
        
         <script>
        <?php
        $getMapMarkers = g_pages(37);
        ?>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('g-map'), {
                zoom: 8,
                disableDefaultUI: true
            });

            var bounds = new google.maps.LatLngBounds();

            <?php 
            $i=1;
            foreach($getMapMarkers as $m): 
                $explode = explode(",", $m['price']);
            ?>
            var marker<?=$i?> = new google.maps.Marker({
                position: {lat: <?=$explode[0]?>, lng: <?=$explode[1]?>},
                map: map,
                title: 'Marker 1 Title'
            });

            var infoWindow<?=$i?> = new google.maps.InfoWindow({
                content: '<div class="g-menuitem-sub"><strong><?=strip_tags($m['title'])?></strong><br><?=strip_tags($m['menutitle'])?></div>'
            });

            marker<?=$i?>.addListener('click', function() {
                infoWindow<?=$i?>.open(map, marker<?=$i?>);
            });
            bounds.extend(marker<?=$i?>.getPosition());
            <?php
            $i++;
            endforeach;
            ?>


            map.fitBounds(bounds);
        }
    </script>


        <div style="clear: both;"></div>
    </div>
</div>

</div>

<div style="clear: both;"></div>

</div>
</div>
</main>

<?php
    @include '_website/templates/widgets/footer.php';
?>

<script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "storage-manager": {
                            "component": "Magento_Catalog/js/storage-manager",
                            "appendTo": "",
                            "storagesConfiguration" : {"recently_viewed_product":{"requestConfig":{"syncUrl":"https:\/\/www.bestwaystore.co.uk\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"recently_compared_product":{"requestConfig":{"syncUrl":"https:\/\/www.bestwaystore.co.uk\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"product_data_storage":{"updateRequestConfig":{"url":"https:\/\/www.bestwaystore.co.uk\/rest\/bestway\/V1\/products-render-info"},"requestConfig":{"syncUrl":"https:\/\/www.bestwaystore.co.uk\/catalog\/product\/frontend_action_synchronize\/"},"allowToSendRequest":null}}                        }
                    }
                }
            }
        }
</script>
<style>
/*Hide qty input due to max order limit of 1 per customer*/
.product-view .add-to-cart .qty-wrapper,
.qty-wrapper {
display: none;
}
.checkout-cart-index .wrapper .cart #shopping-cart-table .product-cart-actions .qty-input-box {
display: none;
}

.g-owl-container{
    position: relative;
}

.g-owl-container .g-owlBtns{
    margin: 0;
    padding: 0;
    width: calc(100% + 100px);
    height: 50px;
    position: absolute;
    top: calc(50% - 25px);
    left: -50px;
    pointer-events: none;
}

.g-owl-container .g-owlBtns button{
    margin: 0;
    padding: 0;
    width: 50px;
    height: 50px;
    min-width: 50px;
    max-width: 50px;
    pointer-events: all;
    background-color: #7cc6d1;
    text-indent: -9999px;
    position: relative;
    border-radius: 0px;
}

.g-owl-container .g-owlBtns button::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-mask-image: url(/images/arrow.svg);
    mask-image: url(/images/arrow.svg);
    -webkit-mask-size: 25px;
    mask-size: 25px;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: center;
    mask-position: center;
    background-color: white;
}

.g-owl-container .g-owlBtns button:first-child{
    float: left;
}

.g-owl-container .g-owlBtns button:first-child::after{
    transform: rotate(180deg);
}

.g-owl-container .g-owlBtns button:last-child{
    float: right;
}

@media (max-width:960px){
    .g-owl-container .g-owlBtns{
        display: none;
    }
}
</style>

<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.bestwaystore.co.uk\/","name":"lay-z-spa.co.uk","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.bestwaystore.co.uk\/catalogsearch\/result\/?q={search_term_string}","query-input":"required name=search_term_string"}}</script><script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.bestwaystore.co.uk\/","name":"Lay-Z-Spa UK","logo":"https:\/\/www.lay-z-spa.co.uk\/static\/frontend\/Wilton\/LZS\/en_GB\/images\/logo.svg","description":"www.lay-z-spa.co.uk...","address":{"addressCountry":"United Kingdom"},"sameAs":["https:\/\/www.facebook.com\/LayZSpaUK","https:\/\/twitter.com\/layzspa","https:\/\/www.instagram.com\/layzspauk\/","https:\/\/www.youtube.com\/c\/Lay-z-spaUk","https:\/\/www.pinterest.co.uk\/layzspa\/"]}</script><script type="application/ld+json">[{"@context":"http:\/\/schema.org","@type":"Product","name":"Filter Cartridge (Size 1) ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58093-21-18ft-fast-set-pool-cover-1.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":6.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/filter-cartridge-size-1.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/filter-cartridge-size-1.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"Filter Cartridge (Size 2) ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58094-21-filter-cartridge-size-1-1.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":10.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/filter-cartridge-size-2.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/filter-cartridge-size-2.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"Bestway Pool Heater                        ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/5\/8\/58259xxx21_58259gbx21_0206_pr_web_150dpi.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":229.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/pool-heater.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/pool-heater.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"18ft Steel Pro Max Pool & Swimfinity Machine Bundle","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw5618ygb.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":1499.98,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/18ft-steel-pro-max-pool-set-with-swimming-machine.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/18ft-steel-pro-max-pool-set-with-swimming-machine.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"16ft Swim Vista Pool & Swimfinity Machine Bundle ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw56725gb-22_1.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":1499.98,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/16ft-swim-vista-pool-set-with-swimming-machine.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/16ft-swim-vista-pool-set-with-swimming-machine.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"18ft Power Steel Pool & Swimfinity Machine Bundle ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw56465gb-21.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":1699.98,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/18ft-power-steel-pool-set-with-swimming-machine.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/18ft-power-steel-pool-set-with-swimming-machine.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"24ft Power Steel Pool & Swimfinity Machine Bundle","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw56474gb-21.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":1999.98,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/24ft-power-steel-pool-set-with-swimming-machine.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/24ft-power-steel-pool-set-with-swimming-machine.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"Pool Canopy ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58746_callout_1.png","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":139.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/pool-canopy-for-pools.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/pool-canopy-for-pools.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"Pool Heater 4KW ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58748_callout_1.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":799.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/pool-heater-4kw.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/pool-heater-4kw.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"Flowclear 2200gal Sand Filter","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58499gb-23_callout_1.png","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":349.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/flowclear-2200-gal-sand-filter.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/flowclear-2200-gal-sand-filter.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"5\" Chemical Floater","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/5\/8\/58210-18_pr001_0001.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":4.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/5-chemical-floater.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/5-chemical-floater.html"},{"@context":"http:\/\/schema.org","@type":"Product","name":"80\" Maintenance Kit                ","description":"From floor protectors to cleaning kits, Bestway&#039;s range of Pool Accessories are perfect for providing everything you need to keep your pool warm, clean and safe for all the family to enjoy. ","image":"https:\/\/www.bestwaystore.co.uk\/media\/catalog\/product\/cache\/edf5827f4d2d2caa4472a8d5cadd5099\/b\/w\/bw58013gb-filter-cartridge-size-3-1.jpg","aggregateRating":[],"review":[[]],"offers":[{"@type":"Offer","priceCurrency":"GBP","price":19.99,"seller":{"@type":"Organization","name":"Bestway Store UK"},"url":"https:\/\/www.bestwaystore.co.uk\/80-maintenance-kit.html"}],"url":"https:\/\/www.bestwaystore.co.uk\/80-maintenance-kit.html"}]</script><div id="awin">
</div>
<script type="text/x-magento-init">
{
   "#awin": {
       "Awin_AdvertiserTracking/js/init": {}
   }
}
</script><div class="copyright-content-limit">
<div class="footer-payment-methods">
<p>Accepted payment methods</p>
<div class="icon-container">
<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/footer/Klarna.svg" alt="Klarna Logo" id="klarna-logo" />
<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/footer/Visa_Brandmark_Blue_RGB_2021.svg" alt="Visa Logo" id="visa-logo" />
<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/footer/mc_symbol.svg" alt="Mastercard Logo" id="mastercard-logo" />
<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/footer/paypal-logo.svg" border="0" alt="PayPal Logo" id="paypal-logo" />
</div>
</div>
<small class="copyright">
<span>&copy; 2021 Bestway&reg; UK. Company Registration No: 09476227. VAT No: GB 207409622</span>
</small>
</div>
</div> 
<script type="text/javascript">
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

        $(document).ready(function() {
                var borderLess = function () {
                    $('.cb-columns .cb-col').each(function() {
                        if ($(this).is(':hidden')) {
                            $(this).addClass('nb');
                            $(this).removeClass('wb');
                        } else {
                            $(this).removeClass('nb');
                            $(this).addClass('wb');
                        }
                    });
                    $('.cb-columns .cb-col.wb').last().removeClass('wb').addClass('nb');
                };
                borderLess();
                $(window).resize(function() {
                    borderLess();
                });
            });

        //function to get cookie
        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }

        //function to set cookie
        function setCookie(name, value, days) {
            var d = new Date;
            d.setTime(d.getTime() + 24*60*60*1000*days);
            document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
        }

        var confidence = $('.confidence-banner');

        $(document).ready(function () {
            var cookie = getCookie('confidence');
            if (cookie !== 'hide') {
                confidence.show();
                $(".confidence-banner").wrap("<div class='confidence-banner-wrapper'></div>"); // Added to fix the page jumping issue when the menu is sticky and confidence banner is visible
            }
        });

        confidence.find('.close').on('click', function(){
            confidence.hide();
            $(".confidence-banner-wrapper").css("height", "0"); // Set height to 0 so to collapse it when confidence banner is hidden
            setCookie('confidence','hide','1');
        });

        var desktopimage = "/media/catalog/category/AGP_-_Desktop_1_.png";
        var tabletimage = "";
        var mobileimage = "";

        jQuery(document).ready(function(){
            checkScreenSize();
        });

        jQuery( window ).resize(function() {
            checkScreenSize();
        });

        function checkScreenSize()
        {
            if(jQuery( window ).width() > 1024) {
                jQuery(".category-banner-image").removeClass("mobile").removeClass("tablet").addClass("desktop");
                jQuery(".category-banner-image").attr("src",desktopimage);
            }
            else if(jQuery( window ).width() > 768 && tabletimage) {
                jQuery(".category-banner-image").removeClass("mobile").addClass("tablet").removeClass("desktop");
                jQuery(".category-banner-image").attr("src",tabletimage);
            }
            else if(jQuery( window ).width() < 768 && mobileimage) {
                jQuery(".category-banner-image").addClass("mobile").removeClass("tablet").removeClass("desktop");
                jQuery(".category-banner-image").attr("src",mobileimage);
            }
        }

        $(document).ready(function() {
            $("body").on("click", ".action.delete", function (e) {
                e.stopImmediatePropagation();
                addCompare().addDelete($(this));
            });

            $('.filter-options-item .filter-options-title').click(function(){
                var active = $(this).parent().hasClass('active');
                if(active){
                    $(this).parent().removeClass('active');
                }else{
                    $(this).parent().addClass('active');
                }
            })
        });

        //Run on load
        $(document).ready(function () {

            var width = $(window).width();

            //mobile only
            if ( $(window).width() < 768) {
                // footerAccordions(true);
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

</script>

<!-- <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e028b536ec15088aeba82394-|49" defer=""></script> -->

<script>
$(document).on('mouseenter', '.g-images-box .g-thumbs ul li a', function(){
    var type = $(this).attr('data-type');
    var src = $(this).attr('data-src');
    var indx = $(this).attr('data-index');

    $('#g-popup-active-img-vid').val(indx);

    if(type=="image"){
        $('#g-popup .g-popup-main-image').html('<img>');
        $('.g-main-image a img').attr('src', src);
        $('.g-popup-main-image img').attr('src', src);
        $('.g-main-image a').removeClass('videosvg');                
    }else{
        var videoImage = $(this).attr('data-videoImage');
        $('.g-main-image a').addClass('videosvg');
        $('.g-main-image a img').attr('src', videoImage);


        // $('.g-popup-main-image img').attr('src', videoImage);
        var videoId = src.match(/[?&]v=([^&]+)/)[1];
        var iframe = $("<iframe>", {
            src: "https://www.youtube.com/embed/" + videoId + "?autoplay=1&mute=1",
            frameborder: 0,
            allowfullscreen: true,
            width: "100%",
            height: "600" // You can adjust the width and height as needed
          });
        $('#g-popup .g-popup-main-image').html(iframe);
    }            
});

function changePopType(type){
    if(type=="image"){
        $('#g-popup .g-popup-nav ul li a').removeClass('active');
        $('#g-popup .g-popup-nav ul li a[data-type="image"]').addClass('active');
        $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="image"]').parent().show();
        $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="video"]').parent().hide();
    }else{
        $('#g-popup .g-popup-nav ul li a').removeClass('active');
        $('#g-popup .g-popup-nav ul li a[data-type="video"]').addClass('active');
        $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="image"]').parent().hide();
        $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="video"]').parent().show();
    }
}

$('.lightbox-link').magnificPopup({
    type: 'inline',
    callbacks: {
        open: function() {
            $('#g-popup').show();
            var ul = $('.g-thumbs ul').prop('outerHTML');
            $('#g-popup .g-popup-thumbs').html(ul);
            $('#g-popup .g-popup-thumbs a').attr('href', 'javascript:void(0)').removeClass('lightbox-link').addClass('popup-lightbox');

            if($('#g-popup .g-popup-main-image img').length){
                changePopType('image');
            }else{
                changePopType('video');
            }

            $(document).on('click', '#g-popup .popup-lightbox', function(){
                var type = $(this).attr('data-type');
                var src = $(this).attr('data-src');
                var indx = $(this).attr('data-index');

                $('#g-popup-active-img-vid').val(indx);

                if(type=="image"){
                    $('#g-popup .g-popup-main-image').html('<img>');
                    $('#g-popup .g-popup-main-image img').attr('src', src);

                    changePopType('image');
                }else{
                    var videoImage = $(this).attr('data-videoImage');
                    var videoId = src.match(/[?&]v=([^&]+)/)[1];
                    
                    var iframe = $("<iframe>", {
                        src: "https://www.youtube.com/embed/" + videoId + "?autoplay=1&mute=1",
                        frameborder: 0,
                        allowfullscreen: true,
                        width: "100%",
                        height: "600" // You can adjust the width and height as needed
                      });
                    $('#g-popup .g-popup-main-image').html(iframe);

                    changePopType('video');
                }            
            });

            $(document).on('click', '#g-popup .g-change-poptype', function(){
                $('#g-popup .g-change-poptype').removeClass('active');
                $(this).addClass('active');

                var type = $(this).attr('data-type');
                var src = $(this).attr('data-src');
                if(type=="image"){
                    $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:first-child a').click();
                }else{
                    
                    // $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="video"]').click();
                    $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-type="video"]').parent()[0].children[0].click();
                }            
            });


        }
    }
});

$(document).ready(function(){
    var width = $(window).width();

    if(width <= 960){
        var owlHtml = '<div class="owl-carousel owl-theme" id="mobile-product-slider">';

        $('.g-images-box .g-thumbs ul li').each(function(){
            var type = $('a', this).attr('data-type');
            var src = $('a', this).attr('data-src');
            var videoimage = $('a', this).attr('data-videoimage');

            

            if(type=='video'){
                const url = new URL(src);
                const videoId = url.searchParams.get("v");

                // console.log(videoId);
                owlHtml += '<iframe width="100%" height="300" src="https://www.youtube.com/embed/'+videoId+'" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                
            }else{
                owlHtml += '<a href="'+src+'" class="item mobile-lightbox" data-type="'+type+'" data-src="'+src+'">';
                owlHtml += '<img src="'+src+'" alt="" loading="lazy">';
                owlHtml += '</a>';
            }           
        });

        owlHtml += '</div>';

        // $('.g-hidemobimages').html(owlHtml).show();

        var bundle = $('.bundle-options-container').prop('outerHTML');
        $('.bundle-options-container').remove();
        $('.mobile-price-button-box').html(bundle);


        // $('#mobile-product-slider').owlCarousel({
        //     autoplay: false,
        //     smartSpeed:500,
        //     loop:true,
        //     margin:0,
        //     nav:true,
        //     dots: true,
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:1
        //         },
        //         1000:{
        //             items:1
        //         }
        //     }
        // });

        $('.column.main .products .product-items').addClass('owl-carousel owl-theme');
        $('.column.main .products .product-items').owlCarousel({
            autoplay: true,
            smartSpeed:1500,
            loop:true,
            margin:0,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('.video-link').magnificPopup({
            type: 'iframe'
        });

        // $('.mobile-lightbox').magnificPopup({
        //     type: 'inline',
        //     callbacks: {
        //         open: function() {
        //             $('#g-popup').show();
        //         }
        //     }
        // });
    }


    $('#g-ralated-products').owlCarousel({
            autoplay: true,
            smartSpeed:1500,
            loop:true,
            margin:10,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:4
                }
            }
        });


    //.g-owl-container .g-owlBtns button

    $('.g-owl-container .g-owlBtns button.prev').on('click', function () {
        $('#g-ralated-products').trigger('prev.owl.carousel');
    });

    $('.g-owl-container .g-owlBtns button.next').on('click', function () {
        $('#g-ralated-products').trigger('next.owl.carousel');
    });
});

$(document).on('click', '.g-arrows button.g-next', function(){
    var activeImageIndex = parseInt($('#g-active-image').val());
    var maxImageIndex = parseInt($('#g-max-image').val());
    var next = activeImageIndex + 1;

    if(next <= maxImageIndex){
        var src = $('.g-images-box .g-thumbs ul li a[data-index="'+next+'"] img').attr('src');
        var videoimage = $('.g-images-box .g-thumbs ul li a[data-index="'+next+'"]').attr('data-type');
        

        if(videoimage=="image"){
            $('.g-main-image a').removeClass('videosvg');
            $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="'+next+'"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
            $('.g-popup-main-image').html('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&amp;mute=1" frameborder="0" allowfullscreen="true" style="width: 100%; height: 600px;"></iframe>>');
        }


        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(next);
    }else{
        var src = $('.g-images-box .g-thumbs ul li a[data-index="1"] img').attr('src');
        var videoimage = $('.g-images-box .g-thumbs ul li a[data-index="1"]').attr('data-type');
        
        if(videoimage=="image"){
            $('.g-main-image a').removeClass('videosvg');
            $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="1"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
            $('.g-popup-main-image').html('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&amp;mute=1" frameborder="0" allowfullscreen="true" style="width: 100%; height: 600px;"></iframe>>');
        }

        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(1);
    }
});

$(document).on('click', '.g-arrows button.g-prev', function(){
    var activeImageIndex = parseInt($('#g-active-image').val());
    var maxImageIndex = parseInt($('#g-max-image').val());
    var prev = activeImageIndex - 1;


    if(prev >= 1){
        var src = $('.g-images-box .g-thumbs ul li a[data-index="'+prev+'"] img').attr('src');
        var videoimage = $('.g-images-box .g-thumbs ul li a[data-index="'+prev+'"]').attr('data-type');
        
        if(videoimage=="image"){
            $('.g-main-image a').removeClass('videosvg');
            $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="'+prev+'"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
            $('.g-popup-main-image').html('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&amp;mute=1" frameborder="0" allowfullscreen="true" style="width: 100%; height: 600px;"></iframe>>');
        }

        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(prev);
    }else{
        var src = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"] img').attr('src');
        var videoimage = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"]').attr('data-type');

        if(videoimage=="image"){
            $('.g-main-image a').removeClass('videosvg');
            $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
            $('.g-popup-main-image').html('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&amp;mute=1" frameborder="0" allowfullscreen="true" style="width: 100%; height: 600px;"></iframe>>');
        }

        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(maxImageIndex);
    }
});

$(document).on('click', '.g-popup-next', function(){
    var activeImageIndex = parseInt($('#g-popup-active-img-vid').val());  
    var next = activeImageIndex + 1;
    
    if($('.g-change-poptype[data-type="image"]').hasClass('active')){
        if($('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:not(:hidden) a[data-index="'+next+'"]').length){
            var nextImage = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="'+next+'"]').attr('data-src');
            $('#g-popup-active-img-vid').val(next);
            $('.g-popup-main-image img').attr('src', nextImage);
        }else{
            var nextImage = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="1"]').attr('data-src');
            $('#g-popup-active-img-vid').val(1);
            $('.g-popup-main-image img').attr('src', nextImage);
        }
    }else{
         if($('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:not(:hidden) a[data-index="'+next+'"]').length){
            var nextVideo = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="'+next+'"]').attr('data-src');
            const url = new URL(nextVideo);
            const videoId = url.searchParams.get("v");

            // console.log(videoId);
            var owlHtml = '<iframe width="100%" height="600" src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&mute=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

            $('#g-popup-active-img-vid').val(next);

            $('#g-popup .g-popup-main-image').html(owlHtml);
        }
    }    
});

$(document).on('click', '.g-popup-prev', function(){
    var activeImageIndex = parseInt($('#g-popup-active-img-vid').val());
    var prev = activeImageIndex - 1;

    if($('.g-change-poptype[data-type="image"]').hasClass('active')){     
        if($('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:not(:hidden) a[data-index="'+prev+'"]').length){
            var nextImage = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="'+prev+'"]').attr('data-src');
            $('#g-popup-active-img-vid').val(prev);
            $('.g-popup-main-image img').attr('src', nextImage);
        }else{
            var max = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:not(:hidden)').length;

            var nextImage = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="'+max+'"]').attr('data-src');
            $('#g-popup-active-img-vid').val(max);
            $('.g-popup-main-image img').attr('src', nextImage);
        }
    }else{
        if($('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li:not(:hidden) a[data-index="'+prev+'"]').length){
            var prevVideo = $('#g-popup .g-popup-title-and-thumbs .g-popup-thumbs ul li a[data-index="'+prev+'"]').attr('data-src');
            const url = new URL(prevVideo);
            const videoId = url.searchParams.get("v");

            // console.log(videoId);
            var owlHtml = '<iframe width="100%" height="600" src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&mute=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

            $('#g-popup-active-img-vid').val(prev);

            $('#g-popup .g-popup-main-image').html(owlHtml);
        }
    }
});
</script>
</body>
</html>
