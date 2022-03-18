
<?php
// returns configuration value
function getConfig($key)
{
    $config = include __DIR__ . "/../config.php";
    return $config[$key];
}
