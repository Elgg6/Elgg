<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'admin:develop_tools' => 'Tools',
	
	// menu
	'admin:develop_tools:inspect' => 'Inspect',
	'admin:inspect' => 'Inspect',
	'admin:develop_tools:unit_tests' => 'Unit Tests',
	'admin:develop_tools:entity_explorer' => 'Entity Explorer',
	'admin:developers' => 'Developers',
	'admin:developers:settings' => 'Settings',
	'menu:entity_explorer:header' => 'Entity explorer',
	'menu:developers_inspect_viewtype:header' => 'Inspect view types',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Control your development and debugging settings below. Some of these settings are also available on other admin pages.',
	'developers:label:simple_cache' => 'Use simple cache',
	'developers:help:simple_cache' => 'Turn off this cache when developing. Otherwise, changes to your CSS and JavaScript will be ignored.',
	'developers:label:system_cache' => 'Use system cache',
	'developers:help:system_cache' => 'Turn this off when developing. Otherwise, changes in your plugins will not be registered.',
	'developers:label:debug_level' => "Trace level",
	'developers:help:debug_level' => "This controls the amount of information logged. See elgg_log() for more information.",
	'developers:label:display_errors' => 'Display fatal PHP errors',
	'developers:help:display_errors' => "By default, Elgg's .htaccess file suppresses the display of fatal errors.",
	'developers:label:screen_log' => "Log to the screen",
	'developers:help:screen_log' => "This displays elgg_log() output and a DB query count.",
	'developers:show_strings:default' => "Normal translation",
	'developers:show_strings:key_append' => "Translation key appended",
	'developers:show_strings:key_only' => "Show translation key only",
	'developers:label:show_strings' => "Show raw translation strings",
	'developers:help:show_strings' => "This displays the translation strings used by elgg_echo().",
	'developers:label:wrap_views' => "Wrap views",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype.",
	'developers:label:log_events' => "Log events",
	'developers:help:log_events' => "Write events to the log. Warning: there are many of these per page.",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Off',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Warning',
	'developers:debug:notice' => 'Notice',
	'developers:debug:info' => 'Info',
	
	// entity explorer
	'developers:entity_explorer:help' => 'View information about entities and perform some basic actions on them.',
	'developers:entity_explorer:guid:label' => 'Enter the guid of the entity to inspect',
	'developers:entity_explorer:info:attributes' => 'Attributes',
	'developers:entity_explorer:info:metadata' => 'Metadata',
	'developers:entity_explorer:info:relationships' => 'Relationships',
	'developers:entity_explorer:info:owned_acls' => 'Owned Access Collections',
	'developers:entity_explorer:info:acl_memberships' => 'Access Collections Memberships',
	'developers:entity_explorer:delete_entity' => 'Remove this entity',
	'developers:entity_explorer:inspect_entity' => 'Inspect this entity',
	'developers:entity_explorer:view_entity' => 'View this entity on the site',
	
	// inspection
	'developers:inspect:actions' => 'Actions',
	'developers:inspect:events' => 'Events',
	'developers:inspect:menus' => 'Menus',
	'developers:inspect:priority' => 'Priority',
	'developers:inspect:seeders' => 'Seeders',
	'developers:inspect:simplecache' => 'Simple Cache',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Views',
	'developers:inspect:views:all_filtered' => "<b>Note!</b> All view input/output is filtered through these Events:",
	'developers:inspect:views:input_filtered' => "(input filtered by event handler: %s)",
	'developers:inspect:views:filtered' => "(filtered by event handler: %s)",
	'developers:inspect:widgets' => 'Widgets',
	'developers:inspect:widgets:context' => 'Context',
	'developers:inspect:functions' => 'Functions',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'File',
	'developers:inspect:middleware' => 'File',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Name',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "Request Statistics (does not include the shutdown event)",
	'developers:event_log_msg' => "%s: '%s, %s' in %s",
	'developers:log_queries' => "DB queries: %s",
	'developers:boot_cache_rebuilt' => "The boot cache was rebuilt for this request",
	'developers:elapsed_time' => "Elapsed time (s)",

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
