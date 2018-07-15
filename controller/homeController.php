<?php


class homeController extends Controle {
    
     /**
     * Método listar que será
     * executado pela URL.
     */ 
    
        public function index() {
        
        # Agora esse método usa o mecanismo de visão

        # Cria uma variável chamada "titulo"
        # para ser utilizada dentro do arquivo
        # de visão do MVC
        $this->visao->set('titulo', 'Teste da visao');

        # Diz ao nosso mecanismo de visão
        # para renderizar os seus dados
        # usando o arquivo de visão 
        # visoes/noticias/noticias.php
        
        $this->visao->render('teste');
    }
    
}

?>