<?php
declare(strict_types= 1);
trait EmailSender{
    public function sendEmail():void{
        echo "mensaje enviado.<br>";
    }
}
trait DB{
    public function save(): void{
        echo "Se han guardado los datos en la base de datos.<br>";
    }
}

trait Log{
    public function log(string $message, string $fileName):void{
        if(!file_exists($fileName)){
            file_put_contents($fileName,"");
        }
        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s")."-".$message."\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice{
    use EmailSender, DB, Log;
    public function create():void{
        echo "Se creó la factura.<br>";
        $this->log("Se creó la factura","log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();