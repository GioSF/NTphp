<?php

//include_once '../_misc/UniversalConnect.php';
include_once 'http://localhost/_Aula_Topicos_II/SiteNoticias/SiteNoticias/_misc/UniversalConnect.php';

//Classe Abstrata
//Geters e Seters
abstract class NoticiasProp{
    
    private $NoticiaTitulo;
    
    public function getNoticiaTitulo(){ 
        return $this->NoticiaTitulo;
    }
    
    public function setNoticiaTitulo($NoticiaTitulo){ 
        $this->NoticiaTitulo = $NoticiaTitulo;
    }
    
}


//Interface
interface iModelNoticias{
    function listaNoticias();
}

//Modelo
class modelNoticias implements iModelNoticias{
    
    private $objConectar01;
    
    public function listaNoticias() {
        
        $this->objConectar01 = UniversalConnect::MySQLConectar();
        
        //Cria o comando SQL
	$sql01 =  " select noticias.titulo, noticias.texto, noticias.imagem, "
                . " usuarios.nome from noticias, usuarios where "
                . " noticias.idUsuario = usuarios.idUsuario ";

        return $this->objConectar01->query($sql01);
        
    }
    
}
