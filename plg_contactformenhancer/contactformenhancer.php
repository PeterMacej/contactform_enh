<?php
/**
 * Created on October, 2013
 * Updated on August, 2016
 *
 * @package plg_system_contactformenhancer
 * @author Peter Macej
 * @copyright Copyright (c) 2016 Peter Macej. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * System - Contact Form Enhancer Plugin
 *
 * @package		Joomla.Plugin
 * @subpakage	ContactFormEnhancer.ContactFormEnhancer
 */
class plgSystemContactFormEnhancer extends JPlugin {

	/**
	 * Constructor.
	 *
	 * @param 	$subject
	 * @param	array $config
	 */
	function __construct(&$subject, $config = array()) {
		// call parent constructor
		parent::__construct($subject, $config);
	}
	
	
	public function onAfterRoute() {
		$app = JFactory::getApplication();
		if('com_contact' == JRequest::getCMD('option') && !$app->isAdmin()) {
			// load modified contact controller
			require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'override' . DIRECTORY_SEPARATOR . 'com_contact' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'contact.php');
		}
	} 
}