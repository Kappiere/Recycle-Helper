<?php $title = 'Home'; require('./partials/head.php'); ?>


<form action="/result.php" method="GET">
  <p>Oggetto da riciclare</p>
  <input type="text" name="object">
  <input type="submit" value="Cerca">
</form>

<p>
	Riciclare è importante, ma non sempre facile.
    Recycle Helper in Barletta ti aiuta: non sai dove mettere qualcosa? Inserisci l’oggetto in questa pagina, noi ti diremo dove!
</p>
<?php require('./partials/tail.php'); ?>
