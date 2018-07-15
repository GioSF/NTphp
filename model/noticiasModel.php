<?php

/**
 * Classe modelo de noticias. tem o
 * objetivo de conectar ao banco de dados
 * recuperar, inserir, alterar e apagar os
 * dados da tabela noticias
 */
class noticiasModel {

    /**
     * M�todo criado para listar todas as noticias
     * existentes na tabela de noticias do
     * banco de dados.
     */
    public function listarNoticias() {

        // Cria uma conexão usando a configura��o
        // "padrao" da classe MySQLConectar em UniversalConnect.php

        $bdNoticias = UniversalConnect::MySQLConectar();

        $sql01 = " select distinct noticias.idNoticia, noticias.titulo, "
                . "noticias.texto, noticias.imagem, usuarios.nome "
                . "from noticias, usuarios "
                . "where noticias.idUsuario = usuarios.idUsuario ";

        // Monta o Where de acordo com a
        // lista de condi��es. Funciona 
        // apenas com o operador =.
        // Voc� pode melhorar isso.
        // Executa o SQL e retorna a lista de usuarios
        if ($resultado01 = $bdNoticias->query($sql01)) {
            $lista = $resultado01->fetch_all(MYSQLI_ASSOC);
        } else {
            printf("Erro: %s <br/>", $this->verificaLogin->error);
            exit();
        }

        $resultado01->free();
        $bdNoticias->close();

        return $lista;
    }

    /*
      Aqui voc� criaria outros m�todos
      como inserir, salvar e apagar,
      que n�o entram em nosso exemplo
     */

    public function buscarNoticias($idNoticia) {

        $bdNoticias = UniversalConnect::MySQLConectar();

        $sql01 = " select distinct noticias.idNoticia, noticias.titulo, "
                . " noticias.texto, noticias.imagem, usuarios.nome "
                . " from noticias, usuarios "
                . " where noticias.idUsuario = usuarios.idUsuario "
                . " and noticias.idNoticia = {$idNoticia} ";


        if ($resultado01 = $bdNoticias->query($sql01)) {
            $lista = $resultado01->fetch_array(MYSQLI_ASSOC);
        } else {
            printf("Erro: %s <br/>", $this->verificaLogin->error);
            exit();
        }

        $resultado01->free();
        $bdNoticias->close();

        return $lista;
    }

    public function incluirNoticia($titulo, $texto, $imagem, $idUsuario) {

        $bdNoticias = UniversalConnect::MySQLConectar();
        $sql01 = "INSERT INTO noticias (titulo, texto, imagem, idUsuario)"
                . "VALUES ('$titulo','$texto','$imagem','$idUsuario')";
//        
        if ($bdNoticias->query($sql01) === TRUE) {
            printf("Gravado com sucesso: %s <br/>", $sql01);
        } else {
            printf("Erro: %s <br/>", $sql01);
        }

        $bdNoticias->close();
        return $sql01;
    }


}

?>