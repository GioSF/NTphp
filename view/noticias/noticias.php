        <?php include_once './_misc/topo.php'; ?>

        <section>
            <table align="left" border="0">
                <?php foreach($lista as $listaNoticias): ?>
                <tr><td colspan="2"><?php echo $listaNoticias['titulo']; ?><br></td></tr>
                <tr>
                    <td><img src="./_img/<?php echo $listaNoticias['imagem']; ?>" width="50"><br></td>
                    <td>
                        <a href="index.php?controller=noticia&action=buscar&idNoticia=<?php echo $listaNoticias['idNoticia']; ?>">
                        <?php echo substr($listaNoticias['texto'], 0, 80) . " ..."; ?>
                        </a>
                        <br>
                    </td>
                </tr>
                <tr><td colspan="2"><?php echo 'Autor: ' . $listaNoticias['nome']; ?><br></td></tr>
                <tr><td colspan="2">&nbsp;<br></td></tr>
                <?php endforeach; ?>
                </table>
        </section>

        <?php include_once './_misc/rodape.php'; ?>