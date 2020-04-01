<link href="<?php echo base_url(); ?>/css/modal.css" rel="stylesheet">
  <main id="main">
    <div class="site-section pb-0 site-portfolio">
      <div class="container">

        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h1>Contatti</h1>
            <hr class="divider">
            <p class="mb-0">Puoi contattarmi per richiedere un preventivo gratuito e senza impegno, oppure per chiarire qualsiasi tuo dubbio!
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

            <form action="contatti/send_email" method="post" role="form" class="php-email-form">
              <input  type="hidden" name="<?php echo $name;?>" value="<?php  echo $hash; ?>"  />
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nome e Cognome</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Inserisci almeno 4 caratteri" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Inserisci una email valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Oggetto</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Inserisci almeno 8 caratteri" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Messaggio</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="10" data-rule="required" data-msg="Inserisci tutto quello che vuoi"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="loading">Caricamento</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>
                </div>

                <div class="col-md-12 form-group">
                  <input type="submit" class="readmore d-block w-100" name="send_msg" value="Invia Messaggio">
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-md-12">
                <p class="mb-0 privacy">Inviando il tuo messaggio attraverso questo form acccetti di condividere i dati inseriti con il creatore di questo sito web. Per ulteriori informazioni vai su: <a href="<?php echo base_url(); ?>/privacy" class="inline"> Privacy Policy</a> e <a href="<?php echo base_url(); ?>/terms" class="inline"> Termini e Condizioni</a>.</p>
              </div>
            </div>

          </div>

          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Le comunicazioni verranno inviate</strong>
                <span>Dal lunedi al venerdì <br>dalle 9:00 alle 20:00</span>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="frame-error" style="display: none;">
    <div id="modal-warning" class="center hide">
  		<img class="error-message-img" src="http://100dayscss.com/codepen/alert.png" width="44" height="38" />
      <img class="sent-message-img" src="https://www.google.com/search?q=img+success&sxsrf=ALeKk021xOSkNNKLgCBrnE7iKTpL2DLSwQ:1582543161702&tbm=isch&source=iu&ictx=1&fir=MCqEQH6X10McvM%253A%252C0JChLn5ueJ12TM%252C_&vet=1&usg=AI4_-kSvxdiCf6YPEr3dYr4fPY9HVmrQEw&sa=X&ved=2ahUKEwj5wvrXiOrnAhWyyMQBHVVgBzQQ9QEwAHoECAkQBA#imgrc=MCqEQH6X10McvM:" width="44" height="38" />
      <div class="loading">Caricamento</div>
      <div class="error-message"></div>
      <div class="sent-message" style="color: black;">Il tuo messaggio è stato inviato. Grazie!</div>
  		<button id="close">Chiudi</button>
    </div>
  </div>
  </main>
