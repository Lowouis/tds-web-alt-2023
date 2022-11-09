<?php
include_once 'header.php';
?>


<h1 class="m-2 d-flex justify-content-center">Page de connexion </h1>
<div class="m-2 position-absolute top-50 start-50 translate-middle">
<form action="index.php" method="post">
    <label class="m-2 font-weight-light">Nom d'utilisateur</label>
    <input class="m-2 font-weight-bold form-control form-control-lg" type="text" name="user" value="">
    <button class="m-2 btn btn-primary w-100">Login</button>
</form>

</div>




<?php
include_once 'footer.php';
?>
