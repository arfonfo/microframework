<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'viaduct.proxy.rlwy.net:21988');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'BBeabFC6F-DA4cfcED2d12D1FFEGaAcF');


// mysql://root:BBeabFC6F-DA4cfcED2d12D1FFEGaAcF@viaduct.proxy.rlwy.net:21988/railway

?>