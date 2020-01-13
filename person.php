<?php

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: <origin>');
header('Access-Control-Allow-Origin: http://127.0.0.1:8001');


echo json_encode(['amir', 'arsin', 'javad', 'nazanin', 'majid', 'elnaz']);
