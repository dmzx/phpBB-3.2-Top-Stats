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
	'TOPSTATS_SAVED'						=> 'Son Aktif Konular ayarları kaydedildi',
	'TS_VERSION'							=> 'Versiyon',
	'TS_RECENT_SETTINGS'					=> 'Ayarlar',
	'TS_RECENT_ENABLE'						=> 'Son aktif konuları etkinleştir',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Son Aktif Konular bölümünü görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TSRAT_NUMBER'							=> 'SOn aktif konular',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Görüntülenen Son Aktif Konular Sayısı.',
	'TS_JSSCROLL'							=> 'Jquery kaydırma',
	'TS_JSSCROLL_EXPLAIN'					=> 'Son Aktif Konularda Jquery kaydırma kullanımını etkinleştirme veya devre dışı bırakma.<br />Jquery Ticker kullanıyorsanız bu özelliğin devre dışı bırakılması gerektiğini lütfen unutmayın.',
	'TS_JSSCROLL_SPEED'						=> 'Jquery kaydırma hızı',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'Kaydırma hızı cinsin milisaniyedir.',
	'TS_JSSCROLL_INTERVAL'					=> 'Jquery kaydırma aralığı',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Kaydırma arasındaki süre cinsi milisaniyedir.',
	'TS_JSSCROLL_DIRECTION'					=> 'Jquery kaydırma yönü',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'Jquery kaydırma yönünü seçin.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Aşağı',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Yukarı',
	'TS_JSSCROLL_PAUSE'						=> 'Jquery kaydırmayı durdur',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Etkinleştirildiğiniz zaman, Son Aktif Konular üzerine geldiğiniz zaman kaydırma durdurulur.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Jquery Kaydırma Navigasyou',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Son Aktif Konular için Jquery kaydırma gezinmesini etkinleştirin veya devre dışı bırakın.',
	'TS_TICKER_ENABLE'						=> 'Jquery Kayan Yazı',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Son Aktif Konular için Jquery Kayan yazıyı etkinleştirin veya devre dışı bırakın.<br />Jquery Kaydırma kullanıyorsanız, bu özelliğin devre dışı bırakılması gerektiğini lütfen unutmayın.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Aktif görüntülenen Konular ayarı',
	'TS_MOSTVIEWED_ENABLE'					=> 'Aktif görüntülenen Konuları Etkinleştir',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Aktif Görüntülenen Konular bölümünü görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_MOSTVIEWED_NUMBER'					=> 'Sürekli görüntülenen konular',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Sürekli görüntülenen konu sayısı.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Sürekli cevaplanan konular ayarı',
	'TS_MOSTREPLIED_ENABLE'					=> 'Sürekli cevaplanan konuları etkinleştir',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Sürekli cevaplanan konular bölümünü görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Sürekli cevaplanan konular',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Sürekli cevaplanan konu sayısı.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Aktif kullanıcılar ayarı',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Aktif kullanıcı ayarlarını etkinleştir',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Aktif kullanıcıları görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Aktif kullanıcılar',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Aktif kullanıcı sayısı.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Aktif forumlar ayarı',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Aktif forumları etkinleştir.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Aktif forumları görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Aktif Forumlar',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Aktif forumların sayısı.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Son ziyaret eden botlar ayarı',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Son ziyaret eden botları etkinleştir',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Son ziyaret edilen botları görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Son ziyaret eden botlar',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Son ziyaret eden bot sayısı.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Son kayıt olan kullanıcı ayarları',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Son kayıt olan kullanıcıları etkinleştir',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Son kayıt olan kullanıcıları görüntülemeyi etkinleştirin veya devre dışı bırakın.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Son kayıt olan kullanıcılar',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Son kayıt olan kullanıcı sayısı.',
));
