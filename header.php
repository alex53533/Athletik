<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> P eval</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="eva.css"/>
</head>
<header class="col-xs-12">
    <div id="titre" class="">
        <p><img id="logo" src="img/lolo.png" alt="logo association sportive" /> athletik-les 1000 pas</p>
        <h1 class="asso">
        <?php if (isset($_SESSION['pseudo'])) { ?>
        <a href="destroy.php" role="button" class="btn btn-danger">Déconnection</a>
        <?php echo '('.$_SESSION['pseudo'].')';} ?>
        </h1>
    </div>
</header>
