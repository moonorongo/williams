<?php
    function custom_scandir($folder) {
        return array_filter(scandir($folder), function($item) {
            return $item !== '.' && $item !== '..' && $item !== 'index.php';
        });
    }
    

    foreach (custom_scandir('include/lib') as $value) {
        require_once("include/lib/$value");
    }
?>