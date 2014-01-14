<!DOCTYPE html>
<html>
  <head>
    <title>Riffei</title>
    <meta content='text/html' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <script src='http://code.jquery.com/jquery-1.10.2.min.js' type='text/javascript'></script>
    <script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js' type='text/javascript'></script>
    <link href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' rel='stylesheet' type='text/css' />
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
    <section class='header'>
      <?php if(Current_User::user()): ?>
      <h2>Hello <em><?= Current_User::user()->username; ?></em></h2>
      <h3>ID: <em><?= Current_User::user()->id; ?></em></h3>
      <h2><?= anchor('logout','Logout'); ?></h2>
      <?php else: ?>
      <h2>New Users: <?= anchor('users/register','Create an Account'); ?>.</h2>
      <h2>
        Members:
        <a href='login/'>Login</a>
      </h2>
      <?php endif; ?>
    </section>
    <div id='register-form'>
      <p class='heading'></p>
      <?php echo form_open('cards/save'); ?>
      <?php echo validation_errors('<p class="error">','</p>'); ?>
      <fieldset>
        <ol>
          <li>
            <label for='title'>Title:</label>
            <input class='text' name='title' type='text' />
          </li>
          <li>
            <label for='description'>Description:</label>
            <input class='text' name='description' type='text' />
          </li>
          <li>
            <label for='category'>Category:</label>
            <input class='text' name='category' type='text' />
          </li>
          <li>
            <label for='tags'>Tags:</label>
            <input class='text' name='tags' type='text' />
          </li>
          <li>
            <label for='value'>Value:</label>
            <input class='text' name='value' type='text' />
          </li>
          <li>
            <label for='expiration'>Expiration date:</label>
            <input class='text' id='datepicker' name='expiration' type='text' />
          </li>
          <li>
            <label for='images'>Images:</label>
            <input class='text' name='images' type='text' />
            <input class='text' name='user_id' type='hidden' value='<?= Current_User::user()->id; ?>' />
          </li>
          <input class='button' type='submit' value='Create' />
        </ol>
      </fieldset>
    </div>
  </div>
  <script src='../js/code.js' type='text/javascript'></script>
</body>
