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
	'TOPSTATS_SAVED'					=> 'تنظیمات “آمار برتر” ذخیره شد',
	'TS_VERSION'						=> 'نسخه',
	'TS_RECENT_SETTINGS'					=> 'تنظیمات موضوعات فعال اخیر',
	'TS_RECENT_ENABLE'					=> 'فعال کردن موضوعات فعال اخیر',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'قسمت “موضوعات فعال اخیر” را فعال یا غیرفعال کنید.',
	'TSRAT_NUMBER'					=> 'موضوعات فعال اخیر',
	'TSRAT_NUMBER_EXPLAIN'				=> 'تعداد “موضوعات با بیشترین پاسخ” که نمایش داده میشود.',
	'TS_JSSCROLL'						=> 'پیمایش با جی کوئری',
	'TS_JSSCROLL_EXPLAIN'                                   => 'استفاده از پیمایش با جی کوئری در “موضوعات فعال اخیر” را فعال یا غیرفعال کنید. <br /> لطفاً توجه داشته باشید که اگر از Jquery Ticker استفاده می کنید، این ویژگی باید غیرفعال شود.',
	'TS_JSSCROLL_SPEED'					=> 'سرعت پیمایش با جی کوئری',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'سرعت پیمایش، به‌ میلی ثانیه است.',
	'TS_JSSCROLL_INTERVAL'				=> 'مدت پیمایش با جی کوئری',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> ' زمان پیمایش، به میلی ثانیه است.',
	'TS_JSSCROLL_DIRECTION'				=> 'جهت پیمایش با جی کوئری',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'جهت ای که به آن سمت پیمایش میکند.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'پایین',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'بالا',
	'TS_JSSCROLL_PAUSE'					=> 'وقفه پیمایش با جی کوئری',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'هنگام فعال بودن، زمانی که بر روی “موضوعات فعال اخیر” باشید، پیمایش موقتاً متوقف می شود.',
	'TS_JSSCROLL_NAVIGATION'				=> 'نوار کنترل برای پیمایش با جی کوئری',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		        => 'نوار کنترل را برای “موضوعات فعال اخیر” فعال یا غیر فعال کنید.',
	'TS_TICKER_ENABLE'					=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Jquery Ticker را برای “موضوعات فعال اخیر” فعال یا غیرفعال کنید <br /> لطفاً توجه داشته باشید که اگر از “پیمایش با جی کوئری” استفاده می کنید ، این ویژگی باید غیرفعال شود.',
	
	'TS_MOSTVIEWED_SETTINGS'				=> 'تنظیمات موضوعات با بیشترین بازدید',
	'TS_MOSTVIEWED_ENABLE'				=> 'فعال کردن موضوعات با بیشترین بازدید',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'قسمت “موضوعات با بیشترین بازدید” را فعال یا غیرفعال کنید.',
	'TS_MOSTVIEWED_NUMBER'				=> 'موضوعات با بیشترین بازدید',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'تعداد “موضوعات با بیشترین بازدید” که نمایش داده میشود.',
	
	'TS_MOSTREPLIED_SETTINGS'				=> 'تنظیمات موضوعات با بیشترین پاسخ',
	'TS_MOSTREPLIED_ENABLE'				=> 'فعال کردن موضوعات با بیشترین پاسخ',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'قسمت “موضوعات با بیشترین پاسخ” را فعال یا غیرفعال کنید.',
	'TS_MOSTREPLIED_NUMBER'				=> 'موضوعات با بیشترین پاسخ',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'تعداد “موضوعات با بیشترین پاسخ” که نمایش داده میشود.',
	
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'تنظیمات فعال ترین کاربران',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'فعال کردن فعال ترین کاربران',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'قسمت “فعال ترین کاربران” را فعال یا غیرفعال کنید.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'فعال ترین کاربران',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'تعداد “فعال ترین کاربران” که نمایش داده میشود.',
	
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'تنظیمات فعال ترین انجمن ها',
	'TS_MOSTACTIVEFORUM_ENABLE'			=> 'فعال کردن فعال ترین انجمن ها',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'قسمت “فعال ترین انجمن ها” را فعال یا غیرفعال کنید.',
	'TS_MOSTACTIVEFORUM_NUMBER'			=> 'فعال ترین انجمن ها',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'تعداد “فعال ترین انجمن ها” که نمایش داده میشود.',
	
	'TS_LASTVISITEDBOT_SETTINGS'			        => 'تنظیمات آخرین بازدید ربات ها',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'فعال کردن آخرین بازدید ربات ها',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		        => 'قسمت “آخرین بازدید ربات ها” را فعال یا غیرفعال کنید.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'آخرین بازدید ربات ها',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		        => 'تعداد “آخرین بازدید ربات ها” که نمایش داده میشود.',
	
	'TS_LASTREGISTEREDUSER_SETTINGS'		        => 'تنظیمات جدیدترین کاربران عضو شده',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'فعال کردن جدیدترین کاربران عضو شده',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	        => 'قسمت “جدیدترین کاربر عضو شده” را فعال یا غیرفعال کنید.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'جدیدترین کاربر عضو شده',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	        => 'تعداد “جدیدترین کاربر عضو شده” که نمایش داده میشود.',
));
