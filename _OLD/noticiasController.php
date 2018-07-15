<?php

//include_once '../model/modelNoticias.php';
include_once 'http://localhost/_Aula_Topicos_II/SiteNoticias/SiteNoticias/model/modelNoticias.php';


class controllerNoticias extends NoticiasProp{
    
    public function listaNoticias(){
        $objmodelNoticias = new modelNoticias();    
        return $objmodelNoticias->listaNoticias();
    }
}

?>