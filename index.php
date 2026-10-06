<?php
include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#08083b">
    <meta name="description" content="A Agência Quimera transforma ideias em marcas com identidade, estratégia e personalidade. Conheça nossos projetos e vamos criar juntos.">
    <title>Quimera Agência | Marcas com identidade</title>
    <link rel="icon" href="images/Logo/icone_quimera_300x300.png" type="image/png">
    <link rel="preload" as="font" href="fonts/Hagrid-medium.ttf" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="CSS/landing.css">
    <script>document.documentElement.classList.add('js');</script>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="index.php" aria-label="Quimera Agência, início">
            <img src="images/Logo/logo_01.svg" alt="Quimera Agência">
        </a>
        <nav class="site-nav" aria-label="Navegação principal">
            <a href="#projetos">Projetos</a>
            <a href="#servicos">O que fazemos</a>
            <a class="nav-cta" href="#form">Vamos conversar <span aria-hidden="true">↗</span></a>
        </nav>
    </header>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy reveal">
                <p class="eyebrow"><span></span> Estratégia, identidade e criação</p>
                <h1 id="hero-title">Sua marca<br>merece <em>ser lembrada.</em></h1>
                <p class="hero-description">Ideias com intenção viram marcas que conectam. A gente junta o que você sonha com o que sabemos fazer.</p>
                <a class="text-link" href="#projetos">Explore nosso trabalho <span aria-hidden="true">↓</span></a>
            </div>
            <figure class="hero-art reveal">
                <picture>
                    <source media="(max-width: 600px)" srcset="images/Banner/banner_topo_400x230.png">
                    <img src="images/Banner/banner_topo_1500x766.png" alt="Seu sonho também é nosso, arte da Agência Quimera" fetchpriority="high">
                </picture>
                <figcaption>O próximo capítulo da sua marca começa aqui.</figcaption>
            </figure>
            <span class="hero-index" aria-hidden="true">01 / 04</span>
        </section>

        <section class="intro reveal" aria-label="Sobre a Quimera">
            <p class="eyebrow eyebrow-dark">Muito prazer, somos a Quimera</p>
            <p class="intro-statement">A gente transforma <span>ideias em identidade</span> e identidade em conexão de verdade.</p>
            <p class="intro-note">Sensibilidade e estratégia trabalhando juntas para criar marcas com personalidade, propósito e espaço para crescer.</p>
        </section>

        <section class="portfolio" id="projetos" aria-labelledby="portfolio-title">
            <div class="section-heading reveal">
                <div>
                    <p class="eyebrow eyebrow-dark">Feito para existir no mundo</p>
                    <h2 id="portfolio-title">Projetos que<br><em>falam por si.</em></h2>
                </div>
                <p>Cada marca tem uma história. Estas são algumas das que tivemos o prazer de contar.</p>
            </div>
            <div class="project-grid">
                <?php if (is_array($projetos) && !empty($projetos)): ?>
                    <?php foreach ($projetos as $value): ?>
                        <article class="project-card reveal">
                            <a href="page.php?id=<?= htmlspecialchars($value['id'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Conheça o projeto <?= htmlspecialchars($value['nome'], ENT_QUOTES, 'UTF-8'); ?>">
                                <img src="<?= htmlspecialchars($value['imagem'], ENT_QUOTES, 'UTF-8'); ?>" alt="Identidade visual de <?= htmlspecialchars($value['nome'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                                <span class="project-caption"><span><?= htmlspecialchars($value['nome'], ENT_QUOTES, 'UTF-8'); ?></span><span aria-hidden="true">↗</span></span>
                            </a>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="empty-state">Estamos preparando novos projetos. Volte em breve para conhecer nosso trabalho.</p>
                <?php endif; ?>
            </div>
        </section>

        <section class="services" id="servicos" aria-labelledby="services-title">
            <div class="services-heading reveal">
                <p class="eyebrow">Um universo de possibilidades</p>
                <h2 id="services-title">E que tal irmos<br><em>além da ideia?</em></h2>
                <p>Do primeiro traço ao último detalhe, criamos experiências visuais que levam sua marca mais longe.</p>
            </div>
            <div class="service-grid">
                <article class="service-card reveal">
                    <img src="images/Servicos/icon_motion_design_400x400.png" alt="" loading="lazy">
                    <div><span>01</span><h3>Motion design</h3><p>Movimento que dá vida à sua mensagem.</p></div>
                </article>
                <article class="service-card reveal">
                    <img src="images/Servicos/icon_redes_sociais_400x400.png" alt="" loading="lazy">
                    <div><span>02</span><h3>Redes sociais</h3><p>Presença visual que cria conversa e conexão.</p></div>
                </article>
            </div>
            <a class="services-link" href="#form">Tem outra ideia em mente? Conte pra gente <span aria-hidden="true">↗</span></a>
        </section>

        <section class="contact" id="form" aria-labelledby="contact-title">
            <div class="contact-copy reveal">
                <p class="eyebrow">Toda grande marca começa com uma conversa</p>
                <h2 id="contact-title">Vamos criar algo<br><em>que é a sua cara?</em></h2>
                <p>Conta um pouco do que você imaginou. A gente retorna para tirar essa ideia do papel.</p>
                <div class="social-links">
                    <a href="https://www.behance.net/quimeradesigner?tracking_source=search_projects_recommended%7Cquimeradesigner" target="_blank" rel="noopener noreferrer">Behance <span aria-hidden="true">↗</span></a>
                    <a href="https://www.instagram.com/quimera.designer/" target="_blank" rel="noopener noreferrer">Instagram <span aria-hidden="true">↗</span></a>
                </div>
            </div>
            <form class="contact-form reveal" action="https://getform.io/f/d3534c8d-12d8-4b73-a072-744d20ef997d" method="POST">
                <label for="nome">Seu nome</label>
                <input id="nome" name="nome" type="text" autocomplete="name" placeholder="Como podemos chamar você?" required>
                <label for="email">Seu e-mail</label>
                <input id="email" name="email" type="email" autocomplete="email" placeholder="voce@exemplo.com" required>
                <label for="mensagem">O que você está imaginando?</label>
                <textarea id="mensagem" name="mensagem" rows="3" maxlength="2000" placeholder="Fale um pouco sobre seu projeto..." required></textarea>
                <label class="privacy-check"><input type="checkbox" name="TermsandConditions" value="yes" required> Li e concordo com a <a target="_blank" rel="noopener noreferrer" href="./TERMO DE ADEQUAÇÃO À  LGPD.pdf">política de privacidade</a>.</label>
                <button type="submit">Enviar mensagem <span aria-hidden="true">↗</span></button>
            </form>
            <div class="contact-bottom">
                <a href="index.php" class="footer-brand"><img src="images/Logo/logo_02.svg" alt="Quimera Agência"></a>
                <span>Marcas com alma, feitas para o mundo.</span>
                <a class="signature" href="https://github.com/WilliamLima300" target="_blank" rel="noopener noreferrer"><img src="images/Assinatura/assinatura.png" alt="Desenvolvido por William Lima" loading="lazy"></a>
            </div>
        </section>
    </main>
    <script>
        if ('IntersectionObserver' in window) {
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });
            document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));
        } else {
            document.documentElement.classList.remove('js');
        }
    </script>
</body>
</html>