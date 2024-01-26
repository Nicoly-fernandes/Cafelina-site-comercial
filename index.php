<?php
    include_once("templates/header.php");
    include_once("config/process.php");
?>

<body>

    <main>
        <section id="title-container">
            <div>
                <h1> O MELHOR CAFÉ DE <br> GATOS PARA HUMANOS </h1>
                <p> CAFELINA </p>
                <img src="<?= $BASE_URL ?>/img/coffe1.jpg" alt="banner">
            </div>
        </section>

        <br><br><br><br><br><br>
        <section id="history">
            <div class="history">
                <h1> O que é a Cafelina? </h1>
                <p> A Cafelina é mais do que uma simples cafeteria; <br> é um refúgio acolhedor que incentiva a adoção de gatos.
                <br> Além de servir cafés deliciosos em um ambiente aconchegante,<br> o Cat Coffee abriga gatos adoráveis em parceria com abrigos locais. 
                <br> Os clientes são encorajados a interagir e sentirem uma conexão especial,<br> podem considerar adotar um dos gatos residentes.</p>
            </div>
        </section>
        <br><br><br><br><br><br>

        <section id="menu">
                
                <div class="title-menu">
                <br><br><h1> MENU </h1>
                    <p> CAT & COFFEE </p><br>
                </div>

            <div class="product">

            <?php if(count($menu) > 0): ?>
                <?php foreach ($menu as $item): ?>

                    <ul class="leaders">
                        <li><span><?= $item["product"] ?></span>
                            <span><?= $item["price"] ?></span>
                        </li>
                    </ul>

                <?php endforeach; ?>
            <?php endif; ?>

            
        <br><br><br><br><br></div>

        </section>

    <section>

        <br><br><br><br>
        <h1 class="cat"> Conheça alguns dos nossos gatinhos: </h1><br>
        <h2 class="cats-title"> Se você quiser adotar um de nossos gatinhos <br> clique em adote-me e prencha o formulario: </h2><br><br><br><br>
        <div id="cards">
        
        <div class="card">
                <div class="icon">
                    <img src="./img/a.png" alt="gatos"> </div>

                    <h3> Georgi Armani </h3>
                    <span> Georgio está em busca de lar após ser abandonado em um terrono baldio totalmente desnutrido. </span>
                    <a href="https://forms.gle/QZdxvnWanK8oCQkw9" target="_blank"><button> Adote-me </button></a>
                </div>
        <div class="card">
                <div class="icon">
                    <img src="./img/d.png" alt="gatos"> </div>

                    <h3> Fátima </h3>
                    <span> Fátima foi resgatada após ser encontrada dentro de um carro abandonado junto com seus filhotes. </span>
                    <a href="https://forms.gle/QZdxvnWanK8oCQkw9" target="_blank"><button> Adote-me </button></a>
                </div>
        <div class="card">
                <div class="icon">
                    <img src="./img/b.png" alt="gatos"> </div>

                    <h3> José Francisco </h3>
                    <span> Francisco foi encontrado em um parque local. Ele estava com uma pata ferida e muito assustado. </span>
                    <a href="https://forms.gle/QZdxvnWanK8oCQkw9" target="_blank"><button> Adote-me </button></a>
                </div>
        <div class="card">
                <div class="icon">
                    <img src="./img/e.png" alt="gatos"> </div>

                    <h3> Feyre </h3>
                    <span> Infelizmente, Feyre perdeu sua tutora e agora está em busca de um novo lar amoroso e acolhedor. </span>
                    <a href="https://forms.gle/QZdxvnWanK8oCQkw9" target="_blank"><button> Adote-me </button></a>
                </div>

        </div>
        <br><br><br><br><br><br>
    </section>

    </main>
    
</body>

<?php
    include_once("templates/footer.php");
?>