<?php
$host = 'localhost';
$dbname = 'bestway';
$username = 'four04';
$password = 'RPqvfb1XpeziBcF';

try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


function detectRussianLanguage($text) {
    return preg_match('/[А-Яа-яЁё]/u', $text);
}

$xmlString = file_get_contents("https://www.bestway.ge/sitemap.xml");
$xml = new SimpleXMLElement($xmlString);
$xml->registerXPathNamespace('ns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
$xml->registerXPathNamespace('image', 'http://www.google.com/schemas/sitemap-image/1.1');
$urls = $xml->xpath('//ns:url');

$cats = array();

foreach ($urls as $url) {
    // Get the URL
    $loc = (string) $url->loc;

    preg_match('/\b\d+\b/', $loc, $matches);
    $lastId = $matches[0];
    

    $title = str_replace(array($lastId, "-", "https://www.bestway.ge/"), array("", " ", ""), $loc);
    $expl = explode("/", $title);

    
    $item_id = $lastId;
    $item_title = end($expl);
    $item_category = $title;
    $item_url = $loc;


    // echo 'ID: ' . $lastId . " Inserted<br>";
    // echo "Title: ".end($expl)."<br>";
    // echo "Categories: ". $title."<br>";
    // echo 'URL: ' . $loc . "<br>";

   
    $images = $url->xpath('.//image:loc');
    $titles = $url->xpath('.//image:title');

    $imgUrls = "";
    foreach ($images as $index => $image) {
        $imageLoc = (string) $image;
        $imageTitle = (string) $titles[$index];

        // echo 'Image URL: ' . $imageLoc . "<br>";
        // echo 'Image Title: ' . $imageTitle . "<br>";

        $imgUrls .= $imageLoc."|||";
    }

    $item_image_urls = $imgUrls;

    if(detectRussianLanguage($expl[0])) {
        $item_language = "ru";
    }else{
        $item_language = "ge";
    }

    $item_menu_id = "";
    if($expl[0]=="გასაბერი საწოლები" || $expl[0]=="надувные матрасы и кровати"){
        $item_menu_id = "2";
    }else if($expl[0]=="გასაბერი სავარძლები" || $expl[0]=="надувные кресла"){
        $item_menu_id = "3";
    }else if($expl[0]=="საბავშვო გასაბერი აუზები" || $expl[0]=="детские надувные бассейны"){
        $item_menu_id = "4";
    }else if($expl[0]=="გასაბერი აუზები" || $expl[0]=="надувные бассейны"){
        $item_menu_id = "5";
    }else if($expl[0]=="კარკასული აუზები" || $expl[0]=="каркасные бассейны"){
        $item_menu_id = "6";
    }else if($expl[0]=="აუზის აქსესუარები"  || $expl[0]=="аксессуары для бассейна"){
        $item_menu_id = "7";
    }else if($expl[0]=="SPA აუზები" || $expl[0]=="SPA бассейны"){
        $item_menu_id = "8";
    }else if($expl[0]=="3D-აუზები" || $expl[0]=="3D-бассейны"){
        $item_menu_id = "9";
    }else if($expl[0]=="საცურაო ლეიბები" || $expl[0]=="пляжные матрасы"){
        $item_menu_id = "11";
    }else if($expl[0]=="საცურაო კამერები" || $expl[0]=="круги для плавания"){
        $item_menu_id = "12";
    }else if($expl[0]=="გასაბერი ცხოველები" || $expl[0]=="надувные зверюшки"){
        $item_menu_id = "13";
    }else if($expl[0]=="საცურაო ჟილეტები და სამკლაურები" || $expl[0]=="жилетки и нарукавники"){
        $item_menu_id = "14";
    }else if($expl[0]=="წყლის სათვალეები" || $expl[0]=="очки для плавания"){
        $item_menu_id = "15";
    }else if($expl[0]=="დაივინგი" || $expl[0]=="дайвинг"){
        $item_menu_id = "16";
    }else if($expl[0]=="ბურთები" || $expl[0]=="надувные мячи"){
        $item_menu_id = "17";
    }else if($expl[0]=="გასაბერი ნავები" || $expl[0]=="Надувные лодки"){
        $item_menu_id = "18";
    }else if($expl[0]=="კარვები" || $expl[0]=="палатки"){
        $item_menu_id = "19";
    }else if($expl[0]=="საძილე ტომრები" || $expl[0]=="спальные мешки"){
        $item_menu_id = "20";
    }else if($expl[0]=="სათამაშოები" || $expl[0]=="Игрушки"){
        $item_menu_id = "21";
    }else if($expl[0]=="ტუმბოები" || $expl[0]=="Насосы"){
        $item_menu_id = "22";
    }else if($expl[0]=="სხვადასხვა" || $expl[0]=="Другие"){
        $item_menu_id = "23";
    }


    // try {
    //     $stmt = $pdo->prepare("INSERT INTO olddb (item_id, item_title, item_category, item_url, item_image_urls, item_language, item_menu_id) VALUES (?, ?, ?, ?, ?, ?, ?)");

    //     $stmt->bindParam(1, $item_id);
    //     $stmt->bindParam(2, $item_title);
    //     $stmt->bindParam(3, $item_category);
    //     $stmt->bindParam(4, $item_url);
    //     $stmt->bindParam(5, $item_image_urls);
    //     $stmt->bindParam(6, $item_language);
    //     $stmt->bindParam(7, $item_menu_id);
    //     $stmt->execute();

    //     echo 'ID: ' . $lastId . " Inserted<br>";
    // } catch (PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
}
?>
