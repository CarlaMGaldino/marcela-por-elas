/**
 * Site config — URLs dinâmicas do WordPress quando disponível.
 */
window.SITE_CONFIG = window.SITE_CONFIG || {};
window.MPE_SITE = window.MPE_SITE || {};

window.SITE_CONFIG.siteUrl = window.MPE_SITE.siteUrl || window.location.origin;
window.SITE_CONFIG.heroBannerImage =
  (window.MPE_SITE.themeUrl || "") + "/assets/imgs/banners/banner-marcela-home-principal.jpg";
window.SITE_CONFIG.ctaDefineUrl = window.MPE_SITE.ctaDefineUrl || window.SITE_CONFIG.ctaDefineUrl || "#";
window.SITE_CONFIG.ctaCuradoriaUrl = window.MPE_SITE.ctaCuradoriaUrl || window.SITE_CONFIG.ctaCuradoriaUrl || "#";
