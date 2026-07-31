<!-- Service Hero -->
    <section class="service-page-hero" aria-labelledby="service-title">
      <div class="container service-page-hero__inner">
        <div class="service-page-hero__content reveal">
          <span class="eyebrow eyebrow--sage">Transformação de Imagem End-to-End</span>
          <h1 id="service-title" class="hero-institutional__title" style="margin-top: 0.5rem;">
            Consultoria Completa
          </h1>
          <p class="hero-institutional__lead">
            A jornada mais profunda de autoconhecimento e refinamento visual. Mapeie seu estilo, revitalize seu armário, faça compras certeiras e aprenda a se vestir com intenção e confiança absoluta.
          </p>
          <div class="hero-institutional__actions" style="margin-top: 2rem;">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--brown">
              Iniciar Transformação <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--green">Tirar Dúvidas</a>
          </div>
        </div>
        <div class="service-page-hero__media reveal">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Consultoria de imagem e estilo profunda com Marcela" width="800" height="1000" style="object-position: 80% top;">
        </div>
      </div>
    </section>

    <!-- Como Funciona -->
    <section class="section section--light">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Jornada</span>
          <h2>As Etapas da Consultoria</h2>
          <p>Um processo metodológico completo dividido em fases estratégicas e práticas para remodelar a sua presença visual.</p>
        </div>

        <div class="pilares-grid reveal">
          <div class="pilar-card">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Alinhamento Conceitual</h3>
            <p class="pilar-card__text">Estudo detalhado dos seus objetivos pessoais e profissionais, estilo de vida atual e desejos profundos de imagem.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Revitalização de Guarda-Roupa</h3>
            <p class="pilar-card__text">Uma curadoria detalhada no seu armário (Closet Cleaning) para analisar, selecionar e organizar o que realmente deve ficar.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Personal Shopper &amp; Styling</h3>
            <p class="pilar-card__text">Compras focadas para preencher lacunas e, posteriormente, a montagem e fotografia de dezenas de novos looks coordenados.</p>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/service-benefits', null, [
        'eyebrow'  => 'Resultado',
        'title'    => 'Tudo que Está Incluso na Consultoria',
        'title_id' => 'consultoria-completa-benefits-title',
        'items'    => [
            [
                'title' => 'Dossiê de Identidade Visual Completo',
                'text'  => 'Documento digital premium detalhando toda a estratégia do seu novo estilo e referências.',
            ],
            [
                'title' => 'Closet Cleaning Estratégico',
                'text'  => 'Limpeza profissional que elimina excessos e traz ordem visual prática ao seu guarda-roupa.',
            ],
            [
                'title' => 'Sessão de Personal Shopper Direcionada',
                'text'  => 'Roteiro de lojas exclusivo e reserva de provadores para aquisição das peças que faltam.',
            ],
            [
                'title' => 'Montagem de Looks (Styling)',
                'text'  => 'Sessão prática de coordenação onde montamos e fotografamos looks completos para sua facilidade no dia a dia.',
            ],
        ],
    ]);
    ?>

    <?php
    get_template_part('template-parts/services/service-cta', null, [
        'eyebrow'   => 'Presença Inesquecível',
        'title'     => 'Construa uma imagem alinhada com o seu sucesso',
        'title_id'  => 'consultoria-completa-cta-title',
        'text'      => 'A Consultoria Completa de Imagem é o maior investimento que você pode fazer em si mesma, alinhando sua força interior com sua expressão externa.',
        'btn_text'  => 'Quero Iniciar Minha Consultoria no WhatsApp',
        'btn_class' => 'btn--green',
    ]);
    ?>