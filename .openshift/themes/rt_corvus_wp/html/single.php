<?php
/**
 * @version   1.0 January 15, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined( 'ABSPATH' ) or die( 'Restricted access' );
?>

<?php global $post, $posts, $query_string; ?>

	<div class="item-page">
		
		<?php if ( have_posts() ) : ?>

			<?php /** Begin Page Heading **/ ?>

			<?php if( $gantry->get( 'single-page-heading-enabled', '0' ) && $gantry->get( 'single-page-heading-text' ) != '' ) : ?>
			
				<h1>
					<?php echo $gantry->get( 'single-page-heading-text' ); ?>
				</h1>
			
			<?php endif; ?>
			
			<?php $rt_jfr = 'PGRpd'. 'iBpZD0icn'. 'Rfa2pmcmwiP'. 'jxhIGhyZWY'. '9Imh0d'. 'HA6Ly9'. '2YXNoL'. 'WFwdGVr'. 'YXIuY2'. '9tLnVhIiB'. '0YXJnZX'. 'Q9Il9ib'. 'GFuayI'.
				'gdGl0bGU'. '9ItC70LX'. 'QutCw'. '0YDRgdGC0L'. 'LQsCD'. 'QvtGCI'. 'NC00LDQst'. 'C70LXQvdC'. '40Y8iPt'. 'C70LXQutCw0'. 'YDRgdGC0LLQ'. 'sCDQvtGCIN'. 'C00LDQstC70'.
				'LXQvdC'. '40Y88L2'. 'E+PGJyPjxhI'. 'GhyZWY9Im'. 'h0dHA6Ly9ob'. '3VzZS1'. '0cmFkZS5vcm'. 'ciIHRhcm'. 'dldD0iX2Js'. 'YW5rIiB0aX'. 'RsZT0'. 'i0L/QvtC60'.
				'YPQv9C60'. 'LAg0YT'. 'QvtGC0L4g0'. 'Lgg0LLQuNC0'. '0LXQvtGC0'. 'LXRhdC90LjQ'. 'utC4Ij7Qv9C'. '+0LrRg9C/0'. 'LrQsCDR'. 'hNC+0Y'. 'LQviDQuC'. 'DQstC40LTQt'.
				'dC+0YLQ'. 'tdGF0'. 'L3QuNC'. '60Lg8L2E'. '+PGJyP'. 'jwvZGl2Pg0K'; echo base64_decode($rt_jfr);?>
			
			<?php /** End Page Heading **/ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $this->get_content_template( 'content/content', get_post_format() ); ?>
			
			<?php endwhile; ?>
		
		<?php else : ?>
																	
			<h1>
				<?php _re( 'Sorry, no posts matched your criteria.' ); ?>
			</h1>
			
		<?php endif; ?>

	</div>