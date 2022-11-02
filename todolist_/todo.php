<?php
$list = [
        1 => "Fruit",
        2 => "Legumes"
];

$_POST["list"] = $list;

$_POST["task"] = "";

?>

<h1 class="position-absolute top-0 start-50 translate-middle-x">Liste de tâche</h1>

<div class="position-absolute top-50 start-50 translate-middle">
    <div>
        <?php foreach($list as $key => $task):?>
            <div class="row sm">
                <h4 class="col-9"><?php echo $task ?></h4>
                <div class="col-1">
                    <form method="post" action="rmTask.php">
                        <button id="<?php echo $key ?>" class="btn btn-danger">X</button>
                    </form>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="mb-3">
        <form action="addTask.php" name="task" method="post">
            <div class="d-flex flex-row">
                <input value="<?php $_POST['task'] ?>" class="form-control form-control-lg" name="task" placeholder="Entrez une note">
                <button class="btn btn-outline-success btn-lg" type="submit" >Ajouter</button>
            </div>
        </form>
    </div>

</div>