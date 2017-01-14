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
	'TOPSTATS_SAVED'						=> 'Top Stats instellingen opgeslagen',
	'TS_VERSION'							=> 'Versie',
	'TS_RECENT_SETTINGS'					=> 'Recente Actieve Topics instellingen',
	'TS_RECENT_ENABLE'						=> 'Schakel recente actieve topics in',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Schakel de weergave in of uit van het Recente Actieve Topics gedeelte.',
	'TSRAT_NUMBER'							=> 'Recente Actieve Topics',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Aantal Recente Actieve Topics om weer te geven.',
	'TS_JSSCROLL'							=> 'Jquery Scroll',
	'TS_JSSCROLL_EXPLAIN'					=> 'Schakel het gebruik van jquery scroll in of uit in de Recente Actieve Topics.<br />Houdt u er rekening mee dat deze functie moet worden uitgeschakeld als u de jQuery Ticker gebruikt.',
	'TS_JSSCROLL_SPEED'						=> 'Jquery Scroll Snelheid',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'De snelheid van het scrollen in milliseconden.',
	'TS_JSSCROLL_INTERVAL'					=> 'Jquery Scroll Interval',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'De tijd tussen het bladeren in milliseconden.',
	'TS_JSSCROLL_DIRECTION'					=> 'Jquery Scroll Richting',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'De richting van het jquery scrollen.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Beneden',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Boven',
	'TS_JSSCROLL_PAUSE'						=> 'Jquery Scroll Pauze',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Wanneer deze functie is ingeschakeld zal het scrollen pauzeren wanneer u met de muis over de Recente Actieve Topics beweegt.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Jquery Scroll Navigatie',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Schakel de JSSCrol navigatie in of uit voor de Recente Actieve Topics.',
	'TS_TICKER_ENABLE'						=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Schakel de Jquery Ticker voor Recente Actieve Topics in of uit<br />Houdt u er rekening mee dat deze functie moet worden uitgeschakeld als u de Jquery Scroll gebruikt.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Meest Bekeken Topics instellingen',
	'TS_MOSTVIEWED_ENABLE'					=> 'Schakel meest bekeken topics in',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Schakel de weergave van het Meest Bekeken Topics gedeelte in of uit.',
	'TS_MOSTVIEWED_NUMBER'					=> 'Meest Bekeken Topics',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Aantal Meest Bekeken Topics om weer te geven.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Meest beantwoorde Topics instellingen',
	'TS_MOSTREPLIED_ENABLE'					=> 'Schakel Meest Beantwoorde Topics in',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Schakel de weergave van het Meest Bekeken Topics gedeelte in of uit.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Meest Beantwoorde Topics',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Aantal Meest Beantwoorde Topics om weer te geven.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Meest Actieve Gebruikers instellingen',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Schakel Meest Actieve Gebruikers in',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Schakel de weergave van het Meest Actieve Gebruikers gedeelte in of uit.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Meest Actieve Gebruikers',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Aantal Meest Actieve gebruikers om weer te geven.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Meest Actieve Forums instellingen',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Schakel de Meest Actieve Forums in.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Schakel de weergave van het Meest Actieve Forum gedeelte in of uit',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Meest Actieve Forums',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Aantal meest Actieve Forums om weer te geven.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Laatst Bezochte Bots instellingen',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Schakel de Meest Laatste Bezochte Bots in',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Schakel de weergave van het Laatst bezochte Bots gedeelte in of uit.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Laatst Bezochte Bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Aantal Laatst Bezochte bots om weer te geven.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Laatst Geregistreerde gebruikers instellingen',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Schakel Laatst Geregistreerde gebruikers in',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Schakel de weergave van het Laatst Geregistreerde Gebruikers gedeelte in of uit.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Laatst Geregistreerde gebruikers',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Aantal Laatst Geregistreerde gebruikers om weer te geven.',
));
