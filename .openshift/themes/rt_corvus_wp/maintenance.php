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
			if ($gantry->browser->shortversion == 8) {
				$gantry->addScript('html5shim.js');
			}
		}
		$gantry->addScript('rokmediaqueries.js');
		?>
	</head>
	<body <?php echo $gantry->displayBodyTag(); ?>>
		<div id="rt-offline-body">
			<div class="rt-container">
				<div class="component-content">
					<div class="rt-grid-12">

						<div class="rt-block offline-image">
							<h1 class="sitename">
								<?php bloginfo('name'); ?>
							</h1>
						</div>

						<div class="rt-block">
							<div class="table">
								<div class="row">
									<div class="cell gantry-width-50 center">
										<div class="rt-block offline">
											<h1><?php _re('Site Offline'); ?></h1>
											<?php if($gantry->get('maintenancemode-message') != '') : ?>
											<p>
												<?php echo $gantry->get('maintenancemode-message'); ?>
											</p>
											<?php endif; ?>
										</div>
									</div>
									<div class="cell gantry-width-50 center">
										<div class="rt-block box1">
											<h1 class="title"><?php _re('Authorized Login'); ?></h1>
											<form class="form-horizontal" action="<?php echo wp_login_url($_SERVER['REQUEST_URI']); ?>" method="post" id="form-login">
												<div class="control-group">
													<label class="control-label" for="username"><?php _re('User Name'); ?></label>
													<div class="controls">
														<input name="log" id="username" type="text" alt="<?php _re('Username'); ?>" placeholder="<?php _re('Username'); ?>" />
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="passwd"><?php _re('Password'); ?></label>
													<div class="controls">
														<input type="password" name="pwd" class="inputbox" alt="<?php _re('Password'); ?>" id="passwd" placeholder="<?php _re('Password'); ?>" />
													</div>
												</div>
												<div class="control-group">
													<div class="controls">
														<label for="remember"><?php _re('Remember Me'); ?>
															<input type="checkbox" name="rememberme" class="inputbox" alt="<?php _re('Remember Me'); ?>" id="remember" />
														</label>

														<input type="submit" name="submit" class="button" value="<?php _re('Log in'); ?>" />
													</div>
												</div>
											</form>
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