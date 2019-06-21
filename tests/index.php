<?php
    $data = [];
    $data['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'];
    $data['POST'] = $_POST;
    $data['GET'] = $_GET;
    $data['RAW'] = file_get_contents('php://input', 'r');

    echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
