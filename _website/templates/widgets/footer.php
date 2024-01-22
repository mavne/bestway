<footer class="page-footer">
	<!-- <div class="footer content">
		<div id="newsletter-footer" class="newsletter-wrapper footer">
			<div class="top-image">
				<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/newsletter/newsletter-image.jpg" alt="Happy people" />
			</div>
		
			<h2>Stay up to date</h2>
			<p>Sign up to our newsletter and join our community for the latest news, tips and advice.</p>

			<div class="block newsletter">
				<div class="title"><strong>Newsletter</strong></div>
				<div class="content">
					<form action="" method="post">
						<input name="form_key" type="hidden" value="m8qrOfNYC6kwzS74" />
						<div class="block-content">					
							<div class="input-box">
								<input name="firstname" placeholder="First Name" required type="text">
							</div>
							
							<div class="input-box mc-email">
								<input name="email" placeholder="Email" required type="email">
							</div>
							
							<div class="actions">
								<input type="submit" value="Sign Up" class="action subscribe primary">
							</div>
						</div>
					</form>
					
					<p>By submitting your email, you are giving your consent to receive email updates on products, special offers and exclusive discounts from Bestwaystore.co.uk. Please refer to our <a href="/privacy-policy">privacy policy</a> to see how we look after your data.</p>
				</div>
			</div>
		</div>
	</div> -->

	<div class="footer-wrapper">
		<div class="footer-wrapper-limit">
			<div class="footer-logo">
				<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/logo.svg" alt="Bestway Store Logo" />
			</div>
			
			<div class="social-links">
				<a href="<?=s('facebook')?>" target="_blank">
					<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/social/facebook-f.svg" alt="Facebook Logo" />
				</a>

				<a href="<?=s('instagram')?>" target="_blank">
					<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/social/instagram.svg" alt="Facebook Logo" />
				</a>

				<a href="<?=s('youtube')?>" target="_blank">
					<img src="/static/version1681722880/frontend/Wilton/BW/en_GB/images/social/youtube.svg" alt="youtube Logo" style="width:25px;" />
				</a>
			</div>

			<div class="footer-column">
				<div class="title" data-role="collapsible">
					<div data-role="trigger">
						<h5 class="g-menuitem"><?=menu_title(318)?></h5>
					</div>
				</div>
				
				<ul class="footer links" data-role="content">
					<?php
                    $f_menus = g_pages_master(318, '*', ' ORDER BY `position` ASC');

                    foreach($f_menus as $fm):
                    ?>
                    <li><a href="<?=href($fm['id'])?>" class="g-menuitem-sub"><?=$fm['title']?></a></li>
                    <?php
                    endforeach;
                    ?>
				</ul>
			</div>

			<div class="footer-column">
				<div class="title" data-role="collapsible">
					<div data-role="trigger">
						<h5 class="g-menuitem"><?=menu_title(319)?></h5>
					</div>
				</div>
				
				<ul class="footer links" data-role="content">
					<?php
                    $f_menus = g_pages_master(319, '*', ' ORDER BY `position` ASC');

                    foreach($f_menus as $fm):
                    ?>
                    <li><a href="<?=href($fm['id'])?>" class="g-menuitem-sub"><?=$fm['title']?></a></li>
                    <?php
                    endforeach;
                    ?>
				</ul>
			</div>
			
			<div class="footer-column">
				<div class="title" data-role="collapsible">
					<div data-role="trigger">
						<h5 class="g-menuitem"><?=menu_title(320)?></h5>
					</div>
				</div>
				
				<ul class="footer links" data-role="content">
					<?php
                    $f_menus = g_pages_master(320, '*', ' ORDER BY `position` ASC');

                    foreach($f_menus as $fm):
                    ?>
                    <li><a href="<?=href($fm['id'])?>" class="g-menuitem-sub"><?=$fm['title']?></a></li>
                    <?php
                    endforeach;
                    ?>
				</ul>
			</div>

			<div class="footer-column">
				<div class="title" data-role="collapsible">
					<div data-role="trigger">
						<h5 class="g-menuitem"><?=menu_title(321)?></h5>
					</div>
				</div>

				<ul class="footer links" data-role="content">
					<?php
                    $f_menus = g_pages_master(321, '*', ' ORDER BY `position` ASC');

                    foreach($f_menus as $fm):
                    ?>
                    <li><a href="<?=href($fm['id'])?>" class="g-menuitem-sub"><?=$fm['title']?></a></li>
                    <?php
                    endforeach;
                    ?>
				</ul>
			</div>

			<a id="smoothup" style="display: block;" href="#top"></a>
		</div>
	</div>
</footer>
