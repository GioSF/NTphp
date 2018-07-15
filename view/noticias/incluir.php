<?php include_once './_misc/topo.php'; ?>

<section>
    <form action="index.php?controller=noticia&action=incluir" method="post">
        <table>
            <tr>
                <td>Título<input type="text" name='titulo' id='titulo' value=''></td>
            </tr>
            <tr>
                <td>Imagem<input type="text" name='imagem' id='imagem' value=''></td>
            </tr>
            <tr>
                <td>idUsuario<input type="text" name='idUsuario' id='idUsuario' value=''></td>
            </tr>
            <tr>
                <td colspan="2"><input type='submit' name='incluir' value='incluir'></td>
            </tr>

        </table>
    </form>

</section>

<?php include_once './_misc/rodape.php'; ?>