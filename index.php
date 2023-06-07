<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Lojinha</title>
    <link rel="shortcut icon" href="img/cavalo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary-subtle">
        <div class="container-fluid ">
            <a class="navbar-brand bs-body-bg" href="index.php"><img src="img/cavalo1.png" width="40"></a>
            <div class="col" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fornecedores.php">Fornecedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="display-6 text-center mt-4 mt-3 text-white">Sistema Da Cavalaria</h2>
                <img src="img/cavalo chavoso.png" width="300px">
            </div>

        </div>
        <div class="row text-center">
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="#" class="btn">
                    <img src="img/cavalo2.png" width="50px">
                    <br>
                    <strong>CLIENTES</strong>
                </a>
            </div>
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="fornecedores.php" class="btn">
                    <img src="img/cavalo.png" width="50px">
                    <br>
                    <strong>FORNECEDORES</strong>
                </a>
            </div>

        </div>

    </div>

    <footer class="container-fluid g-0 bg-dark text-light">
        <div class="row p-3 m-5">
            <div class="col text-center">
                &reg; Sistema Da Cavalaria - Desenvolvido por <a href="mailto:ggguicamaro@gmail.com">Guilherme Lopes</a>
            </div>
        </div>
    </footer>
</body>

</html>