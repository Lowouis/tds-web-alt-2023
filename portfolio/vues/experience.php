<?php
$experience = $data['experience'];
$tabs = $experience['tabs'];
?>
<div id="experience" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $experience["title"]; ?></h1>
        <div class="projet_container_row">
            <?php foreach ($tabs as $key => $content): ?>
            <div class="f-col row_projets">
                <div class="f-row set-project_text">
                    <input type="checkbox" class="tabs_radio" name="tabs_experience" id="tab<?php echo $key; ?>">
                    <label for="tab<?php echo $key;?>" class="title_projet tab_label"><?php echo $content["entreprise"]; ?><a class="date-text"><?php echo $content["date"];?></a></label>
                    <span class="material-symbols-outlined close_projet">close</span>
                </div>
                <div class="tabs_content hide_content full-hidden f-col">
                    <div class="post shd"><strong class="post_title"> Poste :</strong> <?php echo $content["post"]; ?></div>
                    <div class="taches shd"><strong class="taches_title"> Tâches :</strong> <?php echo $content["taches"]; ?></div>
                    <div class="lieu shd"><strong class="lieu_title"> Lieu :</strong> <?php echo $content["lieu"]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>