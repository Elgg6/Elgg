<?php

/**
 * Configuration array for Elgg installation on CI
 */
return [

	// database settings
	'dbuser' => getenv('ELGG_DB_USER'),
	'dbpassword' => getenv('ELGG_DB_PASS'),
	'dbname' => getenv('ELGG_DB_NAME'),
	'dbprefix' => getenv('ELGG_DB_PREFIX'),
	'dbencoding' => getenv('ELGG_DB_ENCODING') ? : 'utf8mb4',
	'dbport' => getenv('ELGG_DB_PORT') ? : '3306',
	'dbhost' => getenv('ELGG_DB_HOST') ? : 'localhost',

	// site settings
	'sitename' => getenv('ELGG_SITE_NAME') ? : 'MarjaneNews',
	'siteemail' => getenv('ELGG_SITE_EMAIL') ? : 'oussamabitaa10@gmail.com',
	'wwwroot' => getenv('ELGG_WWWROOT') ? : 'http://localhost/',
	'dataroot' => getenv('HOME') . '/engine/tests/test_files/dataroot/',

	// admin account
	'displayname' => getenv('ELGG_ADMIN_USER') ? : 'Administrator',
	'email' => getenv('ELGG_ADMIN_EMAIL') ? : 'admin@ci.elgg.org',
	'username' => getenv('ELGG_ADMIN_USER') ? : 'admin',
	'password' => getenv('ELGG_ADMIN_PASS') ? : 'fancypassword',

	// timezone
	'timezone' => 'UTC'
];
