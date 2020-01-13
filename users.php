<?php

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: <origin>');
header('Access-Control-Allow-Origin: http://127.0.0.1:8001');

$usernames = [
    'amir', 'arsin', 'javad', 'nazanin', 'majid', 'elnaz',
    'johnDoeAsl', 'johnDoe12', 'johnDoe15', 'johnDoe14', 'johnDoe3', 'johnDoe2', 'johnDoe1', 'janeDoe', 'sajed', 'sajad', 'sakbar', 'elias',
    'asqar', 'dariosh', 'javadaskari', 'samn', 'mahsti', 'elmira'
];


$results = array_values(array_filter($usernames, function ($name) {

    return strpos($name, $_GET['q']) === 0;
}));

echo json_encode($results);
