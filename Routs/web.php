<?php

use App\Core\Routing\Routs;

$Router = new Routs();

$Router::get("/", 'HomeController@show');

// All Road
$Router::get("/road/frontend", 'RoadController@show');
$Router::get("/road/frontend/pdf", 'RoadController@pdf');

$Router::get("/road/backend", 'RoadController@show');
$Router::get("/road/backend/pdf", 'RoadController@pdf');

$Router::get("/road/fullstack", 'RoadController@show');
$Router::get("/road/fullstack/pdf", 'RoadController@pdf');

$Router::get("/road/javascript", 'RoadController@show');
$Router::get("/road/javascript/pdf", 'RoadController@pdf');

$Router::get("/road/cpp", 'RoadController@show');
$Router::get("/road/cpp/pdf", 'RoadController@pdf');

$Router::get("/road/java", 'RoadController@show');
$Router::get("/road/java/pdf", 'RoadController@pdf');



// All Topic
$Router::get("/topic/frontend", 'TopicsController@show');
$Router::get("/topic/backend", 'TopicsController@show');
$Router::get("/topic/fullstack", 'TopicsController@show');
$Router::get("/topic/javascript", 'TopicsController@show');
$Router::get("/topic/cpp", 'TopicsController@show');
$Router::get("/topic/java", 'TopicsController@show');

// 30-Days Topic
$Router::get("/javascript", 'Learn30DaysController@show');
$Router::get("/javascript/day$1-30", 'Learn30DaysController@days');

