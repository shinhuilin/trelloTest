<?php

$data = json_decode(file_get_contents('php://input'), true);
if (isset($data["challenge"])) {
    $message = [
        "challenge" => $data["challenge"]
    ];

    header('Content-Type: application/json');
    echo json_encode($message);
}

?>
