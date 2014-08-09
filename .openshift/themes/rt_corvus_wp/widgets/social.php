<?php
/**
 * @version   1.0 January 15, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
 
defined('GANTRY_VERSION') or die();

gantry_import('core.gantrywidget');

add_action('widgets_init', array("GantryWidgetSocial","init"));

class GantryWidgetSocial extends GantryWidget {
    var $short_name = 'social';
    var $wp_name = 'gantry_social';
    var $long_name = 'Gantry Social Buttons';
    var $description = 'Gantry Social Buttons Widget';
    var $css_classname = 'widget_gantry_social';
    var $width = 200;
    var $height = 400;

    function init() {
        register_widget("GantryWidgetSocial");
    }
    
    function render_widget_open($args, $instance){
	}
	
	function render_widget_close($args, $instance){
	}
	
	function pre_render($args, $instance) {
	}
	
	function post_render($args, $instance) {
	}

    function render($args, $instance){
        global $gantry;
	    ob_start();

	    ?>

		<div class="rt-social-buttons">
			<?php if (($instance['button-1-icon'] != "") and ($instance['button-1-link'] != "")) : ?>
			<a class="social-button rt-social-button-1" href="<?php echo $instance['button-1-link']; ?>">
				<span class="<?php echo $instance['button-1-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-1-text']; ?></span>
			</a>
			<?php endif; ?>

			<?php if (($instance['button-2-icon'] != "") and ($instance['button-2-link'] != "")) : ?>
			<a class="social-button rt-social-button-2" href="<?php echo $instance['button-2-link']; ?>">
				<span class="<?php echo $instance['button-2-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-2-text']; ?></span>
			</a>
			<?php endif; ?>

			<?php if (($instance['button-3-icon'] != "") and ($instance['button-3-link'] != "")) : ?>
			<a class="social-button rt-social-button-3" href="<?php echo $instance['button-3-link']; ?>">
				<span class="<?php echo $instance['button-3-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-3-text']; ?></span>
			</a>
			<?php endif; ?>

			<?php if (($instance['button-4-icon'] != "") and ($instance['button-4-link'] != "")) : ?>
			<a class="social-button rt-social-button-4" href="<?php echo $instance['button-4-link']; ?>">
				<span class="<?php echo $instance['button-4-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-4-text']; ?></span>
			</a>
			<?php endif; ?>

			<?php if (($instance['button-5-icon'] != "") and ($instance['button-5-link'] != "")) : ?>
			<a class="social-button rt-social-button-5" href="<?php echo $instance['button-5-link']; ?>">
				<span class="<?php echo $instance['button-5-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-5-text']; ?></span>
			</a>
			<?php endif; ?>

			<?php if (($instance['button-6-icon'] != "") and ($instance['button-6-link'] != "")) : ?>
			<a class="social-button rt-social-button-6" href="<?php echo $instance['button-6-link']; ?>">
				<span class="<?php echo $instance['button-6-icon']; ?>"></span>
				<span class="social-button-text"><?php echo $instance['button-6-text']; ?></span>
			</a>
			<?php endif; ?>															

			<div class="clear"></div>
		</div>

		<?php

		echo ob_get_clean();
	    
	}
}