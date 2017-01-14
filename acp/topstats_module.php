<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\acp;

class topstats_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('dmzx.topstats.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		switch($mode)
		{
			case 'configuration':
				// Load a template from adm/style for our ACP page
				$this->tpl_name = 'acp_topstats';
				// Set the page title for our ACP page
				$this->page_title = $user->lang['TS_CONFIG'];
				// Load the display options handle in the admin controller
				$admin_controller->display_options();
			break;
		}
	}
}
