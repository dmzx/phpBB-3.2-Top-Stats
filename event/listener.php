<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topstats\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use phpbb\content_visibility;
use phpbb\config\config;
use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\user;
use phpbb\auth\auth;
use phpbb\db\driver\driver_interface as db_interface;
use phpbb\cache\service as cache_interface;
use phpbb\collapsiblecategories\operator\operator as operator;

class listener implements EventSubscriberInterface
{
	/** @var content_visibility */
	protected $content_visibility;

	/** @var config */
	protected $config;

	/** @var helper */
	protected $helper;

	/** @var template */
	protected $template;

	/** @var user */
	protected $user;

	/** @var auth */
	protected $auth;

	/** @var db_interface */
	protected $db;

	/** @var cache_interface */
	protected $cache;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/** @var operator */
	protected $operator;

	/**
	* Constructor
	*
	* @param config				$config
	* @param helper				$helper
	* @param template			$template
	* @param user				$user
	* @param auth				$auth
	* @param db_interface		$db
	* @param cache_interface	$cache
	* @param string				$root_path
	* @param string				$php_ext
	* @param operator			$operator
	*/
	public function __construct(
		content_visibility $content_visibility,
		config $config,
		helper $helper,
		template $template,
		user $user,
		auth $auth,
		db_interface $db,
		cache_interface $cache,
		$root_path,
		$php_ext,
		operator $operator = null
	)
	{
		$this->content_visibility = $content_visibility;
		$this->config 		= $config;
		$this->helper 		= $helper;
		$this->template 	= $template;
		$this->user 		= $user;
		$this->auth 		= $auth;
		$this->db 			= $db;
		$this->cache 		= $cache;
		$this->root_path 	= $root_path;
		$this->php_ext 		= $php_ext;
		$this->operator 	= $operator;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'page_header',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/topstats',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function page_header($event)
	{
		if ($this->operator !== null)
		{
			$fid = 'fid_458'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = 'fid_460'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS1_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS1_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS1_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid,	'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = 'fid_461'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS2_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS2_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS2_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = 'fid_462'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS3_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS3_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS3_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = 'fid_463'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS4_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS4_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS4_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = 'fid_464'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'TOPSTATS5_IS_COLLAPSIBLE'	=> true,
				'S_TOPSTATS5_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_TOPSTATS5_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));

			$fid = '459'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'RESENTSTATS_IS_COLLAPSIBLE'	=> true,
				'S_RESENTSTATS_HIDDEN' => in_array($fid, $this->operator->get_user_categories()),
				'U_RESENTSTATS_COLLAPSE_URL' => $this->helper->route('phpbb_collapsiblecategories_main_controller', array('forum_id' => $fid, 'hash' => generate_link_hash("collapsible_$fid")))
			));
		}

		$flist = $this->auth->acl_getf('f_read', true);
		$flist = array_unique(array_keys($flist));
		$flist = array_merge($flist, array(0));

		// Recent Active Topics
		$enable_active_topics = (!empty($this->config['tsrat_enable']) ? true : false);
		if ($enable_active_topics && sizeof($flist))
		{
			$sql = 'SELECT t.forum_id, t.topic_id, t.topic_title, t.topic_time, t.topic_views, t.topic_poster,	t.topic_posts_approved, t.topic_first_poster_name, t.topic_first_poster_colour, t.topic_last_post_id, t.topic_last_poster_name, t.topic_last_poster_colour, t.topic_last_post_time, t.topic_last_view_time, t.topic_last_poster_id, f.forum_name, f.forum_image
				FROM ' . TOPICS_TABLE . ' t
				LEFT JOIN ' . FORUMS_TABLE . ' f
					ON (t.forum_id = f.forum_id)
				WHERE ' . $this->db->sql_in_set('t.forum_id', $flist) . '
					AND ' . $this->content_visibility->get_visibility_sql('topic', 't.') . '
				ORDER BY t.topic_last_post_time DESC';
			$result = $this->db->sql_query_limit($sql, $this->config['tsrat_number']);

			while ($row = $this->db->sql_fetchrow($result))
			{
				$view_topic_url = append_sid("{$this->root_path}viewtopic.$this->php_ext", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']);
				$view_last_post_url = append_sid("{$this->root_path}viewtopic.$this->php_ext", 'f=' . $row['forum_id'] . '&amp;p=' . $row['topic_last_post_id'] . '#p' . $row['topic_last_post_id']);
				$view_first_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_poster']);
				$view_last_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_last_poster_id']);
				$view_viewforum_url = append_sid("{$this->root_path}viewforum.$this->php_ext", 'f=' . $row['forum_id']);

				$this->template->assign_block_vars('recent_active', array(
					'TOPIC_TITLE'					=> $row['topic_title'],
					'TOPIC_TIME'					=> $this->user->format_date($row['topic_time']),
					'TOPIC_VIEWS'					=> $row['topic_views'],
					'TOPIC_REPLIES'					=> $row['topic_posts_approved'],
					'TOPIC_FIRST_POSTER_NAME'		=> $row['topic_first_poster_name'],
					'TOPIC_FIRST_POSTER_COLOUR'		=> $row['topic_first_poster_colour'],
					'TOPIC_LAST_POSTER_NAME'		=> $row['topic_last_poster_name'],
					'TOPIC_LAST_POSTER_COLOUR'		=> $row['topic_last_poster_colour'],
					'TOPIC_LAST_POST_TIME'			=> $this->user->format_date($row['topic_last_post_time']),
					'TOPIC_LAST_VIEW_TIME'			=> $this->user->format_date($row['topic_last_view_time']),
					'U_FIRST_TOPIC'					=> $view_topic_url,
					'U_LAST_TOPIC'					=> $view_last_post_url,
					'USERNAME_FIRST'				=> $view_first_poster,
					'USERNAME_LAST'					=> $view_last_poster,
					'FORUM_NAME'					=> $row['forum_name'],
					'FORUM_IMAGE'					=> $row['forum_image'],
					'FORUM_URL'						=> $view_viewforum_url,
				));
			}
			$this->db->sql_freeresult($result);

		}
		$this->template->assign_vars(array(
			'JSSCROLL_SPEED'				=> (isset($this->config['tsjss_speed'])) ? $this->config['tsjss_speed'] : '',
			'JSSCROLL_INTERVAL'				=> (isset($this->config['tsjss_interval'])) ? $this->config['tsjss_interval'] : '',
			'TSRAT_NUMBER'					=> (isset($this->config['tsrat_number'])) ? $this->config['tsrat_number'] : '',
			'TS_JSSCROLL_DIRECTION'			=> (!empty($this->config['ts_jsscroll_direction'])) ? true : false,
			'TS_JSSCROLL_PAUSE'				=> (!empty($this->config['ts_jsscroll_pause'])) ? true : false,
			'TS_JSSCROLL_NAVIGATION'		=> (!empty($this->config['ts_jsscroll_navigation'])) ? true : false,
			'S_TSRAT_ENABLE'				=> (!empty($this->config['tsrat_enable'])) ? true : false,
			'S_TS_JSSCROLL'					=> (isset($this->config['ts_jsscroll'])) ? $this->config['ts_jsscroll'] : '',
			'S_TS_TICKER' 		 			=> (!empty($this->config['ts_ticker_enable'])) ? true : false,
		));

		// Most viewed topics
		$enable_viewed_topics = (!empty($this->config['tsmvt_enable']) ? true : false);
		if ($enable_viewed_topics && sizeof($flist))
		{
			$sql = 'SELECT t.topic_id, t.forum_id, t.topic_title, t.topic_views, t.topic_time, t.topic_first_poster_name, t.topic_first_poster_colour, t.topic_poster, t.topic_last_poster_id
				FROM ' . TOPICS_TABLE . ' t
				WHERE ' . $this->db->sql_in_set('forum_id', $flist) . '
					AND ' . $this->content_visibility->get_visibility_sql('topic', 't.') . '
				ORDER BY topic_views DESC';
			$result = $this->db->sql_query_limit($sql, $this->config['tsmvt_number']);

			$most_viewed = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$most_viewed[] = $row;
			}

			foreach ($most_viewed as $row)
			{
				$view_topic_url = append_sid("{$this->root_path}viewtopic.$this->php_ext", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']);
				$view_first_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_poster']);
				$view_last_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_last_poster_id']);

				$topic_title = censor_text($row['topic_title']);
				$topic_title = truncate_string($topic_title, 40, 255, false, $this->user->lang['ELLIPSIS']);

				$this->template->assign_block_vars('most_viewed', array(
					'TOPIC_ID'						=> $row['topic_id'],
					'FORUM_ID'						=> $row['forum_id'],
					'TOPIC_TITLE'					=> $topic_title,
					'TOPIC_VIEWS'					=> $row['topic_views'],
					'TOPIC_TIME'					=> $this->user->format_date($row['topic_time']),
					'TOPIC_FIRST_POSTER_NAME'		=> $row['topic_first_poster_name'],
					'TOPIC_FIRST_POSTER_COLOUR'		=> $row['topic_first_poster_colour'],
					'U_FIRST_TOPIC'					=> $view_topic_url,
					'USERNAME_FIRST'				=> $view_first_poster,
					'USERNAME_LAST'					=> $view_last_poster,
				));
			}
			$this->db->sql_freeresult($result);

			$this->template->assign_vars(array(
				'S_TSMVT_ENABLE'			=> $enable_viewed_topics,
				'TSMVT_NUMBER'				=> (isset($this->config['tsmvt_number'])) ? $this->config['tsmvt_number'] : '',
			));
		}

		// Most replied topics
		$enable_replied_topics = (!empty($this->config['tsmrt_enable']) ? true : false);
		if ($enable_replied_topics && sizeof($flist))
		{
			$sql = 'SELECT topic_id, forum_id, topic_title, topic_posts_approved, topic_time, topic_first_poster_name, topic_first_poster_colour, topic_poster, topic_last_poster_id
				FROM ' . TOPICS_TABLE . '
				WHERE ' . $this->db->sql_in_set('forum_id', $flist) . '
				ORDER BY topic_posts_approved DESC';
			$result = $this->db->sql_query_limit($sql, $this->config['tsmrt_number']);

			$most_replied = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$most_replied[] = $row;
			}

			foreach ($most_replied as $row)
			{
				$view_topic_url = append_sid("{$this->root_path}viewtopic.$this->php_ext", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']);
				$view_first_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_poster']);
				$view_last_poster = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['topic_last_poster_id']);

				$topic_title = censor_text($row['topic_title']);
				$topic_title = truncate_string($topic_title, 40, 255, false, $this->user->lang['ELLIPSIS']);

				$this->template->assign_block_vars('most_replied', array(
					'TOPIC_ID'						=> $row['topic_id'],
					'FORUM_ID'						=> $row['forum_id'],
					'TOPIC_TITLE'					=> $topic_title,
					'TOPIC_REPLIES'					=> $row['topic_posts_approved'],
					'TOPIC_TIME'					=> $this->user->format_date($row['topic_time']),
					'TOPIC_FIRST_POSTER_NAME'		=> $row['topic_first_poster_name'],
					'TOPIC_FIRST_POSTER_COLOUR'		=> $row['topic_first_poster_colour'],
					'U_FIRST_TOPIC'					=> $view_topic_url,
					'USERNAME_FIRST'				=> $view_first_poster,
					'USERNAME_LAST'					=> $view_last_poster,
				));
			}
			$this->db->sql_freeresult($result);

			$this->template->assign_vars(array(
				'S_TSMRT_ENABLE'	=> $enable_replied_topics,
				'TSMRT_NUMBER'		=> (isset($this->config['tsmrt_number'])) ? $this->config['tsmrt_number'] : '',
			));
		}

		// Most active users
		$enable_active_users = (!empty($this->config['tsmau_enable']) ? true : false);
		if ($enable_active_users)
		{
			if (($active_users = $this->cache->get('_ts_most_active_users')) === false)
			{
				$sql = 'SELECT user_id, username, user_posts, user_colour, user_regdate
					FROM ' . USERS_TABLE . '
					WHERE user_inactive_time = 0
						AND user_type <> 2
						AND user_type <> 1
					ORDER BY user_posts DESC';
				$result = $this->db->sql_query_limit($sql, $this->config['tsmau_number']);

				$active_users = array();
				while ($row = $this->db->sql_fetchrow($result))
				{
					$active_users[] = $row;
				}

				$this->db->sql_freeresult($result);

				// Cache for 1 hour
				$this->cache->put('_ts_most_active_users', $active_users, 3600);
			}

			foreach ($active_users as $row)
			{
				$total_posts = $this->config['num_posts'];
				$most_active_user = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['user_id']);
				$most_active_user_search = append_sid("{$this->root_path}search.$this->php_ext", 'author_id=' . $row['user_id'] . '&amp;sr=posts');
				$most_active_user_percent = ($row['user_posts'] * 100) / $total_posts;

				$this->template->assign_block_vars('most_active_users', array(
					'USER_ID'				=> $most_active_user,
					'USER_POST_SEARCH'		=> $most_active_user_search,
					'USER_POST_PERCENT'		=> number_format($most_active_user_percent, 2),
					'USERNAME'				=> $row['username'],
					'USER_REG'				=> $this->user->format_date($row['user_regdate']),
					'USER_POSTS'			=> $row['user_posts'],
					'USER_COLOUR'			=> $row['user_colour'],
				));
			}

			$this->template->assign_vars(array(
				'S_TSMAU_ENABLE'	=> $enable_active_users,
				'TSMAU_NUMBER'		=> (isset($this->config['tsmau_number'])) ? $this->config['tsmau_number'] : '',
			));
		}

		// Most active forums
		$enable_active_forums = (!empty($this->config['tsmaf_enable']) ? true : false);
		if ($enable_active_forums && sizeof($flist))
		{
			$sql = 'SELECT forum_id, forum_name, forum_topics_approved
				FROM ' . FORUMS_TABLE . '
				WHERE ' . $this->db->sql_in_set('forum_id', $flist) . '
					AND forum_type = ' . FORUM_POST . '
				ORDER BY forum_topics_approved DESC';
			$result = $this->db->sql_query_limit($sql, $this->config['tsmaf_number']);

			$active_forums = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$active_forums[] = $row;
			}

			foreach ($active_forums as $row)
			{
				$total_posts = $this->config['num_posts'];
				$most_active_forums = append_sid("{$this->root_path}viewforum.$this->php_ext", 'f=' . $row['forum_id']);
				$most_active_forums_percent = ($row['forum_topics_approved'] * 100) / $total_posts;

				$this->template->assign_block_vars('most_active_forums', array(
					'FORUM_URL'				=> $most_active_forums,
					'FORUM_POSTS_PERCENT'	=> number_format($most_active_forums_percent, 2),
					'FORUM_ID'				=> $row['forum_id'],
					'FORUM_NAME'			=> $row['forum_name'],
					'FORUM_POSTS'			=> $row['forum_topics_approved'],
				));
			}
			$this->db->sql_freeresult($result);

			$this->template->assign_vars(array(
				'S_TSMAF_ENABLE'		=> $enable_active_forums,
				'TSMAF_NUMBER'			=> (isset($this->config['tsmaf_number'])) ? $this->config['tsmaf_number'] : '',
			));
		}

		// Last visited Bots
		if (!empty($this->config['tslvb_enable']))
		{
			if (($last_bots = $this->cache->get('_ts_last_visited_bots') ) === false)
			{
				$sql = 'SELECT user_id, username, user_lastvisit, user_colour
					FROM ' . USERS_TABLE . '
					WHERE user_type = ' . USER_IGNORE . '
					ORDER BY user_lastvisit DESC';
				$result = $this->db->sql_query_limit($sql, $this->config['tslvb_number']);

				$last_bots = array();
				while ($row = $this->db->sql_fetchrow($result))
				{
					$last_bots[] = $row;
				}

				$this->db->sql_freeresult($result);

				// Cache for 5 minutes
				$this->cache->put('_ts_last_visited_bots', $last_bots, 300);
			}

			foreach ($last_bots as $row)
			{
				$this->template->assign_block_vars('last_visited_bots', array(
					'USERNAME'			=> $row['username'],
					'USER_COLOUR'		=> $row['user_colour'],
					'USER_LAST_VISIT'	=> $this->user->format_date($row['user_lastvisit']),
				));
			}

			$this->template->assign_vars(array(
				'S_TSLVB_ENABLE'		=> $this->config['tslvb_enable'],
				'TSLVB_NUMBER'			=> $this->config['tslvb_number'],
			));
		}

		// Last registered Users
		$enable_last_users = (!empty($this->config['tslru_enable']) ? true : false);
		if ($enable_last_users)
		{
			if (($last_users = $this->cache->get('_ts_last_registered_users')) === false)
			{
				$sql = 'SELECT user_id, username, user_colour, user_regdate
					FROM ' . USERS_TABLE . '
					WHERE user_inactive_time = 0
						AND user_type <> 2
						AND user_type <> 1
					ORDER BY user_regdate DESC';
				$result = $this->db->sql_query_limit($sql, $this->config['tslru_number']);

				$last_users = array();
				while ($row = $this->db->sql_fetchrow($result))
				{
					$last_users[] = $row;
				}

				$this->db->sql_freeresult($result);

				// Cache for 5 minutes
				$this->cache->put('_ts_last_registered_users', $last_users, 300);
			}

			foreach ($last_users as $row)
			{
				$last_registered_user = append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=viewprofile' . '&amp;u=' . $row['user_id']);

				$this->template->assign_block_vars('last_registered_user', array(
					'USER_URL'			=> $last_registered_user,
					'USERNAME'			=> $row['username'],
					'USER_COLOUR'		=> $row['user_colour'],
					'USER_REGISTERED'	=> $this->user->format_date($row['user_regdate']),
				));
			}

			$this->template->assign_vars(array(
				'S_TSLRU_ENABLE'		=> $enable_last_users,
				'TSLRU_NUMBER'			=> (isset($this->config['tslru_number'])) ? $this->config['tslru_number'] : '',
			));
		}
	}
}
