<?php
    include_once("templates/head.php");
    include_once("config/process.php");
?>

    <div class="container">
            
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

            <input type="hidden" name="type" value="create">

            <h1 class="loginpage" >Cadastrar produto</h1>

            <div class="loginhome">
                <a href="<?= $BASE_URL ?>index.php">
                <img class="loginimg" src="<?= $BASE_URL ?>/img/7.png" alt="logo"> </a>
            </div>

            <div class="form-group">
                <label for="name">Produto:</label>
                <input class="form-control" type="text" id="product" name="product" required>
            </div>

            <div class="form-group">
                <label for="name">Preço:</label>
                <input class="form-control" type="text" id="price" name="price" required>
            </div>
            <div class="button">
            <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
