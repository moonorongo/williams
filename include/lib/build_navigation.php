<?php

function show_navigation_items() {
        $colors = [
            'red',
            'green',
            'blue',
            'yellow',
            'orange',
            'grey',
            'pink',
            'cyan',
            'magenta',
            'beige',
            'brown'
        ];

        $files = custom_scandir('content');

        foreach ($files as $key => $folder) {
            $data = file_get_contents("./content/$folder/config.json");
            $jsonData = json_decode($data, true);
            $title = $jsonData['title'];

            echo("
                <div class='grid-element'>
                    <div
                        id='icon-$key' 
                        style='background-image: url(./content/$folder/icon.png);' 
                        class='background-settings js-icon'
                        data-number='$key'>
                    </div>
                    $title
                </div>
            ");
        }
    }