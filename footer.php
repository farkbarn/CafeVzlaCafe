<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>
	<div class='imgfooter' style='background-image:url(<?php echo get_template_directory_uri().'/images/FooterLogos.jpg';?>)'>
		<ul class='listalogos'>
			<li class='logo'> <a class='linklogo' href='http://www.vicepresidencia.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/republica.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.insai.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/insai.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.mat.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/mppat.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.inti.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/inti.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.bav.com.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/bav.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.inia.gov.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/inia.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://fondas.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/fondas.png';?>' /> </a> </li>
			<li class='logo'> <a class='linklogo' href='http://www.ciara.gob.ve/' target='_blank'> <img src='<?php echo get_template_directory_uri().'/images/fundacionciara.png';?>' /> </a> </li>
		</ul>
	</div>
	</div><!-- #main .site-main -->
	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="tertiary" class="clearfix">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php endif; // end footer widget area ?>
		
		<div class="credits">
			<?php thebox_credits(); ?><br>
			<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'thebox' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'thebox' ), 'WordPress' ); ?></a>
			<span class="sep"></span>
			<?php /* printf( __( 'Theme: %1$s by %2$s', 'thebox' ), 'The Box', '<a href="http://design.altervista.org" rel="designer">Design Lab</a>' ); */ ?>
		</div>
		
		<?php
		if ( has_nav_menu( 'secondary' ) ) { ?>
			<nav id="footer-navigation" class="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'menu-container', 'depth' => 1 ) ); ?>
			</nav>
		<?php } ?>

	</footer><!-- #colophon .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
