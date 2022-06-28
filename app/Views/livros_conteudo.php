<?php include 'cabecalho.php'; ?>


<table class="table table-hover">
  <thead>
    <tr>
            <th scope="col">Título</th>
            <th scope="col">Código</th>
            <th scope="col">Data de Registro</th>
            <th scope="col">Data de Publicação</th>
            <th scope="col">Autor</th>
            <th scope="col">Editora</th>
            <th scope="col">Edição</th>
            <th scope="col">Gênero</th>
            <th scope="col">Idioma</th>
            <th scope="col">Volume</th>
            <th scope="col">Descrição</th>
        </tr>
    </tfoot>
    <tbody>
<?php
//print_r($livro_info);  //< esse aqui retorna o array com o conteudo q buscamos no bd.
// agora vamos dar um foreach para concatenar e dar o echo com html
foreach($livro_info as $livro)
{

    echo "<tr>";
    echo "<td>".$livro->titulo."</td>";
    echo "<td>".$livro->codigo."</td>";
    echo "<td>".$livro->data_registro."</td>";
    echo "<td>".$livro->data_publicacao."</td>";
    echo "<td>".$livro->autor."</td>";
    echo "<td>".$livro->editora."</td>";
    echo "<td>".$livro->edicao."</td>";
    echo "<td>".$livro->genero."</td>";
    echo "<td>".$livro->idioma."</td>";
    echo "<td>".$livro->volume."</td>";
    echo "<td>".$livro->descricao."</td>";
    echo "</tr>";
    
}
?>
 </tbody>
</table>



















<?php include 'rodape.php'; ?>