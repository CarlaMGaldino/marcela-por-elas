<!-- Service Hero -->
    <section class="service-page-hero" aria-labelledby="service-title">
      <div class="container service-page-hero__inner">
        <div class="service-page-hero__content reveal">
          <span class="eyebrow eyebrow--sage">Consultoria de Estilo Individual</span>
          <h1 id="service-title" class="hero-institutional__title" style="margin-top: 0.5rem;">
            Estudo Unleash
          </h1>
          <p class="hero-institutional__lead">
            Desvende o seu estilo pessoal, entenda os seus desejos de imagem e ganhe clareza estratégica absoluta na hora de se vestir e expressar a sua autoridade visual.
          </p>
          <div class="hero-institutional__actions" style="margin-top: 2rem;">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--brown">
              Agendar Estudo <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--green">Tirar Dúvidas</a>
          </div>
        </div>
        <div class="service-page-hero__media reveal">
          <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&q=80&w=800" alt="Estudo de estilo e identidade visual editorial" width="800" height="1000">
        </div>
      </div>
    </section>

    <!-- Como Funciona -->
    <section class="section section--light">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Metodologia</span>
          <h2>Como Funciona o Processo</h2>
          <p>Uma jornada estruturada, online ou presencial, para traduzir a sua personalidade em elementos visuais.</p>
        </div>

        <div class="pilares-grid reveal">
          <div class="pilar-card">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Questionário de Investigação</h3>
            <p class="pilar-card__text">Um questionário detalhado para entender sua rotina, estilo de vida, dores atuais e onde você quer chegar com a sua imagem.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Entrevista de Alinhamento</h3>
            <p class="pilar-card__text">Uma conversa profunda para lapidarmos suas respostas e criarmos as diretrizes conceituais do seu estilo pessoal.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Construção do Dossiê</h3>
            <p class="pilar-card__text">Desenvolvo um estudo sob medida com todas as referências visuais que traduzem a sua nova identidade visual.</p>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/service-benefits', null, [
        'eyebrow'  => 'Entregáveis',
        'title'    => 'O Que Você Recebe no Estudo Unleash',
        'title_id' => 'estudo-benefits-title',
        'items'    => [
            [
                'title' => 'Dossiê Digital Completo',
                'text'  => 'Um guia interativo personalizado contendo sua cartela de referências de estilo, formas, tecidos e moods.',
            ],
            [
                'title' => 'Guia de Elementos Visuais',
                'text'  => 'Recomendações personalizadas de sapatos, acessórios, sugestão de cortes de cabelo e maquiagem.',
            ],
            [
                'title' => 'Fórmulas de Combinação',
                'text'  => 'Exemplos práticos de montagem de looks para diferentes ocasiões (trabalho, lazer, eventos).',
            ],
            [
                'title' => 'Direcionamento de Compras',
                'text'  => 'Uma lista estratégica com as peças exatas que faltam no seu guarda-roupa para complementá-lo.',
            ],
        ],
    ]);
    ?>

    <?php
    get_template_part('template-parts/services/service-cta', null, [
        'eyebrow'   => 'Sua Melhor Versão',
        'title'     => 'Pronta para destravar o seu estilo pessoal?',
        'title_id'  => 'estudo-cta-title',
        'text'      => 'O Estudo Unleash é o ponto de partida perfeito para quem deseja clareza visual e um guarda-roupa inteligente com direcionamento profissional.',
        'btn_text'  => 'Falar com a Marcela no WhatsApp',
        'btn_class' => 'btn--green',
    ]);
    ?>