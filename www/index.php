<?php

    spl_autoload_register(function(string $className)
    {
        require_once __DIR__ . '/../app/'.$className . '.php';
    });

    $route = $_GET['route'];
    $regulControllerMethod = require __DIR__. '/../app/MyProject/routes.php';

    $element = false;

    foreach ($regulControllerMethod as $regular => $controllerMethod)
    {
        preg_match($regular, $route, $matches);

        if (!empty($matches))
        {
            $element = true;

            break;
        }
    }

    if ($element === false)
    {
        echo 'такого элемента не существует';
    }

    $controllerString = $controllerMethod[0];
    $controller = new $controllerString();
    $method = $controllerMethod[1];

    echo $controller -> $method
?>