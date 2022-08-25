<?php

error_reporting(0);
$name = $_POST['name'];
$email= $_POST['email'];
$celular = $_POST['celular'];
$programa = $_POST['programa'];
$service = $_POST['service'];
$question = $_POST['question'];

$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Enviado por la página del Formulario desde: www.unac.edu.co/formulario" . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()). " \r\n";
$mensaje .= "Carrera elegida: " . $programa. " \r\n";
$mensaje .= "Este mensaje fue enviado por " . $name . " \r\n";
$mensaje .= "Celular: " . $celular. " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Como conocio la UNAC: " . $question. " \r\n";
$mensaje .= "Procesamiento de datos: " . $service. " \r\n";



$para = 'webmaster@unac.edu.co';
$asunto = '- Nuevo Contacto UNAC -';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '<script type="text/javascript">
        alert(" '. $name .' Sus datos han sido registrados correctamente");
        window.location.href="https://www.unac.edu.co";
        </script>';
?> 