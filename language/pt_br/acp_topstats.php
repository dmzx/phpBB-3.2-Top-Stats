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
	'TOPSTATS_SAVED'						=> 'Configuração Top Stats salva',
	'TS_VERSION'							=> 'Versão',
	'TS_RECENT_SETTINGS'					=> 'Configuração Tópicos Ativos Recentes',
	'TS_RECENT_ENABLE'						=> 'Habilita Tópicos Ativos Recentes',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Habilita ou desabilita mostrar Tópicos Ativos Recentes.',
	'TSRAT_NUMBER'							=> 'Quantidade de Tópicos Ativos Recentes',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Quantidade de Tópicos Ativos Recentes a mostrar.',

	'TS_JSSCROLL'							=> 'Rolagem Jquery',
	'TS_JSSCROLL_EXPLAIN'					=> 'Habilita ou desabilita o uso da rolagem Jquery nos Tópicos Ativos Recentes.<br />Observe que isso precisa estar desabilitado se você usa	o ticker Jquery.',
	'TS_JSSCROLL_SPEED'						=> 'Velocidade da rolagem Jquery',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'A velocidade da rolagem em milisegundos.',
	'TS_JSSCROLL_INTERVAL'					=> 'Intervalo da rolagem Jquery',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'O tempo entre as rolagens em milisegundos.',
	'TS_JSSCROLL_DIRECTION'					=> 'Direção da rolagem Jquery',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'Indica a direção que a rolagem irá assumir.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Para baixo',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Para cima',
	'TS_JSSCROLL_PAUSE'						=> 'Pausa na Rolagem Jquery',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Se habilitado, a rolagem é pausada quando o mouse está em cima dos Tópicos Ativos Recentes.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Navegação da Rolagem Jquery',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Habilita ou desabilita a navegação da rolagem Jquery dos Tópicos Ativos Recentes.',

	'TS_TICKER_ENABLE'						=> 'Ticker Jquery',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Habilita ou desabilita o uso do ticker Jquery nos Tópicos Ativos Recentes.<br />Observe que isso precisa estar desabilitado se você usa a	rolagem Jquery.',

	'TS_MOSTVIEWED_SETTINGS'				=> 'Configuração Tópicos Mais Vistos',
	'TS_MOSTVIEWED_ENABLE'					=> 'Habilita Tópicos Mais Vistos',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Habilita ou desabilita mostrar Tópicos Mais Vistos.',
	'TS_MOSTVIEWED_NUMBER'					=> 'Quantidade de Tópicos Mais Vistos',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Quantidade de Tópicos Mais Vistos a mostrar.',

	'TS_MOSTREPLIED_SETTINGS'				=> 'Configuração Tópicos Mais Respondidos',
	'TS_MOSTREPLIED_ENABLE'					=> 'Habilita Tópicos Mais Respondidos',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Habilita ou desabilita mostrar Tópicos Mais Respondidos.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Quantidade de Tópicos Mais Respondidos',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Quantidade de Tópicos Mais Respondidos a mostrar.',

	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Configuração Usuários Mais Ativos',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Habilita Usuários Mais Ativos',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Habilita ou desabilita mostrar Usuários Mais Ativos.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Usuários Mais Ativos',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Quantidade de Usuários Mais Ativos a mostrar.',

	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Configuração Fóruns Mais Ativos',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Habilita Fóruns Mais Ativos',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Habilita ou desabilita mostrar Fóruns Mais Ativos.',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Quantidade de Fóruns Mais Ativos',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Quantidade de Fóruns Mais Ativos a mostrar.',

	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Configuração Últimos Bots Visitados',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Habilita Últimos Bots Visitados',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Habilita ou desabilita mostrar Últimos Bots Visitados.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Quantidade de Últimos Bots Visitados',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Quantidade de Últimos Bots Visitados a mostrar.',

	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Configuração Últimos Usuários Cadastrados',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Habilita Últimos Usuários Cadastrados',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Habilita ou desabilita mostrar Últimos Usuários Cadastrados.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Quantidade de Últimos Usuários Cadastrados',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Quantidade de Últimos Usuários Cadastrados a mostrar.',
));
