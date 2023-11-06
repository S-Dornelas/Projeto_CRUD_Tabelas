<h1>Lista de Modelos</h1>

<?php 
    $sql = "SELECT * FROM modelo AS mo 
        INNER JOIN marca AS ma
        ON mo.id_marca = ma.cod_marca";
    
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<p>Foi encontrado <b>$qtd</b> resultado(s).</p>";
        echo "<table class='table table-border table-striped table-hover'>";
        echo "<tr>";
        echo "<td>#<td>";
        echo "<td>Marca<td>";
        echo "<td>Modelo<td>";
        echo "<td>Cor<td>";
        echo "<td>Ano<td>";
        echo "<td>Placa<td>";        
        echo "<td>Ação<td>";        
        echo "</tr>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->cod_modelo . "<td>";
            echo "<td>" . $row->nome_marca . "<td>";
            echo "<td>" . $row->nome_modelo . "<td>";
            echo "<td>" . $row->cor_modelo . "<td>";
            echo "<td>" . $row->ano_modelo . "<td>";
            echo "<td>" . $row->placa_modelo . "<td>";            
            echo "<td>
                <button onclick=\"location.href='?page=modelo-editar&cod_modelo=".$row->cod_modelo."';\" class='btn btn-primary'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=modelo-salvar&acao=excluir&cod_modelo=".$row->cod_modelo."';}else{false}\" class='btn btn-danger'>Excluir</button>
            <td>";
            echo "</tr>";
        }
    }else {
        echo "Não foi encontrado resultados.";
    }

?>