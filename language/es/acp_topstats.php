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
	'TOPSTATS_SAVED'						=> 'Ajustes de Estadísticas Principales guardados',
	'TS_VERSION'							=> 'Versión',
	'TS_RECENT_SETTINGS'					=> 'Ajustes de Temas recientes activos',
	'TS_RECENT_ENABLE'						=> 'Habilitar Temas recientes activos',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Habilitar o deshabilitar la visualización de la parte de Temas recientes activos.',
	'TSRAT_NUMBER'							=> 'Temas recientes activos',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Número de Temas activos recientes a mostrar.',
	'TS_JSSCROLL'							=> 'Desplazamiento de JQuery',
	'TS_JSSCROLL_EXPLAIN'					=> 'Habilitar o deshabilitar el uso del desplazamiento JQuery en Temas recientes activos.<br />Tenga en cuenta que esta característica debe estar deshabilitada si utiliza JQuery Ticker.',
	'TS_JSSCROLL_SPEED'						=> 'Velocidad del desplazamiento de JQuery',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'La velocidad del desplazamiento en milisegundos.',
	'TS_JSSCROLL_INTERVAL'					=> 'Intervalo del desplazamiento JQuery',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'El tiempo entre el desplazamiento en milisegundos.',
	'TS_JSSCROLL_DIRECTION'					=> 'Dirección del desplazamiento JQuery',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'La dirección del desplazamiento JQuery.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Bajar',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Subir',
	'TS_JSSCROLL_PAUSE'						=> 'Pausa del desplazamiento JQuery',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Cuando está habilitado, el desplazamiento se pausa al colocar los Temas recientes activos.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Navegación de desplazamiento JQuery',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Habilitar o deshabilitar la Navegación de desplazamiento JQuery para Temas recientes activos.',
	'TS_TICKER_ENABLE'						=> 'JQuery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Habilitar o deshabilitar Navegación de desplazamiento JQuery para Temas recientes activos<br />Tenga en cuenta que esta característica debe estar deshabilitada si utiliza Desplazamiento JQuery.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Ajustes de Temas más vistos',
	'TS_MOSTVIEWED_ENABLE'					=> 'Habilitar Temas más vistos',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Habilitar o deshabilitar la visualización de la parte de Temas más vistos',
	'TS_MOSTVIEWED_NUMBER'					=> 'Temas más vistos',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Número de Temas más vistos a mostrar.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Ajustes de Temas más respondidos',
	'TS_MOSTREPLIED_ENABLE'					=> 'Habilitar Temas más respondidos',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Habilitar o deshabilitar la visualización de la parte de Temas más respondidos.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Temas más respondidos',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Número de Temas más respondidos a mostrar.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Ajustes de Usuarios más activos',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Habilitar Usuarios más activos',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Habilitar o deshabilitar la visualización de la parte de Usuarios más activos.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Usuarios más activos',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Número de Usuarios más activos a mostrar.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Ajustes de Foros más activos',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Habilitar Foros más activos.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Habilitar o deshabilitar la visualización de la parte de Foros más activos.',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Foros más activos',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Número de Foros más activos a mostrar.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Ajustes de Últimas visitas de robots',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Habilitar Últimas visitas de robots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Habilitar o deshabilitar la visualización de la parte de Últimas visitas de robots.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Últimas visitas de robots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Número de Últimas visitas de robots a mostrar.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Ajustes de Últimos usuarios registrados',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Habilitar Últimos usuarios registrados',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Habilitar o deshabilitar la visualización de la parte de Últimos usuarios registrados.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Últimos usuarios registrados',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Número de Últimos usuarios registrados a mostrar.',
));
