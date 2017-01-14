<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\acp;

class topstats_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\topstats\acp\topstats_module',
			'title'		=> 'TOP_STATS',
			'modes'		=> array(
				'configuration'	=> array(
					'title' => 'TS_CONFIG',
					'auth' => 'ext_dmzx/topstats && acl_a_board',
					'cat' => array('TOP_STATS')
				),
			),
		);
	}
}
