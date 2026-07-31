<?php
/**
 * Template Name: Sobre
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
<!-- Hero Sobre -->
    <section class="section hero service-hero about-hero" aria-labelledby="about-title">
      <figure class="service-hero__mobile-photo">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-sobre-hero.jpg' ) ); ?>"
          alt="Marcela — consultora de imagem e estrategista de moda"
          width="1124"
          height="1489"
          fetchpriority="high">
      </figure>
      <figure class="service-hero__desktop-photo" aria-hidden="true">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-sobre-hero.jpg' ) ); ?>"
          alt=""
          width="1124"
          height="1489"
          loading="eager">
      </figure>
      <div class="service-hero__overlay" aria-hidden="true"></div>
      <div class="container hero__inner">
        <div class="hero__content reveal">
          <span class="hero__eyebrow service-hero__eyebrow">Estrategista &amp; Mentora</span>
          <h1 class="hero__title" id="about-title">Marcela</h1>
          <p class="service-hero__lead">
            Acredito que a imagem é uma ferramenta de poder, intenção e autoconhecimento. Há anos guio mulheres e marcas de moda em jornadas de diferenciação visual e posicionamento comercial.
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--white">Falar Comigo <span class="btn__arrow" aria-hidden="true">→</span></a>
            <a href="#servicos" class="btn btn--outline-light">Ver Serviços</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Bio -->
    <section class="section section--light" aria-labelledby="about-bio-title">
      <div class="container">
        <div class="about-prose reveal">
          <span class="eyebrow eyebrow--sage">Minha Trajetória</span>
          <h2 id="about-bio-title" class="section-heading section-heading--center">Sua Imagem com Intenção e Estratégia</h2>

          <div class="about-prose__body">
            <p class="about-prose__lead">
              Sempre encarei a moda não como um amontoado de regras vazias sobre o que vestir, mas como um mecanismo estratégico de comunicação. A maneira como nos vestimos traduz quem somos antes de pronunciarmos a primeira palavra.
            </p>

            <p>
              Minha missão como consultora de imagem e especialista em comportamento de consumo é descomplicar a relação que as mulheres têm com o guarda-roupa, resgatando a autoestima e a autoconfiança de forma prática, inteligente e livre de excessos. Não se trata de ter um guarda-roupa enorme, mas sim de ter um acervo que trabalhe ao seu favor.
            </p>

            <p>
              Paralelamente, atuo com marcas e lojas de moda através da consultoria comercial, treinamentos de equipes de vendas, estratégias de posicionamento de mercado e aplicação de Inteligência Artificial para alavancar faturamentos e otimizar processos de varejo.
            </p>

            <p>
              Seja em um atendimento individual de personal shopper ou estruturando a jornada de compras digital de um grande varejista, aplico sempre o mesmo princípio de curadoria fina: sofisticação, simplicidade intencional e resultados reais.
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/services-carousel', null, [
        'section_id'    => 'servicos',
        'section_class' => 'section section--cream services-more-section',
        'title_id'      => 'services-title',
    ]);
    ?>

    <!-- Instagram -->
    <section id="instagram" class="instagram-section reveal-on-scroll" aria-labelledby="instagram-title">
      <div class="container">
        <div class="instagram-header reveal">
          <span class="instagram-eyebrow">SIGA NAS REDES</span>
          <div class="social-channels">
            <h2 id="instagram-title" class="instagram-title">
              <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer">
                Instagram
                <span class="instagram-icon-wrapper" aria-hidden="true">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                </span>
              </a>
            </h2>
            <span class="social-channels__divider" aria-hidden="true">·</span>
            <a href="<?php echo esc_url( mpe_tiktok_url() ); ?>" class="social-channel-link" target="_blank" rel="noopener noreferrer">
              TikTok
              <span class="social-channel-link__icon" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v6.93c0 4.41-3.59 8-8 8-4.41 0-8-3.59-8-8s3.59-8 8-8c.34 0 .68.02 1.02.05v4.06a3.973 3.973 0 0 0-1.02-.13c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V.02z"/>
                </svg>
              </span>
            </a>
          </div>
        </div>

        <div class="instagram-collage reveal">
          <div class="instagram-column instagram-column--left">
            <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" class="instagram-card instagram-card--top-left">
              <div class="instagram-card__img-wrapper">
                <img class="instagram-card__img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-insta/651173648_18414856138127054_1606314852502046507_n.jpg' ) ); ?>" alt="Curadoria de Estilo Marcela Por Elas" loading="lazy">
              </div>
              <div class="instagram-card__overlay">
                <span class="instagram-card__handle">@marcelaporelas</span>
              </div>
            </a>
            <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" class="instagram-card instagram-card--bottom-left">
              <div class="instagram-card__img-wrapper">
                <img class="instagram-card__img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-blusa-branca-styling.jpg' ) ); ?>" alt="Acessórios e Detalhes de Estilo" loading="lazy">
              </div>
              <div class="instagram-card__overlay">
                <span class="instagram-card__handle">@marcelaporelas</span>
              </div>
            </a>
          </div>

          <div class="instagram-column instagram-column--center">
            <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" class="instagram-card instagram-card--center">
              <div class="instagram-card__img-wrapper">
                <img class="instagram-card__img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-insta/626518884_18407007811127054_43053712624896954_n.jpg' ) ); ?>" alt="Marcela Por Elas — Alta Costura e Consultoria de Imagem" loading="lazy">
              </div>
              <div class="instagram-card__overlay">
                <span class="instagram-card__handle">@marcelaporelas</span>
              </div>
            </a>
          </div>

          <div class="instagram-column instagram-column--right">
            <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" class="instagram-card instagram-card--top-right">
              <div class="instagram-card__img-wrapper">
                <img class="instagram-card__img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-insta/753205965_18436064986127054_8618303049750244051_n.jpg' ) ); ?>" alt="Elegância e Identidade Visual" loading="lazy">
              </div>
              <div class="instagram-card__overlay">
                <span class="instagram-card__handle">@marcelaporelas</span>
              </div>
            </a>
            <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" target="_blank" rel="noopener noreferrer" class="instagram-card instagram-card--bottom-right">
              <div class="instagram-card__img-wrapper">
                <img class="instagram-card__img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-terno-xadrez-autoridade.jpg' ) ); ?>" alt="Diferenciação e Estilo Atemporal" loading="lazy">
              </div>
              <div class="instagram-card__overlay">
                <span class="instagram-card__handle">@marcelaporelas</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-band cta-band--highlight" aria-labelledby="about-cta-title">
      <div class="container">
        <div class="cta-band__inner cta-band__inner--center reveal">
          <div>
            <span class="cta-band__eyebrow">Vamos Conversar</span>
            <h2 id="about-cta-title" class="cta-band__title">Pronta para elevar sua imagem?</h2>
            <p class="about-cta-text">Entre em contato e descubra qual consultoria combina com o seu momento — pessoal ou corporativo.</p>
          </div>
          <div class="cta-band__actions">
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--white">Falar Comigo <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>
