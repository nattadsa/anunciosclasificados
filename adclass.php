<?php

class Anuncios {

     public $tituloAnuncio;
     public $textoAnuncio;
     public $autor;





     public function crearDatosAnuncio($title,$ad,$adautor){


        $this->tituloAnuncio = $title;

        $this ->textoAnuncio = $ad;

        $this ->autor =$adautor;

     }

     public function mostrarDatosAnuncio(){


        echo "Titulo: " . $this->tituloAnuncio . "<br>";
        echo "Anuncio: " . $this ->textoAnuncio .  "<br>";

        echo "Autor:  " . $this ->autor . "<br>";

     }


}










?>
