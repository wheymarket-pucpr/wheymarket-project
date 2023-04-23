<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<title>Cadastro</title>
<link rel="icon" href="https://cdn0.iconfinder.com/data/icons/fitness-filled/64/fitness-08-512.png"type="image/x-icon">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    require('menu.php');
?>
<div class='.container-fluid'>
    <div class="row justify-content-center pt-5">
        <div class='col-3'>
            <div class="card">
                <h5 class="card-header text-dark">Cadastre-se</h5>
                <div class="card-body">
                    <div class='col'>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="example@example.com"/>
                            </div>
                            <div class="mb-3">
                                <label for="CNPJ" class="form-label">CNPJ</label>
                                <input type="text" name="CNPJ" class="form-control" id="CNPJ" placeholder='XX.XXX.XXX/XXXX-XX'/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Nome</label>
                                <input type="text" name="" class="form-control" id="email" placeholder="Nome da loja(ou proprio)"/>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha" placeholder='********'>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>