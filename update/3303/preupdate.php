<?php

// flush cache
\Pimcore_Model_Cache::clearAll();

// delete the autoload class map
$file = PIMCORE_CONFIGURATION_DIRECTORY . "/autoload-classmap.php";
if(file_exists($file)) {
    unlink($file);
}
