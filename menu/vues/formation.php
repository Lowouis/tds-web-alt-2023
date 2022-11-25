<?php
$formation = $data['formation'];
$tabs = $formation['tabs'];
?>

<div id="formation" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $formation['title']; ?></h1>
        <div class="projet_container_row">
            <?php foreach ($tabs as $key => $content): ?>
                <div class="f-col row_projets">
                    <div class="f-row set-project_text">
                        <input type="checkbox" class="tabs_radio" name="tabs_projet" id="tabs_learn<?php echo $key; ?>">
                        <label for="tabs_learn<?php echo $key; ?>" class="title_projet tab_label text-lower"><?php echo $content['diplome']; ?></label>
                        <span class="material-symbols-outlined close_projet">close</span>
                    </div>
                    <div class="tabs_content hide_content full-hidden">
                        <a class="date-text"><?php echo $content['date']; ?></a>
                        <a class="date-text"><?php echo $content['content']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>