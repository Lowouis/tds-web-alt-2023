<?php
$contact = $data['contact'];
?>

<div id="contact" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $contact["title"]; ?></h1>
        <div class="contact__container">
            <form action="?" method="POST">
                <?php foreach($contact["champs"] as $key => $champs):?>
                    <div class="f-col">
                        <label class="label_contact"><?php echo $contact["champs"][$key]["label"] ?></label>
                        <?php echo '<'.$champs["balise"].' class="input_contact" type="'. $champs["type"].'" name="contact" placeholder="'.$champs["placeholder"].'">'; echo ($champs["balise"] == "textarea") ? '</textarea>' : ""; ?>
                    </div>
                <?php endforeach;?>
            </form>
        </div>
    </div>
</div>