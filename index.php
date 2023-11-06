<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro de carros</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Marcas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Modelos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=modelo-listar">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=modelo-cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    include('config.php');                
                    switch (@$_REQUEST["page"]){
                    case 'marca-listar':
                        include ('marca-listar.php');
                        break;            
                    case 'marca-cadastrar':
                        include ('marca-cadastrar.php');
                        break;           
                    case 'marca-editar':
                        include ('marca-editar.php');
                        break;            
                    case 'marca-salvar':
                        include ('marca-salvar.php');
                        break;               
                    case 'modelo-listar':
                        include ('modelo-listar.php');
                        break;            
                    case 'modelo-cadastrar':
                        include ('modelo-cadastrar.php');
                        break;           
                    case 'modelo-editar':
                        include ('modelo-editar.php');
                        break;            
                    case 'modelo-salvar':
                        include ('modelo-salvar.php');
                        break;
                    default:
                        echo "<h1> Seja bem vindo!</h1>";    
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>