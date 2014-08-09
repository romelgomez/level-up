<?php
/**
 * @version   1.0 January 15, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined( 'ABSPATH' ) or die( 'Restricted access' );

global $gantry; ?>
								<?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard', null, ob_get_clean()); ?>
							</div>
							<?php /** End Main Body **/ ?>
						</div>	
						<?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
						<div id="rt-mainbottom">
							<div class="rt-container">
								<?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
								<div class="clear"></div>
							</div>
						</div>
						<?php /** End Main Bottom **/ endif; ?>
						<?php /** Begin Extension **/ if ($gantry->countModules('extension')) : ?>
						<div id="rt-extension">
							<div class="rt-container">
								<?php echo $gantry->displayModules('extension','standard','standard'); ?>
								<div class="clear"></div>
							</div>
						</div>
						<?php /** End Extension **/ endif; ?>
					</div>
				</div>
				<?php /** Begin Footer Section **/ if ($gantry->countModules('bottom') or $gantry->countModules('footer')) : ?>
				<div id="rt-footer-surround">
					<div class="rt-container">
						<?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
						<div id="rt-bottom">
							<?php echo $gantry->displayModules('bottom','standard','standard'); ?>
							<div class="clear"></div>
						</div>
						<?php /** End Bottom **/ endif; ?>			
						<?php /** Begin Footer **/ if ($gantry->countModules('footer')) : ?>
						<div id="rt-footer">
							<?php echo $gantry->displayModules('footer','standard','standard'); ?>
							<div class="clear"></div>
						</div>
						<?php /** End Footer **/ endif; ?>
					</div>
				</div>
				<?php /** End Footer Surround **/ endif; ?>
				<?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
				<div id="rt-copyright">
					<div class="rt-container">
						<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Copyright **/ endif; ?>		
				<?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
				<div id="rt-debug">
					<div class="rt-container">
						<?php echo $gantry->displayModules('debug','standard','standard'); ?>
						<div class="clear"></div>
					</div>
				</div>
				<?php /** End Debug **/ endif; ?>
				<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
				<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
				<?php /** End Analytics **/ endif; ?>						
			</div>	
		<?php echo $gantry->displayModules('login','login','popup'); ?>
		<?php echo $gantry->displayModules('popup','popup','popup'); ?>
		</div>		
	</div>
	<?php $gantry->displayFooter(); ?>
</body>
</html>
<?php
$gantry->finalize();
?>