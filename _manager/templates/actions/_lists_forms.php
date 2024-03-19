<?php defined('DIR') OR exit;
    $parent_slug = '/';
    if ($route[1] == 'edit') {
        if ($edit["masterid"]!=0){
            $parent_slug .= db_retrieve('slug', c("table.pages"), 'id', $edit["masterid"], 'and language="'.l().'"');
        } elseif ($menuid!=0) {
            $parent_slug = db_retrieve('slug', c("table.pages"), 'menutype', $menuid);
            $parent_slug = $parent_slug ? '/'.$parent_slug : '';
        } else {
            $parent_slug = '';
        }
        $level = $edit["level"];
    } else {
        if (get('id',0)!=0) {
            $sql = db_fetch("SELECT slug, level from ".c("table.pages")." where id={$_GET['id']}");
            $parent_slug .= $sql["slug"];
            $level = $sql["level"] + 1;
            $params['id'] = $_GET["id"];
        } elseif ($menuid!=0) {
            $parent_slug = db_retrieve('slug', c("table.pages"), 'menutype', $menuid);
            $parent_slug = $parent_slug ? '/'.$parent_slug : '';
            $level = 1;
        } else {
            $parent_slug = '';
            $level = 1;
        }
    }
?>
<style type="text/css">
    .g-popup{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    .g-cover{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .g-content{
        margin: 50px auto;
        padding: 0 20px 20px 20px;
        width: 450px;
        background-color: white;
        position: relative;
        z-index: 2;
        max-height: 600px;
        overflow: auto;
    }

    .g-content .g-close{
        margin: 0;
        padding: 0;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 22px;
        color: black;
        position: absolute;
        top: 0px;
        right: 0px;
        text-align: center;
        text-decoration: none;
    }

    .g-content h2{
        margin: 0;
        padding: 0;
        font-size: 18px;
        text-align: left;
        font-weight: bold;
        color: black;
        line-height: 50px;
        height: 50px;
        border-bottom: 1px solid #f2f2f2;
    }

    .g-content ul{
        margin: 20px 0 0 0;
        padding: 0;
        list-style-type: none;
    }

    .g-content ul li{
        margin: 0;
        padding: 0;
        width: 100%;
        display: block;
        min-height: 30px;
        margin-bottom: 10px;
    }

    .g-content ul li a{
        margin: 0;
        padding: 0;
        display: block;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        color: black;
        position: relative;
    }

    .g-content ul li label{
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        color: black;
        position: relative;
        font-weight: bold;
    }

    .g-content ul li label span{
        margin: 0;
        padding: 0;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        color: black;
        margin-right: 10px;
    }

    .g-content ul li label input{
        margin: 0;
        padding: 0;
        display: inline-block;
    }

    .g-content ul li a svg{
        margin: 0;
        padding: 0;
        width: 15px ;
        height: 15px;
        margin-right: 5px;
        margin-top: 9px;
        float: left;
        transform: rotate(180deg);
    }

    .g-content ul li a[data-open="true"] svg{
        transform: rotate(0deg);
    }

    .g-content ul li .sub{
        margin: 0;
        padding: 10px 15px;
        background-color: #ccc;
        display: none;
    }
</style>

<div class="g-popup" style="display:none;">
    <div class="g-cover"></div>
    <div class="g-content">
        <a href="javascript:void(0)" class="g-close">x</a>
        <h2>Choose category</h2>
        <?php
        $g_select = db_fetch_all('SELECT `id`, `title` FROM `pages` WHERE `masterid`=0 AND `menuid`=1 AND `deleted`=0 AND `id`!=1 AND `level`=1 AND `language`="'.l().'"');
        $in_carousel_array = ($route[1]=='edit') ? explode(",", $edit['in_carousel']) : array();
        ?>
        <ul>
            <?php
            foreach($g_select as $it):
                $sub = db_fetch_all('SELECT `id`, `title` FROM `pages` WHERE `masterid`="'.$it['id'].'" AND `menuid`=1 AND `deleted`=0 AND `level`=2 AND `language`="'.l().'"');
            ?>
            <li>
                <?php
                if(!isset($sub[0]['id'])){
                ?>
                <label for="g-i<?=$it['id']?>">
                    <span><?=$it['title']?></span>
                    <input type="checkbox" name="g-i<?=$it['id']?>" class="g-i<?=$it['id']?>" id="g-i<?=$it['id']?>" value="<?=$it['id']?>"<?=(in_array($it['id'], $in_carousel_array) ? ' checked="checked"' : '')?>>
                </label>
                <?php
                }else{
                    $count_car = 0;
                    foreach($sub as $s): 
                        if(in_array($s['id'], $in_carousel_array)){
                            $count_car++;
                        }
                    endforeach;
                ?>
                <a href="javascript:void(0)" class="g-parent" data-id="<?=$it['id']?>" data-open="false">
                    <strong><?=$it['title']?> (<span id="amount<?=$it['id']?>"><?=$count_car?></span>)</strong><svg enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="backbord"><rect fill="none" height="32" width="32"/></g><g id="arrow_x5F_up"><polygon points="30,22 16.001,8 2.001,22  "/></g></svg>
                </a>
                <ul class="sub" id="sub<?=$it['id']?>">
                    <li>
                        <?php
                        foreach($sub as $s):
                        ?>
                        <label for="g-i<?=$s['id']?>">
                            <span><?=$s['title']?></span>
                            <input type="checkbox" name="g-i<?=$s['id']?>" class="g-i<?=$s['id']?>" id="g-i<?=$s['id']?>" value="<?=$s['id']?>"<?=(in_array($s['id'], $in_carousel_array) ? ' checked="checked"' : '')?>>
                        </label>
                        <?php
                        endforeach;
                        ?>
                    </li>
                </ul>
                <?php
                }
                ?>
                
            </li>
            <?php
            endforeach;
            ?>
        </ul>

        <button type="button" class="g-save-carousel">Save</button>
    </div>
</div>


    <div id="title" class="fix">
        <div class="icon"><img src="_manager/img/edit.png" width="16" height="16" alt="" /></div>
        <div class="name"><?php echo $pagetitle . ': ' . (($route[1] == 'edit') ? $edit["title"] : a('add')); ?></div>
    </div>

    <div id="box">
        <div id="part">
            <div id="top" class="fix">
                <a href="javascript:v_general();" id="b1" class="selbutton br"><?php echo a("general");?></a>
                <a href="javascript:v_content();" id="b2" class="button br"><?php echo a("content");?></a>

<?php if($route[1]=='edit'):
	if(in_array($edit["category"], array(8,9,10,11,12,13,14,15,16,17))):
		switch($edit["category"]) {
			case 8:  $menucat = "news"; $btitle = a("bt.news"); break;
			case 9:  $menucat = "articles"; $btitle = a("bt.articles"); break;
			case 10: $menucat = "events"; $btitle = a("bt.events"); break;
			case 11: $menucat = "customlist"; $btitle = a("bt.list"); break;
			case 12: $menucat = "imagegallery"; $btitle = a("bt.imagegallery"); break;
			case 13: $menucat = "videogallery"; $btitle = a("bt.videogallery"); break;
			case 14: $menucat = "audiogallery"; $btitle = a("bt.audiogallery"); break;
			case 15: $menucat = "poll"; $btitle = a("bt.polls"); break;
			case 16: $menucat = "catalog"; $btitle = a("bt.catalogs"); break;
			case 17: $menucat = "faq"; $btitle = a("bt.faq"); break;
		}
        if ($route[2] != 3) {
?>
                <a href="<?php echo ahref(array($menucat, 'show', $edit["menutype"])) ?>" id="b3" class="button br"><?php echo $btitle;?></a>
                <a href="javascript:save('files');" id="b3" class="button br"><?php echo a("files");?></a>
<?php
        };
	else:
        if ($_SESSION['auth']['class']==0):
?>
        <a href="javascript:save('files');" id="b3" class="button br"><?php echo a("files");?></a>
<?php
        endif;
    endif;
    endif;
?>
            </div>
			<form id="dataform" name="dataform" method="post" action="<?php echo ahref($route, $params);?>">
            <div id="news">
                <div id="t1">
                    <input type="hidden" name="perform" value="1" />
                    <input type="hidden" name="menuid" value="<?php echo $menuid ?>" />
                    <input type="hidden" name="level" value="<?php echo $level ?>" />
                    <input type="hidden" name="tabstop" id="tabstop" value="general" />
                    <div class="list2 fix">
                        <div class="icon"><img src="_manager/img/minus.png" width="16" height="16" alt="" /></div>
                        <div class="title"><?php echo a("general");?>:</div>
                    </div>

                    <div class="list fix">
                        <div class="name"><?php echo a("title");?>: <span class="star">*</span></div>
                        <input type="text" id="pagetitle" name="title" value="<?php echo ($route[1]=='edit') ? $edit["title"] : '' ?>" class="inp"/>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("menutitle");?>: <span class="star">*</span></div>
                        <input type="text" id="menutitle" name="menutitle" value="<?php echo ($route[1]=='edit') ? $edit["menutitle"] : '' ?>" class="inp"/>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("price");?>:</div>
                        <input type="text" id="price" name="price" value="<?php echo ($route[1]=='edit') ? $edit["price"] : '' ?>" class="inp"/>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("discount");?>:</div>
                        <input type="text" id="discount" name="discount" value="<?php echo ($route[1]=='edit') ? $edit["discount"] : '' ?>" class="inp"/>
                    </div>

                    <div class="list2 fix">
                        <?php
                        if(isset($edit["countdown_time"]) && $edit["countdown_time"]==""){ 
                            $edit["countdown_time"] = time(); 
                        }
                        ?>
                        <div class="name"><?php echo a("countdown_time");?>:</div>
                        <input type="text" name="countdown_time" value="<?php echo ($route[1]=='edit') ? date('Y-m-d', strtotime($edit["countdown_time"])) : date('Y-m-d'); ?>" id="countdown_time" class="inp-small" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-module="today,gotoDate,clear,icon" />

                        <div class="name"><?php echo a("time");?>: <span class="star">*</span></div>
                        <input type="text" name="countdown_time_time" value="<?php echo ($route[1]=='edit') ? date('H:i:s', strtotime($edit["countdown_time"])) : date('H:i:s'); ?>" id="countdown_time_time" class="inp-small" />
                    </div>

                    <div class="list fix">
                        <div class="name"><?php echo a("friendlyURL");?>: <span class="star">*</span></div>
                        <?php echo c('site.url') . l() . $parent_slug.'/'; ?>
                        <input type="text" name="slug" value="<?php echo ($route[1]=='edit') ? $edit["slug"] : '' ?>" class="inp-ssmall"/>
                        <?php echo ($route[1] == 'edit') ? '/'.$edit["id"] : '';?>
                    </div>
<?php
	isset($edit['category']) OR $edit['category'] = 1;
	$catchange_disabled = '';
	if(in_array($edit['category'], array('8','9','10','11','12','13','14','15','16',17))) $catchange_disabled = 'disabled';
	if($route[0] != 'sitemap') $catchange_disabled = 'disabled';
?>
                    <div class="list2 fix">
                        <div class="name"><?php echo a("pageclass");?>: <span class="star">*</span></div>
<script type="text/javascript">
	$(function(){
		$('#category_change').change(function(){
            var v = $(this).val();
            if (v=='7') {
                $('#category_7').show();
            } else {
                $('#category_7').hide();
            }
        });
    });
</script>
                        <select name="category" id="category_change" class="inp-small" style="width:210px;" <?php  echo $catchange_disabled; ?> >
                            <?php if ($route[1]=='edit' && $route[2]==1): ?>
                            <option value='2'  <?php if ($edit['category'] == '2')  { echo 'selected'; } ?>><?php echo a("page.home");?></option>
                            <?php else: ?>
                            <option value='1'  <?php if ($edit['category'] == '1')  { echo 'selected'; } ?>><?php echo a("page.text");?></option>
                            <option value='4'  <?php if ($edit['category'] == '4')  { echo 'selected'; } ?>><?php echo a("page.search");?></option>
                            <option value='6'  <?php if ($edit['category'] == '6')  { echo 'selected'; } ?>><?php echo a("page.feedback");?></option>
                            <option value='8'  <?php if ($edit['category'] == '8')  { echo 'selected'; } ?>><?php echo a("page.news");?></option>
                            <option value='9'  <?php if ($edit['category'] == '9')  { echo 'selected'; } ?>><?php echo a("page.articles");?></option>
                            <option value='16' <?php if ($edit['category'] == '16') { echo 'selected'; } ?>><?php echo a("page.catalog");?></option>
                            <option value='11' <?php if ($edit['category'] == '11') { echo 'selected'; } ?>><?php echo a("page.list");?></option>
                            <option value='12' <?php if ($edit['category'] == '12') { echo 'selected'; } ?>><?php echo a("page.photo");?></option>
                            <option value='13' <?php if ($edit['category'] == '13') { echo 'selected'; } ?>><?php echo a("page.video");?></option>
                            <option value='14' <?php if ($edit['category'] == '14') { echo 'selected'; } ?>><?php echo a("page.audio");?></option>
                            <option value='17' <?php if ($edit['category'] == '17') { echo 'selected'; } ?>><?php echo a("page.faq");?></option>
                            <!-- <option value='10' <?php if ($edit['category'] == '10') { echo 'selected'; } ?>><?php echo a("page.events");?></option> -->
                            <!-- <option value='5'  <?php if ($edit['category'] == '5')  { echo 'selected'; } ?>><?php echo a("page.sitemap");?></option> -->

                            <!-- <option value='15' <?php if ($edit['category'] == '15') { echo 'selected'; } ?>><?php echo a("page.poll");?></option> -->
                            <!-- <option value='7'  <?php if ($edit['category'] == '7')  { echo 'selected'; } ?>><?php echo a("page.plugin");?></option> -->
                            <!-- <option value='3'  <?php if ($edit['category'] == '3')  { echo 'selected'; } ?>><?php echo a("page.about");?></option> -->
                            <?php endif ?>
                        </select>
                        <div style="float:left;display:none;">
                            <div class="name"><?php echo a("attachedtopic");?>: <span class="star">*</span></div>
                            <input name='menutype' id='menutype' type='text' class='inp-small' value='<?php echo isset($edit['menutype']) ? $edit['menutype'] : 0 ?>' />
                        </div>
                    </div>

                    <div class="list fix">
                        <div class="name"><?php echo a("date");?>: <span class="star">*</span></div>
                        <input type="text" name="postdate" value="<?php echo ($route[1]=='edit') ? date('Y-m-d', strtotime($edit["postdate"])) : date('Y-m-d'); ?>" id="postdate" class="inp-small" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-module="today,gotoDate,clear,icon" />
                        <div class="name"><?php echo a("time");?>: <span class="star">*</span></div>
                        <input type="text" name="posttime" value="<?php echo ($route[1]=='edit') ? date('H:i:s', strtotime($edit["postdate"])) : date('H:i:s'); ?>" id="posttime" class="inp-small" />
                    </div>
                    <div class="list2 fix">
                        <div class="name"><?php echo a("template");?>: <span class="star">*</span></div>
                            <select name="template" class="inp-small" style="width:210px;">
                                <option value=""></option>
<?php
        $templates=scandir(WEBSITE."/templates/custom");
        foreach($templates as $t) :
            if($t !='.' && $t !='..') :
                $tt = str_replace('.php','',$t);
?>
                                <option value="<?php echo $tt;?>" <?php echo ($route[1]=='edit' && $edit["template"]==$tt) ? 'selected="selected"' : ''; ?> ><?php echo ucwords($tt);?></option>
<?php
        endif;
    endforeach;
?>
                            </select>
                    </div>

                    <div class="list fix">
                        <div class="name"><?php echo a("redirectlink");?>:</div>
                        <input type="text" name="redirectlink" id="redirectlink" value="<?php echo ($route[1]=='edit') ? $edit["redirectlink"] : '' ?>" class="inp-small" style="margin-right:20px;" />
                        <input type="checkbox" id="blockit"> <span>Block page</span>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("visibility");?>: <span class="star">*</span></div>
                        <input type="checkbox" name="visibility" class="inp-check"<?php echo (($route[1]=='edit')&&($edit["visibility"]==0)) ? '' : ' checked' ?> />
					</div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("homepage");?>: <span class="star">*</span></div>
                        <input type="checkbox" name="homepage" class="inp-check"<?php echo (($route[1]=='edit')&&($edit["homepage"]==0)) ? '' : ' checked' ?> />
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("homepage2");?>: <span class="star">*</span></div>
                        <input type="checkbox" name="homepage2" class="inp-check"<?php echo (($route[1]=='edit')&&($edit["homepage2"]==0)) ? '' : ' checked' ?> />
                    </div>

                    <div class="list fix">
                        <div class="name"><?php echo a("description");?> <span class="star">*</span></div>
                        <input type="text" name="meta_desc" value="<?php echo ($route[1]=='edit') ? $edit["meta_desc"] : '' ?>" class="inp"/>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("keywords");?> <span class="star">*</span></div>
                        <input type="text" name="meta_keys" value="<?php echo ($route[1]=='edit') ? $edit["meta_keys"] : '' ?>" class="inp"/>
                    </div>

                    <?php
                    $imagePositions = array(
                        'image1',
                        'image2',
                        'image3',
                        'image4',
                        'image5',
                        'image6',
                        'image7',
                        'image8',
                        'image9',
                        'image10',
                        'image11',
                        'image12',
                        'image13',
                        'image14',
                        'image15',
                        'image16',
                        'image17',
                        'image18',
                        'image19',
                        'image20', 
                        'image_fb'
                    );
                    if(isset($edit['image_positions']) && $edit['image_positions']!=""){
                        $imagePositions = explode(",", $edit['image_positions']);
                    }
                    ?>

                    <div class="g-image-sortable" id="g-image-sortable" style="position: relative;">
                        <?php foreach($imagePositions as $col): ?>
                            <div class="dragable">
                                <div class="list fix g-image-list" data-col="<?=$col?>">
                                    <?php if($col=="image_fb"){ ?>
                                    <div class="name"><?php echo a("image");?> FB Share: <span class="star">*</span></div>
                                    <?php }else{ ?>
                                    <div class="name"><?php echo a("image");?>: <span class="star">*</span></div>
                                    <?php } ?>
                                    <input type="text" id="<?=$col?>" name="<?=$col?>" value="<?php echo ($route[1]=='edit') ? $edit[$col] : '' ?>" class="inp" style="width:500px;" />
                                    <a href="javascript:;" class="popup button br" data-browse="<?=$col?>"><?php echo a('browse') ?></a>
                                    <?php if($route[1]=='edit' && $edit[$col] != ""): ?> 
                                    <a href="<?=$edit[$col]?>" target="_blank">
                                        <img src="<?=$edit[$col]?>" alt="" width="70" style="margin-left: 15px;">
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    

                    <div class="list fix">
                        <div class="name">Youtube 1: <span class="star">*</span></div>
                        <input type="text" id="youtube1" name="youtube1" value="<?php echo ($route[1]=='edit') ? $edit["youtube1"] : '' ?>" class="inp" style="width:500px;" />
                        <a href="javascript:;" class="popup button br" data-browse="youtube1"><?php echo a('browse') ?></a>
                        <?php if($route[1]=='edit' && $edit["youtube1"] != ""): ?>    
                        <a href="<?=$edit["youtube1"]?>" target="_blank">                   
                            <p style="margin-left: 15px;">video</p>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="list fix">
                        <div class="name">Youtube 2: <span class="star">*</span></div>
                        <input type="text" id="youtube2" name="youtube2" value="<?php echo ($route[1]=='edit') ? $edit["youtube2"] : '' ?>" class="inp" style="width:500px;" />
                        <a href="javascript:;" class="popup button br" data-browse="youtube2"><?php echo a('browse') ?></a>
                        <?php if($route[1]=='edit' && $edit["youtube2"] != ""): ?>    
                        <a href="<?=$edit["youtube2"]?>" target="_blank">                   
                            <p style="margin-left: 15px;">video</p>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="list fix">
                        <div class="name">Youtube 3: <span class="star">*</span></div>
                        <input type="text" id="youtube3" name="youtube3" value="<?php echo ($route[1]=='edit') ? $edit["youtube3"] : '' ?>" class="inp" style="width:500px;" />
                        <a href="javascript:;" class="popup button br" data-browse="youtube3"><?php echo a('browse') ?></a>
                        <?php if($route[1]=='edit' && $edit["youtube3"] != ""): ?>    
                        <a href="<?=$edit["youtube3"]?>" target="_blank">                   
                            <p style="margin-left: 15px;">video</p>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="list fix">
                        <div class="name">Youtube 4: <span class="star">*</span></div>
                        <input type="text" id="youtube4" name="youtube4" value="<?php echo ($route[1]=='edit') ? $edit["youtube4"] : '' ?>" class="inp" style="width:500px;" />
                        <a href="javascript:;" class="popup button br" data-browse="youtube4"><?php echo a('browse') ?></a>
                        <?php if($route[1]=='edit' && $edit["youtube4"] != ""): ?>    
                        <a href="<?=$edit["youtube4"]?>" target="_blank">                   
                            <p style="margin-left: 15px;">video</p>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="list fix">
                        <div class="name">Youtube 5: <span class="star">*</span></div>
                        <input type="text" id="youtube5" name="youtube5" value="<?php echo ($route[1]=='edit') ? $edit["youtube5"] : '' ?>" class="inp" style="width:500px;" />
                        <a href="javascript:;" class="popup button br" data-browse="youtube5"><?php echo a('browse') ?></a>
                        <?php if($route[1]=='edit' && $edit["youtube5"] != ""): ?>    
                        <a href="<?=$edit["youtube5"]?>" target="_blank">                   
                            <p style="margin-left: 15px;">video</p>
                        </a>
                        <?php endif; ?>
                    </div>

                    <div class="list fix">
                        <div class="name">Recommend it:</div>
                        <input type="text" id="in_carousel" name="in_carousel" value="<?php echo ($route[1]=='edit') ? $edit["in_carousel"] : '' ?>" class="inp" style="width:500px;" readonly="readonly" />
                        <a href="javascript:;" class="button br in_carousel_popup"><?php echo a('browse') ?></a>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("quantity");?>:</div>
                        <input type="text" id="max_quentity" name="max_quentity" value="<?php echo ($route[1]=='edit') ? $edit["max_quentity"] : '' ?>" class="inp-small" style="margin-right: 20px;" />
                        <input type="checkbox" id="max_quantity_check" <?=(isset($edit["max_quentity"]) && $edit["max_quentity"]<1) ? ' checked="checked"' : ''?>>
                        <span>Не продается</span>
                    </div>

                    <script type="text/javascript">
                        const checkbox = document.getElementById('max_quantity_check');
                        const textInput = document.getElementById('max_quentity');

                        checkbox.addEventListener('change', function() {
                            if (checkbox.checked) {
                                textInput.value = '0';
                            } else {
                                textInput.value = '1';
                            }
                        });

                        textInput.addEventListener('input', function() {
                            if (textInput.value !== '0') {
                                checkbox.checked = false;
                            }
                        });
                    </script>
                </div>

                <div id="t2">
                    <div class="list2 fix">
                        <div class="name">Author: <span class="star">*</span></div>
                        <input type="text" id="author" name="author" value="<?php echo ($route[1]=='edit') ? $edit["author"] : '' ?>" class="inp" style="width:500px;" />
                    </div>


                    <div class="list fix">
                        <div class="icon"><img src="_manager/img/minus.png" width="16" height="16" alt="" /></div>
                        <div class="title"><?php echo a("shorttext");?>:</div>
                    </div>

                    <div class="list2 fix">
                        <div class="name"><?php echo a("description");?>: <span class="star">*</span></div>
                        <div class="left" style="width:900px;">
                            <textarea name="description" class="editor" style="height:200px; margin-top:2px; margin-bottom:2px;"><?php echo ($route[1]=='edit') ? $edit["description"] : '' ?></textarea>
                        </div>
                    </div>
                    <div class="list fix">
                        <div class="icon"><img src="_manager/img/minus.png" width="16" height="16" alt="" /></div>
                        <div class="title"><?php echo a("pagecontent");?>:</div>
                    </div>
                    <div class="list2 fix">
                        <div class="name"><?php echo a("content");?>: <span class="star">*</span></div>
                        <div class="left" style="width:900px;">
                            <textarea name="content" class="editor" style="height:300px; margin-top:2px; margin-bottom:2px;"><?php echo ($route[1]=='edit') ? $edit["content"] : '' ?></textarea>
                        </div>
                    </div>
                    <div style="display:none">
	                    <div class="list fix">
	                        <div class="icon"><img src="_manager/img/minus.png" width="16" height="16" alt="" /></div>
	                        <div class="title"><?php echo a("pagecontent");?>:</div>
	                    </div>
	                    <div class="list2 fix">
	                        <div class="name"><?php echo a("content");?>: <span class="star">*</span></div>
	                        <div class="left" style="width:900px;">
	                            <textarea name="review" class="editor" style="height:300px; margin-top:2px; margin-bottom:2px;"><?php echo ($route[1]=='edit') ? $edit["review"] : '' ?></textarea>
	                        </div>
	                    </div>
                    </div>
                </div>
            </div>
			</form>
            <div id="bottom" class="fix">
                <a href="javascript:v_save('edit');" class="button br"><?php echo a("save");?></a>
                <a href="javascript:v_savenext('content');" class="button br"><?php echo a("save&next");?></a>
                <a href="javascript:save('close');" class="button br"><?php echo a("save&close");?></a>
                <a href="<?php echo ahref(array($route[0], 'show', $menuid));?>" class="button br"><?php echo a("cancel");?></a>
            </div>
        </div>
    </div>
<script language="javascript" type="text/javascript">
    $('.popup').on('click', function(e){
        id = $(this).data('browse');
        $.fancybox({
            width    : 900,
            height   : 600,
            type     : 'iframe',
            href     : '<?php echo JAVASCRIPT ?>/tinymce/filemanager/dialog.php?field_id='+id,
            autoSize : false
        });
        e.preventDefault();
    });


<?php if ($route[1]=='edit' && $edit["redirectlink"] == 'javascript:;'): ?>
        $('#redirectlink').attr('readonly', true).addClass('readonly');
        $('#blockit').prop('checked', true);
<?php endif ?>

    $('#blockit').on('click', function(){
        if ($(this).prop('checked'))
            $('#redirectlink').val('javascript:;').attr('readonly', true).addClass('readonly');
        else
            $('#redirectlink').val('').attr('readonly', false).removeClass('readonly');
    });

	$("#t2").hide();
	$("#t1").show();
    var section = 1;

    v_tabswitch("<?php echo (isset($_GET["tabstop"])) ? $_GET["tabstop"] : 'general';?>");

	function v_tabswitch(i) {
		if(i=='general') { v_general() }
		if(i=='content') { v_content() }
	}

	function v_general() {
		$("#t1").hide();
		$("#t2").hide();
		$("#t1").show();
		section = 1;
		$('#b1').removeClass('button');
		$('#b2').removeClass('selbutton');
		$('#b1').addClass('selbutton');
		$('#b2').addClass('button');
		setFooter();
	}

	function v_content() {
		$("#t1").hide();
		$("#t2").hide();
		$("#t2").show();
		section = 2;
		$('#b1').removeClass('selbutton');
		$('#b2').removeClass('button');
		$('#b1').addClass('button');
		$('#b2').addClass('selbutton');
		setFooter();
	}

	function save(action) {
        $("#tabstop").val(action);
        var validate = 0;
        var msg = "";
        if($("#pagetitle").val()=='') {
            msg = "<?php echo a('error.title');?>";
            validate = 0;
        } else {
            validate = 1;
        }
        if(validate == 1) {
            document.dataform.submit();
        } else {
            alert(msg);
        }

	}

	function v_save() {
        if(section == 1) save('general');
        if(section == 2) save('content');
	}

	function v_savenext() {
		save('content')
	}

    function files() {
        save('files');
    }

    function nextlang(lang) {
        save(lang);
    }

    <?php if($route[1]=='edit'): ?>
    $(document).ready(function() {
      // Make the list sortable
      $("#g-image-sortable").sortable({
        update: function(event, ui) {
            var data = new Array();
            $('#g-image-sortable .g-image-list').each(function(){
                let col = $(this).attr('data-col');

                data.push(col);
            });
      
            $.ajax({
                url: "/ge/?ajax=true&imgid=<?=$edit['id']?>",
                type: "POST",
                data: {
                    type:"changeImagePosition",
                    images: data
                },
                success: function(response) {
                    location.realod();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error sending AJAX request: " + errorThrown);
                }
            });
        }
      });
    });
    <?php endif; ?>


    $(document).on('click', '.in_carousel_popup', function() {
        $('.g-popup').fadeIn();   
    });

    $(document).on('click', '.g-close', function() {
        $('.g-popup').fadeOut();   
    });

    $(document).on('click', '.g-save-carousel', function() {
        var arr = new Array();
        $('.g-content input[type="checkbox"]').each(function(){
            var chk = $(this).prop('checked');
            var val = $(this).val();
            if(chk){
                arr.push(val);
            }
        })

        $('#in_carousel').val(arr.join(","));
        $('.g-popup').fadeOut();
    });

    $(document).on('click', '.g-parent', function() {
        var open = $(this).attr('data-open');  
        var id = $(this).attr('data-id');
        
        $('.g-parent').attr('data-open', 'false');
        $('.sub').slideUp();        

        if(open=="true"){
            $(this).attr('data-open', 'false');
            $('#sub'+id).slideUp();
        }else{
            $(this).attr('data-open', 'true');
            $('#sub'+id).slideDown();
        }
    });
</script>