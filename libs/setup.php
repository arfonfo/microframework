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


$config->set('dbhost', 'viaduct.proxy.rlwy.net:21022');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'gaDea4G1Cg6d2bdhE2-cBFbgDHbEG5D-');


// mysql://root:gaDea4G1Cg6d2bdhE2-cBFbgDHbEG5D-@viaduct.proxy.rlwy.net:21022/railway

?>