<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    'common' => APP_WRAPPER_PATH . 'common'
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	// 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));


/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */


//HTTP_API_VERSION


 
 Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));