<?php
$json = file_get_contents('data.json');
$json_data = json_decode($json,true);
?>

<!-- <h1 class="position-absolute top-0 start-50 translate-middle-x">Liste de tâche</h1> -->
<div class="mb-3 w-75 position-absolute top-0 start-50 translate-middle-x">
        <form action="addTask.php" method="post" autocomplete="off">
            <div class="d-flex flex-row">
                <input class="form-control form-control-lg" name="add-task" type="text" placeholder="Entrez une tache">
                <input class="btn btn-outline-success btn-lg" type="submit" value="Ajouter">
            </div>
        </form>
</div>

<div class="position-absolute top-50 start-50 translate-middle w-75">
    <div class="border border-dark p-2 mb-2 rounded">
        <?php foreach($_SESSION["task_list"] as $index => $task):?>
            <div class="row sm m-3">
                <h4 class="col-9"><?php echo $task ?></h4>
                <div class="col-3">
                        <div class="d-inline-block w-100 d-flex justify-content-end">

                            <form action="rmTask.php" method="post">
                                <div class="d-flex">
                                    <button class="form-control form-control-lg" type="text">X</button>
                                    <input type="hidden" name="rm-task" value="<?php echo $index ?>">
                                </div>
                            </form>

                        </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>