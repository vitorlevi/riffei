<!DOCTYPE html>
<html>
  <head>
    <title>Riffei</title>
    <meta content='text/html' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <script src='http://code.jquery.com/jquery-1.10.2.min.js' type='text/javascript'></script>
    <script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js' type='text/javascript'></script>
    <link href='../stylesheets/screen.css' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300&subset=latin,latin-ext' rel='stylesheet' rel='stylesheet' rel='stylesheet' type='text/css' />
    <!-- %link(rel="stylesheet" type="text/css" href="stylesheets/print.css") -->
    <!--[if IE]>
      <link href='stylesheets/ie.css' rel='stylesheet' type='text/css' />
    <![endif]-->
  </head>
</html>
<body>
  <div class='container'>
    <?php foreach($cards as $card): ?>
    <section class='header'></section>
    <section class='card'>
      <section class='top'>
        <span class='cont' id='countdown'></span>
      </section>
      <?php foreach($tickets as $ticket): ?>
      <span class='unity' id='<?= $ticket->id; ?>'>
        <img height='50' src='<?= $ticket->User->avatar ?>' width='50' />
      </span>
      <?php endforeach; ?>
      <span class='btn-send' id='send'></span>
    </section>
    <aside class='info'>
      <h1><?= $card->title ?></h1>
      <h2>R$ <?= $card->value ?></h2>
      <p>
        <a href='<?= base_url() ?>users/<?= $card->User->id ?>'>From: <?= $card->User->username ?></a>
      </p>
      <img height='50' src='<?= $card->images ?>' width='50' />
      <h3>
        Raffle Day: <br/>
        <?php
        $date = date_create("$card->expiration");
        ?>
      </h3>
      <p><?= $card->description ?></p>
      <p><?= $card->category ?></p>
      <p><?= $card->tags ?></p>
    </aside>
    <?php endforeach; ?>
  </div>
  <script type='text/javascript'>
    //<![CDATA[
      endDate = '<?php echo date_format($date,"M d, Y"); ?>' ;
    //]]>
  </script>
  <script src='../js/code.js' type='text/javascript'></script>
</body>
