<?php
// Pega IP do visitante
$ip = $_SERVER['REMOTE_ADDR'];
$data = date("Y-m-d H:i:s");

// Salva no arquivo logs.txt
$log = "IP: $ip | Data: $data\n";
file_put_contents("logs.txt", $log, FILE_APPEND);

// Retorna uma imagem transparente (para não aparecer nada visual)
header("Content-Type: image/png");
echo base64_decode(
    "iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR4nGP4//8/AwAI/AL+vTwZjgAAAABJRU5ErkJggg=="
);
?>
