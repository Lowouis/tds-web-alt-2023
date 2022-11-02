<?php

function rmTask(){
    unset($_POST['unsetKey'][date('H:i:s')]);
}
$_POST['unsetKey'] = false;
