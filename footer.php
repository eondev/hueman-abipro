					</div><!--/.main-inner-->
				</div><!--/.main-->			
			</div><!--/.container-inner-->
		</div><!--/.container-->
        
		<footer id="footer">	
			<?php // footer widgets
				$total = 4;
				if ( ot_get_option( 'footer-widgets' ) != '' ) {
					
					$total = ot_get_option( 'footer-widgets' );
					if( $total == 1) $class = 'one-full';
					if( $total == 2) $class = 'one-half';
					if( $total == 3) $class = 'one-third';
					if( $total == 4) $class = 'one-fourth';
					}

					if ( ( is_active_sidebar( 'footer-1' ) ||
						   is_active_sidebar( 'footer-2' ) ||
						   is_active_sidebar( 'footer-3' ) ||
						   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
			{ ?>		
			<section class="container" id="footer-widgets">
				<div class="container-inner">
					
					<div class="pad group">
						<?php $i = 0; while ( $i < $total ) { $i++; ?>
							<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
						
						<div class="footer-widget-<?php echo $i; ?> grid <?php echo $class; ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
							<?php dynamic_sidebar( 'footer-' . $i ); ?>
						</div>
						
							<?php } ?>
						<?php } ?>
					</div><!--/.pad-->
					
				</div><!--/.container-inner-->
			</section><!--/.container-->	
			<?php } ?>
			
			<?php if ( has_nav_menu( 'footer' ) ): ?>
				<nav class="nav-container group" id="nav-footer">
					<div class="nav-toggle"><i class="fa fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap"><?php wp_nav_menu( array('theme_location'=>'footer','menu_class'=>'nav container group','container'=>'','menu_id'=>'','fallback_cb'=>false) ); ?></div>
				</nav><!--/#nav-footer-->
			<?php endif; ?>
			
			<section class="container" id="footer-bottom">
				<div class="container-inner">
					
					<a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
					
					<div class="pad group">
						
						<div class="grid one-half">
							
							<?php if ( ot_get_option('footer-logo') ): ?>
								<img id="footer-logo" src="<?php echo ot_get_option('footer-logo'); ?>" alt="<?php get_bloginfo('name'); ?>">
							<?php endif; ?>
							
							<div id="copyright">
								<?php if ( ot_get_option( 'copyright' ) ): ?>
									<p><?php echo ot_get_option( 'copyright' ); ?></p>
								<?php else: ?>
									<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'hueman' ); ?></p>
								<?php endif; ?>
							</div><!--/#copyright-->
							
							<div id="credit">
								<?php if ( ot_get_option( 'credit' ) != 'off' ): ?>
                                <p><?php _e('Powered by','hueman'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress</a>. <?php _e('Theme by','hueman'); ?> <a href="http://alxmedia.se" rel="nofollow">Alx</a>.</p>
                                <?php endif; ?>
                                <p>
                                <a href="<?php print dirname($_SERVER['PHP_SELF']) ?>/simple">Versione solo testo</a> |
                                <a href="#">Credits</a> 
                                </p>
							</div><!--/#credit-->
							
						</div>
						
						<div class="grid one-half last">	
							<?php alx_social_links() ; ?>
						</div>
					
					</div><!--/.pad-->
					
				</div><!--/.container-inner-->
			</section><!--/.container-->
			
		</footer><!--/#footer-->

	</div><!--/#wrapper-->

    <div id="ie-warning">
        <p>
            Il browser che stai utilizzando &grave; troppo obsoleto per visualizzare questo sito.<br />
            Aggiorna il tuo browser, oppure scarica gratuitamente ed installa uno dei seguenti browser moderni per continuare a navigare:
            <ul>
                <li><a href="http://www.google.it/intl/it/chrome/browser/" target="_blank">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/it/firefox/new/" target="_blank">Mozilla Firefox</a></li>
            </ul>
        </p>
    </div>

<?php wp_footer(); ?>
</body>
</html>