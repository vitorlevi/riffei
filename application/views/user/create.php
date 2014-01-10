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
      <?php echo form_open('users/save'); ?>
      <?php echo validation_errors(); ?>
      <p>
        <label for='name'>Name:</label>
        <input name='name' type='text' value='<?php echo set_value('username'); ?>' />
      </p>
      <p>
        <label for='lastname'>Lastname:</label>
        <input name='lastname' type='text' value='<?php echo set_value('lastname'); ?>' />
      </p>
      <p>
        <label for='age'>Age:</label>
        <input name='age' type='text' value='<?php echo set_value('age'); ?>' />
      </p>
      <p>
        <label for='address'>address:</label>
        <input name='address' type='text' value='<?php echo set_value('address'); ?>' />
      </p>
      <p>
        <label for='state'>state:</label>
        <input name='state' type='text' value='<?php echo set_value('state'); ?>' />
      </p>
      <p>
        <label for='phone'>phone:</label>
        <input name='phone' type='text' value='<?php echo set_value('phone'); ?>' />
      </p>
      <p>
        <label for='avatar'>avatar:</label>
        <input name='avatar' type='text' value='<?php echo set_value('avatar'); ?>' />
      </p>
      <p>
        <label for='flag'>Credit Card Flag:</label>
        <input name='flag' type='text' value='<?php echo set_value('flag'); ?>' />
      </p>
      <p>
        <label for='cardnumber'>cardnumber:</label>
        <input name='cardnumber' type='text' value='<?php echo set_value('cardnumber'); ?>' />
      </p>
      <p>
        <label for='securitycode'>securitycode:</label>
        <input name='securitycode' type='text' value='<?php echo set_value('securitycode'); ?>' />
      </p>
      <p>
        <label for='valid'>Valid:</label>
        <input name='valid' type='text' value='<?php echo set_value('valid'); ?>' />
      </p>
      <p>
        <label for='email '>E-mail:</label>
        <input name='email' type='text' value='<?php echo set_value('email'); ?>' />
      </p>
      <p>
        <label for='username '>Username:</label>
        <input name='username' type='text' value='<?php echo set_value('username'); ?>' />
      </p>
      <p>
        <label for='password '>Password:</label>
        <input name='password' type='password' value='<?php echo set_value('password'); ?>' />
      </p>
      <p>
        <label for='passconf'>Confirm Password  :</label>
        <input name='passconf' type='password' value='<?php echo set_value('passconf'); ?>' />
      </p>
      <p>
        <?php echo form_submit('submit','Create my account'); ?>
      </p>
      <?php echo form_close(); ?>
    </div>
  </div>
</body>
