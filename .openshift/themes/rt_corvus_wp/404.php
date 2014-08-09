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
		<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
		<meta name="viewport" content="width=960px">
		<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
		<meta name="viewport" content="width=1200px">
		<?php else : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php endif; ?>

		<?php
		$gantry->displayHead();

		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);

		if ($gantry->browser->name == 'ie') {
		        	if ($gantry->browser->shortversion == 9){
		        		$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
		        	}
			if ($gantry->browser->shortversion == 8) {
				$gantry->addScript('html5shim.js');
			}
		}
		$gantry->addScript('rokmediaqueries.js');
		?>
	</head>
	<body id="rt-error-page" <?php echo $gantry->displayBodyTag(); ?>>
		<div id="rt-page-surround">
			<div id="rt-page-surround-bottom">
				<div id="rt-top-surround">
					<div id="rt-header">
						<div class="rt-container">
							<?php echo $gantry->displayModules('header','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div id="rt-mainbody-surround">
					<div class="rt-container">
								<div class="rt-block">
										<div id="rt-mainbody">
											<div class="rt-error-desc">
												<div class="rt-error-img"></div>
													<div class="rt-error-content">
														<h1 class="error-title title"><?php _re('Error:'); ?> <span>404</span> - <?php _re('Page not found'); ?></h1>
														<div class="error-content">
														<p><strong><?php _re('You may not be able to visit this page because of:'); ?></strong></p>
														<ol>
															<li><?php _re('an out-of-date bookmark/favourite'); ?></li>
															<li><?php _re('a search engine that has an out-of-date listing for this site'); ?></li>
															<li><?php _re('a mistyped address'); ?></li>
															<li><?php _re('you have no access to this page'); ?></li>
															<li><?php _re('The requested resource was not found.'); ?></li>
															<li><?php _re('An error has occurred while processing your request.'); ?></li>
														</ol>
														<p><a href="<?php echo home_url(); ?>" class="readon"><span>&larr; <?php _re('Home'); ?></span></a></p>
														</div>
														<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $gantry->displayFooter(); ?>
	</body>
</html>
<?php
$gantry->finalize();
?>