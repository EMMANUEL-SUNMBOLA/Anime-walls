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


function availanime(){
    $curl = curl_init("https://animechan.vercel.app/api/random");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    if(curl_exec($curl)){
        $data = json_decode(curl_exec($curl));
        return $data -> quote;
    }else{
        return curl_errno($curl) . "    " . curl_error($curl);
    }
}