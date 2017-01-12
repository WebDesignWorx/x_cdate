<?php

/**
*	Website Baker Project <http://www.websitebaker.org/>
*	Copyright (C) 2004-2008, Ryan Djurovich
*
*	Website Baker is free software; you can redistribute it and/or modify
*	it under the terms of the GNU General Public License as published by
*	the Free Software Foundation; either version 2 of the License, or
*	(at your option) any later version.
*
*	Website Baker is distributed in the hope that it will be useful,
*	but WITHOUT ANY WARRANTY; without even the implied warranty of
*	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*	GNU General Public License for more details.
*
*	You should have received a copy of the GNU General Public License
*	along with Website Baker; if not, write to the Free Software
*	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*
*	---------------------------------------------------------------------------
*
*	A simple class for transform/modify dates in differ formats.
*
*	@version	0.4.2
*	@date		2013-05-04
*	@author		Dietrich Roland Pehlke (aldus)
*	@contact	websitebaker-dev@drp-x-work.de
*	@package	Websitebaker - Modules: x_cDate
*	@state		@dev
*
*	@notice		Class for modify/transform/format dates.
*
*				The important class-functions/vars are:
*
*				public vars:
*				$d->setLanguage = Array ($key, $key, ...);
*				
*				public functions:
*				$d->toHTML		( $optional_time_stamp );
*				$d->transform	( $aPreFormatedDate );
*				$d->parse_string( &$aStr, $aOptionalPattern_for_search );
*				$d->format		( $any_format_for_output );
*				$d->set_wb_lang	( a_WB_languageKey );
*				$d->test_locale ( aLangKey, aBoolean );
*
*	@example(-s)
*
*				//	new instance
*				$d = new c_date();
*
*				//	setting the format
*				$d->format="%A, %d. <font style='color:#900;'>%B</font> %Y";
*
*				// This will return the date-string in the given format.
*				//	e.g. below: 11. März 1966
*				$d->transform ("11/03/1966");
*
*				// 	This will return the current time in the format
*				$d->toHTML();
*
*				//	This also
*				$d->toHTML ( TIME() );
*
*				//	This will set a new Language, e.g. italy
*				$d->setLanguage ( array ("it_IT", "italiy", "it_IT@euro") );
*
*				//	This will change all dates in a given string (pass by reference!).
*				$d->parse_string ("At 30.01.98 the new book of Mr. Unknown comes ...");
*
*				//	For the use in Websitebaker you can use "set_wb_lang".
*				//	Supported values at this time are: DE, EN, NL, IT, FR
*				$d->set_wb_lang ( LANGUAGE );
*
*				//	This one will look for a languagekey inside all
*				//	installed locales and then use them
*				$d->test_locale("de_AT", true);
*
*	0.4.3	2017-01-12	Bugfix for regExpr.
*
*	0.4.2	2013-05-04	Add de_DE.UTF-8
*						Lepton 1.1.4 support
*
*	0.4.1	2012-03-29	Change regEx-function inside the parse_string-function to preg_match_all.
*
*	0.4.0	2011-06-25	Add GUID.
*
*	0.3.0	2008-08-20	Add public function "test_locale".	
*
*	0.2.0	2008-08-19	Add public function and constances. See file "include.php" for details.
*
*	0.1.0	2008-08-17	First alpha run.
*
*/

$module_directory   = "x_cdate";
$module_name        = "x_cDate";
$module_function    = "snippet";
$module_version     = "0.4.3";
$module_platform    = defined("LEPTON_GUID") ? "1.1.4" : "2.8.x";
$module_author      = "Dietrich Roland Pehlke (aldus).";
$module_license     = "Licencsed under GNU";
$module_description = "Class for modifing dates. Doc: <a href='".WB_URL."/modules/x_cdate/doc/en.html' target=_new>English</a>";
$module_guid		= "EAF752D0-4BE6-4D67-BC45-4785BDAD6660";
?>