<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $sql = "INSERT INTO modelo (
                id_marca,
                nome_modelo,
                cor_modelo,
                ano_modelo,
                placa_modelo
            )VALUE (
                ".$_POST["id_marca"].",
                '".$_POST["nome_modelo"]."',
                '".$_POST["cor_modelo"]."',
                '".$_POST["ano_modelo"]."',
                '".$_POST["placa_modelo"]."'                
            )";

        $res = $conn->query($sql);

        if ($res==true) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>location.href='?page=modelo-listar';</script>";
            } else {
        echo "<script>alert('ERRO! :( ... Não foi possivel realizar o cadastro!');</script>";
        echo "<script>location.href='?page=modelo-listar';</script>";
        }
        break;    
        case 'editar':
                $sql = "UPDATE modelo SET 
                id_marca = '" . $_POST['id_marca'] . "', 
                nome_modelo = '" . $_POST['nome_modelo'] . "', 
                cor_modelo = '" . $_POST['cor_modelo'] . "',
                ano_modelo = '" . $_POST['ano_modelo'] . "',               
                placa_modelo = '" . $_POST['placa_modelo'] . "'
                WHERE 
                cod_modelo = '" . $_POST['cod_modelo'] . "'";
                    
                $res = $conn->query($sql);

                if ($res==true) {
                    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                    echo "<script>location.href='?page=modelo-listar';</script>";
                } else {
                    echo "<script>alert('ERRO! :( ... Não foi possivel realizar o cadastro!');</script>";
                    echo "<script>location.href='?page=modelo-listar';</script>";
                }        
        break;
        case 'excluir':
                $sql = "DELETE FROM modelo WHERE cod_modelo=".$_REQUEST['cod_modelo'];
                $res = $conn->query($sql);

                if ($res==true) {
                     echo "<script>alert('Cadastro excluido com sucesso!');</script>";
                     echo "<script>location.href='?page=modelo-listar';</script>";
                } else {
                    echo "<script>alert('ERRO! :( ... Não foi possivel realizar a exclusão!');</script>";
                    echo "<script>location.href='?page=modelo-listar';</script>";
                 }  
            break;   
    }
?>