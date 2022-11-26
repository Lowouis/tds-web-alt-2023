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
                    <div class="tabs_content hide_content full-hidden f-col">
                        <a><strong><?php echo $content["date"];?></strong></a>
                        <div class="post shd"><strong class="post_title"> Enseigne :</strong> <?php echo $content["enseigne"]; ?></div>
                        <div class="lieu shd"><strong class="lieu_title"> Lieu :</strong> <?php echo $content["lieu"]; ?></div>
                        <div class="taches shd"><strong class="taches_title"> Contenu :</strong> <?php echo $content["content"]; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>