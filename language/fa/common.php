<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
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
	'RECENT_ACTIVE'				=> 'موضوعات فعال اخیر',
	'MOST_VIEWED'					=> 'موضوعات با بیشترین بازدید',
	'MOST_REPLIED'				=> 'موضوعات با بیشترین پاسخ',
	'MOST_ACTIVE_USERS'				=> 'فعال ترین کاربران',
	'MOST_ACTIVE_FORUMS'			=> 'فعال ترین انجمن ها',
	'LAST_VISITED_BOTS'				=> 'آخرین بازدید ربات ها',
	'LAST_REGISTERED_USERS'			=> 'جدیدترین کاربران عضو شده',
	'NEWEST_TOPICS'				=> 'آخرین موضوعات',
	'NEWEST_POSTS'				=> 'آخرین ارسال ها',
	'JOINED_US'					=> 'به ما بپیوندید',
	'PREVIOUS_SCROLL'				=> 'قبلی',
	'NEXT_SCROLL'					=> 'بعدی',
	'START_SCROLL'				=> 'شروع',
	'STOP_SCROLL'					=> 'توقف',
	'TOPSTATS_COLLAPSE_TITLE'			=> [
		0 => 'مخفی',
		1 => 'نمایش',
	],
));
