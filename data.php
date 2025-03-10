<?php

$apiUrl = "https://pokeapi.co/api/v2/pokemon";

// Mengambil data dari API
$response = file_get_contents($apiUrl);

// Mengubah JSON menjadi array
$data = json_decode($response, true);

?>