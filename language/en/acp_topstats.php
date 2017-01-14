<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TOPSTATS_SAVED'						=> 'Top Stats settings saved',
	'TS_VERSION'							=> 'Version',
	'TS_RECENT_SETTINGS'					=> 'Recent Active Topics settings',
	'TS_RECENT_ENABLE'						=> 'Enable Recent Active Topics',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Enable or disable display of the Recent Active Topics part.',
	'TSRAT_NUMBER'							=> 'Recent Active Topics',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Number of Recent Active Topics displayed.',
	'TS_JSSCROLL'							=> 'Jquery Scroll',
	'TS_JSSCROLL_EXPLAIN'					=> 'Enable or disable the use of jquery scrolling Recent Active Topics.<br />Please note that this feature needs to be disabled if you use Jquery Ticker.',
	'TS_JSSCROLL_SPEED'						=> 'Jquery Scroll Speed',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'The speed of the scrolling in milliseconds.',
	'TS_JSSCROLL_INTERVAL'					=> 'Jquery Scroll Interval',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'The time between the scrolling in milliseconds.',
	'TS_JSSCROLL_DIRECTION'					=> 'Jquery Scroll Direction',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'The direction of the jquery scrolling.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Down',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Up',
	'TS_JSSCROLL_PAUSE'						=> 'Jquery Scroll Pause',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'When enabled the scrolling is paused when you hover Recent Active Topics.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Jquery Scroll Navigation',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Enable or disable the JSSCroll navigation for Recent Active Topics.',
	'TS_TICKER_ENABLE'						=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Enable or disable the Jquery Ticker for Recent Active Topics<br />Please note that this feature needs to be disabled if you use Jquery Scroll.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Most Viewed Topics settings',
	'TS_MOSTVIEWED_ENABLE'					=> 'Enable Most Viewed Topics',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Enable or disable display of the Most Viewed Topics part.',
	'TS_MOSTVIEWED_NUMBER'					=> 'Most Viewed Topics',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Number of Most Viewed Topics displayed.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Most Replied Topics settings',
	'TS_MOSTREPLIED_ENABLE'					=> 'Enable Most Replied Topics',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Enable or disable display of the Most Replied Topics part.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Most Replied Topics',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Number of Most Replied Topics displayed.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Most Active Users settings',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Enable Most Active Users',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Enable or disable display of the Most Active Users part.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Most Active Users',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Number of Most Active Users displayed.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Most Active Forums settings',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Enable Most Active Forums.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Enable or disable display of the Most Active Forums part',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Most Active Forums',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Number of Most Active Forums displayed.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Last Visited Bots settings',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Enable Most Last Visited Bots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Enable or disable display of the Last Visited Bots part.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Last Visited Bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Number of Last Visited Bots displayed.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Last Registered Users settings',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Enable Last Registered Users',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Enable or disable display of the Last Registered Users part.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Last Registered Users',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Number of Last Registered Users displayed.',
));
