<?php

require_once 'DB.php';
require_once 'City.php';
require_once 'Country.php';


// connect to the database
DB::connect('127.0.0.1', 'world', 'root', '');

// query to select one country
$query = "
    SELECT *
    FROM `countries`
    WHERE `code_alpha2` = ?
";

// bindings (1 question mark -> 1 element of array)
$values = ['CZ'];

// run the query, get a Country object
$country = DB::selectOne($query, $values, 'Country');

// display the output
var_dump($country->cities);

include 'view.php';