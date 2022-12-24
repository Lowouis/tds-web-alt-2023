<?php $propos = $data['propos']; ?>
<div id="<?php echo $propos['id'] ?>" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $propos['title']?></h1>
        <div class="contact__container">
            <div class="about-text">
                <p><?php echo $propos['text_content']?></p>
            </div>
        </div>
        <div class="f-row resp_pp">
            <img alt="louis gurita profil" class="pp_style" src="<?php echo $data['img_src'][0]?>">
        </div>
    </div>
</div>