<?php 
header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

$PROYECTO = '/PHPMYSQL/';

$ROOT = $_SERVER['DOCUMENT_ROOT'] . $PROYECTO;
$_SESSION['ROOT'] = $ROOT;
define('ROOT_PATH', $ROOT);
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . $PROYECTO);
spl_autoload_register(function($class_name) {
    $dirs = [
        $_SESSION['ROOT'] . 'modelo/',
        $_SESSION['ROOT'] . 'modelo/conexion/',
        $_SESSION['ROOT'] . 'control/',
        $_SESSION['ROOT'] . 'control/1/',
        $_SESSION['ROOT'] . 'control/2/',
        $_SESSION['ROOT'] . 'control/3/',
        $_SESSION['ROOT'] . 'control/4/',
    ];

    foreach ($dirs as $dir) {
        $path = $dir . $class_name . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});
include_once(ROOT_PATH . 'util/funciones.php');
?>
