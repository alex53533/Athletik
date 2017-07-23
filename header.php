<!DOCTYPE html>
<header class="col-xs-12">
    <div id="divtitre_header" class="">
        <h1 class="asso">athletik-les 1000 pas
        <?php if (isset($_SESSION['pseudo'])) {
        echo '('.$_SESSION['pseudo'].')';} ?>
        </h1>
    </div>
    <div id="logo">
        <img src="img/logoeva.png" width="200" height="150">
        <img src="img/run.png" width="200" height="150">
    </div>
</header>
