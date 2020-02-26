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
        <?php foreach ($database as $cd): ?>
        <div class="cd">
            <img class="cd-image" src="<?php echo $cd['poster']; ?>" alt="poster">
            <h3 class="cd-title"><?php echo $cd['title']; ?></h3>
            <h4 class="cd-author"><?php echo $cd['author']; ?></h4>
            <h5 class="cd-date"><?php echo $cd['year']; ?></h5>
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
