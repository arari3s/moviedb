<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/popular?api_key=' . $api_key);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$popular = json_decode($result, true);

$popular = $popular['results'];
