<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\migrations;

class topstats_1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\topstats\migrations\topstats_install',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('ts_version', '1.0.1')),
		);
	}
}
