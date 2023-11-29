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

    <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body>

    <header class="header">

        <section class="header__section">

            <article class="header__up">

                <figure class="header__icon">
                    <img src="./ASSETS/IMAGES/caret-double-right-light_WHITE.png" alt="" class="header__img header__img--icon" onclick="openHeader()">
                </figure>
        
                <nav class="header__nav">
        
                    <ul class="header__list list">
        
                        <li class="header__item"> <a href="./" class="header__link"> <img src="./ASSETS/IMAGES/house-light_WHITE.png" alt="" class="header__img"> </a> <a href="" class="header__link"> Home </a> </li>
                        <li class="header__item"> <a href="./CONTATOS" class="header__link"> <img src="./ASSETS/IMAGES/phone-light_WHITE.png" alt="" class="header__img"> </a> <a href="" class="header__link"> Contatos </a> </li>
                        <li class="header__item" onclick="scrolls()"> <div class="header__image"> <img src="./ASSETS/IMAGES/projector-screen-chart-light_WHITE.png" alt="" class="header__img"> </div>  <p class="header__paragraph"> Projetos </p> </li>
        
                    </ul>
        
                </nav>
    
            </article>
    
            <article class="header__down">
    
                <input type="checkbox" name="" id="" class="toogle" onchange="toogled(1)">
    
            </article>

        </section>

    </header>

    <!--  -->

    <main class="main">
        <section class="main__section">

            <article class="about">

                <div class="about__texts">

                    <hgroup class="about__titles">
                        <h1 class="about__title--H1">Praser em te conhecer!</h1>
                        <h2 class="about__title--H2">Me chamo <span class="about__span">Hugo Otávio</span> </h2>
                    </hgroup>

                    <p class="about__paragraph">Tenho 2 anos de experiência como técnico em informática e adoro essa área dinâmica. Meu foco profissional é a programação, onde desenvolvo aplicações web incríveis . Estou sempre me atualizando com as novidades e tendências, pois sei que o conhecimento é essencial na tecnologia que sempre está evoluindo rápidamente. Quero fazer a diferença no mundo da TI, usando minha experiência e paixão pela programação.</p>

                </div>

                <div class="about__image">

                    <div class="about__img"></div>

                </div>

            </article>

            <div class="main__line"></div>

            <article class="knowledge">

                <hgroup class="knowledge__titles">
                    <h2 class="knowledge__title--H2">Meus Conhecimentos</h2>
                </hgroup>

                <div class="knowledge__cards">

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/cpu-light_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Manutenção <br> de <br> Hardware</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/linux-logo-light_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Servidores Linux</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/windows-logo-light_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Servidores Windowns</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/database-zap_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Infraestru. <br> de <br> Rede</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/code-2_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Desenvolvi. <br> de <br> Software</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/layout-panel-left_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">UI/UX Design</h3>
                        </div>

                    </div>

                    <div class="knowledge__card">

                        <div class="knowledge__up">
                            <img src="./ASSETS/IMAGES/database_DARK.png" alt="" class="knowledge__img">
                        </div>
    
                        <div class="knowledge__down">
                            <h3 class="knowledge__title--H3">Databases MySQL</h3>
                        </div>

                    </div>

                </div>

            </article>

            <div class="main__line"></div>

            <article class="projects">

                <hgroup class="knowledge__titles">
                    <h2 class="knowledge__title--H2">Meus Projetos</h2>
                </hgroup>

                <div class="projects__cards">

                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/Captura de Tela (197).jpg" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_WHITE.png" alt="" class="projects__img" onclick="openProjectsContent(0)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Um Gerenciador de Dispositivos na Rede, similar ao servidor Zabbix, com interface simples e inicialmente algumas informações sobre o dispositivo. Criado com uma equipe de desenvolvimento como síntese do curso Técnico em Informatica. Pretendemos continuar e evoluir o projeto. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>
                    
                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/Captura de Tela (196).png" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_DARK.png" alt="" class="projects__img" onclick="openProjectsContent(1)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Projeto de uma Agenda Online, similar a Google Agenda ou o Calendar da Microsoft, mas com funcionalidades e design que achamos pertinentes adicionar. Criado com uma equipe de desenvolvimento, também criado como síntese do curso Técnico em Informatica. Também pretendemos continuar com o projeto. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>
                    
                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_DARK.png" alt="" class="projects__img" onclick="openProjectsContent(2)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat velit tempore id praesentium nemo doloremque nobis sapiente recusandae, at, modi odio nihil voluptate commodi qui excepturi totam enim rem quas. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>
                    
                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_DARK.png" alt="" class="projects__img" onclick="openProjectsContent(3)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat velit tempore id praesentium nemo doloremque nobis sapiente recusandae, at, modi odio nihil voluptate commodi qui excepturi totam enim rem quas. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>
                    
                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_DARK.png" alt="" class="projects__img" onclick="openProjectsContent(4)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat velit tempore id praesentium nemo doloremque nobis sapiente recusandae, at, modi odio nihil voluptate commodi qui excepturi totam enim rem quas. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>
                    
                    <div class="projects__card">

                        <img src="./ASSETS/IMAGES/" alt="" class="projects__img">

                        <div class="projects__content">
            
                            <div class="projects__image">
                                <img src="./ASSETS/IMAGES/caret-up-light_DARK.png" alt="" class="projects__img" onclick="openProjectsContent(5)">
                            </div>

                            <div class="projects__texts">
                        
                                <p class="projects__paragraph"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat velit tempore id praesentium nemo doloremque nobis sapiente recusandae, at, modi odio nihil voluptate commodi qui excepturi totam enim rem quas. </p>
    
                                <a href="" class="projects__link">Visitar</a>

                            </div>

                        </div>

                    </div>

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

                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNsMRRpWlSlsZCtFTNljLBvXtvdDZKvJsxJMRlZscBMtDWbvCpjfVFqKjMgwjwGVZNwrbB" class="footer__link" target="_blank"> <img src="./ASSETS/IMAGES/envelope-simple-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://github.com/Hugo-Otavio-2005" class="footer__link" target="_blank"> <img src="./ASSETS/IMAGES/github-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.linkedin.com/in/hugo-ot%C3%A1vio-47054a246/" class="footer__link" target="_blank"> <img src="./ASSETS/IMAGES/linkedin-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.instagram.com/hugotavio05/" class="footer__link" target="_blank"> <img src="./ASSETS/IMAGES/instagram-logo-light_WHITE.png" alt="" class="footer__img"> </a>

                <a href="https://www.facebook.com/profile.php?id=100083190938976" class="footer__link" target="_blank"> <img src="./ASSETS/IMAGES/facebook-logo-light_WHITE.png" alt="" class="footer__img"> </a>

            </figure>

        </section>

    </footer>

    <script src="./ASSETS/JS/scripts.js"></script>
    
</body>
</html>