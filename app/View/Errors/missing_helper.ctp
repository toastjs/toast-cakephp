<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$pluginDot = empty($plugin) ? null : $plugin . '.';
?>

<h1><?php echo __d('cake_dev', 'Missing Helper'); ?></h1>

<hr />

<div class="alert alert-error">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', '%s could not be found.', '<em>' . $pluginDot . $class . '</em>'); ?>
</div>

<div class="alert alert-warning">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Create the class %s below in file: %s', '<em>' . $class . '</em>', (empty($plugin) ? APP_DIR . DS : CakePlugin::path($plugin)) . 'View' . DS . 'Helper' . DS . $class . '.php'); ?>
</div>

<pre class="prettyprint linenums">
&lt;?php
class <?php echo $class; ?> extends AppHelper {

}
</pre>

<div class="well">
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_helper.ctp'); ?>
</div>

<?php echo $this->element('exception_stack_trace'); ?>

<?php
echo $this->Html->script('http://mindthecode.com/js/libs/pretify/prettify.js', array('inline' => false));
echo $this->Html->css('http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.css', null, array('inline' => false));
echo $this->Html->scriptBlock('prettyPrint();', array('inline' => false));
?>