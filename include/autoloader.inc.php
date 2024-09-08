<?php

function myAutoLoader($className)
{
    $baseDir = substr(__DIR__, 0, -7);
    $extension = ".php";
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $directories = ["models", "controllers", "view", "include"];

    // Config file
    require_once "{$baseDir}include/config.inc.php";

    foreach ($directories as $directory) {
        $path = $baseDir . $directory . DIRECTORY_SEPARATOR . $classPath . $extension;

        if (file_exists($path)) {
            require_once $path;
            return;
        }

    }
}

spl_autoload_register("myAutoLoader");
