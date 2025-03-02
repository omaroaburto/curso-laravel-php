<?php
declare(strict_types=1);
interface GetInfo{
    public function GetInfo(): string;
}

class Address implements GetInfo{
    protected string $address;
    public function __construct(string $address){
        $this->address = $address;
    }
    public function GetInfo(): string{
        return $this->address;
    }
}

class WebSite implements GetInfo{
    protected string $url;
    public function __construct(string $url){
        $this->url = $url;
    }
    public function GetInfo(): string{
        return file_get_contents($this->url);
    }
}

function printInfo(GetInfo $site){
    echo $site->GetInfo();
}

$address = new Address("Yacimiento Mineral Cerro Negro");
$webSite = new WebSite("https://google.com");
printInfo($webSite);