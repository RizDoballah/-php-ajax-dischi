<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>php-ajax-dischi</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header-container">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
      <div class="main-container">
        <div class="cover">
          <?php foreach ($database as $cds): ?>
            <img src="<?php echo $cds['poster']; ?>" alt="poster">


          <?php endforeach; ?>


        </div>



      </div>

    </main>
    <!-- /Main -->
    <!-- Footer -->
    <footer>

    </footer>
    <!-- /Footer -->

  </body>
</html>
