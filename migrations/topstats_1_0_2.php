<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\migrations;

class topstats_1_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\topstats\migrations\topstats_1_0_1',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['ts_version', '1.0.2']],
		];
	}
}
