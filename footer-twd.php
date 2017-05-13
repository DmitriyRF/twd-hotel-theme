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
 * @version 1.0
 */

?>

		</div><!-- #content -->
        <?php if( get_theme_mod( 'footer_header') != ''){ ?>
		<footer id="colophon" class="site-footer footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <!-- 					<div class="text-center">
                                                <i class="fa fa-3x fa-instagram" aria-hidden="true"></i>
                                            </div> -->
                        <h1 class="h1-section"><?php  echo get_theme_mod( 'footer_header'); ?></h1>
                    </div>
                </div>
            </div>
		</footer><!-- #colophon -->
        <?php }?>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
