<?php $title = 'Result'; require('./partials/head.php'); ?>

<div class="response-page plastic">
  <div class="navbar">
    <?php require('./partials/header.php'); ?>
    <form action="/result.php" method="get" class="search-bar">
      <input type="text" name="object" placeholder="Ricicla ora..">
      <input type="image" src="/assets/images/action-icon.svg" alt="Ricicla">
    </form>
  </div>

  <div id="response" class="lets-move pop-up-2s">
    <figure>
      <img src="/assets/images/bin-plastic.png" alt="Ricicla come plastica">
    </figure>
    <article>
      <h4>Ricicla come</h4>
      <h2>PLASTICA</h2>
    </article>
  </div>
</div>

<?php require('./partials/tail.php'); ?>
