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
$f3->route('GET /', function($f3) {
    // -> is like . notation (set a title variable to the string- "All About Templating")
    $f3->set('title', 'All About Templating');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');

    // create a far free array called bookmarks
    $f3->set('bookmarks', array('http:google.com', 'http:linkedin.com', 'http:gmail.com'));

    // define an associative array of desserts
    $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'Vanilla Custard', 'strawberry' => 'Strawberry Shortcake'));

    // conditional content
    $f3->set('preferredCustomer', true);
    $f3->set('lastLogin', strtotime('-1 week'));

    // create a new view object by instantiating the fat-free templating class
    $view = new Template();

    // on the object template we render the home page through this route
    echo $view->render('views/home.html');
});


// fun Fat-Free
$f3->run();