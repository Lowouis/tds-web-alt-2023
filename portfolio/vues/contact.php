<?php $contact = $data['contact'];  ?>
<div id="contact" class="full-hidden">
    <div id="title_home_container">
        <h1><?php echo $contact["title"]; ?></h1>
        <div class="contact__container">
            <form action="functions/functions.php" method="POST">
                <?php foreach($contact["champs"] as $key => $champs):?>
                    <div class="f-col">
                        <label class="label_contact"><?php echo $contact["champs"][$key]["label"] ?></label>
                        <?php echo '<'.$champs["balise"].' class="input_contact" value="laa@g.fr" type="'. $champs["type"].'" name="'.$champs["name"].'" placeholder="'.$champs["placeholder"].'">'; echo ($champs["balise"] == "textarea") ? '</textarea>' : ""; ?>
                    </div>
                <?php endforeach; ?>
                <div class="f-row overflow-hidden">
                    <button class="material-symbols-outlined send_btn" name="contact" type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</div>