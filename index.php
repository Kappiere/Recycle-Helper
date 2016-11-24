<?php 
  $title = 'DoveLoButto'; require('./partials/head.php'); 
?>
<!--<div id="display-div-email">
  <div class="email-page">
    <div class="navbar">
      <?php require('./partials/header.php'); ?>
      <form action="/result.php" method="get" class="search-bar">
        <input type="text" name="object" placeholder="Ricicla ora..">
        <input type="image" src="/assets/images/action-icon.svg" alt  ="Ricicla">
      </form>
    </div>
  </div>

  <div id="content display-div-email">
    <figure>
      <img src="/assets/images/check-icon.svg" alt="E-mail inviata">
    </figure>

    <article>
      <p>Ti invieremo al più presto un'email a: 
      <b></b></p>
    </article>
  </div>
</div>-->
<div class="display-div">
<div class="response-page plastic" id="result-page">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="result.php" method="get" class="search-bar" id="requestForm-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>

    <script>
      $("#requestForm-bar").submit(function(event) {

        event.preventDefault();
        $("#home-page").hide();
        $("#result-page").show();
        $("#control-bin").show();
        $(".display-div").removeClass();
        $("#print-error").hide();
        $.ajax({
           dataType: "json",
           type: "get",
           url: $(this).attr("action"),
           data: $(this).serialize(),
           success: function(data){
             console.log(data.oggetto);
             console.log(data.colore);
             $('.return-object').text(data.oggetto);
             $('.return-bin').text(data.bidone);
             if (data.bidone=="organico"){
               $('#bin-image').attr('src','/assets/images/bin-organic.png');
               $('.response-page.plastic').css('background','#cc6600');
             }if (data.bidone=="plastica"){
               $('#bin-image').attr('src','/assets/images/bin-plastic.png');
               $('.response-page.plastic').css('background','#c1a71e');
             }if (data.bidone=="batterie"){
               $('#bin-image').attr('src','/assets/images/bin-batteries.png');
               $('.response-page.plastic').css('background','#990000');
             }if (data.bidone=="medicinali"){
               $('#bin-image').attr('src','/assets/images/bin-medicines.png');
               $('.response-page.plastic').css('background','#cc6600');
             }if (data.bidone=="vetro"){
               $('#bin-image').attr('src','/assets/images/bin-glass.png');
               $('.response-page.plastic').css('background','#009900');
             }if (data.bidone=="carta"){
               $('#bin-image').attr('src','/assets/images/bin-paper.png');
               $('.response-page.plastic').css('background','#3366ff');
             }
             if (data.bidone=="errore"){
              $('#bin-image').attr('src','/assets/images/bin-rest.png');
              $('.response-page.plastic').css('background','gray');
              $("#control-bin").hide();
              $("#print-error").show();
              var error="nessun elemento trovato";  
              document.getElementById("print-error").innerHTML = error;           
             }
           }
        });
      });

    </script>
  </div>

  <div id="response" class="lets-move pop-up-2s">
    <figure>
      <img id="bin-image" src="/assets/images/bin-plastic.png" alt="Ricicla come plastica" class="svg-trash">
    </figure>
    <article id="control-bin">
      <h4>Ricicla <span class="return-object"> </span> come</h4>
      <h2><span class="return-bin"> </span></h2>
    </article>
    <article>
      <h4></h4>
      <h2 id="print-error"></h2>
    </article>

  </div>
</div>
</div>
<div class="homepage" id="home-page">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
  </div>

  <div class="sidebar is-serif">
    <article>
      <p>
        <strong>DoveLoButto</strong> ti permette di scoprire velocemente e 
        facilmente come riciclare tutto ciò che ti passa per le mani.
      </p>
      <p>
        La raccolta differenziata non è facile come sembra e questo servizio 
        nasce apposta per facilitarla, fornendo alle persone uno strumento 
        utile e facile da usare.
      </p>
    </article>
  </div>

  <div class="action-box">
    <article>
      <p>Riciclare non è mai stato così facile..</p>
    </article>
    <form action="result.php" method="get" class="search-bar" id="requestForm">
      <input type="text" name="object" placeholder="Ricicla ora">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
      
    </form>
    <script>
      $("#requestForm").submit(function(event) {

        event.preventDefault();
        $("#home-page").hide();
        $("#result-page").show();
        $("#control-bin").show();
        $("#print-error").hide();
        $(".display-div").removeClass();
        $.ajax({
           dataType: "json",
           type: "get",
           url: $(this).attr("action"),
           data: $(this).serialize(),
           success: function(data){
             console.log(data.oggetto);
             console.log(data.colore);
             $('.return-object').text(data.oggetto);
             $('.return-bin').text(data.bidone);
             if (data.bidone=="organico"){
               $('#bin-image').attr('src','/assets/images/bin-organic.png');
               $('.response-page.plastic').css('background','#cc6600');
             }if (data.bidone=="plastica"){
               $('#bin-image').attr('src','/assets/images/bin-plastic.png');
               $('.response-page.plastic').css('background','#c1a71e');
             }if (data.bidone=="batterie"){
               $('#bin-image').attr('src','/assets/images/bin-batteries.png');
               $('.response-page.plastic').css('background','#990000');
             }if (data.bidone=="medicinali"){
               $('#bin-image').attr('src','/assets/images/bin-medicines.png');
               $('.response-page.plastic').css('background','#cc6600');
             }if (data.bidone=="vetro"){
               $('#bin-image').attr('src','/assets/images/bin-glass.png');
               $('.response-page.plastic').css('background','#009900');
             }if (data.bidone=="carta"){
               $('#bin-image').attr('src','/assets/images/bin-paper.png');
               $('.response-page.plastic').css('background','#3366ff');
             }
             if (data.bidone=="errore"){
              $('#bin-image').attr('src','/assets/images/bin-rest.png');
              $('.response-page.plastic').css('background','gray');
              $("#control-bin").hide();
              $("#print-error").show();
              var error="nessun elemento trovato";  
              document.getElementById("print-error").innerHTML = error;           
             }
           }
        });
      });

    </script>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
