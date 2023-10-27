<?
require_once('system/loader.php');
$uri = getRequestUri();
$uri = str_replace(getBaseUrl(), '/', $uri);
$parts = explode('/', $uri);
$controller = "page";
if ($parts[1] ?? null) {
    $controller = $parts[1];
}
$method = "home";
if ($parts[2] ?? null) {
    $method = $parts[2];
}
$params = array();
for ($i = 3; $i < count($parts); $i++) {
    $params[] = $parts[$i];
}


$controllerClassname = ucfirst($controller) . "Controller";
$controllerInstance = new  $controllerClassname();
$controllerInstance->$method($params);
