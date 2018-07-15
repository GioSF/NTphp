<?php

/**
 * A classe vis�o � respons�vel por armazenar dados
 * para apresenta��o num determinado arquivo de
 * vis�o PHP.
 */
class Visao {

    /**
     *  Lista de dados para serem recuperados
     *  e impressos dentro de uma view.
     */
    public $dados = array();
    
    /**
     * Adiciona o valor de uma vari�vel com um nome
     * dentro da lista de dados.
     * 
     * @param string $nome
     * @param mixed $valor
     * @return void
     */
    public function set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }
    
    /**
     * Faz a mesma coisa que o m�todo set, mas
     * usando refer�ncias, permitindo que as
     * altera��es na vari�vel fora da classe
     * sejam realizadas tamb�m no valor
     * armazenado na lista de dados.
     *
     * @param string $nome
     * @param mixed $valor
     * @return void
     */
    
    //bind = ligar
    public function bind($nome, &$valor) {

    	# Armazena o valor da vari�vel como
    	# refer�ncia.
        //http://php.net/manual/pt_BR/language.references.pass.php
        $this->dados[$nome] = &$valor;
        
    }
    
    /**
     * Recupera um valor armazenado na lista
     * de dados atrav�s de seu nome.
     *
     * @param string $nome
     * @return mixed
     */
    public function get($nome='') {

    	# Se n�o existir nenhuma vari�vel com
    	# o nome indicado como par�metro,
    	# o m�todo retorna uma string vazia.
        if ($nome == '') {
            return $this->dados;
        }
        else {
            if (isset($this->dados[$nome]) && ($this->dados[$nome] != '')) {
                return $this->dados[$nome];
            }
            else {
                return '';
            }
        }
    }
    
    /**
     * Renderiza um arquivo de vis�o espec�fico com
     * as vari�veis armazenadas internamente. Como 
     * resultado, envia cont�do HTML para o navegador
     * do usu�rio.
     *
     * @param string $arquivo
     * @return void
     */
    public function render($arquivo) {
        
        # Transforma cada item armazenado
        # na lista de dados em vari�veis locais
        foreach($this->get() as $chave => $item) {
            
            //$$ Variavel variavel.
            //http://php.net/manual/pt_BR/language.variables.variable.php
            $$chave = $item;
        }
        
        # Procura o arquivo php dentro da pasta
        # visoes. Se o arquivo existir, inclui o mesmo
        # dentro da fun��o, executando e rederizando
        # o conte�do dele.
        if (file_exists("view/{$arquivo}.php")) {
            include "view/{$arquivo}.php";
        }
        
    }
}