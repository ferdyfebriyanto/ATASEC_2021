<?php
/*
* Menu for search page
*/
global $canteen_theme_settings;
?>
<nav class="header apply-header white-header clearfix"> 
	<div class="nav-box">
		<div class="stuck-nav">
			 <div class="container-fluid">
				<div class="top-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img alt="<?php esc_attr_e ('Logo','canteen'); ?>" class="logo1" src="<?php 
							if ( canteen_option('canteen_header_logo_white') ){ 
								$canteen_header_logo_white = canteen_option('canteen_header_logo_white');
								echo esc_url ( $canteen_header_logo_white['url']); 
							} else { 
								echo get_template_directory_uri(); ?>/images/logo-white.png <?php } ?>">
					</a>
				</div><!--End Logo-->
				
				<div class="header-wrapper <?php  if ( class_exists('ReduxFrameworkPlugin') && (canteen_option( 'canteen_menu_position' ) =='center')) { echo 'dflex';}?> hidden-xs hidden-sm">
					<div class="menu-wrapper">
						<?php canteen_custom_menu_page ('canteen_header_menu');  ?>
					</div><!-- End menu-wrapper -->
				
					<ul class="header-icon hidden-sm hidden-xs"> 

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( canteen_option( 'canteen_header_enable_social' ) == 'on' && canteen_option( 'canteen_header_facebook') ) :  ?>
								<li>
									<a href="<?php  echo esc_url( canteen_option( 'canteen_header_facebook' ) ); ?>">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if (class_exists('ReduxFrameworkPlugin')) :
							if (canteen_option('canteen_header_enable_social') == 'on' && canteen_option('canteen_header_googleplus')) :  ?>
								<li>
									<a href="<?php  echo esc_url(canteen_option( 'canteen_header_googleplus' )); ?>">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( canteen_option( 'canteen_header_enable_social' ) == 'on' && canteen_option( 'canteen_header_twitter' ) ) :  ?>
								<li>
									<a href="<?php  echo esc_url( canteen_option( 'canteen_header_twitter' ) ); ?>">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( (canteen_option( 'canteen_header_enable_social' ) == 'on') && canteen_option( 'canteen_header_instagram' ) ) :  ?>
								<li>
									<a href="<?php  echo esc_url( canteen_option( 'canteen_header_instagram' ) ); ?>">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( canteen_option( 'canteen_header_enable_social' ) == 'on' && canteen_option( 'canteen_header_pinterest') ) :  ?>
								<li>
									<a href="<?php  echo esc_url(canteen_option( 'canteen_header_pinterest') ); ?>">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( canteen_option('canteen_header_enable_social') == 'on' && canteen_option( 'canteen_header_xing')) :  ?>
								<li>
									<a href="<?php  echo esc_url( canteen_option( 'canteen_header_xing') ); ?>">
										<i class="fa fa-xing"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

					</ul><!-- top Socials -->


					<div class="search-icon-header hidden-xs hidden-sm">
						<?php  if ( class_exists('ReduxFrameworkPlugin') && (canteen_option( 'canteen_header_search' ) =='on')) { ?>
						<a class="search"  href="#">
							<i class="fa fa-search"></i>
						</a>
						<div class="black-search-block">
							<div class="black-search-table">
								<div class="black-search-table-cell">
									<div>
										<?php $canteen_unique_id = canteen_unique_id( 'search-form-' ); ?>
										<form role="search" method="get" id="<?php echo esc_attr( $canteen_unique_id ); ?>" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
											<input type="search" class="focus-input" placeholder="<?php echo esc_attr__('Type search keyword...','canteen'); ?>" value="<?php get_search_query()?>" name="s">
											<input type="submit" class="searchsubmit" value="">
										</form>
									</div>
								</div>
							</div>
							<div class="close-black-block"><a href="#"><i class="fa fa-times"></i></a></div>
						</div>
						<?php } ?>

						<?php  if ( class_exists('ReduxFrameworkPlugin') && (canteen_option( 'canteen_header_cart' ) =='on')) { ?>

						<?php if ( class_exists( 'WooCommerce' ) ) {
						 
						    $count = WC()->cart->cart_contents_count;
						    ?>
						    <a class="cart-contents 1" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr__( 'View your shopping cart','canteen' ); ?>">
						    	<?php 
						        ?>
						        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
						        <?php
						        ?></a>
						 
						<?php } ?>
						<?php } ?>

						<?php  if ( class_exists('ReduxFrameworkPlugin') && (canteen_option( 'canteen_header_btn' ) =='on')) { ?>

						<?php if ( class_exists('ReduxFrameworkPlugin') && canteen_option( 'canteen_menu_btn') && canteen_option( 'canteen_menu_btn_url') ) { ?>

							<div class="btn-nav-top">
				                <a  href="<?php  echo esc_url( canteen_option( 'canteen_menu_btn_url') ); ?>">
			                    <?php echo esc_attr( canteen_option( 'canteen_menu_btn')); ?>
			               		 </a>
							</div>
						<?php } ?>

						<?php }?>
					</div>
					
				</div><!-- header-wrapper -->  

				<div class="mobile-wrapper hidden-lg hidden-md">
					<a href="#" class="hamburger"><div class="hamburger__icon"></div></a>
					<div class="fat-nav">
						<div class="fat-nav__wrapper">
							<div class="fat-list"> <?php canteen_custom_flat_menu_page ('canteen_header_menu'); ?></div>
						</div>
					</div>
				</div><!--End mobile-wrapper-->
				
			</div><!--End container-fluid-->
		</div><!--End stuck-nav-->
	</div><!--End nav-box-->
</nav><!--End header-->