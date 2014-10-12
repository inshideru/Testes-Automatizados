<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 13:11
 */

define('CLASS_DIR', 'src/');

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require CLASS_DIR.$fileName;
}
spl_autoload_register('autoload');

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

$paginas = array('form');

$route = function () use ($paginas) {

    $rota = parse_url('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $path = str_replace('/', '', $rota['path']);

    if ($path) {
        if (in_array($path, $paginas)) {
            if (file_exists('includes/' . $path . '.php')) {
                $go = $path;
            }
        } else {
            header('HTTP/1.0 404 Not Found');
            $go = '404';
        }
    } else {
        $go = 'home';
    }

    return $go;
};