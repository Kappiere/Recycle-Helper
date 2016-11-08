<?php $title = 'Home'; require('./partials/head.php'); ?>

<form action="/result.php" method="GET">
  Oggetto da riciclare
  <input type="text" name="object">
  <input type="submit" value="Submit">
</form>

<p style="text-align: left;
          padding-right: 50%;">
	Recycle Helper è uno strumento che ti permette
	di cercare un oggetto qualsisasi e come risposta riceverete la destinazione corretta dove gettare correttamente i vostri rifiuti.
</p>
<?php require('./partials/tail.php'); ?>
