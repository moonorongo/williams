<?php
    function show_details() {
        $files = custom_scandir('content');

        foreach ($files as $key => $folder) {
            $content = file_get_contents("content/$folder/content.html");
            
            echo("
                <div 
                    id='detail-$key' 
                    class='detail-contents hidden'
                    data-number='$key'>
                    $content
                </div> 
            ");
        }
    }