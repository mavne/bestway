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
body, html{
    overflow-x: hidden !important;
}
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
<script type="text/javascript">
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

        body{
            overflow-x: hidden !important;
        }

        .price-as-configured{
            margin-bottom: 20px !important;
        }

        /*.nav-open .nav-sections, .nav-before-open .nav-sections{
            top: 198px !important;
        }*/
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
<?php if(g_checkVisibility(346)): ?>
<div class="confidence-banner">
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
    <span class="close">
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
</script></div><div class="columns"><div class="column main"><div class="breadcrumbs g-breadcrumbs-product">
<ul class="items g-menuitem-sub">
<?=location()?>
<li class="item"><?=$title?></li>
</ul>
</div>
<div class="product-view-product-wrapper"><div class="product-view-title-wrapper">
<div class="flag-wrapper">
</div>

</div>

<style type="text/css">
    .g-new-wrapper{
        margin: 20px 0;
        padding: 0;
        width: 100%;
    }

    .g-new-row{
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
    }

    .g-new-col-15{
        flex: 0 0 auto;
        width: calc(15% - 3rem);
        padding-right: calc(1.5rem / 2);
        padding-left: calc(1.5rem / 2);
    }

    .g-new-col-20{
        width: calc(20% - 3rem);
    }

    .g-new-col-70{
        flex: 0 0 auto;
        width: calc(65% - 3rem);
        padding-right: calc(1.5rem / 2);
        padding-left: calc(1.5rem / 2);
    }

    .g-new-media-list{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 600px;
        overflow-y: auto;
        list-style-type: none;
        padding-right: 15px;
        position: relative;
        overflow-x: hidden;
    }

    .g-videox{
        position: relative;
    }

    .g-videox::after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1000;
        background-color: white;
        -webkit-mask-image: url(/images/play.svg);
        mask-image: url(/images/play.svg);
        -webkit-mask-size: 50px;
        mask-size: 50px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
        pointer-events: none;
    }

    .g-new-media-list li{
        margin: 0;
        padding: 0;
        margin-bottom: 20px;
        width: 100%;
        margin-right: 10px;
    }

    .g-new-media-list li a{
        margin: 0;
        padding: 0;
        display: block;
        text-decoration: none;
    }

    .g-new-media-list li a img{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 130px;
        object-fit: cover;
        object-position: center;
    }

    .g-new-popup-goto.active img{
        border: solid 1px #0a65ae;
    }

    .g-ppoto{
        width: calc(50% - 12px) !important;
        margin: 5px !important;
        display: inline-block !important;
    }

    .g-new-col-20 .g-ppoto{
        width: calc(33.33% - 15px) !important;
    }

    .g-ppoto img{
        width: 100% !important;
        object-position: center !important;
        object-fit: contain !important;
        border: solid 1px #f2f2f2;
    }

    .g-new-col-20 .g-ppoto a img{
        height: 100px;
    }

    #g-new-popup-main{
        margin: 0 50px;
        padding: 0;
        width: calc(100% - 100px);
        height: 600px;
    }

    #g-new-popup-main .item a{
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        height: 600px;
    }

    #g-new-popup-main .item a img{
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        height: 600px;
        object-fit: contain;
        object-position: center;
    }

    #g-new-popup-main .owl-nav{
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        height: 40px !important;
        position: absolute !important;
        top: calc(50% - 20px) !important;
        left: 0 !important;
        z-index: 100 !important;
        pointer-events: none !important;
    }

    #g-new-popup-main .owl-nav button{
        margin: 0 !important;
        padding: 0 !important;
        border: 0 !important;
        width: 40px !important;
        min-width: 40px !important;
        max-width: 40px !important;
        height: 40px !important;
        min-height: 40px !important;
        max-height: 40px !important;
        pointer-events: all !important;
        position: absolute !important;
        top: 0 !important;
        left: 15px !important;
        background-color: #ffffff !important;
        box-shadow: 0 4px 4px rgba(0,0,0,.3), 0 0 4px rgba(0,0,0,.2);
        border-radius: 100%;
    }

    #g-new-popup-main .owl-nav button:hover,
    #g-new-popup-main .owl-nav button:focus{
        background-color: #c5cae9 !important;
    }

    #g-new-popup-main .owl-nav button span{
        display: none;
    }

    #g-new-popup-main .owl-nav button:first-child::after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: -1px;
        background-color: #000;
        -webkit-mask-image: url(/images/icon-arrow.svg);
        mask-image: url(/images/icon-arrow.svg);
        -webkit-mask-size: 25px;
        mask-size: 25px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
        transform: rotate(180deg);
    }

    #g-new-popup-main .owl-nav button:last-child::after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 2px;
        background-color: #000;
        -webkit-mask-image: url(/images/icon-arrow.svg);
        mask-image: url(/images/icon-arrow.svg);
        -webkit-mask-size: 25px;
        mask-size: 25px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
    }

    #g-new-popup-main .owl-nav .owl-next{
        left: unset !important;
        right: 15px !important;
    }

    .g-new-subtitle{
        margin: 0 0 15px 0;
        padding: 0;
        font-size: 14px;
    }
</style>
<div class="g-new-leftside">
    <div class="product media"> 
        <div class="g-purchase-box" id="g-purchase-box" style="display: none;">
            <h2 class="purchase-box-title">
                <?=l('purchase')?>
            </h2>

            <div class="purchase-product">
                <table border="1">
                    <tr>
                        <th><span><?=l('theProductTitle')?></span></th>
                        <th><span><?=l('price')?></span></th>
                    </tr>

                    <tr>
                        <td><span><?=$title?></span></td>
                        <td>
                            <?php
                            if($discount!=""){
                            ?>
                            <span style="text-decoration: line-through; padding-right:10px; color:red;"><?=$price?>₾</span>
                            <span style="color:green;" class="checkout-price" data-price="<?=$discount?>"><?=$discount?>₾</span>
                            <?php
                            }else{
                            ?>
                            <span class="checkout-price" data-price="<?=$price?>"><?=$price?>₾</span>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

            <form action="" method="post" class="purchase-box-form">
                <label for="purchase-firstname"><?=l('firstname')?></label>
                <input type="text" name="purchase-firstname" id="purchase-firstname" value="">

                <label for="purchase-lastname"><?=l('lastname')?></label>
                <input type="text" name="purchase-lastname" id="purchase-lastname" value="">

                <label for="purchase-mobile"><?=l('mobile')?></label>
                <input type="text" name="purchase-mobile" id="purchase-mobile" value="">

                <label for="purchase-email"><?=l('e.mail')?></label>
                <input type="text" name="purchase-email" id="purchase-email" value="">

                <label for="purchase-address"><?=l('address')?></label>
                <input type="text" name="purchase-address" id="purchase-address" value="">

                <label for="home_delivery"><span><?=l('home.delivery')?></span> <input type="checkbox" name="home_delivery" id="home_delivery" value="1"></label>

                <button type="submit" class="action primary g-menuitem g-orange-btn"><?=l('purchase')?></button>

                <div style="width:100%;clear: both;"></div>
            </form>
        </div>


        <div class="g-popup" id="g-popup" style="display:none;">
            <div class="g-popup-nav">
                <ul>
                    <li><a href="javascript:void(0)" class="g-change-poptype active"><?=$title?></a></li>
                </ul>
            </div>

            <div class="g-new-wrapper">
                <div class="g-new-row">
                    <div class="g-new-col-15">
                        <h4 class="g-menuitem g-new-subtitle">ვიდეო</h4>
                        <ul class="g-new-media-list g-new-media-video">
                        <?php
                        $imageCount = 1;
                        for($x=1; $x<=30; $x++):
                            $imgVariable = "image".$x;

                            if(isset($$imgVariable) && $$imgVariable!=""){
                                $imageCount++;
                            }
                        endfor;

                        if(!empty($youtube1)):
                            $urlParts = parse_url($youtube1);
                            parse_str($urlParts['query'], $queryParameters);
                            $videoId = $queryParameters['v'];
                        ?>
                        <li>
                            <a href="javascript:void(0)" class="g-new-popup-goto g-videox" data-index="<?=$imageCount?>">
                                <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                            </a>
                        </li>
                        <?php
                        endif;
                        ?>

                        <?php
                        if(!empty($youtube2)):
                            $urlParts = parse_url($youtube2);
                            parse_str($urlParts['query'], $queryParameters);
                            $videoId = $queryParameters['v'];
                        ?>
                        <li>
                            <a href="javascript:void(0)" class="g-new-popup-goto g-videox" data-index="<?=($imageCount + 1)?>">
                                <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                            </a>
                        </li>
                        <?php
                        endif;
                        ?>

                        <?php
                        if(!empty($youtube3)):
                            $urlParts = parse_url($youtube3);
                            parse_str($urlParts['query'], $queryParameters);
                            $videoId = $queryParameters['v'];
                        ?>
                        <li>
                            <a href="javascript:void(0)" class="g-new-popup-goto g-videox" data-index="<?=($imageCount + 2)?>">
                                <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                            </a>
                        </li>
                        <?php
                        endif;
                        ?>

                        <?php
                        if(!empty($youtube4)):
                            $urlParts = parse_url($youtube4);
                            parse_str($urlParts['query'], $queryParameters);
                            $videoId = $queryParameters['v'];
                        ?>
                        <li>
                            <a href="javascript:void(0)" class="g-new-popup-goto g-videox" data-index="<?=($imageCount + 3)?>">
                                <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                            </a>
                        </li>
                        <?php
                        endif;
                        ?>

                        <?php
                        if(!empty($youtube5)):
                            $urlParts = parse_url($youtube5);
                            parse_str($urlParts['query'], $queryParameters);
                            $videoId = $queryParameters['v'];
                        ?>
                        <li>
                            <a href="javascript:void(0)" class="g-new-popup-goto g-videox" data-index="<?=($imageCount + 4)?>">
                                <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                            </a>
                        </li>
                        <?php
                        endif;
                        ?>
                        </ul>
                    </div>
                    
                    <div class="g-new-col-70">
                        <div class="owl-carousel owl-theme" id="g-new-popup-main">
                                <?php
                                if($image_positions!=""){
                                    $imageP = explode(",", $image_positions);
                                }else{ 
                                    $imageP = array();
                                    for($x=1; $x<=30; $x++):
                                        $imageP[] = "image".$x;
                                    endfor;
                                }

                                foreach($imageP as $im):
                                    if($$im != "" && $im != "image_fb"):
                                ?>
                                    <div class="item xxxx">
                                        <a href="javascript:void(0)">
                                            <img src="<?=$$im?>" alt="">
                                        </a>
                                    </div>
                                <?php                    
                                    endif;
                                endforeach;
                                ?>

                                <?php
                                if(!empty($youtube1)):
                                    $urlParts = parse_url($youtube1);
                                    parse_str($urlParts['query'], $queryParameters);
                                    $videoId = $queryParameters['v'];
                                ?>
                                <div class="item">
                                    <iframe src="https://www.youtube.com/embed/<?=$videoId?>" width="100%" height="600px" frameborder="0" allowfullscreen="true" class="g-new-iframe"></iframe>
                                </div>
                                <?php
                                endif;
                                ?>

                                <?php
                                if(!empty($youtube2)):
                                    $urlParts = parse_url($youtube2);
                                    parse_str($urlParts['query'], $queryParameters);
                                    $videoId = $queryParameters['v'];
                                ?>
                                <div class="item">
                                    <iframe src="https://www.youtube.com/embed/<?=$videoId?>" width="100%" height="600px" frameborder="0" allowfullscreen="true" class="g-new-iframe"></iframe>
                                </div>
                                <?php
                                endif;
                                ?>

                                <?php
                                if(!empty($youtube3)):
                                    $urlParts = parse_url($youtube3);
                                    parse_str($urlParts['query'], $queryParameters);
                                    $videoId = $queryParameters['v'];
                                ?>
                                <div class="item">
                                    <iframe src="https://www.youtube.com/embed/<?=$videoId?>" width="100%" height="600px" frameborder="0" allowfullscreen="true" class="g-new-iframe"></iframe>
                                </div>
                                <?php
                                endif;
                                ?>   

                                <?php
                                if(!empty($youtube4)):
                                    $urlParts = parse_url($youtube4);
                                    parse_str($urlParts['query'], $queryParameters);
                                    $videoId = $queryParameters['v'];
                                ?>
                                <div class="item">
                                    <iframe src="https://www.youtube.com/embed/<?=$videoId?>" width="100%" height="600px" frameborder="0" allowfullscreen="true" class="g-new-iframe"></iframe>
                                </div>
                                <?php
                                endif;
                                ?> 

                                <?php
                                if(!empty($youtube5)):
                                    $urlParts = parse_url($youtube5);
                                    parse_str($urlParts['query'], $queryParameters);
                                    $videoId = $queryParameters['v'];
                                ?>
                                <div class="item">
                                    <iframe src="https://www.youtube.com/embed/<?=$videoId?>" width="100%" height="600px" frameborder="0" allowfullscreen="true" class="g-new-iframe"></iframe>
                                </div>
                                <?php
                                endif;
                                ?>                        
                        </div>
                    </div>
                    
                    <div class="g-new-col-15 g-new-col-20">
                        <h4 class="g-menuitem g-new-subtitle">ფოტო</h4>
                        <ul class="g-new-media-list">
                            <?php
                            if($image_positions!=""){
                                $imageP = explode(",", $image_positions);
                            }else{ 
                                $imageP = array();
                                for($x=1; $x<=30; $x++):
                                    $imageP[] = "image".$x;
                                endfor;
                            }

                            $index=0;
                            foreach($imageP as $im):
                                if($$im != "" && $im != "image_fb"):
                                    $index++;
                            ?>
                                <li class="g-ppoto">
                                    <a href="javascript:void(0)" class="g-new-popup-goto" data-index="<?=$index?>">
                                        <img src="<?=$$im?>" alt="">
                                    </a>
                                </li>
                            <?php                    
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>
        </div>


        <div class="g-images-box">
            <div class="g-thumbs">
                <ul>
                    <?php
                    if($image_positions!=""){
                        $imageP = explode(",", $image_positions);
                    }else{ 
                        $imageP = array();
                        for($x=1; $x<=30; $x++):
                            $imageP[] = "image".$x;
                        endfor;
                    }

                    $index=0;
                    foreach($imageP as $im):
                        if($$im != "" && $im != "image_fb"):
                            $index++;
                    ?>
                        <li>
                            <a href="#g-popup" class="lightbox-link" data-type="image" data-src="<?=$$im?>" data-index="<?=$index?>">
                                <img src="<?=$$im?>" alt="">
                            </a>
                        </li>
                    <?php                    
                        endif;
                    endforeach;
                    ?>

                    

                    <?php
                    if(!empty($youtube1)):
                        $index++;
                        $urlParts = parse_url($youtube1);
                        parse_str($urlParts['query'], $queryParameters);
                        $videoId = $queryParameters['v'];
                    ?>
                    <li>
                        <a href="#g-popup" class="lightbox-link" data-type="video" data-src="<?=$youtube1?>" data-videoImage="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" data-index="<?=$index?>">
                            <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>

                    <?php
                    if(!empty($youtube2)):
                        $index++;
                        $urlParts = parse_url($youtube2);
                        parse_str($urlParts['query'], $queryParameters);
                        $videoId = $queryParameters['v'];
                    ?>
                    <li>
                        <a href="#g-popup" class="lightbox-link" data-type="video" data-src="<?=$youtube2?>" data-videoImage="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" data-index="<?=$index?>">
                            <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>

                    <?php
                    if(!empty($youtube3)):
                        $index++;
                        $urlParts = parse_url($youtube3);
                        parse_str($urlParts['query'], $queryParameters);
                        $videoId = $queryParameters['v'];
                    ?>
                    <li>
                        <a href="#g-popup" class="lightbox-link" data-type="video" data-src="<?=$youtube3?>" data-videoImage="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" data-index="<?=$index?>">
                            <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>

                    <?php
                    if(!empty($youtube4)):
                        $index++;
                        $urlParts = parse_url($youtube4);
                        parse_str($urlParts['query'], $queryParameters);
                        $videoId = $queryParameters['v'];
                    ?>
                    <li>
                        <a href="#g-popup" class="lightbox-link" data-type="video" data-src="<?=$youtube4?>" data-videoImage="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" data-index="<?=$index?>">
                            <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>

                    <?php
                    if(!empty($youtube5)):
                        $index++;
                        $urlParts = parse_url($youtube5);
                        parse_str($urlParts['query'], $queryParameters);
                        $videoId = $queryParameters['v'];
                    ?>
                    <li>
                        <a href="#g-popup" class="lightbox-link" data-type="video" data-src="<?=$youtube5?>" data-videoImage="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" data-index="<?=$index?>">
                            <img src="https://img.youtube.com/vi/<?=$videoId?>/0.jpg" alt="">
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>

            <input type="hidden" name="g-active-image" id="g-active-image" value="1">
            <input type="hidden" name="g-max-image" id="g-max-image" value="<?=$index?>">
            <div class="g-main-image">
                <div class="g-arrows">
                    <button class="g-prev"></button>
                    <button class="g-next"></button>
                </div>
                <a href="#g-popup" class="lightbox-link">
                    <?php
                    $imagexx = ($image_positions!="") ? explode(",", $image_positions) : array('image1');
                    $newImage = ${$imagexx[0]};
                    ?>
                    <img src="<?php echo $newImage; ?>">

                    <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
            </div>
        </div>
    </div>


    <div class="product-info-main">
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
            <div class="page-title-wrapper&#x20;product" style="margin-top:0px;">
                <h1 class="page-title g-product-title" style="text-align: left;">
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

            <?=g_strip_classes($description)?>
        </div>
    </div>

    <div style="clear:both;"></div>
    <div class="g-long-text g-menuitem-sub">
        <?=g_strip_classes($content)?>
    </div>
</div>

<div class="bundle-options-container">
    <div class="box-wrapper product-add-form" style="padding-top:0">
        <h2 class="g-price">
            <?php
            if($discount!=""){
            ?>
            <span style="text-decoration: line-through; padding-right:10px; color:red;"><?=$price?>₾</span>
            <span style="color:green;"><?=$discount?>₾</span>
            <?php
            }else{
            ?>
            <span><?=$price?>₾</span>
            <?php
            }
            ?>
        </h2> 

        <div style="clear:both;"></div>
        <?php
        if($discount!="" && $countdown_time!=""){
            $totime = strtotime($countdown_time);
            if(time() >= $totime){
                db_query("UPDATE `pages` SET `discount`='' WHERE `id`='".(int)$id."'");
                $discount="";
            }
        }

        if($discount!="" && $countdown_time!=""){    
            $countdown_to = date("Y-m-d H:i:s", $totime);
        ?>
        <style type="text/css">
            #countdown{
                margin: 0 0 15px 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }

            #countdown span{
                margin: 0;
                padding: 0;
                width: 50px;
                height: 60px;
                line-break: 60px;
                text-align: center;
                background-color: #7cc6d1;
                color: #000;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
            }
        </style>
        <div id="countdown"></div>
            <script>
            function pad(n, len) {
            n = n.toString();
            return n.length < len ? pad("0" + n, len) : n;
            }

            // Set the date we're counting down to
            const countDownDate = new Date("<?=$countdown_to?>").getTime();

            // Update the countdown every 1 second
            const x = setInterval(function() {

            // Get the current date and time
            const now = new Date().getTime();

            // Calculate the remaining time
            const distance = countDownDate - now;

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the countdown
            document.getElementById("countdown").innerHTML = "<span>"+pad(days, 2) + "</span> <span>" + pad(hours, 2) + "</span> <span>"
            + pad(minutes, 2) + "</span> <span>" + pad(seconds, 2) + "</span>";

            // If the countdown is over, display a message
            if (distance < 0) {
            clearInterval(x);
            location.reload();
            }
            }, 1000);
            </script>
        <?php
        }
        ?>
        <div style="clear:both;"></div>

        <?php
        if($max_quentity >= 1){
        ?>
        <div class="g-stock g-menuitem-sub">
            <span><?=l('instack')?></span>
        </div>

        <form data-product-type="bundle" action="" method="post" id="product_addtocart_form">
            <div class="product-info-price">
                <div class="price-box price-configured_price" data-role="priceBox" data-product-id="6435" data-price-box="product-id-6435">
                    <p class="price-as-configured">
                        <span class="bundle-price">
                            <span class="price-container price-configured_price tax weee">
                                <strong class="g-menuitem-sub" style="font-size:14px;"><?=l('quentity')?>:</strong> 
                                <!-- <select class="g-select-quantity g-menuitem-sub">
                                    <?php
                                    for ($i=1; $i <= $max_quentity; $i++) { 
                                        ?>
                                        <option value="<?=$i?>"><?=$i?></option>
                                        <?php
                                    }
                                    ?>
                                </select> -->
                                <style type="text/css">
                                    .g-quentity-input{
                                        margin: 0 5px !important;
                                        padding: 0 5px !important;
                                        width: 70px !important;
                                        background-color: #F0F2F2 !important;
                                        box-shadow: 0 2px 5px rgba(15,17,17,.15);
                                        clear: both;
                                    }
                                </style>
                                <input type="number" name="g-quentity-input" class="g-quentity-input g-menuitem-sub" value="1">
                            </span>
                        </span>

                        <div style="clear: both;"></div>

               
                        <a href="#g-purchase-box" class="action primary g-menuitem g-buy-button g-orange-btn">
                            <span><?=l('buy')?></span>
                        </a>

                        <div style="clear: both;"></div>

                        <a href="" class="action primary g-menuitem g-cart-button g-yellow-btn">
                            <span><?=l('addtocart')?></span>
                        </a>

                        <div style="clear: both;"></div>

                        <a href="" class="action primary g-menuitem g-instalment-button g-orange-btn">
                            <span><?=l('buyInstalment')?></span>
                        </a>

                        <div style="clear: both;"></div>

                        <span class="old-price" style="display:none">
                            <span class="price-container price-configured_price&#x20;tax&#x20;weee">
                                <span class="price-label">Regular Price</span>
                                <span id="old-price-6435" data-price-amount="1499.98" data-price-type="oldPrice" class="price-wrapper ">
                                    <span class="price">£1,499.98</span>
                                </span>
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </form>
        <?php
        }else{
        ?>
        <div class="g-stock g-not-stock g-menuitem-sub">
            <span><?=l('outonstack')?></span>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="box-wrapper delivery-box">
        <h4 class="g-menuitem">
            <svg enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><g><circle cx="13" cy="44" fill="none" r="5" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/></g><g><circle cx="39" cy="44" fill="none" r="5" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/></g><path d="M45,44h2c1.018,0,2-0.982,2-2c0,0,0-7.867,0-9.615  c0-1.749-1.414-3.729-1.414-3.729l-4.125-5.502C42.617,22.137,41.355,21,40,21h-8c-1.018,0-2,0.983-2,2v19c0,1.014,0.988,1.992,2,2  h2 M49,33c0,0-10,0-11,0s-2-1-2-2c0-0.577,0-2.488,0-4c0-1.107,1-2,2-2s6.846,0,6.846,0" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/><path d="M18,44h10.154C29.17,44,30,43.171,30,42.154V16  c0-1.017-2.137-2.077-3.154-2.077h-24C1.829,13.923,1,14.752,1,15.769V42c0,1.018,0.983,2,2,2h5" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/></svg>
            <span><?=menu_title(339)?></span>
        </h4>
        <?php
        $g_pages_delivery = g_pages_master(339, '*', ' ORDER BY `position` ASC');
        $tt=1;
        ?>

        <table>
            <?php foreach($g_pages_delivery as $item): ?>
            <tr>
                <td><strong><?=$item['title']?></strong></td>
            </tr>
            <tr>
                 <td><?=$item['menutitle']?></td>
            </tr>
            <tr>
                <td><?=$item['price']?> ₾</td>
            </tr>
            <?php if($tt<=2): ?>
            <tr>
                <td><hr></td>
            </tr>
            <?php 
            endif;
            $tt++;
            endforeach; ?>
        </table>
    </div>
</div>




</div>

<div style="clear: both;"></div>

<div class="block related" style="overflow:visible;">
    <h2 class="g-menuitem"><?=l('recomended.products');?></h2>

    <style>
        .page-wrapper footer.page-footer{
            margin-top: 0px !important;
        }
    </style>

    <script>
        prodImageContainers = document.querySelectorAll(".product-image-container-5997");
        for (var i = 0; i < prodImageContainers.length; i++) {
            prodImageContainers[i].style.width = "250px";
        }
        
        prodImageContainersWrappers = document.querySelectorAll(
            ".product-image-container-5997  span.product-image-wrapper"
        );

        for (var i = 0; i < prodImageContainersWrappers.length; i++) {
            prodImageContainersWrappers[i].style.paddingBottom = "100%";
        }
    </script>
    
    <div class="block-content content" aria-labelledby="block-related-heading">
        <div class="products wrapper grid products-grid products-related g-owl-container">
            <ol class="products list items product-items owl-carousel owl-theme" id="g-ralated-products2" style="width:100%; margin-left: 0px;">
                <?php

                $limit = ' ORDER BY RAND() LIMIT 15';

                $g_recomended = g_recomended($menuid, $limit);

                foreach($g_recomended as $rel):
                    $link = href($rel['id']);
                ?>

                <li class="item product product-item related-prod-cat-poolcleaning&care" style="width:100% !important;">
                    <div class="product-item-info related-available ">
                        <a href="<?=$link?>" class="product photo product-item-photo">
                            <span class="product-image-container product-image-container-5997">
                                <span class="product-image-wrapper">
                                    <?php
                                    $image_positions = ($rel['image_positions']!="") ? explode(",", $rel['image_positions']) : array('image1');
                                    ?>

                                    <img class="product-image-photo" src="<?=$rel[$image_positions[0]]?>" loading="lazy" alt="" />
                                </span>
                            </span>
                        </a>
                        
                        <div class="product details product-item-details">
                            <strong class="product name product-item-name">
                                <a class="product-item-link g-menuitem-sub" title="" href="<?=$link?>">
                                    <?=$rel['menutitle']?>
                                </a>
                            </strong>

                            <div class="price-box price-final_price">
                                <span class="price-container price-final_price tax weee">
                                    <span id="product-price-5997" class="price-wrapper ">
                                        <?php
                                        if($rel['discount']!=""){
                                            ?>
                                            <span class="price g-menuitem-sub" style="text-decoration: line-through; padding-right:10px;"><?=$rel['price']?> ₾</span>
                                            <span class="price g-menuitem-sub"><?=$rel['discount']?> ₾</span>
                                            <?php
                                        }else{
                                            ?>
                                            <span class="price g-menuitem-sub"><?=$rel['price']?> ₾</span>
                                            <?php
                                        }
                                        ?>  

                                        <!-- <span class="price g-menuitem-sub"><?=$rel['price']?> ₾</span> -->
                                    </span>
                                </span>
                            </div>

                            <?php 
                            if($rel['max_quentity']>=1){
                            ?>
                            <div class="g-stock-box">
                                <div class="g-stock available g-menuitem-sub"><span><?=l('instack')?></span></div>
                            </div>
                        

                            <form data-role="tocart-form" data-product-configurable="false" data-product-type="simple" data-product-sku="BW58093-21" action="" method="post" style="width: unset;">
                                <input type="hidden" name="product" value="6012">
                                <input type="hidden" name="uenc" value="">
                                <input name="form_key" type="hidden" value="m8qrOfNYC6kwzS74" />
                                <button type="submit" title="Add" class="action tocart primary">
                                    <span class="g-menuitem-sub"><?=l('add.cart')?></span>
                                </button>

                                <div class="view-details-wrapper">
                                    <a class="product-item-link details g-menuitem-sub" href="<?=$link?>"><?=l('read.more')?></a>
                                </div>
                            </form>
                            <?php
                            }else{
                            ?>
                            <div class="g-stock-box">
                                <div class="g-stock available g-menuitem-sub g-unavailable"><span><?=l('outonstack')?></span></div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <?php
                endforeach;
                ?>
            </ol>

            <div class="g-owlBtns g-owlBtns1">
                <button class="prev">prev</button>
                <button class="next">next</button>
            </div>
        </div>
    </div>
</div>

<div style="clear: both;"></div>

<div class="block related" style="overflow:visible;">
    <h2 class="g-menuitem"><?=l('related.products')?></h2>

    <style>
        .page-wrapper footer.page-footer{
            margin-top: 0px !important;
        }
    </style>

    <script>
        prodImageContainers = document.querySelectorAll(".product-image-container-5997");
        for (var i = 0; i < prodImageContainers.length; i++) {
            prodImageContainers[i].style.width = "250px";
        }
        
        prodImageContainersWrappers = document.querySelectorAll(
            ".product-image-container-5997  span.product-image-wrapper"
        );

        for (var i = 0; i < prodImageContainersWrappers.length; i++) {
            prodImageContainersWrappers[i].style.paddingBottom = "100%";
        }
    </script>
    
    <div class="block-content content" aria-labelledby="block-related-heading">
        <div class="products wrapper grid products-grid products-related g-owl-container">
            <ol class="products list items product-items owl-carousel owl-theme" id="g-ralated-products" style="width:100%; margin-left: 0px;">
                <?php
                $limit = ' AND `id`!='.$id.' ORDER BY RAND() LIMIT 15';

                $g_related = g_related($menuid, $limit);

                foreach($g_related as $rel):
                    $link = href($rel['id']);
                ?>

                <li class="item product product-item related-prod-cat-poolcleaning&care" style="width:100% !important;">
                    <div class="product-item-info related-available ">
                        <a href="<?=$link?>" class="product photo product-item-photo">
                            <span class="product-image-container product-image-container-5997">
                                <span class="product-image-wrapper">
                                    <?php
                                    $image_positions = ($rel['image_positions']!="") ? explode(",", $rel['image_positions']) : array('image1');
                                    ?>

                                    <img class="product-image-photo" src="<?=$rel[$image_positions[0]]?>" loading="lazy" alt="" />
                                </span>
                            </span>
                        </a>
                        
                        <div class="product details product-item-details">
                            <strong class="product name product-item-name">
                                <a class="product-item-link g-menuitem-sub" title="" href="<?=$link?>">
                                    <?=$rel['menutitle']?>
                                </a>
                            </strong>

                            <div class="price-box price-final_price">
                                <span class="price-container price-final_price tax weee">
                                    <span id="product-price-5997" class="price-wrapper ">
                                        <?php
                                        if($rel['discount']!=""){
                                            ?>
                                            <span class="price g-menuitem-sub" style="text-decoration: line-through; padding-right:10px;"><?=$rel['price']?> ₾</span>
                                            <span class="price g-menuitem-sub"><?=$rel['discount']?> ₾</span>
                                            <?php
                                        }else{
                                            ?>
                                            <span class="price g-menuitem-sub"><?=$rel['price']?> ₾</span>
                                            <?php
                                        }
                                        ?>  

                                        <!-- <span class="price g-menuitem-sub"><?=$rel['price']?> ₾</span> -->
                                    </span>
                                </span>
                            </div>

                            <?php 
                            if($rel['max_quentity']>=1){
                            ?>
                            <div class="g-stock-box">
                                <div class="g-stock available g-menuitem-sub"><span><?=l('instack')?></span></div>
                            </div>
                        

                            <form data-role="tocart-form" data-product-configurable="false" data-product-type="simple" data-product-sku="BW58093-21" action="" method="post" style="width: unset;">
                                <input type="hidden" name="product" value="6012">
                                <input type="hidden" name="uenc" value="">
                                <input name="form_key" type="hidden" value="m8qrOfNYC6kwzS74" />
                                <button type="submit" title="Add" class="action tocart primary">
                                    <span class="g-menuitem-sub"><?=l('add.cart')?></span>
                                </button>

                                <div class="view-details-wrapper">
                                    <a class="product-item-link details g-menuitem-sub" href="<?=$link?>"><?=l('read.more')?></a>
                                </div>
                            </form>
                            <?php
                            }else{
                            ?>
                            <div class="g-stock-box">
                                <div class="g-stock available g-menuitem-sub g-unavailable"><span><?=l('outonstack')?></span></div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <?php
                endforeach;
                ?>
            </ol>

            <div class="g-owlBtns g-owlBtns2">
                <button class="prev">prev</button>
                <button class="next">next</button>
            </div>
        </div>
    </div>
</div>

<div style="clear: both;"></div>
<div class="featured-four">
    <div class="content-limit">
        <h3 class="g-menuitem"><?=l('category.title1')?></h3>
        <h2 class="g-menuitem-sub"><?=l('category.title2')?></h2>
        
        <div class="content-container">
            <div class="row"> 
                <?php
                $g_feature_categories = g_feature_categories();
                $chunk = array_chunk($g_feature_categories, 2);

                if(isset($chunk[0])):
                foreach(@$chunk[0] as $v):
                ?>
                <div class="column">
                    <a href="<?=href($v['id'])?>">
                        <img src="<?=$v['image1']?>" alt="featured category Image">
                        
                        <button class="action primary"><span class="g-menuitem"><?=$v['title']?></span></button>
                    </a>
                </div>
                <?php endforeach; 
                endif;
                ?>
            </div>

            <div class="row">
                <?php
                if(isset($chunk[1])):
                foreach(@$chunk[1] as $v):
                ?>
                <div class="column">
                    <a href="<?=href($v['id'])?>">
                        <img src="<?=$v['image1']?>" alt="featured category Image">
                        <button class="action primary"><span class="g-menuitem"><?=$v['title']?></span></button>
                    </a>
                </div>
                <?php 
                endforeach; 
                endif;
                ?>
            </div>
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
    height: 40px;
    position: absolute;
    top: calc(50% - 20px);
    left: -40px;
    pointer-events: none;
}

.g-owl-container .g-owlBtns button{
    margin: 0;
    padding: 0;
    width: 40px;
    height: 40px;
    min-width: 40px;
    max-width: 40px;
    min-height: 40px;
    min-height: 40px;
    pointer-events: all;
    background-color: #ffffff;
    text-indent: -9999px;
    position: relative;
    border-radius: 100%;
    box-shadow: 0 4px 4px rgba(0,0,0,.3), 0 0 4px rgba(0,0,0,.2);
}

.g-owl-container .g-owlBtns button:hover,
.g-owl-container .g-owlBtns button:focus{
    background-color: #c5cae9;
}

.g-owl-container .g-owlBtns button:first-child{
    float: left;
}

.g-owl-container .g-owlBtns button:last-child{
    float: right;
}

.g-owl-container .g-owlBtns button:first-child::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: -1px;
    background-color: #000;
    -webkit-mask-image: url(/images/icon-arrow.svg);
    mask-image: url(/images/icon-arrow.svg);
    -webkit-mask-size: 25px;
    mask-size: 25px;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: center;
    mask-position: center;
    transform: rotate(180deg);
}

.g-owl-container .g-owlBtns button:last-child::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 2px;
    background-color: #000;
    -webkit-mask-image: url(/images/icon-arrow.svg);
    mask-image: url(/images/icon-arrow.svg);
    -webkit-mask-size: 25px;
    mask-size: 25px;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-position: center;
    mask-position: center;
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

    $('.g-main-image a').attr('data-index', indx);

    if(type=="image"){
        $('#g-popup .g-popup-main-image').html('<img>');
        $('.g-main-image a img').attr('src', src);
        $('.g-popup-main-image img').attr('src', src);
        $('.g-main-image a').removeClass('videosvg');                                
    }else{
        var videoImage = $(this).attr('data-videoImage');
        $('.g-main-image a').addClass('videosvg');
        $('.g-main-image a img').attr('src', videoImage);
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

        $('.g-hidemobimages').html(owlHtml).show();

        var bundle = $('.bundle-options-container').prop('outerHTML');
        $('.bundle-options-container').remove();
        $('.mobile-price-button-box').html(bundle);


        $('#mobile-product-slider').owlCarousel({
            autoplay: false,
            smartSpeed:500,
            loop:true,
            margin:0,
            nav:true,
            dots: true,
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

        $('.mobile-lightbox').magnificPopup();
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

    $('#g-ralated-products2').owlCarousel({
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

    $('.g-owl-container .g-owlBtns1 button.prev').on('click', function () {
        $('#g-ralated-products2').trigger('prev.owl.carousel');
    });

    $('.g-owl-container .g-owlBtns1 button.next').on('click', function () {
        $('#g-ralated-products2').trigger('next.owl.carousel');
    });

    $('.g-owl-container .g-owlBtns2 button.prev').on('click', function () {
        $('#g-ralated-products').trigger('prev.owl.carousel');
    });

    $('.g-owl-container .g-owlBtns2 button.next').on('click', function () {
        $('#g-ralated-products').trigger('next.owl.carousel');
    });

    var owlxxx;

    $(document).on("click", ".g-new-popup-goto", function(){
        $('.g-new-popup-goto').removeClass('active');
        $(this).addClass('active');
        var ind = $(this).attr('data-index');
        owlxxx.trigger('to.owl.carousel', [(ind - 1), 0]);
    });

    $('.lightbox-link').magnificPopup({
        type: 'inline',
        callbacks: {
            open: function() {
                $('#g-popup').show();
                var ul = $('.g-thumbs ul').prop('outerHTML');
                $('#g-popup .g-popup-thumbs').html(ul);

                $('#g-popup .g-popup-thumbs a').attr('href', 'javascript:void(0)').removeClass('lightbox-link').addClass('popup-lightbox');
                var dataIndexValue = parseInt($(this.currItem.el).attr('data-index'));

                $('.g-new-popup-goto').removeClass('active');
                // $('#g-new-popup-main').owlCarousel('destroy');
                if(dataIndexValue<=1 || isNaN(dataIndexValue)){ dataIndexValue = 1; }

                $('.g-new-popup-goto[data-index="'+dataIndexValue+'"]').addClass('active');

                setTimeout(function(){
                    owlxxx = $('#g-new-popup-main').owlCarousel({
                        autoplay: false,
                        smartSpeed:500,
                        loop:false,
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

                    owlxxx.trigger('to.owl.carousel', [dataIndexValue - 1]);

                    owlxxx.on('changed.owl.carousel', function(event) {
                      $('.g-new-popup-goto').removeClass('active');
                      var currentItem = event.item.index + 1;
                      console.log(currentItem);
                      $('.g-new-popup-goto[data-index="'+currentItem+'"]').addClass('active');
                    });
                }, 500);
            }
        }
    });

    $('.g-buy-button').magnificPopup({
        type: 'inline',
        callbacks: {
            open: function() {
                $('#g-purchase-box').show();
            }
        }
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
            // $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="'+prev+'"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
            // $('.g-popup-main-image').html('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1&amp;mute=1" frameborder="0" allowfullscreen="true" style="width: 100%; height: 600px;"></iframe>>');
        }

        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(prev);
    }else{
        var src = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"] img').attr('src');
        var videoimage = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"]').attr('data-type');

        if(videoimage=="image"){
            $('.g-main-image a').removeClass('videosvg');
            // $('.g-popup-main-image').html('<img src="'+src+'">');
        }else{
            var dataSrc = $('.g-images-box .g-thumbs ul li a[data-index="'+maxImageIndex+'"]').attr('data-src');
            const url = new URL(dataSrc);
            const videoId = url.searchParams.get("v");

            $('.g-main-image a').addClass('videosvg');
        }

        $('.g-images-box .g-main-image img').attr('src', src);
        $('#g-active-image').val(maxImageIndex);
    }
});

$(document).on('change', '#home_delivery', function(){
    var chKed = $(this).prop('checked');
    var checkOutPrice = parseFloat($('.checkout-price').attr('data-price'));
    var plusFive = checkOutPrice + ((checkOutPrice * <?=s('home.delivery')?>) / 100);
    plusFive = Math.round(plusFive);
    
    if(chKed){
        $('.checkout-price').html(plusFive + "₾");
    }else{
        $('.checkout-price').html(checkOutPrice + "₾");
    }
});
</script>
</body>
</html>
