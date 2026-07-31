<?php
/**
 * Template Name: Define
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
<!-- Hero DEFINE -->
    <section class="section hero define-hero" aria-labelledby="define-title">
      <figure class="define-hero__mobile-photo">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-terno-xadrez-autoridade.jpg' ) ); ?>"
          alt="Marcela — consultora de imagem e criadora do Programa DEFINE"
          width="1123"
          height="1488"
          fetchpriority="high">
      </figure>
      <figure class="define-hero__desktop-photo" aria-hidden="true">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-terno-xadrez-autoridade.jpg' ) ); ?>"
          alt=""
          width="1123"
          height="1488"
          loading="eager">
      </figure>
      <div class="define-hero__overlay" aria-hidden="true"></div>
      <div class="container hero__inner">
        <div class="hero__content reveal">
          <span class="hero__eyebrow define-hero__eyebrow">Estilo &amp; Styling</span>
          <h1 class="hero__title" id="define-title">Programa<br>DEFINE</h1>
          <p class="define-hero__lead">
            Aprenda a multiplicar seus looks e construir autoridade visual usando o que você já possui. Styling prático, sem regras engessadas e focado na sua melhor versão.
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( mpe_define_cta_url() ); ?>" class="btn btn--brown" data-cta="define" rel="noopener" target="_blank">Quero me Inscrever <span class="btn__arrow" aria-hidden="true">→</span></a>
            <a href="#define-metodo" class="btn btn--outline-light">Entender o Método</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Introdução Editorial -->
    <section class="section section--light" aria-labelledby="define-intro-title">
      <div class="container">
        <div class="about-intro-grid reveal">
          <div>
            <span class="eyebrow eyebrow--sage">O Segredo do Styling</span>
            <h2 id="define-intro-title" class="section-heading">O look não está sem graça.<br>Ele só está sem styling.</h2>
            <p class="section-lead">
              Pequenos ajustes de proporção, sobreposição e acessórios transformam produções comuns em looks cheios de intenção, elegância e autoridade visual.
            </p>
            <a href="#define-video" class="btn btn--green">Assistir Apresentação</a>
          </div>
          <div class="about-intro-media-wrapper">
            <figure class="about-intro-figure">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-blusa-branca-styling.jpg' ) ); ?>" alt="Marcela demonstrando styling com blusa branca estruturada" class="about-intro-img" loading="lazy">
            </figure>
            <div class="decorative-flower" aria-hidden="true">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/logos/icone-flor-01-salmao.png' ) ); ?>" alt="" width="180" height="180" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- O Método -->
    <section id="define-metodo" class="section section--cream" aria-labelledby="define-metodo-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Metodologia</span>
          <h2 id="define-metodo-title" class="section-heading section-heading--center">Aulas Práticas Que Mudam Seu Look</h2>
          <p>Três pilares essenciais para você dominar o styling no dia a dia, com o que já existe no seu guarda-roupa.</p>
        </div>

        <div class="pilares-grid reveal">
          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Proporção e Silhueta</h3>
            <p class="pilar-card__text">Aprenda a valorizar suas proporções físicas naturais sem precisar de regras restritivas ou listas do que pode ou não pode.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Poder das Sobreposições</h3>
            <p class="pilar-card__text">Descubra como a terceira peça e as texturas transformam um look básico em uma produção sofisticada em segundos.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Acessórios Estratégicos</h3>
            <p class="pilar-card__text">Entenda como sapatos, bolsas, cintos e joias direcionam a mensagem que você deseja transmitir ao mundo.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Vídeo de Apresentação -->
    <section id="define-video" class="section section--light define-showcase" aria-labelledby="video-title">
      <div class="container">
        <div class="define-video-grid reveal">
          <div class="define-video-grid__media">
            <span class="define-video-label" aria-hidden="true">DEFINE</span>
            <div class="video-player define-video-player">
              <video controls preload="metadata" poster="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-colete-creme-calca-verde.jpg' ) ); ?>" aria-label="Vídeo de apresentação do DEFINE" width="1280" height="720">
                <source src="<?php echo esc_url( mpe_asset( 'assets/videos/define.mp4' ) ); ?>" type="video/mp4">
                <source src="<?php echo esc_url( mpe_asset( 'assets/videos/define.MOV' ) ); ?>" type="video/quicktime">
                Seu navegador não suporta a reprodução de vídeo.
              </video>
            </div>
          </div>

          <div class="define-showcase__content">
            <span class="eyebrow eyebrow--sage">Vídeo de Apresentação</span>
            <h2 id="video-title" class="section-heading">Assista e Descubra o Programa</h2>
            <p class="section-lead">Por Marcela Por Elas</p>
            <h3 class="showcase-title">Transforme as roupas que você já tem</h3>
            <blockquote class="define-showcase__quote define-quote-block">
              "Como transformar produções normais em looks cheios de informação de moda, elegância e muita autoridade visual."
            </blockquote>
            <a href="<?php echo esc_url( mpe_define_cta_url() ); ?>" class="btn btn--brown" data-cta="define" rel="noopener" target="_blank">Quero me Inscrever <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Dores & Soluções -->
    <section class="section section--cream" aria-labelledby="define-pain-title">
      <div class="container">
        <div class="define-pain-grid reveal">
          <div class="define-pain-card">
            <span class="eyebrow eyebrow--sage">Dificuldades comuns</span>
            <h2 id="define-pain-title" class="section-heading">Isso já aconteceu com você?</h2>
            <ul class="checklist-chique">
              <li><strong>Guarda-roupa cheio, mas nada para vestir:</strong> Você sente que usa sempre as mesmas 5 combinações e as outras peças continuam esquecidas.</li>
              <li><strong>Sensação de que o look está básico ou infantil demais:</strong> Você quer transmitir maturidade e autoridade, mas não sabe como.</li>
              <li><strong>Insegurança na hora de combinar cores ou estampas:</strong> Acaba sempre caindo no preto, cinza ou jeans básico por medo de errar.</li>
              <li><strong>Comprar por impulso para resolver a falta de looks:</strong> Mas a peça nova acaba ficando parada, sem conversar com o resto do armário.</li>
            </ul>
          </div>

          <div class="about-intro-media-wrapper define-pain-media">
            <figure class="about-intro-figure">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-section-dificuldades-comuns.jpg' ) ); ?>" alt="Marcela em look preto e branco — consultora de imagem e styling" class="about-intro-img" loading="lazy">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-band cta-band--highlight" aria-labelledby="define-cta-title">
      <div class="container">
        <div class="cta-band__inner cta-band__inner--center reveal">
          <div>
            <span class="cta-band__eyebrow">Acesso Imediato</span>
            <h2 id="define-cta-title" class="cta-band__title">Sua nova identidade visual começa hoje</h2>
            <p class="define-cta-text">Garanta sua inscrição no Programa DEFINE e aprenda a se vestir com intenção e estratégia todos os dias, de forma definitiva.</p>
          </div>
          <div class="cta-band__actions">
            <a href="<?php echo esc_url( mpe_define_cta_url() ); ?>" class="btn btn--white" data-cta="define" rel="noopener" target="_blank">Quero me Inscrever Agora <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>
