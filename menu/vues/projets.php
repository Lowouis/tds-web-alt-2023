<?php
$data = yaml_parse_file("./public/data/content/data.yaml");
$projets = $data['projets'];
?>

<div id="projets" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $projets['title'] ?></h1>

        <?php foreach ($projets['tabs'] as $key => $value){

            echo '<div class="projet_container_row backdrop_blur">
            <div class="f-col row_projets">
                <div class="f-row set-project_text">
                    <input type="checkbox" class="tabs_radio" name="tabs_projet" id="tab'.strval($key+1).'">
                    <label for="tab'.strval($key+1).'" class="title_projet tab_label">'.$value["nom"].'</label>
                    <span class="material-symbols-outlined close_projet">close</span>
                </div>
                <div class="tabs_content hide_content full-hidden">'.$value["content"].' <div><button class="btn-tabs">'.$value["button"].'</button></div></div>
            </div>';

        }

        ?>

    </div>
</div>