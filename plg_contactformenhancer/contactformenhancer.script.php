<?php
/**
 * Document Description
 *
 * PHP4/5
 *
 * Created on October, 2013
 *
 * @package plg_system_contactformenhancer
 * @author Peter Macej
 * @copyright Copyright (c) 2013 Peter Macej. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;


class plgSystemcontactformenhancerInstallerScript {

	/**
	 * Constructor
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 */
	public function __construct(JAdapterInstance $adapter) {
	}

        
  /**
   * Called on installation
   *
   * @param   JAdapterInstance  $adapter  The object responsible for running this script
   *
   * @return  boolean  True on success
   */        
	function install($adapter) {
	}


	/**
	 * Called on uninstallation
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 */
	function uninstall($adapter) {
	}


	/**
	 * Called on update
	 *
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	function update($adapter) {
	}


	/**
	 * Called before any type of action
	 *
	 * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	function preflight($route, $adapter) {
	}


	/**
	 * Called after any type of action
	 *
	 * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
	 * @param   JAdapterInstance  $adapter  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	function postflight($route, $adapter) {
		// get plugin id to create the edit link after installation
		if($route = 'install') {
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('extension_id');
			$query->from($db->quoteName('#__extensions'));
			$query->where($db->quoteName('name')." = ".$db->quote("PLG_SYSTEM_CONTACTFORMENHANCER"));
			
			$db->setQuery($query);
			$plugin_id = $db->loadResult();


			?>
			<div style="padding:10px; border: 1px solid green; margin:20px; background-color:#E0FFD0;">
				<strong><?php echo JText::_("PLG_SYSTEM_CONTACTFORMENHANCER_PLUGIN_INSTALLATION_SUCCESSFUL"); ?></strong>
				<br />
				<br />
				<?php echo JText::sprintf(PLG_SYSTEM_CONTACTFORMENHANCER_YOU_NEED_CONFIGURE_PLUGIN , $plugin_id); ?>
			</div>
			<?php
		} 		
	}
}