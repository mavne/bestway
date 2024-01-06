<?php

defined('DIR') OR exit;

$c['cmsversion'] = '5.23';
// SITE CONFIGURATION
$c['site.url'] = 'https://bestway.404.ge/';
$c['site.base'] = '';
$c["sitefolder"] = '_website/';

$c['admin.slug'] = 'badmin';
$c['admin.hash'] = '6cae4ffe0904618ddef9cd5e14f2b1f52c363cc1';
//$c['admin.hash'] = '0e5c1f242ae495fd9711917200573e7c8cd4edb716cc4d4ae14053efc30f5b81b6cf5cc39a7f401814f4affee3c70e852a6298cb61cbecfefbed2378dc013eef';

$c['folders.upload'] = DIR . 'files/';
$c['folders.backup'] = 'backup/';
$c['folders.plugins'] = '_plugins/';
$c['folders.players'] = '_players/';

$c['database.hostname'] = 'localhost';
$c['database.charset'] = 'UTF8';
$c['database.username'] = 'four04';
$c['database.password'] = 'RPqvfb1XpeziBcF';
$c['database.name'] = 'bestway';

$c['languages.all'] = array('ge', 'en', 'ru');
$c['languages.default'] = $c['languages.all'][0];
$c['languages.admin'] = 'ru';
$c['languages.full'] = array(
    'ge' => 'Georgian',
    'en' => 'English',
    'ru' => 'Russian'
);
// SITE CONFIGURATION
$c['date.timezone'] = 'Asia/Tbilisi';
$c['date.format'] = 'Y-m-d H:i:s';

$c['output.charset'] = 'UTF-8';
$c['output.buffering'] = 'ob_gzhandler';

$c['section.types'] = array(
    999 => 'error', 0 => 'text', 	1 => 'text', 		2 => 'home',
    3 => 'about', 	4 => 'search', 	5 => 'sitemap', 	6 => 'feedback',
    7 => 'wizard', 	8 => 'news', 	9 => 'articles', 	10 => 'events',
    11 => 'lists', 	12 => 'photo', 	13 => 'video', 		14 => 'audio',
	15 => 'poll', 	16 => 'catalog',17 => 'faq'
);

$c['section.types.lists'] = array(
    'news',
    'articles',
    'article',
    'events',
    'event',
    'lists',
    'list'
);
$c['section.types.admin_lists'] = $c['section.types.lists'] + array('sitemap');

$c['valid.methods'] = array(
	1=>'files', 		2=>'poll', 				3=>'polls', 		4=>'catalog', 		5=>'catalogs',
	6=>'pages', 		7=>'sitemap',			8=>'news',			9=>'videogallery',	10=>'imagegallery',
	11=>'audiogallery',	12=>'bannergroups',		13=>'banners',		14=>'gallerylist',	15=>'settings',
	16=>'langdata',		17=>'users',			18=>'siteusers',	19=>'userrights',	20=>'filemanager',
	21=>'backup',		22=>'textconverter',	23=>'log'
);

$c['section.home'] = 1;

$c['section.default'] = $c['section.home'];
$c['section.undeletable'] = array(
    $c['section.default']
);

$c['pager.per_page'] = 10;
$c['users.per_page'] = 10;
//-------------- PAGER PARAMETERS FOR WEBSITE
$c['text_news.per_page'] = 12;
$c['text_articles.per_page'] = 12;
$c['text_events.per_page'] = 12;
$c['text_catalog.per_page'] = 12;
$c['text_photo.per_page'] = 12;
$c['text.page_count'] = 10;

$c['news.per_page'] = 10;
$c['news.page_count'] = 15;

$c['articles.per_page'] = 30;
$c['articles.page_count'] = 10;

$c['events.per_page'] = 10;
$c['events.page_count'] = 10;

$c['list.per_page'] = 50;
$c['list.page_count'] = 10;

$c['catalog.per_page'] = 50;
$c['catalog.page_count'] = 15;

$c['photos.per_page'] = 50;
$c['photos.page_count'] = 15;
//-------------- PAGER PARAMETERS FOR WEBSITE
$c['thumbnail.exts'] = array('jpg', 'JPG', 'jpeg', 'png', 'PNG', 'gif', 'bmp', 'mp3');

return $c;
