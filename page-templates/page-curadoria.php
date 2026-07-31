<?php
/**
 * Template Name: Curadoria
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
<!-- Hero Curadoria -->
    <section class="section hero curadoria-hero" aria-labelledby="curadoria-title">
      <figure class="curadoria-hero__mobile-photo">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-curadoria-camisa-xadrez.jpg' ) ); ?>"
          alt="Marcela — curadora de moda e criadora da Compra Certa"
          width="1124"
          height="1489"
          fetchpriority="high">
      </figure>
      <figure class="curadoria-hero__desktop-photo" aria-hidden="true">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-curadoria-camisa-xadrez.jpg' ) ); ?>"
          alt=""
          width="1124"
          height="1489"
          loading="eager">
      </figure>
      <div class="curadoria-hero__overlay" aria-hidden="true"></div>
      <div class="container hero__inner">
        <div class="hero__content reveal">
          <span class="hero__eyebrow curadoria-hero__eyebrow">Curadoria de Compras Mensal</span>
          <h1 class="hero__title" id="curadoria-title">Compra<br>Certa</h1>
          <p class="curadoria-hero__lead">
            Chega de perder horas em sites de moda e errar na escolha. Receba looks prontos, links diretos de compra e curadoria profissional das melhores peças do mês.
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( mpe_curadoria_cta_url() ); ?>" class="btn btn--green" data-cta="curadoria" rel="noopener" target="_blank">Receber Curadoria <span class="btn__arrow" aria-hidden="true">→</span></a>
            <a href="#curadoria-video" class="btn btn--outline-light">Entender o Formato</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Introdução Editorial -->
    <section class="section section--light" aria-labelledby="curadoria-intro-title">
      <div class="container">
        <div class="about-intro-grid reveal">
          <div>
            <span class="eyebrow eyebrow--sage">Compre Menos, Acerte Mais</span>
            <h2 id="curadoria-intro-title" class="section-heading">Sua curadora pessoal<br>de moda todos os meses</h2>
            <p class="section-lead">
              Não importa a marca do shopping. O que importa é a qualidade, o caimento, as fibras do tecido e o potencial de multiplicação de cada peça indicada.
            </p>
            <a href="#curadoria-beneficios" class="btn btn--brown">Ver Benefícios</a>
          </div>
          <div class="about-intro-media-wrapper">
            <figure class="about-intro-figure">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-curadoria-blazer-jeans.jpg' ) ); ?>" alt="Marcela em look curado com blazer marrom e jeans" class="about-intro-img" loading="lazy">
            </figure>
            <div class="decorative-flower" aria-hidden="true">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/logos/icone-flor-01-salmao.png' ) ); ?>" alt="" width="180" height="180" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Vídeo de Apresentação -->
    <section id="curadoria-video" class="section section--cream define-showcase" aria-labelledby="curadoria-video-title">
      <div class="container">
        <div class="define-video-grid reveal">
          <div class="define-video-grid__media">
            <span class="define-video-label" aria-hidden="true">CURADORIA</span>
            <div class="video-player define-video-player">
              <video controls preload="metadata" poster="<?php echo esc_url( mpe_asset( 'assets/imgs/posters/curadoria-inteligente-poster.jpg' ) ); ?>?v=2" aria-label="Vídeo sobre a Curadoria Inteligente" width="1280" height="720">
                <source src="<?php echo esc_url( mpe_asset( 'assets/videos/curadoria-inteligente.mp4' ) ); ?>" type="video/mp4">
                <source src="<?php echo esc_url( mpe_asset( 'assets/videos/curadoria-inteligente.MOV' ) ); ?>" type="video/quicktime">
                Seu navegador não suporta a reprodução de vídeo.
              </video>
            </div>
          </div>

          <div class="define-showcase__content">
            <span class="eyebrow eyebrow--sage">Por Dentro do Serviço</span>
            <h2 id="curadoria-video-title" class="section-heading">Apresentação da Curadoria</h2>
            <p class="section-lead">Por Marcela Por Elas</p>
            <h3 class="showcase-title">Veja como funciona o PDF mensal</h3>
            <blockquote class="define-showcase__quote define-quote-block">
              "Um relatório de curadoria completo, com links diretos para você comprar com estratégia, versatilidade e segurança."
            </blockquote>
            <a href="<?php echo esc_url( mpe_curadoria_cta_url() ); ?>" class="btn btn--green" data-cta="curadoria" rel="noopener" target="_blank">Receber Curadoria <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefícios -->
    <section id="curadoria-beneficios" class="section section--light" aria-labelledby="curadoria-beneficios-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">O Que Você Recebe</span>
          <h2 id="curadoria-beneficios-title" class="section-heading section-heading--center">Curadoria Profissional Todo Mês</h2>
          <p>Looks pensados de forma inteligente para que cada peça compreendida sirva para vários moods.</p>
        </div>

        <div class="pilares-grid reveal">
          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Links Diretos de Compra</h3>
            <p class="pilar-card__text">Basta clicar no look do PDF e ser direcionada para o checkout oficial de cada marca, sem perder tempo pesquisando.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Combinações Prontas</h3>
            <p class="pilar-card__text">Looks completos com sapatos, acessórios, roupas casuais e alfaiataria — tudo harmonizado por uma consultora de imagem.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Economia Estratégica</h3>
            <p class="pilar-card__text">Evite o acúmulo de peças que nunca saem do armário. Compre menos, com mais intenção e versatilidade real.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Diferencial -->
    <section class="section section--cream" aria-labelledby="curadoria-quote-title">
      <div class="container">
        <div class="define-pain-grid reveal">
          <div class="define-pain-card">
            <span class="eyebrow eyebrow--sage">Nosso Diferencial</span>
            <h2 id="curadoria-quote-title" class="section-heading">Comprar melhor,<br>não comprar mais</h2>
            <blockquote class="define-quote-block curadoria-quote">
              "O objetivo não é fazer você comprar mais — é fazer você comprar melhor, com mais estratégia, versatilidade e segurança nas suas escolhas."
            </blockquote>
            <ul class="checklist-chique">
              <li><strong>PDF Interativo Mensal:</strong> Curadoria de links em um único arquivo elegante e fácil de navegar.</li>
              <li><strong>Marcas Filtradas:</strong> Apenas confecções que passaram pelo crivo de avaliação profissional.</li>
              <li><strong>Explicação Estratégica:</strong> O "porquê" de cada indicação e sugestões de ocasiões para usar o look.</li>
            </ul>
          </div>

          <div class="about-intro-media-wrapper define-pain-media">
            <figure class="about-intro-figure">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-curadoria-saia-plaid.jpg' ) ); ?>" alt="Marcela em look curado com saia xadrez e jaqueta jeans" class="about-intro-img" loading="lazy">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-band cta-band--highlight" aria-labelledby="curadoria-cta-title">
      <div class="container">
        <div class="cta-band__inner cta-band__inner--center reveal">
          <div>
            <span class="cta-band__eyebrow">Sua Curadora Pessoal</span>
            <h2 id="curadoria-cta-title" class="cta-band__title">Tenha uma consultora guiando suas compras todos os meses</h2>
            <p class="curadoria-cta-text">Com a Curadoria Inteligente (Compra Certa), você desfruta de um guarda-roupa coeso, moderno e altamente otimizado por uma fração do valor do mercado.</p>
          </div>
          <div class="cta-band__actions">
            <a href="<?php echo esc_url( mpe_curadoria_cta_url() ); ?>" class="btn btn--white" data-cta="curadoria" rel="noopener" target="_blank">Garantir Meu PDF Mensal <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>
