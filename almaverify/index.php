<?php

// header("Content-Type: application/json");

if( isset($_REQUEST) ){
    echo json_encode(
        [
            'response' => [
                'code' => 200,
                'buyer' => true,
                'message' => 'Success',
            ]
        ]
    );
}
die();