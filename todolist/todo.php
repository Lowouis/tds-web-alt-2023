<?php
$json = file_get_contents('data.json');
$json_data = json_decode($json,true);

?>

<h1 class="position-absolute top-0 start-50 translate-middle-x">Liste de <strong><?php echo $_SESSION['user'] ?></strong> </h1>

<form  action="logout.php" method="post">
    <button class="btn btn-lg btn-danger position-absolute top-0 end-0 m-2" type="text">Log out</button>
</form>


<div class="mb-3 w-75 m-2 position-absolute bottom-0 start-50 translate-middle-x" data-tor="place.bottom(2rem) place.center">
        <form action="addTask.php" method="post" autocomplete="off">
            <div class="m-2 d-flex flex-row">
                <input class="m-2 form-control form-control-lg" name="add-task" type="text" placeholder="Entrez une tache">
                <input class="m-2 btn btn-outline-success btn-lg" type="submit" value="Ajouter">
            </div>
        </form>
</div>

<div class="position-absolute m-2 top-50 start-50 translate-middle w-75">
    <div class=" m-2 p-2 mb-2 rounded">
        <?php foreach($_SESSION["task_list"] as $index => $task):?>

                <div class="row sm m-3 input-group mb-2 table table-hover">
                    <?php if(isset($_SESSION['edit-index']) && $index === intval($_SESSION['edit-index']) and $_SESSION['edit']):?>
                    <form class="col-9 d-flex" action="ChangeTask.php" method="post">
                        <input name="end_editing" class="form-control form-control-lg" value="<?php echo $task ?>">
                    </form>
                    <?php else:?>
                    <h4 class="align-self-sm-center col-9"><?php echo $task ?></h4>
                    <?php endif;?>
                    <div class="col-3 ">
                        <div class="m-2 d-inline-block w-100 d-flex justify-content-end">
                            <?php if($_SESSION['edit'] and $_SESSION['edit-index'] == $index ):?>
                                <form action="editTask.php" method="post">
                                    <div class="d-flex">
                                        <button disabled class="btn m-1 btn-danger" type="text">Type in</button>
                                        <input type="hidden" name="end_editing" value="<?php echo $index ?>">
                                    </div>
                                </form>
                            <?php else:?>
                                <form action="editTask.php" method="post">
                                    <div class="d-flex">
                                        <button class="btn m-1 btn-success" type="text">Edit</button>
                                        <input type="hidden" name="edit-index" value="<?php echo $index ?>">
                                    </div>
                                </form>
                            <?php endif;?>
                                    <input type="hidden" name="edit-index" value="<?php echo $index ?>">

                            <form action="rmTask.php" method="post">
                                <div class="d-flex">
                                    <button class="btn m-1 btn-danger" type="text">X</button>
                                    <input type="hidden" name="rm-task" value="<?php echo $index ?>">
                                </div>
                            </form>

                        </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>