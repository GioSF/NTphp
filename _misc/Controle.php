<?php

/**
 * 
 * Classe controle base para todos
 * os controles do nosso MVC em PHP.
 * Ela serve para compartilhar código
 * entre todos os controles.
 */
class Controle {
    
    /**
     * Variável usada como mecanismo
     * de renderização de visões.
     * O objeto Visao do arquivo visao.php
     */
    protected $visao = null;

    /**
     * Construtor da classe, inicializando o
     * mecanismo de visÃ£o dos controles
     */
    public function __construct() {
        $this->visao = new Visao();
    }
    
    
    /**
     * Método para incluir e carregar
     * um modelo dinamicamente dentro
     * de um controle.
     */
    public function modelo($nome) {

        # procura o arquivo modelo dentro
        # da pasta modelos.
        if (file_exists("model/{$nome}.php")) {
            include_once "model/{$nome}.php";
        }
        else {
            die("Modelo {$nome} não encontrado na pasta model.");
        }
        # se o arquivo existir, instancia o objeto
        # e usa o mesmo como propriedade do controle
        $this->$nome = new $nome();
    }
    
    
    /**
     * Método index padrão usado
     * em todos os controles.
     */
    public function index() {
        die('Comando index do controle base');
        
    }

}
