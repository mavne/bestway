<?php defined('DIR') OR exit; 

// if($_SERVER['REMOTE_ADDR']=="94.240.245.46"){
//     $db_select = db_fetch_all("SELECT `id`, `idx`, `olddb_url`, `language` FROM `pages` WHERE `olddb_url`!='' LIMIT 1");

//     function g_escape($text){
//         return str_replace(array('"'), array('\"'), $text);
//     }

//     foreach($db_select as $db):
//         $html = file_get_contents($db['olddb_url']);
//         $html = "<<<HTML ".$html." HTML";

//         $dom = new DOMDocument();
//         @$dom->loadHTML($html);

//         $xpath = new DOMXPath($dom);

//         $priceDiv = $xpath->query('//div[@class="shida5_3"]')->item(0);


//         // $descriptionDiv = $xpath->query('//div[@class="agwera"]')->item(0)->innerHTML;

//         $agweraDiv = $xpath->query('//div[@class="agwera"]')->item(0);



//         $innerHTML = '';
//         foreach ($agweraDiv->childNodes as $node) {
//             $innerHTML .= $dom->saveHTML($node);
//         }

//         // echo "<pre>";

//         $price = $priceDiv->getElementsByTagName('a')->item(0)->textContent;

//         $thePrice = str_replace(array(' ', '₾'), '', $price);

//         db_query('UPDATE `pages` SET `price`="'.$thePrice.'", `content`="'.g_escape($innerHTML).'", `olddb_url`="" WHERE `idx`="'.(int)$db['idx'].'"');

//         echo "updated ".(int)$db['idx']."<br>";
//     endforeach;

//     exit;
// }
?>

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
<div class="page-wrapper"><header class="page-header">


<div class="header-confidence-banner">
<ul id="banners" class="">
<li class="banner displayed">
<p><a href="/delivery-and-returns">Free UK delivery on orders over £40</a></p>
</li>
<li class="banner displayed">
<p><a href="/bestway-interest-free-finance">Klarna Available</a> *</p>
</li>
<li class="banner displayed">
<p><a href="/warranty-list">Up to 2 Years Warranty Included</a></p>
</li>
</ul>
</div>
<div class="panel wrapper"><div class="panel header"><a class="action skip contentarea" href="/#contentarea">
<span>
Skip to Content </span>
</a>
<ul class="header links"><li class="link authorization-link" data-label="or">
<a href="/customer/account/login/referer/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/">Sign In</a>
</li>
<li><a href="/customer/account/create/" id="idAeg6KyUW">Create an Account</a></li></ul></div></div><div class="header content"><div class="block block-search">
<div class="block block-title"><strong>Search</strong></div>
<div class="block block-content">
<form class="form minisearch" id="search_mini_form" action="/catalogsearch/result/" method="get">
<div class="field search">
<label class="label" for="search" data-role="minisearch-label">
<span>Search</span>
</label>
<div class="control">

<div id="search_autocomplete" class="search-autocomplete -left-position -bottom-position" tabindex="-1"></div>
<div class="nested">
<a class="action advanced" href="/catalogsearch/advanced/" data-action="advanced-search">
Advanced Search </a>
</div>

<div id="amasty-xsearch-preload" class="amasty-xsearch-preload" data-amsearch-js="preload"></div>
<div class="amsearch-close" title="Clear Field" data-amsearch-js="close"></div><button class="amsearch-loupe" title="Search" type="submit" data-amsearch-js="loupe"></button><div class="amsearch-wrapper-input -left-position -bottom-position" data-amsearch-js="search-wrapper-input"><input id="search" type="text" name="q" value="" placeholder="Search for products, parts and more" class="input-text" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off" aria-expanded="false"><div data-amsearch-js="loader" class="amasty-xsearch-loader amasty-xsearch-hide"></div></div></div>
</div>
<div class="actions">
<button type="submit" title="Search" class="action search" aria-label="Search" disabled="">
<span>Search</span>
</button>
 </div>
</form>
</div>
</div>

<span data-action="toggle-nav" class="action nav-toggle g-toggle-menu">
    <span>Toggle Nav</span>
</span>

<a class="logo" href="/" title="Bestway Store" aria-label="store logo">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/logo.svg" title="Bestway Store" alt="Bestway Store" width="170">
</a>
<div data-block="minicart" class="minicart-wrapper empty">
<a class="action showcart" href="/checkout/cart/" data-bind="scope: &#39;minicart_content&#39;">
<span class="text">My Cart</span>
<span class="counter qty empty" data-bind="css: { empty: !!getCartParam(&#39;summary_count&#39;) == false &amp;&amp; !isLoading() }, blockLoader: isLoading">
<span class="counter-number"><!-- ko text: getCartParam('summary_count') --><!-- /ko --></span>
<span class="counter-label">
<!-- ko if: getCartParam('summary_count') --><!-- /ko -->
</span>
</span>
<span class="icon empty" data-bind="css: { empty: !!getCartParam(&#39;summary_count&#39;) == false &amp;&amp; !isLoading() }, blockLoader: isLoading"></span>
</a>

<script type="text/javascript">
        window.checkout = {"shoppingCartUrl":"https:\/\/www.bestwaystore.co.uk\/checkout\/cart\/","checkoutUrl":"https:\/\/www.bestwaystore.co.uk\/checkout\/","updateItemQtyUrl":"https:\/\/www.bestwaystore.co.uk\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"https:\/\/www.bestwaystore.co.uk\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"https:\/\/www.bestwaystore.co.uk\/","minicartMaxItemsVisible":5,"websiteId":"9","maxItemsToDisplay":10,"storeId":"10","storeGroupId":"9","customerLoginUrl":"https:\/\/www.bestwaystore.co.uk\/customer\/account\/login\/referer\/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"https:\/\/www.bestwaystore.co.uk\/captcha\/refresh\/","isRequired":false,"timestamp":1682899221}}};
    </script>

<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-1" style="display: none;"><div class="block block-minicart ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1" style="display: block;">
<div id="minicart-content-wrapper" data-bind="scope: &#39;minicart_content&#39;">
<!-- ko template: getTemplate() -->
<div class="block-title">
<strong>
<span class="text" data-bind="i18n: &#39;My Cart&#39;">My Cart</span>
<span class="qty empty" data-bind="css: { empty: !!getCartParam(&#39;summary_count&#39;) == false },
                       attr: { title: $t(&#39;Items in Cart&#39;) }, text: getCartParam(&#39;summary_count&#39;)" title="Items in Cart"></span>
</strong>
</div>
<div class="block-content">

<!-- ko if: getCartParam('summary_count') --><!-- /ko -->
<!-- ko if: getCartParam('summary_count') --><!-- /ko -->
<!-- ko ifnot: getCartParam('summary_count') -->
<strong class="subtitle empty" data-bind="i18n: &#39;You have no items in your shopping basket.&#39;">You have no items in your shopping basket.</strong>
<!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
<!-- /ko -->
<!-- ko if: getCartParam('summary_count') --><!-- /ko -->
<!-- ko if: regionHasElements('promotion') --><div id="minicart-widgets" class="minicart-widgets">
<!-- ko foreach: getRegion('promotion') --><!-- ko template: getTemplate() -->
<!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
<!-- /ko --><!-- /ko -->
</div><!-- /ko -->
</div>
<!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
<!-- /ko -->
</div>
</div></div></div>
<ul class="header links"><li><a href="/customer/account/" id="idrsh7YgW7"></a></li></ul><ul class="compare wrapper"><li class="item link compare" data-bind="scope: &#39;compareProducts&#39;" data-role="compare-products-link">
<a class="action compare no-display" title="Compare Products" data-bind="attr: {&#39;href&#39;: compareProducts().listUrl}, css: {&#39;no-display&#39;: !compareProducts().count}">
Compare Products <span class="counter qty" data-bind="text: compareProducts().countCaption"></span>
</a>
</li>

</ul><div class="control"></div>
</div><script async="" type="application/javascript" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/klaviyo.js.download"></script>

</header> <div class="sections nav-sections">
<div class="section-items nav-sections-items" role="tablist">
<div class="section-item-title nav-sections-item-title active" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.menu" aria-selected="false" aria-expanded="true" tabindex="0">
<a class="nav-sections-item-switch" data-toggle="switch" href="/#store.menu">
Menu </a>
</div>
<div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content" role="tabpanel" aria-hidden="false">
<div class="menu-container horizontal-menu">

<div data-action="navigation" class="menu horizontal stickymenu">
    <a href="/#" class="menu-mobile">Navigation</a>
    <ul>
        <?=main_menu2()?>
    </ul>
</div>

</div>
</div>
<div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.links" aria-selected="false" aria-expanded="false" tabindex="0">
<a class="nav-sections-item-switch" data-toggle="switch" href="/#store.links">
Account </a>
</div>
<div class="section-item-content nav-sections-item-content" id="store.links" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
 <ul class="header links"><li class="link authorization-link" data-label="or">
<a href="/customer/account/login/referer/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/">Sign In</a>
</li>
<li><a href="/customer/account/create/" id="idAeg6KyUW">Create an Account</a></li></ul></div>
</div>
</div>
<div class="md-menu-overlay">
</div>
<div class="confidence-banner" style="display: none">
<div class="cb-columns">
<div class="cb-col  nb">
<div class="magezon-builder magezon-builder-preload"><div class="cufm6eo mgz-element mgz-element-row full_width_row"><div class="mgz-element-inner cufm6eo-s"><div class="inner-content mgz-container"><div class="goq5t8b mgz-element mgz-element-column mgz-col-xs-12"><div class="mgz-element-inner goq5t8b-s"><div class="myr0eeq mgz-element mgz-child mgz-element-text"><div class="mgz-element-inner myr0eeq-s"><p style="text-align: center;"><a href="/sale.html" title="Bestway Sale"><strong>UP TO 50% OFF</strong></a></p><p style="text-align: center;"><a href="/sale.html" title="Bestway Sale">On Selected Pools, Hot Tubs And More...</a></p></div></div></div></div></div></div></div></div> </div>
</div>
<span class="close"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/close.webp" alt="Close button"></span>
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

<div class="homepage-wrapper"> <div class="carousel-container mp-banner-slider">
<div id="banner-slider-carousel">
<div id="bannerslider-list-items-1-644f011594ea6" class="owl-carousel owl-theme owl-loaded owl-drag">
 <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1680px;"><div class="owl-item active" style="width: 1680px;"><div class="banner-item banner-slider"> <div class="item-content">
<div class="homepage-banner-wrapper">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Bestway-Spring-Event.webp" alt="">
<div class="content-limit">
<div class="hero-block">
<p>Get Ready For Summer | Up To 50% Off Pools, Hots Tubs, Sups &amp; more</p>
<a href="/sale.html"><button class="action primary"><span>Spring Sale</span></button></a>
</div>
</div>
</div> </div>
</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
</div>
</div>
<div class="confidence-banner-2-wrapper">
<div class="content-limit">
<div class="columns3">
<div class="column delivery">
<div class="logo-container">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/delivery.svg" alt="small truck icon">
</div>
<h5>Free Uk Delivery</h5>
<p>On all Above Ground Pools!</p>
</div>
<div class="column klarna">
<div class="logo-container">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Klarna_Logo_black.svg" alt="klarna logo">
</div>
<h5>Klarna Available</h5>
<p>Klarna payment options available at checkout</p>
</div>
<div class="column warranty">
<div class="logo-container">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/uk-customer-support.svg" alt="Dedicated customer support">
</div>
<h5>DEDICATED CUSTOMER SUPPORT</h5>
<p>We're here to help</p>
</div>
<div class="column warranty">
<div class="logo-container">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/returns.svg" alt="returns">
</div>
<h5>30 DAY HASSLE-FREE RETURNS</h5>
<p>Just in case you change your mind</p>
</div>
</div>
</div>
</div>

<div class="featured-four">
<div class="content-limit">
<h3>FEATURED CATEGORIES</h3>
<h2>Explore our featured categories</h2>
<div class="content-container">
<div class="row"> <div class="column">
<a href="/airbeds-furniture.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/cateairbedtest_3.webp" alt="featured category Image">
<button class="action primary"><span>Airbeds &amp; Furniture</span></button>
</a>
</div>
<div class="column">
<a href="/boats-sups.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/0a2dda140a98507f794bb57baa117848_2x.webp" alt="featured category Image">
<button class="action primary"><span>Boats &amp; SUPs</span></button>
</a>
</div>
</div> <div class="row"> <div class="column">
<a href="/pools.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/9c0241f14cc930f95f8f018b8fc2975c_2x.webp" alt="featured category Image">
<button class="action primary"><span>Pools </span></button>
</a>
</div>
<div class="column">
<a href="/pool-garden-beach-toys.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/49caa76fa52af87ebe3bdd3881bc398a_2x.webp" alt="featured category Image">
<button class="action primary"><span>Pool, Garden &amp; Beach Toys</span></button>
</a>
</div>
</div> </div>
</div>
</div>
<div class="featured-products-block">
<div class="content-limit">
<h3>FEATURED PRODUCTS</h3>
<h2>Check out these fantastic products</h2>
<div class="featured-product-category-filter">
<a id="featured" href="javascript:void(0)" onclick="changeSlick('featured')">Featured</a> 
<a id="new-arrivals" href="javascript:void(0)" onclick="changeSlick('new-arrivals')">New Arrivals</a> 
<a class="sale" id="sale" href="javascript:void(0)" onclick="changeSlick('sale')">Sale</a> 
</div>
<div class="loading"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/loading.webp"></div>
<div class="products slick" id="featured-block">
<div class="product-wrapper">
<div class="product">
<a href="/10-x33-x4-75-hf-oceana-sup.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/bw65350-9ft-hydro-force-aqua-journey-sup-set-1.jpg" alt="10ft Inflatable Paddle Board Set - Oceana Hydro-Force "></a>
<a href="/10-x33-x4-75-hf-oceana-sup.html"><strong class="product name product-item-name">10ft Inflatable Paddle Board Set - Oceana Hydro-Force </strong></a>
<div class="trust-reviews" data-prod_id="5816"></div>
<p class="product-price">
<span class="special-price">£229.99</span>
<span class="old-price">£449.99</span>
</p>
<a class="see-more" href="/10-x33-x4-75-hf-oceana-sup.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/5816/" method="post">
<input type="hidden" name="product" value="5816">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNTgxNi8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
 <div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/1000-bestway-kondor-elite-x1-inflatable-raft.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/61135xxx23_27155_pr_web_pl001_300dpi.jpg" alt="5’4” x 38” Kondor Elite 1000 Boat "></a>
<a href="/1000-bestway-kondor-elite-x1-inflatable-raft.html"><strong class="product name product-item-name">5’4” x 38” Kondor Elite 1000 Boat </strong></a>
<div class="trust-reviews" data-prod_id="6444"></div>
<p class="product-price">£29.99</p>
<a class="see-more" href="/1000-bestway-kondor-elite-x1-inflatable-raft.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6444/" method="post">
<input type="hidden" name="product" value="6444">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ0NC8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/2000-bestway-kondor-elite-x2-inflatable-raft.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/61139xxx23_27186_pr_web_pl001_300dpi.jpg" alt="6’5” x 42” Kondor Elite 2000 Boat "></a>
<a href="/2000-bestway-kondor-elite-x2-inflatable-raft.html"><strong class="product name product-item-name">6’5” x 42” Kondor Elite 2000 Boat </strong></a>
 <div class="trust-reviews" data-prod_id="6445"></div>
<p class="product-price">£42.99</p>
<a class="see-more" href="/2000-bestway-kondor-elite-x2-inflatable-raft.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6445/" method="post">
<input type="hidden" name="product" value="6445">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ0NS8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/2000-bestway-kondor-elite-x2-inflatable-raft-set.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/bestway_water_sports_set_61141_300dpi.jpg" alt="6’5” x 42” Kondor 2000 Boat Set "></a>
<a href="/2000-bestway-kondor-elite-x2-inflatable-raft-set.html"><strong class="product name product-item-name">6’5” x 42” Kondor 2000 Boat Set </strong></a>
<div class="trust-reviews" data-prod_id="6446"></div>
<p class="product-price">£59.99</p>
<a class="see-more" href="/2000-bestway-kondor-elite-x2-inflatable-raft-set.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6446/" method="post">
<input type="hidden" name="product" value="6446">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ0Ni8,">
 <input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
</div>
<div class="products slick" id="new-arrivals-block">
<div class="product-wrapper">
<div class="product">
<a href="/hydro-force-1-person-inflatable-fishing-kayak-koracle.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/koracle.jpg" alt="Hydro‑Force™ Koracle™ 1 Person Inflatable Fishing Kayak Complete Set"></a>
<a href="/hydro-force-1-person-inflatable-fishing-kayak-koracle.html"><strong class="product name product-item-name">Hydro‑Force™ Koracle™ 1 Person Inflatable Fishing Kayak Complete Set</strong></a>
<div class="trust-reviews" data-prod_id="6497"></div>
<p class="product-price">£149.99</p>
<a class="see-more" href="/hydro-force-1-person-inflatable-fishing-kayak-koracle.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6497/" method="post">
<input type="hidden" name="product" value="6497">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ5Ny8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
 </div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/king-size-flocked-airbed.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/bw67004main_callout.jpg" alt="80" king="" flocked="" airbed="" "=""></a>
<a href="/king-size-flocked-airbed.html"><strong class="product name product-item-name">80" King Flocked Airbed </strong></a>
<div class="trust-reviews" data-prod_id="6496"></div>
<p class="product-price">£42.99</p>
<a class="see-more" href="/king-size-flocked-airbed.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6496/" method="post">
<input type="hidden" name="product" value="6496">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ5Ni8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/6ft-indoor-outdoor-double-flocked-airbed.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/base_2_1_bw.webp" alt="75" double="" flocked="" airbed="" "=""></a>
<a href="/6ft-indoor-outdoor-double-flocked-airbed.html"><strong class="product name product-item-name">75" Double Flocked Airbed </strong></a>
<div class="trust-reviews" data-prod_id="6495"></div>
<p class="product-price">£32.99</p>
<a class="see-more" href="/6ft-indoor-outdoor-double-flocked-airbed.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6495/" method="post">
<input type="hidden" name="product" value="6495">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ5NS8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/single-jr-twin-airbed.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/bw67000main_callout.jpg" alt="Single JR Twin Airbed "></a>
<a href="/single-jr-twin-airbed.html"><strong class="product name product-item-name">Single JR Twin Airbed </strong></a>
<div class="trust-reviews" data-prod_id="6494"></div>
<p class="product-price">£1999.98</p>
<a class="see-more" href="/single-jr-twin-airbed.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6494/" method="post">
<input type="hidden" name="product" value="6494">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ5NC8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
 </form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
</div>
<div class="products slick" id="sale-block">
<div class="product-wrapper">
<div class="product">
<a href="/single-size-airbed-tritech-built-in-pump.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/untitled-2_3.jpg" alt="Bestway TriTech Single Size Airbed with Built-in Pump"></a>
<a href="/single-size-airbed-tritech-built-in-pump.html"><strong class="product name product-item-name">Bestway TriTech Single Size Airbed with Built-in Pump</strong></a>
<div class="trust-reviews" data-prod_id="6440"></div>
<p class="product-price">
<span class="special-price">£39.99</span>
<span class="old-price">£79.99</span>
</p>
<a class="see-more" href="/single-size-airbed-tritech-built-in-pump.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6440/" method="post">
<input type="hidden" name="product" value="6440">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjQ0MC8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/lay-z-spa-majorca-hydrojet-pro-hot-tub.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/majorca-main-images.jpg" alt="Majorca HydroJet Pro™"></a>
<a href="/lay-z-spa-majorca-hydrojet-pro-hot-tub.html"><strong class="product name product-item-name">Majorca HydroJet Pro™</strong></a>
<div class="trust-reviews" data-prod_id="6275"></div>
<p class="product-price">
<span class="special-price">£999.00</span>
<span class="old-price">£1,199.00</span>
</p>
<a class="see-more" href="/lay-z-spa-majorca-hydrojet-pro-hot-tub.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/6275/" method="post">
<input type="hidden" name="product" value="6275">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNjI3NS8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/hydro-force-caspian-inflatable-boat-set.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/caspianinflatableboatraft.jpg" alt="Hydro-Force™ Caspian™ Inflatable Sport Boat"></a>
<a href="/hydro-force-caspian-inflatable-boat-set.html"><strong class="product name product-item-name">Hydro-Force™ Caspian™ Inflatable Sport Boat</strong></a>
<div class="trust-reviews" data-prod_id="5807"></div>
<p class="product-price">
<span class="special-price">£299.99</span>
<span class="old-price">£549.99</span>
</p>
<a class="see-more" href="/hydro-force-caspian-inflatable-boat-set.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/5807/" method="post">
<input type="hidden" name="product" value="5807">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNTgwNy8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
</button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
<div class="product-wrapper">
<div class="product">
<a href="/barbados-airjet.html"><img class="product-image" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/barbados-main-image_1.jpg" alt="Barbados AirJet™"></a>
<a href="/barbados-airjet.html"><strong class="product name product-item-name">Barbados AirJet™</strong></a>
<div class="trust-reviews" data-prod_id="5387"></div>
<p class="product-price">
<span class="special-price">£569.00</span>
<span class="old-price">£699.00</span>
</p>
<a class="see-more" href="/barbados-airjet.html">View Details</a>
<div class="actions">
<form data-role="tocart-form" action="/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrLw%2C%2C/product/5387/" method="post">
<input type="hidden" name="product" value="5387">
<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuYmVzdHdheXN0b3JlLmNvLnVrL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdVltVnpkSGRoZVhOMGIzSmxMbU52TG5Wckx3JTJDJTJDL3Byb2R1Y3QvNTM4Ny8,">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <button type="submit" title="Add" class="action tocart primary">
<span>Add</span>
 </button>
</form>
<div class="stock available"><span>In stock</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">window.reviewsArray ={"5816":{"@type":"aggregateRating","ratingValue":"4.9","reviewCount":"80","bestRating":"5","worstRating":"0","percent":97.25},"6444":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6445":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6446":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6497":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6496":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6495":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6494":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"6440":{"@type":"aggregateRating","ratingValue":"4.5","reviewCount":"6","bestRating":"5","worstRating":"0","percent":90},"6275":{"@type":"aggregateRating","ratingValue":"0","reviewCount":"0","bestRating":"5","worstRating":"0","percent":0},"5807":{"@type":"aggregateRating","ratingValue":"1","reviewCount":"1","bestRating":"5","worstRating":"0","percent":20},"5387":{"@type":"aggregateRating","ratingValue":"5","reviewCount":"1","bestRating":"5","worstRating":"0","percent":100}}</script>

<div class="our-brands">
<div class="content-limit">
<div class="desc">
<h2 style="text-align: center;">Our Brands</h2>
<p>Welcome to Bestway, where your fun is our business! The leader in everything inflatable, we have a host of different innovative and fun products for you to choose from. Including the ultra-comfortable AlwayzAire™ Airbeds, Steel Pro Max™ Above Ground Pools, Float'N Fashion collection and the incredible Hydro-Force™ SUP range; we're certain to have a product that suits your needs. Explore our website and see what you can discover!</p> </div>
<div class="brands">
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/PowerSteelLogo_p360Black_rgb300.webp" alt="Steel Pro Max Logo"></div>
<div class="text">
<span class="title">above ground pools</span>Cool off with a splash in a Bestway® Pool
</div>
</div>
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/AlwayzAireLogo_p360Black_updated.webp" alt="AlwayzAire Logo"></div>
<div class="text">
<span class="title">airbeds &amp; furniture</span>At home or on the go, easy to inflate furniture
</div>
</div>
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/HydroForceLogo_p360Black_rgb300_st.webp" alt="Hydro-Force Logo"></div>
<div class="text">
<span class="title">hydro-force</span>Boats, stand-up paddle boards and kayaks
</div>
</div>
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/lay-z-spa-logo.svg" alt="Lay-Z-Spa Logo"></div>
<div class="text">
<span class="title">lay-z-spa</span>The comfortable, affordable, go-anywhere spas
</div>
</div>
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/FlowclearLogo_p360Black_rgb300.webp" alt="FlowClear Logo"></div>
<div class="text">
<span class="title">FlowClear</span>Keep your pools clean, clear and ready to use
</div>
</div>
<div>
<div class="logo"><img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/FloatNFashion_p360Color-Black_rgb300.webp" alt="Float&#39;n Fashion Logo"></div>
<div class="text">
<span class="title">Float'n Fashion</span>Float in style at your next pool party
</div>
</div>
</div>
</div>
</div>
<div class="sets-us-apart-wrapper">
<div class="content-limit">
<div class="columns2 flipme">
<div class="column">
<div class="magezon-builder magezon-builder-preload"><div class="ofwwovx mgz-element mgz-element-row full_width_row"><div class="mgz-element-inner ofwwovx-s"><div class="inner-content mgz-container"><div class="o8j9t4k mgz-element mgz-element-column mgz-col-xs-12"><div class="mgz-element-inner o8j9t4k-s"><div class="reeyvrn mgz-element mgz-child mgz-element-text"><div class="mgz-element-inner reeyvrn-s"><h3>How To Maintain Your Pool Water</h3><p>Keeping your pool water clean and clear is one of the most important tasks for ensuring you can enjoy your pool throughout summer. From chlorine shock treatment through to pH balancing, there's a variety of pool treatment tasks to keep your pool at its best. Click here to read our handy pool chemical guide and learn how to keep your water at its best year after year.&nbsp;</p><p><a href="/pool-chemical-advice/"><button class="action primary">find out more</button></a></p><style class="mgz-style">.reeyvrn-s{text-align:center;}</style></div></div></div></div></div></div></div></div> </div>
<div class="column breakout">
<div class="highlight">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Above_Ground_Pools.webp" alt="Hot tub in use">
</div>
</div>
</div>
<div class="columns2">
<div class="column breakout dark">
<div class="highlight">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/Summer.webp" alt="Hot tub in use">
</div>
</div>
<div class="column">
<div class="magezon-builder magezon-builder-preload"><div class="e8v08bb mgz-element mgz-element-row full_width_row"><div class="mgz-element-inner e8v08bb-s"><div class="inner-content mgz-container"><div class="k6lhses mgz-element mgz-element-column mgz-col-xs-12"><div class="mgz-element-inner k6lhses-s"><div class="lxikv7j mgz-element mgz-child mgz-element-single_image mgz-image-hovers"><div class="mgz-element-inner lxikv7j-s"><div class="mgz-single-image-wrapper"><div class="mgz-single-image-inner "><img class="mgz-hover-main" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/mobile_banner_300x200.webp" alt="mobile_banner_300x200" title=""></div></div><style class="mgz-style">.lxikv7j-s{text-align:center;}.mgz-element.lxikv7j .image-content{width:100%;text-align:center;}.mgz-element.lxikv7j .image-title{font-size:16px;}</style></div></div><div class="cwl37qi mgz-element mgz-child mgz-element-text"><div class="mgz-element-inner cwl37qi-s"><p style="text-align: center;">Klarna helps you to spread the cost of your purchase and is a trusted and transparent service we have carefully selected.</p><p style="text-align: center;"><a href="/bestway-interest-free-finance"><button class="action primary">find out more</button></a></p><style class="mgz-style">.cwl37qi-s{text-align:center;}</style></div></div></div></div></div></div></div><div class="xlurp98 mgz-element mgz-element-row full_width_row"><div class="mgz-element-inner xlurp98-s"><div class="inner-content mgz-container"><div class="lclli9s mgz-element mgz-element-column mgz-col-xs-12 mgz-element-column-empty"><div class="mgz-element-inner lclli9s-s"></div></div></div></div></div></div> </div>
</div>
</div>
</div>
<div class="featured-six">
<div class="content-limit">
<h3>FEATURED CATEGORIES</h3>
<h2>Explore our featured categories</h2>
<div class="content-container">
<div class="row"> <div class="column">
<a href="/airbeds-furniture/inflatable-furniture.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/20-1069060GBX20_1069061USX20_1069060XXX20_1069060AUX20_1069061XXX20_WEB_LS002_0101_2x.webp" alt="featured category Image">
<button class="action primary"><span>Inflatable Furniture</span></button>
</a>
</div>
<div class="column">
<a href="/pools/above-ground-pools.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/16_Above_Ground_Pools_56438-2_2x_1.webp" alt="featured category Image">
<button class="action primary"><span>Above Ground Pools</span></button>
</a>
</div>
<div class="column">
<a href="/boats-sups/hydro-force-boats-rafts.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/hydro_force_boats_cat_1.webp" alt="featured category Image">
<button class="action primary"><span>Hydro-Force Boats &amp; Rafts</span></button>
</a>
</div>
</div> <div class="row"> <div class="column">
<a href="/inflatable-hot-tubs-174.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/DSC06732_2x.webp" alt="featured category Image">
<button class="action primary"><span>Inflatable Hot Tubs</span></button>
</a>
</div>
<div class="column">
<a href="/pool-garden-beach-toys/garden-toys.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/19_Summer_53301_2x.webp" alt="featured category Image">
<button class="action primary"><span>Garden Toys</span></button>
</a>
</div>
<div class="column">
<a href="/pool-and-spa-spare-replacement-parts.html">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/spare_parts_cat.webp" alt="featured category Image">
<button class="action primary"><span>Spare Parts</span></button>
</a>
</div>
</div> </div>
</div>
</div>
<div class="trust-reviews-wrapper">
<div class="content-limit">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/trustpilot-vector-logo.svg" alt="Trustpilot Logo">
<h2>Our Reviews</h2>
<div class="slick-apply">
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Easy to order goo...</h4>
<p>Easy to order good price</p>
<p class="author">Graham Anthony Flint</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Fast delivery and...</h4>
<p>Fast delivery and good value for money</p>
<p class="author">Maria Sheen</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Great price and f...</h4>
<p>Great price and first class delivery service.</p>
<p class="author">Carl </p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Really great prod...</h4>
<p>Really great product,and well priced in the market place. Also really good quality.Thanks.</p>
<p class="author">R J Stanley</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Excellent service...</h4>
<p>Excellent service and quality.</p>
<p class="author">Susan Cragg</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:80%"></div>
</div>
<h4>Everything went s...</h4>
<p>Everything went smooth, delivery was on time when it said it would be.</p>
<p class="author">Miss Ward</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Really pleased wi...</h4>
<p>Great service,came early than I expected</p>
<p class="author">Stewart Brown</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Overall happy wit...</h4>
<p>Overall happy with the product.. it does need twice in a night 30 sec air top up with 2...</p>
<p class="author">Karamvir Sokhey</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Fantastic gift fr...</h4>
<p>Fantastic gift from our friends, ready for our pool party later in the summer. Great qu...</p>
<p class="author">Mark Cox</p>
</div>
</div>
<div class="slide">
<div class="slick-item">
<div class="stars">
<div class="stars-background"></div>
<div class="stars-front" style="width:100%"></div>
</div>
<h4>Recommended</h4>
<p>Got it as a temporary solution. Best decision, easy to set up and inflate and the built...</p>
<p class="author">Ahmed Badawy</p>
</div>
</div>
</div>
<div class="more-reviews"><a href="https://uk.trustpilot.com/review/www.bestwaystore.co.uk">see more reviews</a></div>
</div>
</div>
<div class="instagram-wrapper">
<h2><a href="https://www.instagram.com/bestway_uk/">@bestway_uk</a></h2>
<h3>Follow us on Instagram for the latest news and products</h3> <div id="instafeed">
</div>
</div>

</div></div></div></main><footer class="page-footer"><div class="footer content">
<div id="newsletter-footer" class="newsletter-wrapper footer">
<div class="top-image">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/newsletter-image.jpg" alt="Happy people">
</div>
<h2>Stay up to date</h2>
<p>Sign up to our newsletter and join our community for the latest news, tips and advice.</p>
<div class="block newsletter">
<div class="title"><strong>Newsletter</strong></div>
<div class="content">
<form action="/wblklaviyosignup/index/signup/" method="post">
<input name="form_key" type="hidden" value="6kj7yiM8GD7js6E2"> <div class="block-content">
<div class="input-box">
<input name="firstname" placeholder="First Name" required="" type="text">
</div>
<div class="input-box mc-email">
<input name="email" placeholder="Email" required="" type="email">
</div>
<div class="actions">
<input type="submit" value="Sign Up" class="action subscribe primary">
</div>
</div>
</form>
<p>By submitting your email, you are giving your consent to receive email updates on products, special offers and exclusive discounts from Bestwaystore.co.uk. Please refer to our <a href="/privacy-policy">privacy policy</a> to see how we look after your data.</p>
</div>
</div>
</div></div><div class="footer-wrapper"><div class="footer-wrapper-limit"><div class="footer-logo">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/logo.svg" alt="Bestway Store Logo">
</div>
<div class="social-links">
<a href="https://www.facebook.com/BestwayUK/" target="_blank">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/facebook-f.svg" alt="Facebook Logo">
</a>
<a href="https://www.instagram.com/bestway_uk/" target="_blank">
<img src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/instagram.svg" alt="Facebook Logo">
</a>
</div>
<div class="footer-column">
<div class="title" data-role="collapsible">
<div data-role="trigger">
<h5 data-role="trigger">Quick Links</h5>
</div>
</div>
<ul class="footer links" data-role="content">
<li class="nav item"><a href="/airbeds-furniture.html">Airbeds &amp; Furniture</a></li>
<li><a href="/pool-accessories-and-chemicals.html">Pool Accessories &amp; Chemicals</a></li>
<li><a href="/boats-sups.html">Boats and SUPs</a></li>
<li class="nav item"><a href="/above-ground-pools-accessories/above-ground-pools.html">Above Ground Pools</a></li>
<li><a href="/inflatable-hot-tubs/inflatable-hot-tubs.html">Inflatable Hot Tub</a></li>
</ul>
</div>
<div class="footer-column">
<div class="title" data-role="collapsible">
<div data-role="trigger">
<h5>Useful Information</h5>
</div>
</div>
<ul class="footer links" data-role="content">
<li><a href="/about-us">About Us</a></li>
<li><a href="/interest-free-finance">Klarna FAQ</a></li>
<li><a href="/privacy-policy">Privacy Policy</a></li>
<li><a href="/cookie-policy">Cookie Policy</a></li>
<li><a href="/terms-conditions">Terms &amp; Conditions</a></li>
<li class="nav item"><a href="/" data-amcookie-js="footer-link" class="-show">Cookie Settings</a></li>
</ul>
</div>
<div class="footer-column">
<div class="title" data-role="collapsible">
<div data-role="trigger">
<h5>Buyers Guide</h5>
</div>
</div>
<ul class="footer links" data-role="content">
<li class="nav item"><a href="/pool-chemical-advice" target="_blank" rel="noopener">Chemical Guides</a></li>
</ul>
</div>
<div class="footer-column">
<div class="title" data-role="collapsible">
<div data-role="trigger">
<h5>Support</h5>
</div>
</div>
<ul class="footer links" data-role="content">
<li><a href="/support-category/product-support">Troubleshooting</a></li>
<li><a href="/warranty-list">Warranties</a></li>
<li><a href="/manuals">Product Manuals</a></li>
<li><a href="/delivery-and-returns" data-action="advanced-search">Delivery &amp; Returns</a></li>
<li><a href="/contact">Contact Us</a></li>
</ul>
</div>
<a id="smoothup" style="display: block;" href="/#top"></a>
</div></div></footer>
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