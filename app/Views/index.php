<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<!--Esta parte del proyecto fue creada por Dante Sánchez-->
<!--El motivo de esto es concientizar al resto del grupo a ser mas colaborativo-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('styles/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Prime Suplements</title>
</head>

<body>
    <header>
        <nav>
            <img src="<?=base_url('images/logo.png')?>" alt="Logo de la empresa" class="logo">
            Prime Supplements
            <div class="link-container">
                <a href="<?=base_url('categorias')?>" class="header-links">Categorias</a>
                <a href="<?=base_url('marcas')?>" class="header-links">Marcas</a>
                <a href="<?=base_url('productos')?>" class="header-links">Productos</a>
                <a href="<?=base_url('nosotros')?>" class="header-links">Nosotros</a>
            </div>
            <form method="get" action="" class="search-bar">
                <input type="text" class="form-control" placeholder="Buscar">
                <i class="bi bi-search"></i>
            </form>

            <div class="btn-group" role="group" aria-label="Default button group">
                <a type="button" class="btn btn-outline-primary">
                    <i class="bi bi-basket3-fill"></i>
                </a>
                <a type="button" class="btn btn-outline-primary" href="<?=base_url('login')?>">
                    <i class="bi bi-person-fill"></i></i>
                </a>
            </div>
        </nav>
        <div class="social-network-bar">
            Siguenos en nuestras redes sociales y forma parte de nuestra comunidad
            <div class="social-icon-container">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter-x"></i>
            </div>

        </div>
    </header>
    <main>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <?php 
                $count = 0;
                foreach($productos as $producto){ 
                    if ($count >= 3) {
                        break;
                    }
                    $count++;
                ?>
                <div class="carousel-item active">
                    <a href="<?=base_url('buscar_categoria/').$producto['producto_id']?>">
                        <img src="<?=esc($producto['imagen_producto'])?>" class="d-block w-100"
                            alt="Algo salió mal con la imagen"
                            style="width: 200px; height: 600px; object-fit: cover; position: center;"></a>
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <h1 class="text-center">Productos</h1>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <?php 
                        $categoria_count = 0;
                        foreach ($categorias as $categoria){
                            if ($categoria_count >= 4) {
                                break;
                            }
                            $categoria_count++;
                ?>
                        <th scope="col">
                            <div class="text-center">
                                <?=esc($categoria['categoria'])?>
                            </div>
                        </th>
                        <?php
        }?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        $categoria_count = 0;
                        foreach ($categorias as $categoria){
                            if ($categoria_count >= 4) {
                                break;
                            }
                            $categoria_count++;
                ?>
                        <td>
                            <?php 
                            $producto_count = 0;
                            foreach ($productos as $producto): 
                                if ($producto['categoria_id'] == $categoria['categoria_id'] && $producto_count < 4):
                            ?>
                            <div class="product-item">
                                <a href="<?=base_url('buscar_categoria/').$producto['producto_id']?>"><img src="<?= esc($producto['imagen_producto'])?>" alt="Parece que algo salió mal"
                                    style="width:100px; height:100px; margin-right:10px; border-radius:10px;"></a>
                                <a><?= esc($producto['nombre'])?></a>
                                <hr>
                            </div>
                            <?php 
                                $producto_count++;
                                endif; 
                            endforeach; ?>
                        </td>
                        <?php
        }?>
                    </tr>
                </thead>
            </table>
        </div>


    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>