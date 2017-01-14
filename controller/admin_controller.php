<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\controller;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\log\log_interface;
use phpbb\user;
use phpbb\request\request_interface;
use phpbb\cache\service as cache_interface;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var cache_interface */
	protected $cache;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor
	 *
	 * @param config				$config
	 * @param template				$template
	 * @param log_interface			$log
	 * @param user					$user
	 * @param request_interface		$request
	 * @param cache_interface		$cache
	 */
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		request_interface $request,
		cache_interface $cache
	)
	{
		$this->config 		= $config;
		$this->template 	= $template;
		$this->log 			= $log;
		$this->user 		= $user;
		$this->request 		= $request;
		$this->cache 		= $cache;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		$this->user->add_lang_ext('dmzx/topstats', 'acp_topstats');

		add_form_key('acp_topstats');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_topstats'))
			{
				trigger_error('FORM_INVALID');
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_TS_SETTINGS');

			trigger_error($this->user->lang['TOPSTATS_SAVED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'TS_VERSION'				=> $this->config['ts_version'],
			'TSRAT_ENABLE'				=> $this->config['tsrat_enable'],
			'TSRAT_NUMBER'				=> $this->config['tsrat_number'],
			'TS_JSSCROLL'				=> $this->config['ts_jsscroll'],
			'JSSCROLL_SPEED'			=> $this->config['tsjss_speed'],
			'JSSCROLL_INTERVAL'			=> $this->config['tsjss_interval'],
			'TS_JSSCROLL_DIRECTION'		=> $this->config['ts_jsscroll_direction'],
			'TS_JSSCROLL_PAUSE'			=> $this->config['ts_jsscroll_pause'],
			'TS_JSSCROLL_NAVIGATION'	=> $this->config['ts_jsscroll_navigation'],
			'TS_TICKER_ENABLE'			=> $this->config['ts_ticker_enable'],
			'TSMVT_ENABLE'				=> $this->config['tsmvt_enable'],
			'TSMVT_NUMBER'				=> $this->config['tsmvt_number'],
			'TSMRT_ENABLE'				=> $this->config['tsmrt_enable'],
			'TSMRT_NUMBER'				=> $this->config['tsmrt_number'],
			'TSMAU_ENABLE'				=> $this->config['tsmau_enable'],
			'TSMAU_NUMBER'				=> $this->config['tsmau_number'],
			'TSMAF_ENABLE'				=> $this->config['tsmaf_enable'],
			'TSMAF_NUMBER'				=> $this->config['tsmaf_number'],
			'TSLVB_ENABLE'				=> $this->config['tslvb_enable'],
			'TSLVB_NUMBER'				=> $this->config['tslvb_number'],
			'TSLRU_ENABLE'				=> $this->config['tslru_enable'],
			'TSLRU_NUMBER'				=> $this->config['tslru_number'],
			'U_ACTION'					=> $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('tsrat_enable', $this->request->variable('tsrat_enable', 1));
		$this->config->set('tsrat_number', $this->request->variable('tsrat_number', 5));
		$this->config->set('ts_jsscroll', $this->request->variable('ts_jsscroll', 0));
		$this->config->set('tsjss_speed', $this->request->variable('tsjss_speed', 400));
		$this->config->set('tsjss_interval', $this->request->variable('tsjss_interval', 4000));
		$this->config->set('ts_jsscroll_direction', $this->request->variable('ts_jsscroll_direction', 1));
		$this->config->set('ts_jsscroll_pause', $this->request->variable('ts_jsscroll_pause', 1));
		$this->config->set('ts_jsscroll_navigation', $this->request->variable('ts_jsscroll_navigation', 1));
		$this->config->set('ts_ticker_enable', $this->request->variable('ts_ticker_enable', 0));
		$this->config->set('tsmvt_enable', $this->request->variable('tsmvt_enable', 1));
		$this->config->set('tsmvt_number', $this->request->variable('tsmvt_number', 5));
		$this->config->set('tsmrt_enable', $this->request->variable('tsmrt_enable', 1));
		$this->config->set('tsmrt_number', $this->request->variable('tsmrt_number', 5));
		$this->config->set('tsmau_enable', $this->request->variable('tsmau_enable', 1));
		$this->config->set('tsmau_number', $this->request->variable('tsmau_number', 5));
		$this->config->set('tsmaf_enable', $this->request->variable('tsmaf_enable', 1));
		$this->config->set('tsmaf_number', $this->request->variable('tsmaf_number', 5));
		$this->config->set('tslvb_enable', $this->request->variable('tslvb_enable', 1));
		$this->config->set('tslvb_number', $this->request->variable('tslvb_number', 5));
		$this->config->set('tslru_enable', $this->request->variable('tslru_enable', 1));
		$this->config->set('tslru_number', $this->request->variable('tslru_number', 5));

		$this->cache->purge('_ts_most_active_users', '_ts_last_visited_bots', '_ts_last_registered_users');
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
