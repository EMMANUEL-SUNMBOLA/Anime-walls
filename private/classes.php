<?php

function fetchimg(){

    $curl = curl_init("https://api.catboys.com/img");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($curl);
    $data = json_decode($result);

    if(!is_null($data -> url)){
        return $data -> url;
    }
}

function fetchfact(string $anime){
    $curl = curl_init("https://anime-facts-rest-api.herokuapp.com/api/v1/$anime");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $fact = json_decode($result);
    return $fact -> fact ; 
}