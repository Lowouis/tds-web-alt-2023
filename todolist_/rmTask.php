<?php
include_once "index.php";
function rmTask():void{
    unset($_POST['unsetKey'][date('H:i:s')]);
}
$_POST['unsetKey'] = false;
