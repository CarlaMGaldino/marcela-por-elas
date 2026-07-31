<!-- Hero Mala Inteligente -->
    <section class="section hero service-hero" aria-labelledby="service-title">
      <figure class="service-hero__mobile-photo">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-mala-inteligente-hero.jpg' ) ); ?>"
          alt="Marcela — consultora de imagem especialista em montagem de malas"
          width="1124"
          height="1489"
          fetchpriority="high">
      </figure>
      <figure class="service-hero__desktop-photo" aria-hidden="true">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-mala-inteligente-hero.jpg' ) ); ?>"
          alt=""
          width="1124"
          height="1489"
          loading="eager">
      </figure>
      <div class="service-hero__overlay" aria-hidden="true"></div>
      <div class="container hero__inner">
        <div class="hero__content reveal">
          <span class="hero__eyebrow service-hero__eyebrow">Praticidade &amp; Sofisticação</span>
          <h1 class="hero__title" id="service-title">Mala<br>Inteligente</h1>
          <p class="service-hero__lead">
            Viaje sem o peso de malas excessivas ou da indecisão diária. Planejamento de looks coordenados e fotografados sob medida para o roteiro, clima e eventos do seu destino.
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--white">Planejar Mala <span class="btn__arrow" aria-hidden="true">→</span></a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--outline-light">Tirar Dúvidas</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Como Funciona -->
    <section class="section section--light" aria-labelledby="mala-metodo-title">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Metodologia</span>
          <h2 id="mala-metodo-title" class="section-heading section-heading--center">Como Funciona a Montagem de Mala</h2>
          <p>Toda viagem pede uma estratégia específica de vestuário para garantir leveza, elegância e as fotos perfeitas.</p>
        </div>

        <div class="pilares-grid reveal">
          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Alinhamento do Roteiro</h3>
            <p class="pilar-card__text">Análise aprofundada do destino, clima, duração e programação diária — jantares, reuniões e passeios urbanos.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Criação das Coordenações</h3>
            <p class="pilar-card__text">Seleção de peças versáteis do seu acervo que se misturam entre si, maximizando looks com o mínimo de peso.</p>
          </article>

          <article class="pilar-card pilar-card--white">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Styling e Registro Fotográfico</h3>
            <p class="pilar-card__text">Montagem física e registro de todos os looks, da cabeça aos pés — sapatos, bolsas e acessórios inclusos.</p>
          </article>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/service-benefits', null, [
        'eyebrow'  => 'Entregáveis',
        'title'    => 'Vantagens da Mala Inteligente',
        'title_id' => 'mala-benefits-title',
        'lead'     => 'Cada viagem merece leveza, elegância e zero improviso na hora de se vestir. Veja o que você leva além da mala.',
        'items'    => [
            [
                'title' => 'Viagens sem Excesso de Peso',
                'text'  => 'Mala otimizada e livre do estresse de bagagens pesadas e taxas extras de avião.',
            ],
            [
                'title' => 'Looks Prontos por Dia/Ocasião',
                'text'  => 'Nada de perder tempo nas férias ou viagens de trabalho pensando em "com que roupa eu vou".',
            ],
            [
                'title' => 'Guia Digital de Bolso',
                'text'  => 'Documento no celular com fotos de todas as combinações organizadas cronologicamente pelo seu roteiro.',
            ],
            [
                'title' => 'Praticidade Extrema',
                'text'  => 'Peças estrategicamente dobradas e organizadas para chegar ao destino em perfeito estado.',
            ],
        ],
    ]);
    ?>

    <?php
    get_template_part('template-parts/services/service-cta', null, [
        'eyebrow'  => 'Viaje com Estilo',
        'title'    => 'Sua mala ideal está a um clique de distância',
        'title_id' => 'mala-cta-title',
        'text'     => 'Delegue a arrumação e o planejamento visual da sua próxima viagem e aproveite cada segundo do destino com elegância garantida.',
        'btn_text' => 'Planejar Minha Viagem',
    ]);
    ?>