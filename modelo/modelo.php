<?php
    class modelo{
        private $PDO;
        public function __construct()
        {
            require_once("d://xampie/htdocs/Garden/modelo/conexion.php");
            $con = new conexion();
            $this->PDO = $con->conexion();
        }
    }

?>