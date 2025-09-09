<?php 

function buildNavGrid() {
    $allfiles = custom_scandir('content');
    $chuncked_files = array_chunk($allfiles, 3); 

    foreach ($chuncked_files as $files) {
        echo '<div class="grid-row">';

        for($i=0; $i<3; $i++) {
            $total_row_files = count($files);

            if($i < $total_row_files) {
                $folder = $files[$i];
                $data = file_get_contents("./content/$folder/config.json");
                $jsonData = json_decode($data, true);
                $title = $jsonData['title'];

                echo('
                    <div class="grid-item js-icon-action" data-key="folder-'. $folder .'">
                        <div class="icon-container">
                            <img src="../content/'. $folder .'/icon.svg" />
                        </div>
                        <div class="text-container">'. $title .'</div>
                    </div>
                ');
            } else {
                echo('<div class="grid-item">&nbsp;</div>');
            }
        }

        echo '</div>';
    }

}