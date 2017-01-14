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
	'MOST_VIEWED'				=> 'En çok görüntülenen konular',
	'MOST_REPLIED'				=> 'En çok cevaplanan konular',
	'NEWEST_TOPICS'				=> 'Son konular',
	'NEWEST_POSTS'				=> 'Son mesajlar',
	'RECENT_ACTIVE'				=> 'Son aktif konular',
	'MOST_ACTIVE_USERS'			=> 'En çok aktif olan üyeler',
	'JOINED_US'					=> 'Bize katıldı',
	'MOST_ACTIVE_FORUMS'		=> 'Aktif forumlar',
	'PREVIOUS_SCROLL'			=> 'Önceki',
	'NEXT_SCROLL'				=> 'Sonraki',
	'START_SCROLL'				=> 'Başla',
	'STOP_SCROLL'				=> 'Dur',
	'LAST_REGISTERED_USERS'		=> 'Son kayıt olan üyeler',
	'LAST_VISITED_BOTS'			=> 'Son giriş yapan botlar',
));
