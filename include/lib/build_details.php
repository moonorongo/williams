<?php
    function show_details() {
        $files = custom_scandir('content');

        foreach ($files as $key => $folder) {
            $content = file_get_contents("content/$folder/content.html");
            $config = file_get_contents("content/$folder/config.json");
            
            echo("
                <div 
                    id='detail-$key' 
                    class='detail-contents hidden'
                    data-number='$key'
                    data-config='$config'>
                    $content
                </div> 
            ");
        }
    }