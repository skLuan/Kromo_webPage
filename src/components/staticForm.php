<form class="mt-5 mb-0 contact-block__form" id="cf" name="cf" action="include/sendemail.php" method="post" autocomplete="off">
  <div class="form-row">
    <div class="form-process"></div>

    <input id="cf-proyecto" name="cf-proyecto" value="" class="col-12 col-sm-6 contact-block__input-text form-control required d-none" placeholder="Asunto" type="text" />

    <div class="col-md-6">
      <div class="form-group">
        <label for="cf-nombre">Nombre</label>
        <input type="text" id="cf-nombre" name="cf-nombre" placeholder="Coloca tu nombre" class="contact-block__input-text form-control required" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="cf-email">E-mail</label>
        <input type="email" id="cf-email" name="cf-email" placeholder="Coloca tu email" class="contact-block__input-text form-control required" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="cf-tema">Asunto</label>
        <input type="text" id="cf-tema" name="cf-tema" placeholder="Tema (Opcional)" class="contact-block__input-text form-control" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="cf-tel">No de teléfono</label>
        <input type="tel" id="cf-tel" name="cf-tel" placeholder="Teléfono (Opcional)" class="contact-block__input-text form-control" />
      </div>
    </div>

    <div class="mb-4 col-12">
      <div class="form-group">
        <label for="cf-mensaje">Su mensaje</label>
        <textarea name="cf-message" id="cf-message" placeholder="¡Déjanos tu mensaje y en breve estaremos en contacto contigo!" class="contact-block__input-textarea form-control required" rows="7"></textarea>
      </div>
      <!-- clasificador de bot -->
      <div class="g-recaptcha" data-sitekey="6Lf1t3wiAAAAAIMsL3ghPjh6ymcO4CsC8V4jPLlC">
      </div>
      <div id="g-recaptcha-error"></div>
    </div>

    <div class="col-12 d-none">
      <input type="text" id="cf-botcheck" name="cf-botcheck" value="" class="form-control" />
    </div>

    <div class="col-mb-6">
      <label for="terms">¿Acepta y Autoriza a Kromo Constructores el envio de Información?
      </label>
      <br />
      <input type="radio" name="terms" /> Sí
      <input type="radio" class="ml-3" name="terms" /> No
      <br />
      <div class="mt-3 d-flex flex-column contact-block__text">
        <a href="http://kromo.com.co/PPD.html">POLÍTICA DE PROTECCIÓN DE DATOS</a>
        <a href="http://kromo.com.co/PGI.pdf">POLÍTICA DE PROTECCIÓN DE GESTIÓN INTEGRAL</a>
      </div>
    </div>

    <div class="text-center contact-form-result"></div>
    <div class="text-center col-12 text-lg-left">
      <button class="mt-0 mb-5 contact-block__submit" type="submit" id="cf-submit" name="cf-submit">
        Enviar mensaje
      </button>
    </div>

    <input type="hidden" name="prefix" value="cf-" />
  </div>
</form>