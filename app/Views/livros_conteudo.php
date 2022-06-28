<?php include 'cabecalho.php'; ?>

<?php 

//print_r($livro_info);  //< esse aqui retorna o array com o conteudo no bd.

// agora vamos dar um foreach para concatenar e dar o echo com html

foreach($livro_info as $livro)
{

    

    echo "<tr>";

    echo "<td>".$livro->titulo."</td>";

    echo "</tr>";
    
}



?>
 




















<?php include 'rodape.php'; ?>