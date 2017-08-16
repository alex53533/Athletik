<header class="tete">
    <div id="titre" class="">
        <a href="../index.php"><img class="imglogo" src="img/lolo.png" alt="logo association sportive" border=0/> athletik-les 1000 pas</a>
        <h1 class="asso">
        <?php if (isset($_SESSION['pseudo'])) { ?>
        <a href="../model/destroy.php" role="button" class="btn btn-danger">Déconnection</a>
        <?php echo 'Hi '.$_SESSION['pseudo'].' !';} ?>
        </h1>
    </div>
</header>
