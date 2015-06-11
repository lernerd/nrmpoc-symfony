<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);

$response->headers->set('Content-Type', 'application/json');
$response->headers->set('Access-Control-Allow-Origin', '*');
$response->headers->set("Access-Control-Allow-Credentials", "true");
$response->headers->set('Access-Control-Allow-Headers', 'X-Requested-With');
$response->headers->set('Access-Control-Allow-Headers', 'Content-Type');
$response->headers->set("Access-Control-Allow-Methods", "GET, POST, DELETE, PUT, PATCH, OPTIONS");
$response->headers->set("Access-Control-Allow-Origin", "*");

$response->send();
$kernel->terminate($request, $response);
