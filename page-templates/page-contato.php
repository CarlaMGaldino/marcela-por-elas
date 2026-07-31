<?php
/**
 * Template Name: Contato
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
<!-- Hero Contato -->
    <section class="section hero service-hero contact-hero" aria-labelledby="contact-title">
      <figure class="service-hero__mobile-photo">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-contato-hero.jpg' ) ); ?>"
          alt="Marcela — consultora de imagem disponível para atendimento"
          width="720"
          height="960"
          fetchpriority="high">
      </figure>
      <figure class="service-hero__desktop-photo" aria-hidden="true">
        <img
          src="<?php echo esc_url( mpe_asset( 'assets/imgs/marcela-novo/marcela-contato-hero.jpg' ) ); ?>"
          alt=""
          width="720"
          height="960"
          loading="eager">
      </figure>
      <div class="service-hero__overlay" aria-hidden="true"></div>
      <div class="container hero__inner">
        <div class="hero__content reveal">
          <span class="hero__eyebrow service-hero__eyebrow">Vamos Conversar?</span>
          <h1 class="hero__title" id="contact-title">Contato</h1>
          <p class="service-hero__lead">
            Para dúvidas, agendamentos de consultoria, parcerias de marca ou reuniões de varejo, estou sempre à disposição pelos canais abaixo.
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" class="btn btn--white" target="_blank" rel="noopener noreferrer">WhatsApp <span class="btn__arrow" aria-hidden="true">→</span></a>
            <a href="#formulario" class="btn btn--outline-light">Enviar Mensagem</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulário e Canais -->
    <section class="section section--cream contact-section" aria-labelledby="contact-channels-title">
      <div class="container">
        <div class="contact-grid reveal">
          <div class="contact-channels">
            <span class="eyebrow eyebrow--sage">Canais de Atendimento</span>
            <h2 id="contact-channels-title" class="section-heading">Fale Comigo</h2>
            <p class="contact-channels__lead">
              Escolha o formato que preferir. O atendimento via WhatsApp costuma ser o mais rápido e direto para agendamentos.
            </p>

            <ul class="contact-channels__list">
              <li class="contact-channel">
                <span class="contact-channel__label">WhatsApp Comercial</span>
                <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" class="contact-channel__link" target="_blank" rel="noopener noreferrer">+55 11 99334-6757</a>
              </li>
              <li class="contact-channel">
                <span class="contact-channel__label">Instagram Oficial</span>
                <a href="<?php echo esc_url( mpe_instagram_url() ); ?>" class="contact-channel__link" target="_blank" rel="noopener noreferrer">@marcelaporelas</a>
              </li>
              <li class="contact-channel">
                <span class="contact-channel__label">TikTok</span>
                <a href="<?php echo esc_url( mpe_tiktok_url() ); ?>" class="contact-channel__link" target="_blank" rel="noopener noreferrer">@marcelaporelas</a>
              </li>
              <li class="contact-channel">
                <span class="contact-channel__label">E-mail Comercial</span>
                <a href="mailto:<?php echo esc_attr( mpe_email() ); ?>" class="contact-channel__link"><?php echo esc_attr( mpe_email() ); ?></a>
              </li>
            </ul>

            <a href="<?php echo esc_url( mpe_whatsapp_url() ); ?>" class="btn btn--green" target="_blank" rel="noopener noreferrer">
              Agendar via WhatsApp <span class="btn__arrow" aria-hidden="true">→</span>
            </a>
          </div>

          <div class="contact-form-card" id="formulario">
            <h3 class="contact-form-card__title">Envie uma Mensagem</h3>
            <p class="contact-form-card__intro">Preencha o formulário e você será direcionada ao WhatsApp com a mensagem pronta.</p>

            <form class="contact-form" action="<?php echo esc_url( mpe_whatsapp_url() ); ?>" method="GET" target="_blank" >
              <div class="form-field">
                <label class="form-label" for="form-name">Seu Nome *</label>
                <input class="form-input" type="text" id="form-name" name="name" required autocomplete="name">
              </div>

              <div class="form-field">
                <label class="form-label" for="form-service">Assunto de Interesse *</label>
                <select class="form-select" id="form-service" name="service" required>
                  <option value="Estudo Unleash">Estudo Unleash</option>
                  <option value="Personal Shopper">Personal Shopper</option>
                  <option value="Montagem de Malas">Montagem de Malas / Mala Inteligente</option>
                  <option value="Tour Bom Retiro">Tour Guiado Bom Retiro</option>
                  <option value="Consultoria Completa">Consultoria Completa de Imagem</option>
                  <option value="Consultoria para Varejo">Consultoria para Varejo de Moda (B2B)</option>
                  <option value="Outros">Outro Assunto</option>
                </select>
              </div>

              <div class="form-field">
                <label class="form-label" for="form-message">Sua Mensagem *</label>
                <textarea class="form-textarea" id="form-message" name="message" rows="4" required></textarea>
              </div>

              <button type="submit" class="btn btn--brown contact-form__submit">
                Enviar via WhatsApp <span class="btn__arrow" aria-hidden="true">→</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>
