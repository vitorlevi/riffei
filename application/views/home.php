<!DOCTYPE html>
<html>
  <head>
    <title>AirMare | <?php echo $title; ?></title>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' type='text/javascript'></script>
    <link href='stylesheets/screen.css' rel='stylesheet' type='text/css' />
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
    <?php if(Current_User::user()): ?>
    <h2>Hello <em><?php echo Current_User::user()->username; ?></em></h2>
    <h2><?php echo anchor('logout','Logout'); ?></h2>
    <?php else: ?>
    <h2>New Users: <?php echo anchor('signup','Create an Account'); ?>.</h2>
    <h2>Members: <?php echo anchor('login','Login'); ?>.</h2>
    <?php endif; ?>
  </div>
</body>
