<?php

//Cliente.php

include_once './UniversalConnect.php';

class Cliente{
    private $conecta;
    
    public function __construct() {
        //Uma única linha para toda a operação de conexão
        $this->conecta = UniversalConnect::MySQLConectar();
    }
}

$objCliente = new Cliente();

?>