<style type="text/css">
    .g-languages{
        margin: 0;
        padding: 0;
        list-style-type: none;
        display: flex;
        height: 100%;
        align-items: center;
        margin-left: 20px;
    }

    .g-languages li{
        margin: 0 10px;
        padding: 0;
    }

    .g-languages li a{
        display: block;
        text-align: center;
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        font-size: 16px;
        font-family: 'Roboto _GEO Mt' !important;
    }

    .g-languages li a.active,
    .g-languages li a:hover{
        color: red;
    }

    .g-catImageWidth{
        width: 100%;
        height: 300px;
        object-fit: contain;
        object-position: center;
    }

    .g-column-hover-effect:hover{
        opacity: 0.5;
    }
</style>
<header class="page-header">
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
<li><a href="/customer/account/create/" id="idAeg6KyUW">Create an Account</a></li></ul></div></div><div class="header content">

    <div class="block block-search">
        <div class="block block-title"><strong>Search</strong></div>
        <div class="block block-content">
            <form class="form minisearch" id="search_mini_form" action="" method="get">
                <div class="field search">
                    <label class="label" for="search" data-role="minisearch-label">
                        <span>Search</span>
                    </label>
                    
                    <div class="control">
                        <div id="search_autocomplete" class="search-autocomplete -left-position -bottom-position" tabindex="-1"></div>
                        
                        <div class="nested">
                            <a class="action advanced" href="/catalogsearch/advanced/" data-action="advanced-search">
                                Advanced Search
                            </a>
                        </div>

                        <div id="amasty-xsearch-preload" class="amasty-xsearch-preload"></div>
                        <div class="amsearch-close" title="Clear Field"></div>
                        <button class="amsearch-loupe" title="Search" type="submit"></button>

                        <div class="amsearch-wrapper-input -left-position -bottom-position">
                            <input id="search" type="text" name="q" value="" placeholder="Search for products, parts and more" class="input-text" maxlength="128">
                            <div class="amasty-xsearch-loader amasty-xsearch-hide"></div>
                        </div>
                    </div>
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

    <div class="minicart-wrapper empty">
        <a class="action showcart" href="">
            <span class="text">My Cart</span>
            <span class="counter qty">
                <span class="counter-number">0</span>
                <span class="counter-label"></span>
            </span>
            <span class="icon empty"></span>
        </a>

        <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" style="display: none;">
            <div class="block block-minicart ui-dialog-content ui-widget-content" id="ui-id-1" style="display: block;">
                <div id="minicart-content-wrapper">
                    <div class="block-title">
                        <strong>
                            <span class="text">My Cart</span>
                            <span class="qty empty" title="Items in Cart"></span>
                        </strong>
                    </div>
                    
                    <div class="block-content">
                        <strong class="subtitle empty">You have no items in your shopping basket.</strong>
                        <div id="minicart-widgets" class="minicart-widgets"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="header links">
        <li>
            <a href="" id="idrsh7YgW7"></a>
        </li>
    </ul>

    <ul class="g-languages">
        <li>
            <a href="<?=replace_language('ge')?>" class="<?=(l()=='ge') ? 'active' : ''?>">GE</a>
        </li>

        <li>
            <a href="<?=replace_language('en')?>" class="<?=(l()=='en') ? 'active' : ''?>">EN</a>
        </li>

        <li>
            <a href="<?=replace_language('ru')?>" class="<?=(l()=='ru') ? 'active' : ''?>">RU</a>
        </li>
    </ul>

    <div class="control"></div>
</div>

<script async="" type="application/javascript" src="./Bestway Store UK _ Leaders in Inflatables &amp; Above Ground Pools_files/klaviyo.js.download"></script>

</header>

<div class="sections nav-sections">
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