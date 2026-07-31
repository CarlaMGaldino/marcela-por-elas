<!-- Service Hero -->
    <section class="service-page-hero" aria-labelledby="service-title">
      <div class="container service-page-hero__inner">
        <div class="service-page-hero__content reveal">
          <span class="eyebrow eyebrow--sage">Compras Inteligentes</span>
          <h1 id="service-title" class="hero-institutional__title" style="margin-top: 0.5rem;">
            Personal Shopper
          </h1>
          <p class="hero-institutional__lead">
            Elimine o estresse das compras, economize tempo e evite erros comprando apenas peças de alta qualidade que complementam perfeitamente o seu guarda-roupa e expressam seu estilo real.
          </p>
          <div class="hero-institutional__actions" style="margin-top: 2rem;">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--green">
              Agendar Encontro <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--brown">Tirar Dúvidas</a>
          </div>
        </div>
        <div class="service-page-hero__media reveal">
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=800" alt="Experiência de compras personalizada com personal shopper" width="800" height="1000">
        </div>
      </div>
    </section>

    <!-- Como Funciona -->
    <section class="section section--light">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Metodologia</span>
          <h2>Como Funciona a Experiência</h2>
          <p>Um processo focado em assertividade, eficiência e curadoria sob medida para as suas necessidades de vestuário.</p>
        </div>

        <div class="pilares-grid reveal">
          <div class="pilar-card">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Lista de Necessidades</h3>
            <p class="pilar-card__text">Antes do encontro, mapeamos exatamente quais peças fazem falta para conectar seus looks e fazer seu guarda-roupa render.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Pré-Seleção Profissional</h3>
            <p class="pilar-card__text">Eu faço uma varredura nas lojas parceiras antes de você chegar, reservando e separando as melhores peças nos provadores.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Encontro de Provas</h3>
            <p class="pilar-card__text">No dia, você vai direto ao provador experimentar o pré-selecionado. Avalio caimento, tecido, corte e versatilidade em tempo real.</p>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/service-benefits', null, [
        'eyebrow'  => 'Entregáveis',
        'title'    => 'Vantagens do Personal Shopper',
        'title_id' => 'personal-shopper-benefits-title',
        'items'    => [
            [
                'title' => 'Compras 100% Assertivas',
                'text'  => 'Sem arrependimentos posteriores com peças paradas no armário e sem etiquetas intocadas.',
            ],
            [
                'title' => 'Otimização de Tempo',
                'text'  => 'Nada de andar horas sem rumo pelas lojas. O roteiro é certeiro e dura em média de 3 a 4 horas.',
            ],
            [
                'title' => 'Análise de Caimento e Qualidade',
                'text'  => 'Orientação técnica profissional sobre fibras de tecidos, costuras, caimento e durabilidade de cada peça.',
            ],
            [
                'title' => 'Mini Guia Digital Pós-Shopper',
                'text'  => 'Fotos e sugestões rápidas de como combinar as novas peças adquiridas com o acervo que você já possui em casa.',
            ],
        ],
    ]);
    ?>

    <?php
    get_template_part('template-parts/services/service-cta', null, [
        'eyebrow'  => 'Investimento Seguro',
        'title'    => 'Pronta para simplificar suas compras?',
        'title_id' => 'personal-shopper-cta-title',
        'text'     => 'O Personal Shopper não é sobre gastar, é sobre investir de forma cirúrgica naquilo que realmente valoriza o seu visual e soluciona sua rotina.',
        'btn_text' => 'Agendar Personal Shopper no WhatsApp',
    ]);
    ?>