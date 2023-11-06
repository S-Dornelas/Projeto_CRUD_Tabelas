<h1>Cadastrar Marcas</h1>

<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for=""> Nome da Marcas</label>
        <input type="text" name="nome_marca" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>