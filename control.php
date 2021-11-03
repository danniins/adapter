<?php

class Support 
{
    function __construct(){}

    public function sendMessage($title, $message, $phoneNumber = '')
    {
        if('' == $phoneNumber) {
            return $this->sendPublic($title, $message);
        } else {
            return $this->sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic($title, $message)
    {
        echo("Mensaje enviado al tablón de anuncios");
    }

    protected function sendPrivate($title, $message, $phoneNumber)
    {
        echo("Mensaje enviado al soporte tecnico <br>");
        echo("El mensaje es de tipo: " . $title . "; con descripción: " . $message);
    }
}

$support = new Support;
$support->sendMessage('Problema', 'No funciona algo', '6755642231');

?>