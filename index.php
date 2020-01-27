<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * URL: http://sjamieson.greenriverdev.com/328/templating/index.php
 * Date: January 27, 2020
 * Last Modified: January 27, 2020
 */

// start a session - ONLY ever need to put this in our controller (all other pages get by transference)
//session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

// instantiate F3
$f3 = Base::instance(); // invoke static

// define a default route
// when the user navigates to the route directory of the project
// this is what they should see
$f3->route('GET /', function() {
    echo "<h1>Hello there</h1>";
//    // create a new view object by instantiating the fat-free templating class
//    $view = new Template();
//
//    // on the object template we render the home page through this route
//    echo $view->render('views/home.html');
});


// fun Fat-Free
$f3->run();