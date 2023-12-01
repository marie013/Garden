<?php
class controlador{
    private $modelo;
    public function __construct()
        {
            require_once("d://xampie/htdocs/Garden/modelo/modelo.php");
            $this->modelo = new modelo();
        }
        public function guardar(producto){
        }
        
}