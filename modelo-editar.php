<h1>Editar Modelo</h1>

<?php 
    $sql_1 = "SELECT * FROM modelo WHERE cod_modelo=".$_REQUEST['cod_modelo'];
    $res_1 = $conn->query($sql_1);
    $row_1 = $res_1->fetch_object();
?>

<form action="?page=modelo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" value="<?php echo $row_1->cod_modelo; ?>" name="cod_modelo">
    <div class="mb-3">
        <label>Marca</label>
        <select name="id_marca" class="form-control">
            <option> - Escolha -</option>
            <?php 
                $sql = "SELECT * FROM marca";
                $res = $conn->query($sql);

                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_object()){
                       if ($row_1->id_marca == $row->cod_marca) {
                        echo "<option value='".$row->cod_marca."'selected>".$row->nome_marca."</option>";
                       }else {
                        echo "<option value='".$row->cod_marca."'>".$row->nome_marca."</option>";
                       }
                    }
                }else {
                    echo "<option> Não há marcas cadastradas</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="nome_modelo" value="<?php echo $row_1->nome_modelo ?>" class="form-control">        
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor_modelo" value="<?php echo $row_1->cor_modelo ?>" class="form-control">        
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="ano_modelo" value="<?php echo $row_1->ano_modelo ?>" class="form-control">        
    </div>
    <div class="mb-3">
        <label>Placa</label>
        <input type="text" name="placa_modelo" value="<?php echo $row_1->placa_modelo ?>" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </form>