<?php

$apiUrl = "https://pokeapi.co/api/v2/pokemon";

$response = file_get_contents($apiUrl);

$data = json_decode($response, true);
