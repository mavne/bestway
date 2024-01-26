<?php defined('DIR') OR exit; ?>
<div class="CoverDiv ContactCover DisplayInline">
    <div class="container-fluid Padding_0">
        <div class="GoogleMap">
            <div id="MapDiv"></div>
            <script type="text/javascript">
            var locations = [
              ['<?php echo s('address');?>', 41.641851, 41.622539],
            ];

            var map = new google.maps.Map(document.getElementById('MapDiv'), {
              zoom: 17,
              center: new google.maps.LatLng(41.641851, 41.622539),
              mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: '_website/assets/img/pin.png',
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
            </script>
         </div>
    </div>
    <div class="BottomEffect">
     	<svg viewBox="0 -20 700 110" width="100%" height="150" preserveAspectRatio="none">
 		    <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,80 350,-5 v100 h-700z" fill="#f2f5fa" />
      	</svg>
    </div>
</div>





<div class="TopInfoDiv ContactTopInfo DisplayInline">
    <div class="DisplayFlex">
        <div class="container MyContainer">
            <div class="row">
                <div class="col-sm-6">
                    <div class="ContactInfo">
                        <div class="Name"><?php echo $title ?></div>
                        <div class="ContactList">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="Item">
                                        <div class="Icon Mail"></div>
                                        <div class="Info">
                                            <span><?php echo l('e.mail');?></span>
                                            <label><?php echo s('mail');?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="Item">
                                        <div class="Icon Mobile"></div>
                                        <div class="AllInfo">
                                            <div class="Info Info1">
                                                <span><?php echo l('mobile')?></span>
                                                <label><?php echo s('telephone');?></label>
                                            </div>
                                            <div class="Info Info2">
                                                <span><?php echo l('office')?></span>
                                                <label><?php echo s('telephone2');?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="Item">
                                        <div class="Icon Address"></div>
                                        <div class="Info">
                                            <span><?php echo l('address')?></span>
                                            <label><?php echo s('address');?></label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
									<div class="ContactSocial HideMobile">
										<a href="<?php echo s('facebook');?>" target="_blank" class="Facebook"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo s('instagram');?>" target="_blank" class="Instagram"><i class="fa fa-instagram"></i></a>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="Image">
                        <img src="<?php echo imagen('27');?>"  alt="<?php echo $title ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>