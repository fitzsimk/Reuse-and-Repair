<?php
require_once __DIR__ .'/../vendor/autoload.php';
// require('../server/Database.php');
require('../server/CategoryHandler.php');
require('../server/BusinessHandler.php');
require('../server/SubcategoryHandler.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;


$app = new Silex\Application();

$app['debug'] = true;

// Request::setTrustedProxies(array($ip));

// Create
$app->GET('/', function (Application $app, Request $request) {

    return new Response("<p>All good</p>!", 200);
});
// Category Routes
// All categories
// Create
$app->POST('/newcategory', function (Application $app, Request $request) {

    return new Response('How about implementing categoryCategoryIdPut as a POST method ?');
});

// Read All
$app->GET('/categories', function (Application $app, Request $request) {
    $handler = New CategoryHandler();
    $result = $handler->getAll();
    
     return new Response($result, 200);
});
// Returns all businesses
$app->GET('/businesses', function (Application $app, Request $request) {
    $handler = New BusinessHandler();
    $result = $handler->getAll();

    return new Response($result, 200);

    //  return new Response('How about implementing businessReuseGet as a GET method ?');
});

$app->GET('/categories/{category}', function (Application $app, Request $request) {
    return new Response('How about implementing categoryAllGet as a GET method ?');
});

// update
$app->PUT('/categories/{category}', function (Application $app, Request $request) {


    return new Response('How about implementing categoryCategoryIdDelete as a DELETE method ?');
});

// destroy
$app->DELETE('/categories/{category}', function (Application $app, Request $request) {


    return new Response('How about implementing categoryCategoryIdDelete as a DELETE method ?');
});


// subcategory routes
// Returns all subcategories
$app->GET('/subcategories', function (Application $app, Request $request) {
    
    $handler = New SubcategoryHandler();
    $result = $handler->getAll();

    return new Response($result, 200);
});

$app->GET('{category}/subcategories', function (Application $app, Request $request, $category) {
    
    $handler = New SubcategoryHandler();
    $result = $handler->getByCategory($category);

    return new Response($result, 200);
});

$app->PUT('/subcategories', function (Application $app, Request $request, $subcategory_name) {


    return new Response('How about implementing subcategoryAddPut as a PUT method ?');
});

$app->POST('/subcategories/{subcategory}', function (Application $app, Request $request, $subcategory_id) {


    return new Response('How about implementing subcategorySubcategoryEditPost as a POST method ?');
});


$app->DELETE('/subcategories/{subcategory}', function (Application $app, Request $request, $subcategory_id) {


    return new Response('How about implementing subcategorySubcategoryEditDelete as a DELETE method ?');
});


$app->GET('/businesses/{category}', function (Application $app, Request $request) {


    return new Response('How about implementing businessRepairGet as a GET method ?');
});


$app->PUT('/businesses', function (Application $app, Request $request) {


    return new Response('How about implementing businessAddPut as a PUT method ?');
});


// optional geolocation in body
$app->GET('/businesses/{category}/{subcategory}', function (Application $app, Request $request, $subcategory) {


    return new Response('How about implementing businessRepairSubcategoryGet as a GET method ?');
});





$app->GET('/businesses/{business_id}', function (Application $app, Request $request, $business_id) {


    return new Response('How about implementing businessBusinessIdGet as a GET method ?');
});


$app->POST('/business', function (Application $app, Request $request, $user_id, $business_id) {


    return new Response('How about implementing businessBusinessIdEditPost as a POST method ?');
});


$app->DELETE('/business/{business_id}/edit', function (Application $app, Request $request, $business_id) {


    return new Response('How about implementing businessBusinessIdEditDelete as a DELETE method ?');
});


$app->run();
