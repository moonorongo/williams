<?php
    function show_navigation_items() {
        $files = custom_scandir('content');

        foreach ($files as $key => $folder) {
            echo("
                <style>#icon-$key { background-image: url('/content/$folder/icon.png'); }</style>
                <div 
                    id='icon-$key' 
                    class='grid-element background-settings back-none js-icon'
                    data-number='$key'>
                </div> 
            ");
        }
    }