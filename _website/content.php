<?php defined('DIR') OR exit();
    if (empty($storage->product)) {
        $section = $storage->section;
    } else {
        $section = $storage->product;
    }
    $section['pid'] = $storage->product['id'];
    $section['id'] = $storage->section['id'];
    empty($section["meta_keys"]) AND $section["meta_keys"] = s('keywords');
    empty($section["meta_desc"]) AND $section["meta_desc"] = s('description');
?>
<?php
	$url="";
	$urlparts=array();
	foreach($_GET as $k=>$v) {
        if($k!='product')
		  $urlparts[]=$k."=".$v;
	}
	if(count($urlparts)>0)
		$url='?'.implode("&",$urlparts);
    $product=NULL;
    if(isset($_GET["product"])) 
        $product=$_GET["product"];

	$photo = "";
	$desc = "";
	$producttitle = "";
	$prod = 0;
	if(isset($_GET["product"])) {
		$prod = $_GET["product"];
		$cat = db_fetch("select * from catalogs where id = '".$_GET["product"]."' and language = '".l()."'");
		$photo = $cat["photo1"];
		$producttitle = $cat["title"];
		$desc = $cat["description"];
		if($desc=="") $desc = $producttitle;
	}

	if($photo==""){ 
		$photo = href().WEBSITE."/assets/img/logo.png";
	}
	$pageid = href($storage->section['id']).(($prod>0) ? "?product=".$_GET["product"]:"");

	$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
	$fullUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<base href="<?php echo href(); ?>" />
<title><?php echo strip_tags(s('sitetitle').' - '.$storage->section["title"]); ?></title>
<meta name="keywords" content="<?php echo s('keywords').', '.$storage->section["meta_keys"] ?>" />
<meta name="description" content="<?php echo s('description').', '.$storage->section["meta_desc"] ?>" />
<meta name="robots" content="index, follow" />
<meta property="og:title" content="<?php echo strip_tags($storage->section["title"]).' - '.s('sitetitle');?>" />
<?php
if(isset($storage->section['image_fb'])){
	?>	
	<meta property="og:image" content="<?php echo $storage->section['image_fb'];?>" />
	<?php
}else{
	?>	
	<meta property="og:image" content="<?php echo (!empty($storage->section["image1"])) ? $storage->section["image1"] : href().WEBSITE."/assets/img/share_".l().".jpg";?>" />
	<?php
}
?>
<meta property="og:description" content="<?php echo $storage->section["meta_desc"] ?>"/>
<meta property="og:url" content="<?php echo $fullUrl;?>" />
<meta property="og:site_name" content="<?php echo s('sitetitle'); ?>" />
<meta property="og:type" content="Website" />
<link rel="icon" type="image/x-icon" href="/media/favicon/stores/10/bestway-favicon.png" />
<link rel="shortcut icon" type="image/x-icon" href="/media/favicon/stores/10/bestway-favicon.png" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<?php echo html_decode($storage->content); ?>
