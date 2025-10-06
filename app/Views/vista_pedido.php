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
            <<form method="get" action="<?= base_url('buscar_producto') ?>" class="search-bar">
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
    <table class="table">
  <thead>
    <tr>
        <th scope="col">pedido_id</th>
        <th scope="col">cliente_id</th>
        <th scope="col">direccion</th>
        <th scope="col">telefono</th>
        <th scope="col">dpi</th>
        <th scope="col">total_pedido</th>
        <th scope="col">estado</th>
        <th scope="col">observaciones</th>
        <th scope="col">producto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($query->getResult() as $pedidos) {
                ?>
            <tr>
                <td><?=$pedidos->pedido_id;?></td>
                <td><?=$pedidos->cliente_id;?></td>
                <td><?=$pedidos->direccion_entrega;?></td>
                <td><?=$pedidos->telefono;?></td>
                <td><?=$pedidos->dpi_empleado;?></td>
                <td><?=$pedidos->total_pedido;?></td>
                <td><?=$pedidos->estado;?></td>
                <td><?=$pedidos->observaciones;?></td>
                <td><?=$pedidos->nombre;?></td>
            </tr>
            <?php
        }
         ?>
        </tbody>
    </table>
    <?php
        ?>
    </div>
    <?/*=base_url('buscarEmpleado/').$empleado['empleado_id'];
        */?>
</body>
</html>