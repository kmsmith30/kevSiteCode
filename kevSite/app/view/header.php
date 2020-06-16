<?php include_once SYSTEM_PATH.'/view/helpers.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width"><!-- Fixes Chrome Device Emulator -->
    <title>Kevin M. Smith | <?= $pageTitle ?></title>
    <!-- Using Bootstrap CDN for Front-End Framework -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Using Font Awesome Icon Library for Social Media Buttons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/kev.css">
  <?php if (isset($stylesheet)): ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/<?= $stylesheet ?>.css">
  <?php endif; ?>
    <script>
      // Give JavaScript to PHP's BASE_URL
      var base_url = '<?= BASE_URL ?>';
    </script>
    <script src="<?= BASE_URL ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?= BASE_URL ?>/public/js/scripts.js"></script>
  <?php if (isset($script)): ?>
    <script src="<?= BASE_URL ?>/public/js/<?= $script ?>.js"></script>
  <?php endif; ?>
  </head>

  <body>

    <div id="header">
      <div id="header-left">
        <img src="<?= BASE_URL ?>/public/images/kms_headshot.jpg" alt="Kevin's Pic">
        <b><h1>Kevin M. Smith</h1></b>
        <h4><u><a href="mailto: kmsmith3@vt.edu">kmsmith3@vt.edu</a></u></h4>
        <ul id="primary-nav">
          <li><a href="<?= BASE_URL ?>"<?php if ($pageTitle == 'Home') { echo ' class="selected"'; } ?>>Home</a></li>
          <li><a href="<?= BASE_URL ?>/projects"<?php if ($pageTitle == 'Projects') { echo 'class="selected"'; } ?>>Projects</a></li>
          <li><a href="<?= BASE_URL ?>/pics"<?php if ($pageTitle == 'Pics') { echo 'class="selected"'; } ?>>Pics</a></li>
          <li><a href="<?= BASE_URL ?>/about"<?php if ($pageTitle == 'About Kevin') { echo 'class="selected"'; } ?>>About</a></li>
        </ul>
      </div><!-- #header-left -->

      <div id="header-right">
      </div><!-- #header-right -->
    </div><!-- #header -->

    <?php if (isset($_SESSION['msg'])): ?>
      <div class="msg">
        <?= $_SESSION['msg'] ?>
      </div><!-- .msg -->
    <?php unset($_SESSION['msg']) ?>
    <?php endif; ?>
