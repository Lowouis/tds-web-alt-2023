<?php $home = $data['home'];?>
<div id="<?php echo $home['id'] ?>" class="">
    <div id="title_home_container">
        <h1><?php echo $home['title']?></h1>
        <div class="f-col">
            <div class="f-col">
                <div class="f-row"><h2><?php echo $home['under_title']?></h2></div>
                <div class="about-text"><p><?php echo $home['text_content']?></p></div>
            </div>
        </div>
        <div class="f-row resp_pp">
            <img alt="louis gurita profil" class="pp_style" src="<?php echo $data['img_src'][0]?>">
        </div>
    </div>
</div>