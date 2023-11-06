<h1>Lista de Marcas</h1>

<?php 
    $sql = "SELECT * FROM marca ";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<p>Foi encontrado <b>$qtd</b> resultado(s).</p>";
        echo "<table class='table table-border table-striped table-hover'>";
        echo "<tr>";
        echo "<td>#<td>";
        echo "<td>Nome da Marca<td>";
        echo "<td>Ações<td>";
        echo "</tr>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->cod_marca . "<td>";
            echo "<td>" . $row->nome_marca . "<td>";
            echo "<td>
                <button onclick=\"location.href='?page=marca-editar&cod_marca=".$row->cod_marca."';\" class='btn btn-primary'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=marca-salvar&acao=excluir&cod_marca=".$row->cod_marca."';}else{false}\" class='btn btn-danger'>Excluir</button>
            <td>";
            echo "</tr>";
        }
    }else {
        echo "Não foi encontrado resultados.";
    }

?>