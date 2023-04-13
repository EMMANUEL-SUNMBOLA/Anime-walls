<?php

function fetchimg(){

    $curl = curl_init("https://api.catboys.com/img");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($curl);
    $data = json_decode($result);

    return $data -> url;
}