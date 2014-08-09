<?php
/**
 * @version   1.0 January 15, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined('ABSPATH') or die('Restricted access');
global $gantry;

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language; ?>" dir="<?php echo $gantry->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php
		$gantry->displayHead();
		
		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
		?>
	</head>
	<body <?php echo $gantry->displayBodyTag(); ?>>
		<?php /** Begin Navigation **/ if ($gantry->countModules('navigation')) : ?>
		<div id="rt-navigation">
			<div class="rt-container">
				<div class="rt-grid-12">
					<div class="rt-block logo-block">
						<a href="<?php echo $gantry->baseUrl; ?>" id="rt-logo"><?php if ($gantry->get('logo-type') == 'fracture' && $gantry->get('main-body') == 'dark') :?><span class="logo-color"></span><?php endif; ?></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Navigation **/ endif; ?>
			<div class="rt-container <?php echo ($gantry->get('main-body') == 'light' ? 'rt-light' : 'rt-dark'); ?>">
				<div id="rt-body-surround">
					<div class="rt-grid-12">
				    	<div class="rt-block component-block unsupported box2">
							<h1><?php _re('Unsupported Browser'); ?></h1>
							<p><?php _re('We have detected that you are using Internet Explorer 7, a browser version that is not supported by this website. Internet Explorer 7 was released in October of 2006, and the latest version of IE7 was released in October of 2007. It is no longer supported by Microsoft.'); ?></p>
							<p><?php _re('Continuing to run IE7 leaves you open to any and all security vulnerabilities discovered since that date. In March of 2011, Microsoft released version 9 of Internet Explorer that, in addition to providing greater security, is faster and more standards compliant than versions 6, 7, and 8 that came before it.'); ?></p>
							<p><?php _re('We suggest installing the <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">latest version of Internet Explorer</a>, or the latest version of these other popular browsers: <a href="http://www.mozilla.com/en-US/firefox/firefox.html">Firefox</a>, <a href="http://www.google.com/chrome">Google Chrome</a>, <a href="http://www.apple.com/safari/download/">Safari</a>, <a href="http://www.opera.com/">Opera</a>'); ?></p>
				 		</div>
				 	</div>
				 	<div class="clear"></div>
				</div>
			</div>
		</div>
		<?php $gantry->displayFooter(); ?>
	</body>
</html>
<?php
$gantry->finalize();
?>