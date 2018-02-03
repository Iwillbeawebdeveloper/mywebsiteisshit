<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
    $("#contactpage").click(function() { // Open contact form on click
    $('.questionspage').hide();
    $('.contactpage').fadeToggle();    
    $('.save-our-site').fadeToggle();
});
    
    $(".close-button").click(function() {
    $('.contactpage').hide();
    $('.questionspage').fadeToggle();
    $('.save-our-site').fadeToggle();
});
</script>
<script>
$(document).ready(function() {
    
    $('#accordion-1').addClass('open');
    
    
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>
<script>
    $(document).ready(function() {
        $('#accordion-1').show().addClass('open'); 
    });
</script>

<script>
    $(document).ready(function() {
        $(".fix-me").click(function() {
            $(".fix-me").delay(100).animate({width:"200vw", height:"200vh"},1000).fadeOut();
            $(".main-title").removeClass("main-title").css({'-webkit-transform' : 'rotate(0deg)',
                 '-moz-transform' : 'rotate(0deg)',
                 '-ms-transform' : 'rotate(0deg)',
                 'transform' : 'rotate(0deg)'});
            $(".large-chunk-of-text-2").delay(2000).fadeOut(1000);
            $(".large-chunk-of-text").delay(2500).slideToggle(1000);
            $(".broken-link").delay(3000).hide();
            $(".professional-text").animate({right: "+6000"},5000, function() {
            });
            $(".really-small-text").delay(3000).hide();
            $("body").addClass("back-pos");
            $(".questionspage").delay(4000).slideToggle(500);
            $("div.save-our-site").delay(4000).slideToggle(1000);
        });
    });

</script>
</body>
</html>
