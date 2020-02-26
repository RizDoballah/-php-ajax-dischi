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
        <?php foreach ($database as $cds): ?>
        <div class="cover">
            <img src="<?php echo $cds['poster']; ?>" alt="poster">
            <h3><?php echo $cds['title']; ?></h3>
            <h4><?php echo $cds['author']; ?></h4>
            <h5><?php echo $cds['year']; ?></h5>
        </div>

      <?php endforeach; ?>
      </div>

    </main>
    <!-- /Main -->
    <!-- Footer -->
    <footer>

    </footer>
    <!-- /Footer -->

  </body>
</html>
