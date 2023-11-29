<?php

require("functions.php");

if(isset($_REQUEST["nome"]) && isset($_REQUEST["email"]) && isset($_REQUEST["msg"])){

    $NOME = $_REQUEST["nome"];
    $EMAIL = $_REQUEST["email"];
    $MSG = $_REQUEST["msg"];

    sendMail($NOME, $EMAIL, $MSG);

    header("Location: ./");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ínicio | Bem-Vindos</title>

    <link rel="stylesheet" href="../ASSETS/CSS/styles.css">
</head>
<body>

    <header class="header">

        <section class="header__section">

            <article class="header__up">

                <figure class="header__icon">
                    <img src="../ASSETS/IMAGES/caret-double-right-light_WHITE.png" alt="" class="header__img header__img--icon" onclick="openHeader()">
                </figure>
        
                <nav class="header__nav">
        
                    <ul class="header__list list">
        
                        <li class="header__item"> <a href="../" class="header__link"> <img src="../ASSETS/IMAGES/house-light_WHITE.png" alt="" class="header__img"> </a> <a href="" class="header__link"> Home </a> </li>
                        <li class="header__item"> <a href="./" class="header__link"> <img src="../ASSETS/IMAGES/phone-light_WHITE.png" alt="" class="header__img"> </a> <a href="" class="header__link"> Contatos </a> </li>
                        <li class="header__item" onclick="scrolls()"> <div class="header__image"> <img src="../ASSETS/IMAGES/projector-screen-chart-light_WHITE.png" alt="" class="header__img"> </div>  <p class="header__paragraph"> Projetos </p> </li>
        
                    </ul>
        
                </nav>
    
            </article>
    
            <article class="header__down">
    
                <input type="checkbox" name="" id="" class="toogle" onchange="toogled(2)">
    
            </article>

        </section>

    </header>

    <!--  -->

    <main class="main">
        <section class="main__section">

            <article class="contacts">

                <form action="" method="post" class="form footer__form">
    
                    <fieldset class="form__fieldset">
    
                        <legend class="form__legend">Envie um EMail</legend>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Seu Nome:</label>
                            <input type="text" name="nome" class="form__input" require>
    
                        </div>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Seu EMail:</label>
                            <input type="email" name="email" class="form__input" require>
    
                        </div>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Sua Mensagem:</label>
                            <textarea name="msg" id="" cols="30" rows="3" class="form__input" require></textarea>
    
                        </div>
    
                        <input type="submit" value="Enviar" class="form__input--submit">
    
                    </fieldset>
    
                </form>

                <div class="contacts__links">

                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNsMRRpWlSlsZCtFTNljLBvXtvdDZKvJsxJMRlZscBMtDWbvCpjfVFqKjMgwjwGVZNwrbB" class="contacts__link" target="_blank"> G-Mail </a>

                    <a href="https://github.com/Hugo-Otavio-2005" class="contacts__link">GitHub</a>

                    <a href="https://www.linkedin.com/in/hugo-ot%C3%A1vio-47054a246/" class="contacts__link">Linkedin</a>

                    <a href="https://www.instagram.com/hugotavio05/" class="contacts__link">Instagram</a>
                    
                    <a href="https://www.facebook.com/profile.php?id=100083190938976" class="contacts__link">Facebook</a>

                </div>

            </article>

        </section>
    </main>

    <!--  -->

    <footer class="footer">

        <section class="footer__up">

            <article class="footer--form">
    
                <form action="" method="post" class="form footer__form">
    
                    <fieldset class="form__fieldset">
    
                        <legend class="form__legend">Envie um EMail</legend>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Seu Nome:</label>
                            <input type="text" name="nome" class="form__input" require>
    
                        </div>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Seu EMail:</label>
                            <input type="email" name="email" class="form__input" require>
    
                        </div>
    
                        <div class="form__div">
    
                            <label for="" class="form__label">Sua Mensagem:</label>
                            <textarea name="msg" id="" cols="30" rows="3" class="form__input" require></textarea>
    
                        </div>
    
                        <input type="submit" value="Enviar" class="form__input--submit">
    
                    </fieldset>
    
                </form>
    
            </article>

        </section>

        <section class="footer__down">

            <h3 class="footer__title--H3">Hugo Otávio</h3>

            <figure class="footer__images">

                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNsMRRpWlSlsZCtFTNljLBvXtvdDZKvJsxJMRlZscBMtDWbvCpjfVFqKjMgwjwGVZNwrbB" class="footer__link" target="_blank"> <img src="../ASSETS/IMAGES/envelope-simple-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://github.com/Hugo-Otavio-2005" class="footer__link" target="_blank"> <img src="../ASSETS/IMAGES/github-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.linkedin.com/in/hugo-ot%C3%A1vio-47054a246/" class="footer__link" target="_blank"> <img src="../ASSETS/IMAGES/linkedin-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.instagram.com/hugotavio05/" class="footer__link" target="_blank"> <img src="../ASSETS/IMAGES/instagram-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.facebook.com/profile.php?id=100083190938976" class="footer__link" target="_blank"> <img src="../ASSETS/IMAGES/facebook-logo-light_WHITE.png" alt="" class="footer__img"> </a>

            </figure>

        </section>

    </footer>

    <script src="../ASSETS/JS/scripts.js"></script>
    
</body>
</html>