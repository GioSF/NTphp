        <?php include_once './_misc/topo.php'; ?>

        <section>
            <table align="left" border="0">
                <tr><td colspan="2"><?php echo $lista['titulo']; ?><br></td></tr>
                <tr>
                    <td><img src="./_img/<?php echo $lista['imagem']; ?>" width="50"><br></td>
                    <td><?php echo $lista['texto'] ?><br></td>
                </tr>
                <tr><td colspan="2"><?php echo 'Autor: ' . $lista['nome']; ?><br></td></tr>
                <tr><td colspan="2">&nbsp;<br></td></tr>
                </table>
        </section>

        <?php include_once './_misc/rodape.php'; ?>