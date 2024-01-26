    <?php
        include_once("templates/head.php");
        include_once("config/process.php");
    ?>

    <section class="login">
        
    <form class="loginForm">

        <h1 class="loginpage">Pagina de Login</h1>

            <div class="loginhome">
                <a href="<?= $BASE_URL ?>index.php">
                <img class="loginimg" src="<?= $BASE_URL ?>/img/7.png" alt="logo"> </a>
            </div>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <div class="button">
                <button type="button" onclick="validateLogin()">Login</button>
            </div>

        </form>

        <script>
            function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === 'cafelina' && password === '123341') {
                alert('Login bem-sucedido!');

                window.location.href = 'create.php';
            } else {
                alert('Credenciais inválidas. Tente novamente.');
            }
            }
        </script>
    </section>