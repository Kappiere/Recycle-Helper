<?php $title = 'Result'; require('./partials/head.php'); ?>

<p>
  Devi riciclare: <b><?php echo($_GET['object']); ?></b>
</p>

<form action="/email.php" method="POST">
  Inserisci la tua email
  <input type="text" name="email">
  <input type="submit" value="Submit">
</form>

<?php require('./partials/tail.php'); ?>
