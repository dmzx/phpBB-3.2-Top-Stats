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
	'TOPSTATS_SAVED'						=> 'Top Stats Einstellungen gespeichert',
	'TS_VERSION'							=> 'Version',
	'TS_RECENT_SETTINGS'					=> 'Recent Active Topics Einstellungen',
	'TS_RECENT_ENABLE'						=> 'Aktiviere Recent Active Topics',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs für aktuell aktive Themen.',
	'TSRAT_NUMBER'							=> 'Aktuelle aktive Themen',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Anzahl der angezeigten aktuellen aktiven Themen.',
	'TS_JSSCROLL'							=> 'jQuery-Scroll',
	'TS_JSSCROLL_EXPLAIN'					=> 'Aktiviere oder deaktiviere die Benutzung von	jQuery Scrolling für Recent Active Topics.<br />Beachte bitte, dass dieses Feature deaktiviert werden muss, wenn du jQuery Ticker benutzt.',
	'TS_JSSCROLL_SPEED'						=> 'jQquery-Scroll Geschwindigkeit',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'Die Geschwindigkeit des Scrollings in Millisekunden.',
	'TS_JSSCROLL_INTERVAL'					=> 'jQuery-Scroll Intervall',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Die Zeit zwischen den Scrolls in Millisekunden.',
	'TS_JSSCROLL_DIRECTION'					=> 'jQuery Scroll-Richtung',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'Die Richtung, in der jQuery-Scrolls laufen.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Runter',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Hoch',
	'TS_JSSCROLL_PAUSE'						=> 'jQuery-Scroll Pause',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Wenn dies aktiviert ist, pausiert das Scrollen, wenn du mit der Maus über die aktuell aktiven Themen fährst.',
	'TS_JSSCROLL_NAVIGATION'				=> 'jQuery-Scroll Navigation',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Aktiviere oder deaktiviere die JSSCroll-Navigation für Recent Active Topics.',
	'TS_TICKER_ENABLE'						=> 'jQuery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Aktiviere oder deaktiviere den jQuery Ticker für Recent Active Topics<br />Bitte beachte, dass dieses Feature deaktiviert werden muss, wenn du jQuery-Scroll benutzt.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Einstellungen meistgelesene Themen',
	'TS_MOSTVIEWED_ENABLE'					=> 'Aktiviere meistgelesene Themen',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs der meistgelesenen Themen.',
	'TS_MOSTVIEWED_NUMBER'					=> 'Meistgelesene Themen',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Anzahl der anzuzeigenden meistgelesenen Themen.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Einstellungen meistbeantwortete Themen',
	'TS_MOSTREPLIED_ENABLE'					=> 'Aktiviere meistbeantwortete Themen',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs für die meistbeantworteten Themen.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Meistbeantwortete Themen',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Anzahl der anzuzeigenden meistbeantworteten Themen.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Einstellungen aktivste Benutzer',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Aktiviere aktivste Benutzer',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs der aktivsten Benutzer.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Aktivste Benutzer',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Anzahl der anzuzeigenden aktivsten Benutzer.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Einstellungen aktivste Foren',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Aktiviere aktivste Foren.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs der aktivsten Foren',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Aktivste Foren',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Anzahl der anzuzeigenden aktivsten Foren.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Einstellungen letzte Bots',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Aktiviere letzte Bots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs der letzten Bots, die dich besuchten.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Letzte Bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Anzahl der anzuzeigenden letzten Bots.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Einstellungen zuletzt registrierte Benutzer',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Aktiviere zuletzt registrierte Benutzer',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Aktiviere oder deaktiviere die Anzeige des Bereichs der zuletzt registrierten Benutzer.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Zuletzt registrierte Benutzer',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Anzahl der anzuzeigenden zuletzt registrierten Benutzer.',
));
