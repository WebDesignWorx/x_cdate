## c_Date

A simple class for transform/modify dates in differ formats.

- version	0.4.3
- date		2017-01-12
- author		Dietrich Roland Pehlke (aldus)
- contact	drp@cms-lab.com
- package	Websitebaker/WBCE/LEPTON-CMS - Modules: x_cDate@state		@dev
- notice		Class for modify/transform/format dates.

			The important class-functions/vars are:

			public vars:
			$d->setLanguage = Array ($key, $key, ...);
			
			public functions:
			$d->toHTML		( $optional_time_stamp );
			$d->transform	( $aPreFormatedDate );
			$d->parse_string( &$aStr, $aOptionalPattern_for_search );
			$d->format		( $any_format_for_output );
			$d->set_wb_lang	( a_WB_languageKey );
			$d->test_locale ( aLangKey, aBoolean );

### example(-s)

			//	new instance
			$d = new c_date();

			//	setting the format
			$d->format="%A, %d. <font style='color:#900;'>%B</font> %Y";

			// This will return the date-string in the given format.
			//	e.g. below: 11. März 1966
			$d->transform ("11/03/1966");

			// 	This will return the current time in the format
			$d->toHTML();

			//	This also
			$d->toHTML ( TIME() );

			//	This will set a new Language, e.g. italy
			$d->setLanguage ( array ("it_IT", "italiy", "it_IT@euro") );

			//	This will change all dates in a given string (pass by reference!).
			$d->parse_string ("At 30.01.98 the new book of Mr. Unknown comes ...");

			//	For the use in Websitebaker you can use "set_wb_lang".
			//	Supported values at this time are: DE, EN, NL, IT, FR
			$d->set_wb_lang ( LANGUAGE );

			//	This one will look for a languagekey inside all
			//	installed locales and then use them
			$d->test_locale("de_AT", true);

#### Versions
#### 0.4.3 - 2017-01-12
- Bugfix for regExpr.
- Minor textchanges inside REDME and comments.

#### 0.4.2 - 2013-05-04
- Add de_DE.UTF-8
- Lepton 1.1.4 support

#### 0.4.1 - 2012-03-29
- Change regEx-function inside the parse_string-function to preg_match_all.

#### 0.4.0 - 2011-06-25
- Add GUID.

#### 0.3.0 - 2008-08-20
- Add public function "test_locale".	

####  0.2.0 - 2008-08-19
- Add public function and constances. See file "include.php" for details.

#### 0.1.0 - 2008-08-17
- First alpha run.

