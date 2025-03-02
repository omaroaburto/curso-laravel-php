<?php
declare(strict_types=1);
interface SendInterface{
    public function send(string $message):string;
}
interface SaveInterface{
    public function save();
}

class Document implements SendInterface, SaveInterface{ 
    public function send(string $message):string{
        return "Se ha enviado el documento $message.<br>";
    }
    public function save():void{
        echo "Se ha guardado el archivo.";
    }
}

$documento = new Document();
echo $documento->send("choco_perrito");
$documento->save();