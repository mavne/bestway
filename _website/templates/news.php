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
    /*.nav-open .nav-sections, .nav-before-open .nav-sections{
        top: 173px;
        height: calc(100% - 173px);
    } */   
}

.g-menuitem{
    font-family: 'Roboto _GEO Mt' !important;
    text-transform: uppercase !important;
}

.g-menuitem-sub{
    font-family: 'Roboto _Nusx' !important;
    text-transform: lowercase; !important;
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

</head>
<body data-container="body" class="page-with-offers page-with-filter page-products categorypath-pool-accessories-and-chemicals-pool-accessories category-pool-accessories catalog-category-view">

    <!-- page-layout-2columns-left -->

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
</script></div>


<div class="columns" style="border: none;">
    <div class="column main"><div class="catalog-topnav amasty-catalog-topnav">
</div>
<input name="form_key" type="hidden" value="m8qrOfNYC6kwzS74" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
<script type="e028b536ec15088aeba82394-text/javascript">window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/www.bestwaystore.co.uk\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/www.bestwaystore.co.uk\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/www.bestwaystore.co.uk\/"}</script> <!-- ko template: getTemplate() --><!-- /ko -->
<script type="text/x-magento-init">
        {
            "#authenticationPopup": {
                "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"},"recaptcha":{"component":"Magento_ReCaptchaFrontendUi\/js\/reCaptcha","displayArea":"additional-login-form-fields","reCaptchaId":"recaptcha-popup-login","settings":{"rendering":{"sitekey":"6LcLgJ4UAAAAAL9xamPk9GENBnr1PEItaGBt5-j2","badge":"inline","size":"invisible","theme":"light","hl":""},"invisible":true}},"amazon-button":{"component":"Amazon_Login\/js\/view\/login-button-wrapper","sortOrder":"0","displayArea":"additional-login-form-fields","config":{"tooltip":"Securely login to our website using your existing Amazon details.","componentDisabled":true}}}}}}            },
            "*": {
                "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fwww.bestwaystore.co.uk\u002Fstatic\u002Fversion1681722880\u002Ffrontend\u002FWilton\u002FBW\u002Fen_GB\u002Fimages\u002Floader\u002D1.gif"
            }
        }
    </script>
</div>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/section-config": {
                "sections": {"stores\/store\/switch":["*"],"stores\/store\/switchrequest":["*"],"directory\/currency\/switch":["*"],"*":["messages"],"customer\/account\/logout":["*","recently_viewed_product","recently_compared_product","persistent"],"customer\/account\/loginpost":["*"],"customer\/account\/createpost":["*"],"customer\/account\/editpost":["*"],"customer\/ajax\/login":["checkout-data","cart","captcha"],"catalog\/product_compare\/add":["compare-products","wp_ga4","gtm"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart","ammessages"],"sales\/order\/reorder":["cart","ammessages"],"checkout\/cart\/add":["cart","directory-data","ammessages","wp_ga4","gtm"],"checkout\/cart\/delete":["cart","ammessages","wp_ga4","gtm"],"checkout\/cart\/updatepost":["cart","ammessages"],"checkout\/cart\/updateitemoptions":["cart","ammessages"],"checkout\/cart\/couponpost":["cart","ammessages"],"checkout\/cart\/estimatepost":["cart","ammessages"],"checkout\/cart\/estimateupdatepost":["cart","ammessages"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items","ammessages"],"checkout\/sidebar\/removeitem":["cart","ammessages","wp_ga4","gtm"],"checkout\/sidebar\/updateitemqty":["cart","ammessages"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","last-ordered-items","instant-purchase","ammessages","wp_ga4","gtm"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","ammessages","wp_ga4","gtm"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data","ammessages"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase","ammessages"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart","ammessages"],"paypal\/express\/placeorder":["cart","checkout-data","ammessages"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data","ammessages"],"paypal\/express\/onauthorization":["cart","checkout-data","ammessages"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"wishlist\/index\/add":["wishlist","wp_ga4","gtm"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart","wp_ga4","gtm"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart","wp_ga4","gtm"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"amasty_cart\/cart\/add":["cart","messages","directory-data"],"amasty_cart\/cart\/updateitemoptions":["cart","messages"],"amasty_cart\/wishlist\/cart":["cart","wishlist","messages"],"amasty_cart\/cart\/update":["cart"],"amasty_cart\/quote\/add":["quotecart","messages"],"amasty_cart\/quote\/update":["quotecart","messages"],"amasty_cart\/quote\/updateitemoptions":["quotecart","messages"],"amasty_promo\/cart\/add":["cart","ammessages"],"braintree\/paypal\/placeorder":["ammessages","cart","checkout-data"],"authorizenet\/directpost_payment\/place":["ammessages"],"reclaim\/checkout\/reload":["cart"],"braintree\/googlepay\/placeorder":["cart","checkout-data"],"checkout\/cart\/configure":["wp_ga4","gtm"],"rest\/*\/v1\/guest-carts\/*\/shipping-information":["wp_ga4","gtm"],"rest\/*\/v1\/carts\/*\/shipping-information":["wp_ga4","gtm"]},
                "clientSideSections": ["checkout-data","cart-data","chatData"],
                "baseUrls": ["https:\/\/www.bestwaystore.co.uk\/"],
                "sectionNames": ["messages","customer","compare-products","last-ordered-items","cart","directory-data","captcha","instant-purchase","loggedAsCustomer","persistent","review","wishlist","ammessages","chatData","wp_ga4","gtm","recently_viewed_product","recently_compared_product","product_data_storage","paypal-billing-agreement"]            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/customer-data": {
                "sectionLoadUrl": "https\u003A\u002F\u002Fwww.bestwaystore.co.uk\u002Fcustomer\u002Fsection\u002Fload\u002F",
                "expirableSectionLifetime": 60,
                "expirableSectionNames": ["cart","persistent"],
                "cookieLifeTime": "3600",
                "updateSessionUrl": "https\u003A\u002F\u002Fwww.bestwaystore.co.uk\u002Fcustomer\u002Faccount\u002FupdateSession\u002F"
            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/invalidation-processor": {
                "invalidationRules": {
                    "website-rule": {
                        "Magento_Customer/js/invalidation-rules/website-rule": {
                            "scopeConfig": {
                                "websiteId": "9"
                            }
                        }
                    }
                }
            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "body": {
            "pageCache": {"url":"https:\/\/www.bestwaystore.co.uk\/page_cache\/block\/render\/id\/225\/","handles":["default","catalog_category_view","catalog_category_view_type_layered","catalog_category_view_displaymode_products","catalog_category_view_id_225"],"originalRequest":{"route":"catalog","controller":"category","action":"view","uri":"\/pool-accessories-and-chemicals\/pool-accessories.html"},"versionCookieName":"private_content_version"}        }
    }
</script>
<div class="get_compare_list_bar">
</div>

    <div data-mage-init='{"feedReport":[]}'></div> 

<div id="amasty-shopby-product-list">
    <div class="toolbar toolbar-products">
        <div style="clear: both;"></div>
        
        <div class="page-title-wrapper product">
            <h1 class="page-title g-product-title g-product-title2">
                <span class="base g-menuitem" data-ui-id="page-title-wrapper">
                    <?=$title?>
                </span>
            </h1>
        </div>
    </div>

    <div class="products wrapper grid products-grid">
        <style>
            .product-image-container-6012 { width: 440px;}
            .product-image-container-6012 span.product-image-wrapper { padding-bottom: 100%;}
        </style>
        <ol class="products list items product-items" id="g_ajax_load_container">
            <?php 
            foreach($news as $a): 
            ?>
            <li class="item product product-item">
                <div class="product-item-info" data-container="product-grid">
                    <div class="flag-wrapper-listing"></div>
                    
                    <a href="<?=href($a['id'])?>" class="product photo product-item-photo" tabindex="-1">
                        <span class="product-image-container product-image-container-6012">
                            <span class="product-image-wrapper">
                                <img class="product-image-photo" src="<?=$a['image1']?>" loading="lazy" width="440" height="260" alt="Filter&#x20;Cartridge&#x20;&#x28;Size&#x20;1&#x29;&#x20;" />
                            </span>
                        </span>
                    </a>

                    <div class="product details product-item-details">
                        <strong class="product name product-item-name">
                            <a class="g-menuitem" href="<?=href($a['id'])?>"><?=$a['title']?></a>
                        </strong>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="toolbar toolbar-products">
        <style type="text/css">
            .pagination a{
                margin: 0 5px;
                padding: 10px;
                background-color: #7cc6d1;
                color: white;
                border-radius: 10px;
                text-align: center;
                display: inline-block;
                text-decoration: none;
            }

            .pagination a.active,
            .pagination a:hover{
                background-color: #FFA41C;
                color: #0F1111;
            }
        </style>

        <div class="pages" style="float:none; width: 100%; text-align: center;">

            <?php if($page_max>1) : ?>
                    <div class="pagination">
                <?php for($i=1;$i<=$page_max;$i++) : ?>
                        <a href="<?php echo href($id).'?page='.$i;?>" <?php echo ($page_cur==$i) ? 'class="g-menuitem active"':' class="g-menuitem"';?>><?php echo $i;?></a>
                <?php endfor; ?>
                        <div class="clear"></div>
                    </div>
                <?php endif;?>
        </div>
    </div>
</div>





</div>

<div class="sidebar sidebar-main">
<div class="block filter" id="layered-filter-block" data-mage-init='
    {
        "collapsible":
        {
            "openedState": "active",
            "collapsible": true,
            "active": false,
            "collateral":
            {
                "openedState": "filter-active",
                "element": "body"
            }
        }
    }'>
<div class="block-title filter-title" data-count="0">
<strong data-role="title">Shop By</strong>
</div>

















<!-- <div class="block-content filter-content">

<div role="heading" aria-level="2" class="block-subtitle filter-subtitle">Left </div>
<div class="filter-options" id="narrow-by-list" data-role="content" data-mage-init=''>

LeftSide

</div>
</div> -->
</div>
</div></div></main>



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

        var desktopimage = "https://www.bestwaystore.co.uk/media/catalog/category/AGP_-_Desktop_1_.png";
        var tabletimage = "";
        var mobileimage = "";

        jQuery(document).ready(function() {
            jQuery("body").on("click", ".action.delete", function (e) {
                e.stopImmediatePropagation();
                addCompare().addDelete(jQuery(this));
            });

            jQuery('.filter-options-item .filter-options-title').click(function(){
                var active = jQuery(this).parent().hasClass('active');
                if(active){
                    jQuery(this).parent().removeClass('active');
                }else{
                    jQuery(this).parent().addClass('active');
                }
            })
        });

        //Run on load
        jQuery(document).ready(function () {

            var width = jQuery(window).width();

            //mobile only
            if ( jQuery(window).width() < 768) {
                // footerAccordions(true);
            }
            scrollToTop();
        });

        /**
         * Magento widget for footer accordion
         */
        function footerAccordions(enable) {
            var currentAccordion = jQuery(".footer-column");

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
                    jQuery(this).siblings('div[data-role="trigger"]').click();
                    event.preventDefault();
                    event.stopPropagation();
                });
            }

        }

        /**
         * scroll to top button on all pages
         */
        function scrollToTop() {

            var toTop = jQuery('#smoothup');

            toTop.hide();

            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() < 200) {
                    toTop.fadeOut();
                } else {
                    toTop.fadeIn();
                }
            });

            toTop.on('click', function () {
                jQuery('html, body').animate({scrollTop: 0}, 'fast');
                return false;
            });
        }


var gMenuClosed = true;

        jQuery(document).on('click', '.g-toggle-menu', function(){
            if(gMenuClosed){
                gMenuClosed = false;
                jQuery('html').addClass('nav-before-open');
                jQuery('html').addClass('nav-open');
            }else{
                gMenuClosed = true;
                jQuery('html').removeClass('nav-open');
                setTimeout(function(){
                    jQuery('html').removeClass('nav-before-open');
                }, 300);               
                
            }
        });

        var loading = false;
        jQuery(document).on('click', '.g_load_more_items', function(){
            if(!loading){
                loading = true;
                var that = jQuery(this);
                var loaded = parseInt(jQuery(this).attr('data-loaded'));
                var max = parseInt(jQuery(this).attr('data-max'));
                var perpage = parseInt(jQuery(this).attr('data-perpage'));
                var menutype = parseInt(jQuery(this).attr('data-type'));
                var nextLoad = loaded + perpage;
                if(nextLoad >= max){
                    jQuery(this).hide();
                }

                var ajaxUrl = 'type=loadlist&menutype='+menutype+'&from='+loaded+'&to='+perpage;
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "/ge/?ajax=true", true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
                xhttp.send(ajaxUrl);

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var responseText = JSON.parse(this.responseText);

                        if(responseText.Error.Code==1){
                            console.log(responseText.Error.Text);
                        }else{
                            // $(".msg").html(responseText.Success.Text).fadeIn();    
                            jQuery("#g_ajax_load_container").append(responseText.Success.Text);  
                            that.attr('data-loaded', nextLoad);
                        }

                        loading = false;
                    }
                };
            }
        });

</script>
</body>
</html>
