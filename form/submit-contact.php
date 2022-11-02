<?php include('form.html'); ?>
<?php if(sizeof($_GET) >= 4):?>
    <div class="answer">
        <label>Prénom :     <a><?php echo $_GET['surname'] ?></a></label>
        <label>Nom :        <a><?php echo $_GET['firstname'] ?></a></label>
        <label>Mail :       <a><?php echo $_GET['mail'] ?></a></label>
        <label>Commentaires:<a><?php echo $_GET['comment'] ?></a></label>
    </div>
<?php endif; ?>