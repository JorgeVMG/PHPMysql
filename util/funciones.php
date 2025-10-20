<?php 
function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}
function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}
spl_autoload_register(function($class_name) {
    $dirs = [
        ROOT_PATH . 'modelo/',
        ROOT_PATH . 'modelo/conexion/',
        ROOT_PATH . 'control/',
        ROOT_PATH . 'control/1/',
        ROOT_PATH . 'control/2/',
        ROOT_PATH . 'control/3/',
        ROOT_PATH . 'control/4/',
    ];

    foreach ($dirs as $dir) {
        $path = $dir . $class_name . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});
