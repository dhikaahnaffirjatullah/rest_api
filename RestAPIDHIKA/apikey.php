<?php

function getKey() {
    return ["Dhika", "Ahnaf", "78"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Context-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "THE RAID", "konten" => "film ini film ke-9"],
        ["title" => "THE RAID 2", "konten" => "film ini film ke-1"],
        ["title" => "AVENGER", "konten" => "film ini film ke-2"]
    ];
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "APIKEY ga valid!!", null);
}

?>