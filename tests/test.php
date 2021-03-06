<?php

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

use OneSite\HttpClient\Tests\TestHttpResponse;

require __DIR__ . '/../vendor/autoload.php';

$testHttpClient = new \OneSite\HttpClient\Tests\TestHttpClient();

/**
 * @var TestHttpResponse $data
 */
$data = $testHttpClient->getEmployees();

var_dump(json_encode($data->getDecodedBody()));

exit;