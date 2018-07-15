<?php

class noticiaController extends Controle {

    public function listar() {
        # carrega o modelo Usuario
        # que est� na pasta modelos
        $this->modelo('noticiasModel');

        # defino uma vari�vel para
        # receber a lista de usu�rios
        $lista = array();

        # uso o m�todo bind para vincular
        # a vari�vel lista dentro da
        # vis�o.
        $this->visao->bind('lista', $lista);

        # a partir de agora, toda altera��o
        # na vari�vel lista � refletida
        # na vari�vel lista dentro da vis�o
        # Uso o modelo para listar as
        # noticias cadastrados no banco
        $lista = $this->noticiasModel->listarNoticias();

        # indico a vis�o para renderizar 
        # a lista de noticias no navegador
        $this->visao->set('titulo', 'Listar Notícias');
        $this->visao->render('noticias/noticias');
    }

    public function buscar() {

        $idNoticia = Request::get('idNoticia');

        $this->modelo('noticiasModel');
        $lista = array();
        $this->visao->bind('lista', $lista);
        $lista = $this->noticiasModel->buscarNoticias($idNoticia);
        $this->visao->set('titulo', 'Última Notícia');
        $this->visao->render('noticias/noticia');
    }

    public function prepararIncluir() {

        $this->visao->set('titulo', 'Incluir Notícia');
        $this->visao->render('noticias/incluir');

        die;
    }

    public function incluir() {

        $titulo = Request::get('titulo');
        $texto = Request::get('texto');
        $imagem = Request::get('imagem');
        $idUsuario = Request::get('idUsuario');
        
        $this->modelo('noticiasModel');
        $this->noticiasModel->incluirNoticia($titulo, $texto, $imagem, $idUsuario);
        $this->visao->set('titulo', 'Noticias sobre quadrinhos');
        $this->visao->render('teste');

        die;
    }

}
