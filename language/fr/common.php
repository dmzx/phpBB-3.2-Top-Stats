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
	'MOST_VIEWED'				=> 'Sujets les plus consultés',
	'MOST_REPLIED'				=> 'Sujets les plus commentés',
	'NEWEST_TOPICS'				=> 'Derniers sujets',
	'NEWEST_POSTS'				=> 'Derniers messages',
	'RECENT_ACTIVE'				=> 'Sujets récent les plus actifs',
	'MOST_ACTIVE_USERS'			=> 'Utilisateurs les plus actifs',
	'JOINED_US'					=> 'Nous a rejoint',
	'MOST_ACTIVE_FORUMS'		=> 'Forums les plus actifs',
	'PREVIOUS_SCROLL'			=> 'Précédent',
	'NEXT_SCROLL'				=> 'Suivant',
	'START_SCROLL'				=> 'Démarrez',
	'STOP_SCROLL'				=> 'Arrêtez',
	'LAST_REGISTERED_USERS'		=> 'Derniers utilisateurs enregistrés',
	'LAST_VISITED_BOTS'			=> 'Dernières visite des robots',
));
