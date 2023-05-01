<?php
session_start();

require('conexao.php');
$idLojista = $_SESSION['id'];
$sql = "select * from produto where fk_Lojista_ID = '$idLojista'";
if ($result = $conn->query($sql)) {
} else {
    // criar mensagem caso falhe o sql
}
?>

<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>WheyMarket</title>
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/fitness-filled/64/fitness-08-512.png" type="image/x-icon">
</head>

<body>
    <header>
        <?php
        require 'header.php';
        ?>
    </header>
    <!-- slider -->
    <div style="justify-content: center, padding = 30px">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/slider1.jpg" width="70%" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/img/slider2.jpg" width="70%" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/img/slider3.jpg" width="70%" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proxima</span>
            </button>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-6">
            <?php
            while ($produto = mysqli_fetch_assoc($result)) :
            ?>
                <div class="card" style="width: 18rem;">
                    <img width="50px" class="card-img-top" src="data:image/jpeg;image/png;base64,<?php echo base64_encode($produto['imagem']) ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produto['Nome'] ?></h5>
                        <h4 class="card-title">R$ <?php echo $produto['Preco'] ?></h4>
                        <p class="card-text"><?php echo $produto['Descricao'] ?></p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
?>
</body>

</html>