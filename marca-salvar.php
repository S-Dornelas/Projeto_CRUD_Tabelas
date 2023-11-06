<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO marca (nome_marca) VALUES ('". $_POST['nome_marca'] ."')";
            $res = $conn->query($sql);

            if ($res==true) {
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            } else {
                echo "<script>alert('ERRO! :( ... Não foi possivel realizar o cadastro!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }
            break;
        case 'editar':
            $sql = "UPDATE marca SET nome_marca='".$_POST['nome_marca']."' WHERE cod_marca=".$_POST["cod_marca"];

            $res = $conn->query($sql);

            if ($res==true) {
                echo "<script>alert('Cadastro editado com sucesso!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            } else {
                echo "<script>alert('ERRO! :( ... Não foi possivel realizar a edição!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM marca WHERE cod_marca=".$_REQUEST['cod_marca'];

            $res = $conn->query($sql);

            if ($res==true) {
                echo "<script>alert('Cadastro excluido com sucesso!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            } else {
                echo "<script>alert('ERRO! :( ... Não foi possivel realizar a exclusão!');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }
            break;        
    }
?>