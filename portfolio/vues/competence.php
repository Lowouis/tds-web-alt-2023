<?php
$competence = $data['competences'];
$tabs = $competence['tabs'];
$contents = $tabs['contents'];
$label = $tabs['label'];
?>
<div id="<?php echo $competence['id']; ?>" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $competence['title'];?></h1>
    <div class="container__skills">
        <div class="nav__tabs">
            <?php foreach ($label as $key => $content): ?>
                <input <?php echo $key === 1 ? 'checked' : null; ?> type="radio" class="tabs_radio" name="skills_tabs" id="skills_<?php echo $key; ?>">
                <label for="skills_<?php echo $key;?>" class="tab_label label__add"><?php echo $content; ?></label>
            <?php endforeach; ?>
        </div>
        <div class="tabs__skills_contents">
            <?php foreach ($contents as $key => $content): ?>
                <div id="tabs_content_<?php echo $key; ?>" class="contents__containers <?php echo $key !== 1 ? 'full-hidden' : null ?>">
                    <div class="left__element_tabs">
                        <p><?php echo $content['content']; ?></p>
                        <div class="f-row_s perk_load_container">
                            <label class="label_perk"><strong><?php echo $content['niveau']; ?>%</strong></label>
                            <span class="perk_load" style="width: <?php echo $content['niveau'] ?>%;"></span>
                        </div>
                    </div>
                    <div class="right__element_tabs">
                        <div class="f-row">
                            <div class="f-col">
                                <?php if ($content['img'][1] !== "none"): ?>
                                    <img class="img_logo_perk" src="<?php echo $content['img'][1] ?>" alt="">
                                <?php endif ?>
                            </div>
                            <div class="f-col">
                                <?php if ($content['img'][2] !== "none"): ?>
                                    <img class="img_logo_perk" src="<?php echo $content['img'][2] ?>" alt="">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="f-row">
                            <div class="f-col">
                                <?php if ($content['img'][3] !== "none"): ?>
                                    <img class="img_logo_perk" src="<?php echo $content['img'][3] ?>" alt="">
                                <?php endif ?>
                            </div>
                            <div class="f-col">
                                <?php if ($content['img'][4] !== 'none'): ?>
                                    <img class="img_logo_perk" src="<?php echo $content['img'][4] ?>" alt="">
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>