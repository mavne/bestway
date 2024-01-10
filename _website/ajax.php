<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

$out = array(
    "Error" => array(
        "Code"=>1, 
        "Text"=>"მოხდა შეცდომა !",
        "Details"=>"!"
    )
);

$type = (isset($_POST['type']) && !empty($_POST['type'])) ? $_POST['type'] : "";

switch($type){
    case "changeImagePosition":
        if(
            (!isset($_POST["images"]) || $_POST["images"]=="" || !is_array($_POST["images"])) ||
            !isset($_GET['imgid'])
        ){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>"Error 1",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else{
            $images = $_POST["images"];
            $imgid = (int)$_GET["imgid"];

            db_query('UPDATE `pages` SET `image_positions`="'.implode(",", $images).'" WHERE `id`="'.$imgid.'"');

            $out = array(
                "Error" => array(
                    "Code"=>0, 
                    "Text"=>"",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>1, 
                    "Text"=>"",
                    "Details"=>""
                )
            );
        }
        break;
    case "changePosition":
        if(
            (!isset($_POST["product"]) || $_POST["product"]=="" || !is_array($_POST["product"]))
        ){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>"Error 1",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else{
            $product_list = $_POST["product"];
            $menuid = @$product_list[0]['menuid'];
            $perpage = @$product_list[0]['perpage'];
            $positionStartAt = @(int)$product_list[0]['start'] + 1;

            foreach($product_list as $item){
                $id = $item['id'];

                db_query('UPDATE `pages` SET `position`="'.$positionStartAt.'" WHERE `id`="'.$id.'"');
                $positionStartAt++;
            }

            $out = array(
                "Error" => array(
                    "Code"=>0, 
                    "Text"=>"",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>1, 
                    "Text"=>"",
                    "Details"=>""
                )
            );
        }
        break;
    case "loadlist":
        if(
            (!isset($_POST["menutype"]) || $_POST["menutype"]=="") || 
            (!isset($_POST["from"]) || $_POST["from"]=="") || 
            (!isset($_POST["to"]) || $_POST["to"]=="") 
        ){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>"Error 1",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else{
            $menutype = (isset($_POST['menutype']) && !empty($_POST['menutype'])) ? (int)$_POST['menutype'] : 0;
            $from = (isset($_POST['from']) && !empty($_POST['from'])) ? (int)$_POST['from'] : 0;
            $to = (isset($_POST['to']) && !empty($_POST['to'])) ? (int)$_POST['to'] : 0;

            $limit = sprintf(' LIMIT %d, %d', $from, $to);

            $sql = "SELECT * FROM `pages` WHERE `language` = 'ge' AND `deleted` = '0' AND `menuid`='".$menutype."' ORDER BY `postdate` ASC".$limit;
            $articles = db_fetch_all($sql);

            $html = '';
            if($articles){
                foreach($articles as $a):
                    $html .= '<li class="item product product-item">';
                    $html .= '<div class="product-item-info" data-container="product-grid">';
                    $html .= '<div class="flag-wrapper-listing"></div>';
                    $html .= sprintf(
                        '<a href="%s" class="product photo product-item-photo" tabindex="-1">',
                        href($a['id'])
                    );
                    $html .= '<span class="product-image-container product-image-container-6012">';
                    $html .= '<span class="product-image-wrapper">';

                    $image_positions = ($a['image_positions']!="") ? explode(",", $a['image_positions']) : array('image1');

                    $html .= sprintf(
                        '<img class="product-image-photo" src="%s" loading="lazy" width="440" height="260" alt="%s" />',
                        $a[$image_positions[0]],
                        htmlentities($a['title'])
                    );
                    $html .= '</span>';
                    $html .= '</span>';
                    $html .= '</a>';
                    $html .= '<div class="product details product-item-details">';
                    $html .= '<strong class="product name product-item-name">';
                    $html .= sprintf(
                        '<a class="product-item-link g-menuitem" href="%s">%s</a>',
                        href($a['id']),
                        $a['title']
                    );
                    $html .= '</strong>';

                    $html .= '<div class="details-container">';
                    $html .= '<div class="trust-reviews" data-prod_id="6012"></div>';
                    $html .= '<div class="price-box price-final_price">';
                    $html .= '<span class="price-container';
                    $html .= '<span id="product-price-6012" class="price-wrapper">';

                    if($a['discount']!=""){
                        $html .= sprintf('<span class="price g-menuitem" style="text-decoration: line-through; padding-right:10px;">%s ₾</span>', $a['price']);
                        $html .= sprintf('<span class="price g-menuitem">%s ₾</span>', $a['discount']);
                    }else{
                        $html .= sprintf('<span class="price g-menuitem">%s ₾</span>', $a['price']);    
                    }
                    
                    $html .= '</span>';
                    $html .= '</span>';
                    $html .= '</div>';

                    $html .= '<div class="view-details-wrapper">';
                    $html .= sprintf(
                        '<a class="product-item-link details g-menuitem-sub" href="%s">',
                        href($a['id'])
                    );
                    $html .= l('read.more');
                    $html .= '</a>';
                    $html .= '</div>';

                    $html .= '<div class="product-item-inner">';
                    $html .= '<div class="product actions product-item-actions">';
                    $html .= '<div class="actions-primary">';

                    if($a['visibility']==1){
                        $html .= sprintf(
                            '<div class="stock available g-menuitem-sub"><span>%s</span></div>',
                            l('instack')
                        );
                        $html .= '<form action="" method="post" style="width: unset;">';
                        $html .= sprintf('<input type="hidden" name="product" value="%d">', $a['id']);
                        $html .= '<button type="submit" title="Add" class="action tocart primary">';
                        $html .= sprintf(
                            '<span class="g-menuitem-sub">%s</span>',
                            l('add.cart')
                        );
                        $html .= '</button>';
                        $html .= '</form>';
                    }else{
                        $html .= sprintf(
                            '<div class="stock unavailable g-menuitem-sub"><span>%s</span></div>',
                            l('outonstack')
                        );
                    }
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</li>';
                endforeach;
            }

            $out = array(
                "Error" => array(
                    "Code"=>0, 
                    "Text"=>"",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>1, 
                    "Text"=>$html,
                    "Details"=>""
                )
            );
        }
        break;
}   

echo json_encode($out);