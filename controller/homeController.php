<?php


class homeController extends Controle {
    
     /**
     * M�todo listar que ser�
     * executado pela URL.
     */ 
    
        public function index() {
        
        # Agora esse m�todo usa o mecanismo de vis�o

        # Cria uma vari�vel chamada "titulo"
        # para ser utilizada dentro do arquivo
        # de vis�o do MVC
        $this->visao->set('titulo', 'Teste da visao');

        # Diz ao nosso mecanismo de vis�o
        # para renderizar os seus dados
        # usando o arquivo de vis�o 
        # visoes/noticias/noticias.php
        
        $this->visao->render('teste');
    }
    
}

?>