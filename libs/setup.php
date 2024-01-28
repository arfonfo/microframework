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


$config->set('dbhost', 'viaduct.proxy.rlwy.net:44890');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'E2B4EAGCc52bdgFecAGH6Edfcd-dGH-H');


// mysql://root:E2B4EAGCc52bdgFecAGH6Edfcd-dGH-H@viaduct.proxy.rlwy.net:44890/railway

?>