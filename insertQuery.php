<?php

if($_SERVER['REMOTE_ADDR']!="94.240.245.46"){ die(); }
$fetch = db_fetch_all("SELECT * FROM `olddb` WHERE `item_id`>100");

$output = array();

foreach($fetch as $f){
    $output[$f['item_id']][$f['item_language']] = $f;
}

foreach($output as $o):
    $geo = $o['ge'];
    $rus = $o['ru'];
    $eng = $o['ge'];

    $selectMax = db_fetch('SELECT MAX(`id`) AS maxid FROM `pages`');
    $maxId = (int)$selectMax['maxid'] + 1;

    $slug = utf82lat($geo['item_title']);

    $imageExplode = explode('|||', $geo['item_image_urls']);
    $image1 = (isset($imageExplode[0]) && $imageExplode[0]!="") ? trim($imageExplode[0]) : '';
    $image2 = (isset($imageExplode[1]) && $imageExplode[1]!="") ? trim($imageExplode[1]) : '';
    $image3 = (isset($imageExplode[2]) && $imageExplode[2]!="") ? trim($imageExplode[2]) : '';
    $image4 = (isset($imageExplode[3]) && $imageExplode[3]!="") ? trim($imageExplode[3]) : '';
    $image5 = (isset($imageExplode[4]) && $imageExplode[4]!="") ? trim($imageExplode[4]) : '';
    $image6 = (isset($imageExplode[5]) && $imageExplode[5]!="") ? trim($imageExplode[5]) : '';

    // $insert = db_query();
    $geoSql = "INSERT INTO `pages` SET
        `id`='".$maxId."',
        `masterid`='0',
        `olddb_id`='".$geo['item_id']."',
        `level`='1',
        `position`='".$maxId."',
        `language`='ge',
        `menuid`='".$geo['item_menu_id']."',
        `visibility`='1',
        `title`='".$geo['item_title']."',
        `menutitle`='".$geo['item_title']."',
        `menutype`='0',
        `slug`='".$slug."',
        `deleted`='0',
        `category`='0',
        `image1`='".$image1."',
        `image2`='".$image2."',
        `image3`='".$image3."',
        `image4`='".$image4."',
        `image5`='".$image5."',
        `image6`='".$image6."',
        `homepage`='0'
    ";

    $engSql = "INSERT INTO `pages` SET
        `id`='".$maxId."',
        `masterid`='0',
        `olddb_id`='".$eng['item_id']."',
        `level`='1',
        `position`='".$maxId."',
        `language`='en',
        `menuid`='".$eng['item_menu_id']."',
        `visibility`='1',
        `title`='".$eng['item_title']."',
        `menutitle`='".$eng['item_title']."',
        `menutype`='0',
        `slug`='".$slug."',
        `deleted`='0',
        `category`='0',
        `image1`='".$image1."',
        `image2`='".$image2."',
        `image3`='".$image3."',
        `image4`='".$image4."',
        `image5`='".$image5."',
        `image6`='".$image6."',
        `homepage`='0'
    "; 

    $rusSql = "INSERT INTO `pages` SET
        `id`='".$maxId."',
        `masterid`='0',
        `olddb_id`='".$rus['item_id']."',
        `level`='1',
        `position`='".$maxId."',
        `language`='ru',
        `menuid`='".$rus['item_menu_id']."',
        `visibility`='1',
        `title`='".$rus['item_title']."',
        `menutitle`='".$rus['item_title']."',
        `menutype`='0',
        `slug`='".$slug."',
        `deleted`='0',
        `category`='0',
        `image1`='".$image1."',
        `image2`='".$image2."',
        `image3`='".$image3."',
        `image4`='".$image4."',
        `image5`='".$image5."',
        `image6`='".$image6."',
        `homepage`='0'
    ";    

    db_query($geoSql);
    db_query($engSql);
    db_query($rusSql);
    
    echo $maxId." inserted<br>";
endforeach;


exit;