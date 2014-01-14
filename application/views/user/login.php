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
    <section class='header'></section>
    <div id='register-form'>
      <p class='heading'></p>
      <?php echo form_open('login/submit'); ?>
      <?php echo validation_errors(); ?>
      <p>
        <label for='username '>Username:</label>
        <input name='username' type='text' value='<?php echo set_value('username'); ?>' />
      </p>
      <p>
        <label for='password '>Password:</label>
        <input name='password' type='password' value='<?php echo set_value('password'); ?>' />
      </p>
      <p>
        <?php echo form_submit('submit','Login'); ?>
      </p>
      <?php echo form_close(); ?>
    </div>
  </div>
</body>
