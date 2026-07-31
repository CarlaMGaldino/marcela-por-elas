<!-- Hero Section -->
    <section class="section hero hero--home" aria-labelledby="hero-title" style="background-image: url('<?php echo esc_url( mpe_asset('assets/imgs/banners/banner-marcela-home-principal.jpg?v=1') ); ?>'); background-size: cover; background-position: center; position: relative;">
      <div class="hero__media" aria-hidden="true" style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(48, 44, 42, 0.4); z-index: 1;"></div>
      <div class="container hero__inner" style="position: relative; z-index: 2;">
        <div class="hero__content reveal">
          <h1 class="hero__title" id="hero-title">Sua imagem comunica antes de você.</h1>
          <p class="hero__lead">
            Consultoria de imagem para mulheres e consultoria especializada para o varejo de moda.
          </p>
          <div class="hero__actions">
            <a href="#servicos" class="btn btn--white">Ver Serviços</a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--outline-light">Falar Comigo</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Sobre Marcela (Breve Introdução) -->
    <section class="section section--light" aria-labelledby="intro-title" style="overflow: hidden;">
      <div class="container">
        <div class="about-intro-grid reveal">
          <div>
            <span class="eyebrow eyebrow--sage">Especialista</span>
            <h2 id="intro-title" style="font-family: var(--font-display); color: var(--color-mahogany); margin-top: 0.5rem; margin-bottom: 1.25rem;">Marcela</h2>
            <p style="color: var(--color-text-primary); font-size: 1.0625rem; line-height: 1.6; margin-bottom: 1.5rem; text-align: justify;">
              Minha missão é guiar mulheres e marcas de moda em suas jornadas de diferenciação visual. Acredito que a elegância autêntica reside na simplicidade intencional e na adequação dos detalhes.
            </p>
            <a href="<?php echo esc_url( home_url( '/sobre/' ) ); ?>" class="btn btn--green">Conhecer Minha Trajetória</a>
          </div>
          <div class="about-intro-media-wrapper">
            <figure class="about-intro-figure">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/banners/marcela-section-2.jpg' ) ); ?>" alt="Marcela — consultora de imagem" class="about-intro-img">
            </figure>
            <!-- Ícone de Flor oficial animado saindo de trás da foto -->
            <div class="decorative-flower" aria-hidden="true">
              <img src="<?php echo esc_url( mpe_asset( 'assets/imgs/logos/icone-flor-01-salmao.png' ) ); ?>" alt="" style="width: 100%; height: 100%; object-fit: contain;">
            </div>
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

    <!-- Nossos Infoprodutos (Cursos & Curadorias) -->
    <section id="infoprodutos" class="section section--light" aria-labelledby="products-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Cursos &amp; Assinaturas</span>
          <h2 id="products-title">Nossos Infoprodutos</h2>
          <p>Descubra nossos programas digitais focados em multiplicação de looks e indicações exclusivas de compras.</p>
        </div>

        <div class="grid-2 reveal" style="gap: 2rem; margin-top: 3rem;">
          <!-- Bloco DEFINE -->
          <div style="background-color: var(--color-cream); border: 1px solid var(--color-border); padding: 3rem 2rem; border-radius: var(--radius-md); display: flex; flex-direction: column;">
            <span class="eyebrow eyebrow--sage">Estilo &amp; Styling</span>
            <h3 style="font-family: var(--font-display); color: var(--color-mahogany); font-size: 1.75rem; margin-top: 0.5rem; margin-bottom: 1rem;">Programa DEFINE</h3>
            <p style="color: var(--color-muted); line-height: 1.6; margin-bottom: 2rem; flex-grow: 1;">
              Aprenda a arte do styling profissional. Multiplique as opções do seu guarda-roupa existente, construa presença marcante e projete autoridade visual.
            </p>
            <a href="<?php echo esc_url( home_url( '/define/' ) ); ?>" class="btn btn--brown" style="align-self: flex-start;">Conhecer o Define <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>

          <!-- Bloco CURADORIA -->
          <div style="background-color: var(--color-cream); border: 1px solid var(--color-border); padding: 3rem 2rem; border-radius: var(--radius-md); display: flex; flex-direction: column;">
            <span class="eyebrow eyebrow--sage">Compras Inteligentes</span>
            <h3 style="font-family: var(--font-display); color: var(--color-mahogany); font-size: 1.75rem; margin-top: 0.5rem; margin-bottom: 1rem;">Compra Certa (Curadoria)</h3>
            <p style="color: var(--color-muted); line-height: 1.6; margin-bottom: 2rem; flex-grow: 1;">
              Receba mensalmente uma seleção minuciosa de looks prontos com links clicáveis das melhores marcas, filtrados e analisados pelo olhar de consultora de imagem.
            </p>
            <a href="<?php echo esc_url( home_url( '/curadoria/' ) ); ?>" class="btn btn--green" style="align-self: flex-start;">Receber Curadoria <span class="btn__arrow" aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Seção Newsletter de Luxo (Inspirada no Layout de Referência) -->
    <section class="newsletter-section" aria-labelledby="newsletter-headline">
      <div class="newsletter-content-side reveal">
        <span class="eyebrow eyebrow--sage" style="color: var(--color-beige);">Conteúdo com Intenção</span>
        <h2 id="newsletter-headline" class="newsletter-title">Cadastre-se na Curadoria de Estilo</h2>
        <p class="newsletter-text">
          Receba diretamente em seu e-mail análises exclusivas de tendências, segredos de styling de alta-costura e as minhas seleções premium de compras inteligentes.
        </p>
        <form class="newsletter-form" action="#" onsubmit="alert('Obrigada por se cadastrar! Em breve você receberá nossas novidades.'); this.reset(); return false;">
          <div class="newsletter-input-group">
            <input class="newsletter-input" type="email" placeholder="Digite seu melhor e-mail..." required>
          </div>
          <button type="submit" class="btn btn--green newsletter-submit-btn">Inscrever-se Agora <span class="btn__arrow" aria-hidden="true">→</span></button>
        </form>
      </div>

      <div class="newsletter-media-side reveal">
        <!-- Foto de fundo com opacidade sutil (Olhar/Rosto Marcela ou modelo de editorial) -->
        <img class="newsletter-bg-visual" src="<?php echo esc_url( mpe_asset( 'assets/imgs/banners/marcela-banner.jpg' ) ); ?>" alt="Editorial Visual de Moda">
        
        <!-- Card de sobreposição de colagem física, idêntico ao "Shop with Confidence" da referência -->
        <div class="newsletter-collage-card">
          <div class="newsletter-collage-img-wrapper">
            <img class="newsletter-collage-img" src="<?php echo esc_url( mpe_asset( 'assets/imgs/banners/marcela-01.jpeg' ) ); ?>" alt="Imagem Marcela Styling">
          </div>
          <h3 class="newsletter-collage-caption">Seu estilo pessoal</h3>
          
          <!-- Elemento manuscrito / carimbo elegante na ponta -->
          <div class="newsletter-handwritten-badge">Elegância</div>
        </div>
      </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos" class="section section--cream" aria-labelledby="testimonials-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Histórias de Sucesso</span>
          <h2 id="testimonials-title">O que dizem nossas clientes</h2>
          <p>Conheça o impacto real dos nossos atendimentos de estilo na autoestima, posicionamento e negócios.</p>
        </div>

        <div class="testimonials-grid reveal">
          <div class="testimonial-card">
            <p class="testimonial-card__quote">
              "A consultoria com a Marcela mudou completamente minha relação com o guarda-roupa. Hoje me visto em 5 minutos com peças que realmente transmitem a autoridade da minha profissão."
            </p>
            <div class="testimonial-card__author">
              <div class="testimonial-card__avatar">CS</div>
              <div>
                <h4 class="testimonial-card__name">Camila S.</h4>
                <p class="testimonial-card__subtitle">Advogada, São Paulo</p>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-card__quote">
              "Fazer a Mala Inteligente foi a melhor decisão para as minhas férias na Europa. Viajei com uma mala de mão super leve e tinha looks elegantes planejados e fotografados para cada dia."
            </p>
            <div class="testimonial-card__author">
              <div class="testimonial-card__avatar">FM</div>
              <div>
                <h4 class="testimonial-card__name">Fernanda M.</h4>
                <p class="testimonial-card__subtitle">Médica, Campinas</p>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-card__quote">
              "A consultoria comercial para varejo de moda trouxe um novo olhar para nossa boutique. O treinamento de vendas e a organização das vitrines impulsionaram nossas vendas de forma incrível."
            </p>
            <div class="testimonial-card__author">
              <div class="testimonial-card__avatar">RG</div>
              <div>
                <h4 class="testimonial-card__name">Roberta G.</h4>
                <p class="testimonial-card__subtitle">Lojista, São Paulo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Accordion -->
    <section id="faq" class="section section--light" aria-labelledby="faq-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Suporte</span>
          <h2 id="faq-title">Dúvidas Frequentes</h2>
          <p>Confira as respostas para as principais dúvidas sobre nossos formatos de atendimento e agendamento.</p>
        </div>

        <div class="faq-list reveal">
          <div class="faq-item">
            <button class="faq-trigger" type="button" aria-expanded="false">Como agendar um serviço ou consultoria?</button>
            <div class="faq-content">
              <p>O agendamento é feito de forma direta e personalizada. Basta clicar em qualquer botão de contato para falar com nosso suporte via WhatsApp. Agendaremos uma rápida reunião de diagnóstico para entender suas dores e indicar o melhor serviço.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-trigger" type="button" aria-expanded="false">O atendimento é feito de forma online ou presencial?</button>
            <div class="faq-content">
              <p>Oferecemos ambos os formatos! O Estudo Unleash, a Mala Inteligente e a Consultoria Completa de Imagem podem ser realizados de forma 100% online, com entrega digital. Serviços que envolvem provador físico e roteiro presencial (como Personal Shopper e Tour Bom Retiro) ocorrem na cidade de São Paulo.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-trigger" type="button" aria-expanded="false">Quais as formas de pagamento disponíveis?</button>
            <div class="faq-content">
              <p>Trabalhamos com Pix, transferência bancária direta ou parcelamento em até 12x no cartão de crédito via link seguro de pagamento.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-trigger" type="button" aria-expanded="false">Qual a duração de cada processo?</button>
            <div class="faq-content">
              <p>Os serviços pontuais, como Personal Shopper e Tour Bom Retiro, envolvem um encontro presencial de 3 a 4 horas. Já os processos completos, como a Consultoria de Imagem Completa, ocorrem ao longo de 3 a 5 semanas para que o processo de aprendizado e transformação de hábitos seja assimilado perfeitamente.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Seção Instagram de Luxo (Inspirada no Layout de Referência) -->
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
          <!-- Coluna Esquerda: 2 imagens -->
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

          <!-- Coluna Central: 1 grande imagem focal -->
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

          <!-- Coluna Direita: 2 imagens -->
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