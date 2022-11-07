<?php
require_once 'addTask.php';
require_once 'rmTask.php';
require_once 'editTask.php';
$json = file_get_contents('data.json');
$json_data = json_decode($json,true);
var_dump($json_data[0]);
?>

<!--<h1 class="position-absolute top-0 start-50 translate-middle-x">Liste de tâche</h1>-->
<div class="position-absolute top-50 start-50 translate-middle w-75">

    <div class="mb-3">
        <form action=""  name="task" method="POST" autocomplete="off">
            <div class="d-flex flex-row">
                <input class="form-control form-control-lg"  value="" name="task" placeholder="Entrez une tache">
                <input class="btn btn-outline-success btn-lg" type="submit" name="add">
            </div>
        </form>
    </div>


    <div class="border border-dark p-2 mb-2 rounded">
        <?php foreach($json_data as $key => $task):?>
            <div class="row sm m-3">
                <h4 class="col-9"><?php echo $task ?></h4>
                <div class="col-3">
                        <div class="d-inline-block w-100 d-flex justify-content-end">
                            <form method="post" action='addTask.php'>
                                <button id="<?php echo $key ?>" class="btn btn-success"><span class="material-symbols-outlined">edit</span></button>
                            </form>
                            <form method="post" action="rmTask.php">
                                <button id="<?php echo $key ?>" class="btn btn-danger" name="rm-task" value="X" type="submit">X</button>

                                <?php
                                if(isset($_POST["rm-task"])){
                                    var_dump($_POST['rm-task'] && "");
                                }

                                ?>

                            </form>
                        </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</div>