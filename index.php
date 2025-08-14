<?php
//trabajar la url
$controladorIndex="ControladorIndex";
$metodoIndex="Index";
$rutaindex=__DIR__."/Controlador/{$controladorIndex}.php";

require_once $rutaindex;
$indexControlador=new $controladorIndex();

//validar el url para saber si vamos a otro controlador y otro metodo
$controller=isset($_GET['controlador'])?"Controlador".ucfirst($_GET['controlador']):"ControladorIndex";
$action=isset($_GET['metodo'])?ucfirst($_GET['metodo']):"Index";

//ruta del servidor
$controllerFile=__DIR__."/Controlador/{$controller}.php";

//validar si el archivo existe
if(file_exists($controllerFile))
    require_once $controllerFile;
else
    $indexControlador->$metodoIndex();

//validar si existe el metodo
if(class_exists($controller)){
    $controlador=new $controller();
    if(method_exists($controlador,$action)){
        $controlador->$action();
    }
    else
        $indexControlador->$metodoIndex();
}
else
    $indexControlador->$metodoIndex();





