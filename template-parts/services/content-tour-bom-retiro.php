<!-- Service Hero -->
    <section class="service-page-hero" aria-labelledby="service-title">
      <div class="container service-page-hero__inner">
        <div class="service-page-hero__content reveal">
          <span class="eyebrow eyebrow--sage">Roteiro de Compras Focado</span>
          <h1 id="service-title" class="hero-institutional__title" style="margin-top: 0.5rem;">
            Tour Bom Retiro
          </h1>
          <p class="hero-institutional__lead">
            Conheça as melhores e mais exclusivas confecções, tecidos e caimentos do maior polo de moda do país, com curadoria profissional que garante o melhor custo-benefício de atacado e varejo.
          </p>
          <div class="hero-institutional__actions" style="margin-top: 2rem;">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--green">
              Agendar Tour <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contato/' ) ); ?>" class="btn btn--brown">Tirar Dúvidas</a>
          </div>
        </div>
        <div class="service-page-hero__media reveal">
          <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800" alt="Garimpos estratégicos em polo de moda com curadoria" width="800" height="1000">
        </div>
      </div>
    </section>

    <!-- Como Funciona -->
    <section class="section section--light">
      <div class="container">
        <div class="section__header section__header--center reveal">
          <span class="eyebrow eyebrow--sage">Metodologia</span>
          <h2>Como Funciona o Tour Guiado</h2>
          <p>O Bom Retiro é gigantesco. O segredo é ter um roteiro profissional personalizado para o que você realmente precisa.</p>
        </div>

        <div class="pilares-grid reveal">
          <div class="pilar-card">
            <span class="pilar-card__number">01</span>
            <h3 class="pilar-card__title">Alinhamento Prévio</h3>
            <p class="pilar-card__text">Mapeamento do seu estilo, dos seus interesses e do seu orçamento disponível para as compras, definindo os focos do dia.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">02</span>
            <h3 class="pilar-card__title">Roteiro Personalizado</h3>
            <p class="pilar-card__text">Desenho de uma rota com as lojas que produzem com alta costura e acabamentos impecáveis, evitando desperdício de energia.</p>
          </div>

          <div class="pilar-card">
            <span class="pilar-card__number">03</span>
            <h3 class="pilar-card__title">Acompanhamento e Curadoria</h3>
            <p class="pilar-card__text">Durante todo o tour, avalio cada peça, te ajudo a decidir e garanto acessos exclusivos e facilidades no polo comercial.</p>
          </div>
        </div>
      </div>
    </section>

    <?php
    get_template_part('template-parts/services/service-benefits', null, [
        'eyebrow'  => 'Entregáveis',
        'title'    => 'Vantagens de Contratar o Tour',
        'title_id' => 'tour-benefits-title',
        'items'    => [
            [
                'title' => 'Acesso às Melhores Marcas',
                'text'  => 'Visite confecções que vendem roupas de altíssima qualidade a preços muito competitivos.',
            ],
            [
                'title' => 'Otimização de Rota',
                'text'  => 'Nada de se perder ou se cansar em ruas lotadas sem achar o que procura.',
            ],
            [
                'title' => 'Avaliação de Custo-Benefício',
                'text'  => 'Identificação de tecidos nobres (como linho, algodão, viscose e seda) e cortes elegantes com valores de fábrica.',
            ],
            [
                'title' => 'Consultoria de Estilo Express',
                'text'  => 'Ajuda direta para coordenar as peças no provador, visualizando o potencial de cada aquisição de forma integrada.',
            ],
        ],
    ]);
    ?>

    <?php
    get_template_part('template-parts/services/service-cta', null, [
        'eyebrow'  => 'Garimpos Premium',
        'title'    => 'Pronta para dominar as compras no Bom Retiro?',
        'title_id' => 'tour-cta-title',
        'text'     => 'O Tour Guiado transforma sua percepção do polo de moda, transformando cansaço em uma experiência fluida, sofisticada e altamente rentável.',
        'btn_text' => 'Quero Agendar o Tour no WhatsApp',
    ]);
    ?>