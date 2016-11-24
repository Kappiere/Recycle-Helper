<?php 
  $title = 'DoveLoButto'; require('./partials/head.php'); 
?>
<div class="display-div">
<div class="response-page plastic" id="result-page">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div id="response" class="lets-move pop-up-2s">
    <figure>
      <img src="/assets/images/bin-plastic.png" alt="Ricicla come plastica" class="svg-trash">
    </figure>
    <article>
      <h4>Ricicla <span class="return-object"> </span> come</h4>
      <h2><span class="return-bin"> </span></h2>
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
        $(".display-div").removeClass();
        $.ajax({
           dataType: "json",
           type: "get",
           url: $(this).attr("action"),
           data: $(this).serialize(),
           success: function(data){
             console.log(data.oggetto);
             $('.return-object').text(data.oggetto);
             $('.return-bin').text(data.colore);
             console.log(data.colore);
           }
        });
      });

    </script>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
