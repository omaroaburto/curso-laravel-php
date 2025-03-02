<?php

declare(strict_types=1);
class University
{
    public string $name;
    public string $country;
    public string $region;
    public function __construct(string $name, string $country, string $region)
    {
        $this->name = $name;
        $this->country = $country;
        $this->region = $region;
    }
}

$university = new University("Universidad de Concepción", "Chile", "Bío-Bío");
#object to json
$jsonUniversity = json_encode($university, JSON_UNESCAPED_UNICODE);
#echo $jsonUniversity;

$jsonCareer = '{"name":"engeneer","nYears":2,"city":"concepción"}';
#json to object
$objectCareer = json_decode($jsonCareer);
#print_r($objectCareer);

$arrayStreamer = [
    "name"=>"Juanito player",
    "plataform"=>"twitch.tv",
    "games"=>["Albion Online", "DOTA2", "Dark Souls 2"]
];
#array to json
$jsonStreamer = json_encode($arrayStreamer);
echo $jsonStreamer;