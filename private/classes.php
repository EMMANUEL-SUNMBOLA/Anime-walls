<?php

function fetchimg(){

    $curl = curl_init("https://api.catboys.com/img");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($curl);
    $data = json_decode($result);

    if($result){
        return $data -> url;
    }else{
        return curl_errno($curl) . curl_errno($curl);
    }
}

function fetchfact(string $anime){
    $curl = curl_init("https://anime-facts-rest-api.herokuapp.com/api/v1/$anime");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $fact = json_decode($result);
    return $fact -> fact ; 
}


function uselessfact(){
    $curl = curl_init("https://uselessfacts.jsph.pl/api/v2/facts/random?language=en");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    if(curl_exec($curl)){
        $data = json_decode(curl_exec($curl), true);
        return $data["text"];
    }else{
        return curl_errno($curl) . "    " . curl_error($curl);
    }
}