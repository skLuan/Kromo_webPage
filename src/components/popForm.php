<form class="mt-0 mb-0 contact-block__form" id="cf" name="cf" action="include/sendemail.php" method="post" autocomplete="off">
  <div class="form-row flex-column">
    <div class="form-process"></div>

    <input id="cf-proyecto-pop" name="cf-proyecto" value="" class="col-12 col-sm-6 contact-block__input-text form-control required d-none" placeholder="Asunto" type="text" />

    <div class="mb-0 form-group">
      <label class="mb-0" for="cf-nombre">Nombre</label>
      <input type="text" id="cf-nombre" name="cf-nombre" placeholder="Coloca tu nombre" class="mb-3 contact-block__input-text form-control required" />
    </div>

    <div class="mb-0 form-group">
      <label class="mb-0" for="cf-email">E-mail</label>
      <input type="email" id="cf-email" name="cf-email" placeholder="Coloca tu email" class="mb-3 contact-block__input-text form-control required" />
    </div>

    <div class="form-group d-none">
      <label class="mb-0" for="cf-tema">Asunto</label>
      <input type="text" id="cf-tema" name="cf-tema" placeholder="Tema (Opcional)" class="mb-3 contact-block__input-text form-control" />
    </div>

    <div class="mb-0 form-group">
      <label class="mb-0" for="cf-tel">No de teléfono</label>
      <input type="tel" id="cf-tel" name="cf-tel" placeholder="Teléfono (Opcional)" class="mb-3 contact-block__input-text form-control" />
    </div>

    <div class="form-group d-none">
      <label class="mb-0" for="cf-mensaje">Su mensaje</label>
      <textarea name="cf-message" id="cf-message" placeholder="¡Déjanos tu mensaje y en breve estaremos en contacto contigo!" class="contact-block__input-textarea form-control required" rows="2">
        Estoy interezado en el proyecto</textarea>
    </div>

    <div class="mb-0 form-group">
      <!-- clasificador de bot -->
      <div class="g-recaptcha" data-sitekey="6Lf1t3wiAAAAAIMsL3ghPjh6ymcO4CsC8V4jPLlC" data-callback="verifyCaptcha">
      </div>
      <div id="g-recaptcha-error"></div>
    </div>

    <div class="form-group d-none">
      <input type="text" id="cf-botcheck" name="cf-botcheck" value="" class="form-control" />
    </div>

    <div class="mt-2 mb-3 d-flex flex-column contact-block__text">
      <a href="http://kromo.com.co/PPD.pdf">POLÍTICA DE PROTECCIÓN DE DATOS</a>
      <a href="http://kromo.com.co/PGI.pdf">POLÍTICA DE PROTECCIÓN DE GESTIÓN INTEGRAL</a>
    </div>
    <label class="mb-0" for="terms">¿Acepta y Autoriza a Kromo Constructores el envio de Información?
    </label>
    <div>
      <input type="radio" name="terms" /> Sí
      <input type="radio" class="ml-3" name="terms" /> No
    </div>
    <div class="text-center contact-form-result"></div>
    <div class="text-center">
      <button class="mt-3 mb-2 contact-block__submit" type="submit" id="cf-submit" name="cf-submit">
        Enviar mensaje
      </button>
    </div>

    <input type="hidden" name="prefix" value="cf-" />
  </div>
</form>