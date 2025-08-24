<?php

function show_navigation_rows() {
        $allfiles = custom_scandir('content');

        $chuncked_files = array_chunk($allfiles, 3); 

        foreach ($chuncked_files as $files) {
            echo "<tr>";
            
            foreach ($files as $key => $folder) {
                $data = file_get_contents("./content/$folder/config.json");
                $jsonData = json_decode($data, true);
                $title = $jsonData['title'];
    
                echo("
                    <td id='icon-$key' class='js-icon' data-number='$key'>
                        <img src='./content/$folder/icon.png' />
                        $title
                    </td>
                ");
            }

            echo "</tr>";
        }


    }

/*
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
        */