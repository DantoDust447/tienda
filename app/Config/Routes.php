<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*Procesos de Login*/
$routes->get('login', 'LoginController::index');

/*estado*/
$routes->get('estados', 'EstadoController::index');
$routes->post('agregar_estado', 'EstadoController::agregar');
$routes->get('eliminar_estado', 'EstadoController::eliminar');
$routes->get('buscar_estado', 'EstadoController::buscar');
$routes->post('modificar_estado', 'EstadoController::modificar');

/*Clientes*/
$routes->get('clientes', 'ClientesController::index');
$routes->post('agregar_cliente', 'ClienteController::agregar');
$routes->get('eliminar_cliente', 'ClienteController::eliminar');
$routes->get('buscar_cliente', 'ClienteController::buscar');
$routes->post('modificar_cliente', 'ClienteController::modificar');

/*metodo_pago*/
$routes->get('metodos_pago', 'MetodoPagoController::index');
$routes->post('agregar_metodo_pago', 'MetodoPagoController::agregar');
$routes->get('eliminar_metodo_pago', 'MetodoPagoController::eliminar');
$routes->get('buscar_metodo_pago', 'MetodoPagoController::buscar');
$routes->post('modificar_metodo_pago', 'MetodoPagoController::modificar');

/*pagos*/
$routes->get('pagos', 'PagoController::index');
$routes->post('agregar_pago', 'PagoController::agregar');
$routes->get('eliminar_pago', 'PagoController::eliminar');
$routes->get('buscar_pago', 'PagoController::buscar');
$routes->post('modificar_pago', 'PagoController::modificar');

/*Pedidos*/
$routes->get('pedidos', 'PedidoController::index');
$routes->post('agregar_pedido', 'PedidoController::agregar');
$routes->get('eliminar_pedido', 'PedidoController::eliminar');
$routes->get('buscar_pedido', 'PedidoController::buscar');
$routes->post('modificar_pedido', 'PedidoController::modificar');

/*detalle pedidos*/
$routes->get('detalle_pedidos', 'DetallePedidoController::index');
$routes->post('agregar_detalle_pedido', 'DetallePedidoController::agregar');
$routes->get('eliminar_detalle_pedido', 'DetallePedidoController::eliminar');
$routes->get('buscar_detalle_pedido', 'DetallePedidoController::buscar');
$routes->post('modificar_detalle_pedido', 'DetallePedidoController::modificar');

/*productos*/
$routes->get('productos', 'ProductoController::index');
$routes->post('agregar_producto', 'ProductoController::agregar');
$routes->get('eliminar_producto', 'ProductoController::eliminar');
$routes->get('buscar_producto', 'ProductoController::buscar');
$routes->post('modificar_producto', 'ProductoController::modificar');

/*empleado*/
$routes->get('empleados', 'EmpleadoController::index');
$routes->post('agregar_empleado', 'EmpleadoController::agregar');
$routes->get('eliminar_empleado', 'EmpleadoController::eliminar');
$routes->get('buscar_empleado', 'EmpleadoController::buscar');
$routes->post('modificar_empleado', 'EmpleadoController::modificar');

/*marcas*/
$routes->get('marcas', 'MarcaController::index');
$routes->post('agregar_marca', 'MarcaController::agregar');
$routes->get('eliminar_marca', 'MarcaController::eliminar');
$routes->get('buscar_marca', 'MarcaController::buscar');
$routes->post('modificar_marca', 'MarcaController::modificar');

/*categorias*/
$routes->get('categorias', 'CategoriasController::index');
$routes->post('agregar_categoria', 'CategoriasController::agregar');
$routes->get('eliminar_categoria', 'CategoriasController::eliminar');
$routes->get('buscar_categoria/(:num)', 'CategoriasController::buscar/$1');
$routes->post('modificar_categoria', 'CategoriasController::modificar');

/*roles*/
$routes->get('roles', 'RolController::index');
$routes->post('agregar_rol', 'RolController::agregar');
$routes->get('eliminar_rol', 'RolController::eliminar');
$routes->get('buscar_rol', 'RolController::buscar');
$routes->post('modificar_rol', 'RolController::modificar');