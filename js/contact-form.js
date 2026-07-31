(function () {
  "use strict";

  function handleContactFormSubmit(form) {
    var name = document.getElementById("form-name");
    var service = document.getElementById("form-service");
    var message = document.getElementById("form-message");

    if (!name || !service || !message) {
      return true;
    }

    var text =
      "Olá Marcela! Meu nome é " +
      name.value +
      ".\nEstou entrando em contato através do site sobre o assunto: *" +
      service.value +
      "*.\n\n" +
      message.value;

    form.action = (window.MPE_CONTACT && MPE_CONTACT.whatsapp) || "https://wa.me/5511993346757";
    form.action += "?text=" + encodeURIComponent(text);
    return true;
  }

  window.handleContactFormSubmit = handleContactFormSubmit;

  document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector(".contact-form");
    if (!form) {
      return;
    }
    form.addEventListener("submit", function (event) {
      if (!handleContactFormSubmit(form)) {
        event.preventDefault();
      }
    });
  });
})();
