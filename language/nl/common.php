<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
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
	'MOST_VIEWED'				=> 'Meest bekeken topics',
	'MOST_REPLIED'				=> 'Meest beantwoorde topics',
	'NEWEST_TOPICS'				=> 'Laatste topics',
	'NEWEST_POSTS'				=> 'Laatste posten',
	'RECENT_ACTIVE'				=> 'Recente Actieve Topics',
	'MOST_ACTIVE_USERS'			=> 'Meest actieve gebruikers',
	'JOINED_US'					=> 'Geregistreerd op',
	'MOST_ACTIVE_FORUMS'		=> 'Meest actieve forums',
	'PREVIOUS_SCROLL'			=> 'Vorige',
	'NEXT_SCROLL'				=> 'Volgende',
	'START_SCROLL'				=> 'Start',
	'STOP_SCROLL'				=> 'Stop',
	'LAST_REGISTERED_USERS'		=> 'Laatst geregistreerde gebruikers',
	'LAST_VISITED_BOTS'			=> 'Laatst bezochte bots',
));
