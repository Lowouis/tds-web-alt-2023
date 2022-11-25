<?php
$data = yaml_parse_file("./public/data/content/data.yaml");
$projets = $data['projets'];
?>

<div id="projets" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $projets['title'] ?></h1>
        <?php $tabs = $projets['tabs']  ?>
        <?php foreach ($tabs as $key => $value): ?>
            <div class="projet_container_row backdrop_blur">
                <div class="f-col row_projets">
                    <div class="f-row set-project_text">
                        <input type="checkbox" class="tabs_radio" name="tabs_projet" id="tab<?php echo strval($key) ?>">
                        <label for="tab<?php echo strval($key) ?>" class="title_projet tab_label"><?php echo $value["nom"]; ?></label>
                        <span class="material-symbols-outlined close_projet">close</span>
                    </div>
                    <div class="tabs_content hide_content full-hidden">
                        <?php echo $value["content"] ?>
                        <div>
                            <button class="btn-tabs">
                                <?php echo $value["button"] ?>
                                <span class="material-symbols-outlined tabs_arrow">subdirectory_arrow_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

