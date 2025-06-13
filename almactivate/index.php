<?php

header("Content-Type: application/json");

if( isset($_POST)) {
    echo json_encode(
        [
            'response' => [
                'code' => 300,
                'buyer' => true,
                'message' => 'Success',
            ]
        ]
    );
}
die();