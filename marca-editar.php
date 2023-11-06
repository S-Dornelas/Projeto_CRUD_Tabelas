<h1>Editar Marca</h1>

<?php 
    $sql = "SELECT * FROM marca WHERE cod_marca=".$_REQUEST['cod_marca'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="cod_marca" value="<?php print $row->cod_marca; ?>">
    
    <div class="mb-3">
        <label for=""> Nome da Marcas</label>
        <input type="text" name="nome_marca" value="<?php print $row->nome_marca; ?>" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>