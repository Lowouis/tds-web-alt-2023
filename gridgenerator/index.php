<?php
include "header.php";
include "form.html";
?>
<?php if (sizeof($_GET) >= 2): ?>
<div class="grid">
    <table>
        <thead>
        <?php for ($y=0;$y<intval($_GET["y"]);$y++):?>
            <tr>
                <?php for ($x=0;$x<intval($_GET["x"]);$x++):?>
                    <th><?= strval($x . " - ". $y) ?></th>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
    <?php endif; ?>
</div>



<?php include "footer.php"; ?>
