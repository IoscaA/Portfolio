<link href="<?php echo base_url(); ?>/css/modal.css" rel="stylesheet">
<style media="screen">
#timer {
font-size: 5em;
font-weight: 100;
color: white;
text-align: center;
padding: 170px 50px;
text-shadow: 0 0 20px #48C8FF;
}
#timer div {
display: inline-block;
min-width: 90px;
}
#timer div span {
color: #B1CDF1;
display: block;
font-size: 0.35em;
font-weight: 400;
}

.cifra{
  margin:40px;
}

 .mb-1 {
	 margin-bottom: 0.5rem;
}
 .mb-4 {
	 margin-bottom: 4rem;
}
</style>

<div class="site-section pb-0 site-portfolio">
  <div class="container">
    <div class="row mb-12 align-items-end">
      <div class="col-md-12" data-aos="fade-up">
        <h1>Oxygen Project Reveal</h1>
        <hr class="divider">
        <p class="mb-0">Il progetto Oxygen, verrà rivelato il giorno 15 Settembre 2020.<br> </p>
      </div>
    </div>
    <div class="row mb-12 align-items-end">
<div class="col-md-12" data-aos="fade-right">
  <div id="timer"></div>
</div>
    </div>
  </div>

    <section class="subscribe-area pb-50 pt-70">
      <form action="oxygen/addnewsletter" method="post" role="form" class="php-newsletter-form">
        <input  type="hidden" name="<?php echo $name;?>" value="<?php  echo $hash; ?>"  />
      <div class="container">
      	<div class="row">
      					<div class="col-md-4">
      						<div class="subscribe-text mb-15">
      							<span>Vuoi essere aggiornato?</span>
      							<h2>Iscriviti ora!</h2>
      						</div>
      					</div>
      					<div class="col-md-8">
      						<div class="subscribe-wrapper subscribe2-wrapper mb-15">
      							<div class="subscribe-form">
      								<form action="#">
                        <div class="row">
                          <div class="col-md-10">
                            <input class="form-control" placeholder="Scrivi la tua email qui .." type="email" id="newsletter_email" name="email">
                          </div>
                          <div class="col-md-2">
                            <button class="readmore" name="subscribe">Iscriviti</button>
                          </div>
                        </div>
      								</form>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                              <p class="mb-0 privacy">Premendo iscriviti accetti le condizioni previste del sito in materia di privacy policy e termini e condizioni.
                                <br> per maggiori informazioni vai su: <a href="<?php echo base_url()?>/Privacy">Privacy Policy</a>
                                e <a href="<?php echo base_url()?>/termsandconditions"> Termini e Condizioni</a>
                              </p>
                        </div>
          					</div>
      							</div>
      						</div>
      				</div>
      </div>
    </form>
  </section>


  <div class="frame-error" style="display: none;">
  <div id="modal-warning" class="center hide">
    <div class="loading">Caricamento</div>
    <div class="error-message"></div>
    <div class="sent-message">
      <img class="img-fluid" src="img/apiportfolio/img_1.jpg" alt="portfolio image work second">
       </div>
    <div class="sent-message" style="color: black;">Sei stato aggiunto alla newsletter di Oxygen Project. Grazie!</div>
		<button id="close">Chiudi</button>
  </div>
</div>


<script type="text/javascript">
function updateTimer() {
  future  = Date.parse("September 15, 2020 11:30:00");
  now     = new Date();
  diff    = future - now;

  days  = Math.floor( diff / (1000*60*60*24) );
  hours = Math.floor( diff / (1000*60*60) );
  mins  = Math.floor( diff / (1000*60) );
  secs  = Math.floor( diff / 1000 );

  d = days;
  h = hours - days  * 24;
  m = mins  - hours * 60;
  s = secs  - mins  * 60;

  document.getElementById("timer")
    .innerHTML =
      '<div class="cifra">' + d + '<span>days</span></div>' +
      '<div class="cifra">' + h + '<span>hours</span></div>' +
      '<div class="cifra">' + m + '<span>minutes</span></div>' +
      '<div class="cifra">' + s + '<span>seconds</span></div>' ;
}
setInterval('updateTimer()', 1000 );
</script>
