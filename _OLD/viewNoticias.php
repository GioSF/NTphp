<?php

ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

echo 'Teste 01';

//include_once '../controller/controllerNoticias.php';
include_once 'http://localhost/_Aula_Topicos_II/SiteNoticias/SiteNoticias/controller/controllerNoticias.php';
echo 'Teste 02';


$objcontrollerNoticias = new controllerNoticias();
echo 'Teste 03';
$resultado01 = $objcontrollerNoticias->listaNoticias();
   echo 'Teste 04'; 
    $row01 = $resultado01->fetch_array(MYSQLI_ASSOC);
    echo 'Teste 05';
    //Imprime as noticias
    echo 'Teste 06';
    
    $resultado01->close();
echo 'Teste 07';
//    
//elseif ( ($resultado01 = $objcontrollerNoticias->listaNoticias()) === false ){
//    printf("Erro: %s <br/>", $this->verificaLogin->error);
//    echo 'Teste 03';
//    exit();
//}

echo 'Teste 04';
$objcontrollerNoticias->close();

?>

