<?php
require_once 'addTask.php';
require_once 'rmTask.php';
require_once 'editTask.php';

$files = scandir("./data");

unset($files[0]);
unset($files[1]);
var_dump($files);


?>

<!--<h1 class="position-absolute top-0 start-50 translate-middle-x">Liste de tâche</h1>-->

<div class="position-absolute top-50 start-50 translate-middle w-75">

    <div class="mb-3">
        <form action=""  name="task" method="POST" autocomplete="off">
            <div class="d-flex flex-row">
                <input class="form-control form-control-lg"  value="" name="task" placeholder="Entrez une tache">
                <?php
                    if(isset($_POST["add"])){
                        if(isset($_POST["task"])){
                                $file = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . idate("U") . ".txt";
                                $toAdd = $_POST["task"];
                                file_put_contents($file,  $toAdd);
                            }
                    }
                ?>
                <input class="btn btn-outline-success btn-lg" type="submit" name="add">
            </div>
        </form>
    </div>


    <div class="border border-dark p-2 mb-2 rounded">

        <?php foreach($files as $file):?>
            <div class="row sm m-3">
                <h4 class="col-9"><?php echo file_get_contents('.' . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR .$file) ?></h4>
                <div class="col-3">
                        <div class="d-inline-block w-100 d-flex justify-content-end">
                            <form method="post" action="">
                            <button id="<?php echo substr($file, 0, strpos($file, ".")); ?>" class="btn btn-success"><span class="material-symbols-outlined">edit</span></button>
                            </form>
                            <form method="post" action="">
                                <?php
                                if(isset($_POST["rm-task"])){
                                    unlink("." . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . $file);
                                }

                                ?>
                            <input id="<?php echo $file ?>" class="btn btn-danger" name="rm-task" value="X" type="submit">
                            </form>
                        </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>