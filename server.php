<?php
  include 'database.php';

  if (!empty($_GET['author'])) {
    $filteredCds = [];

    foreach ($database as $cd) {
      if($_GET['author'] === $cd['author']) {
        $filteredCds[] = $cd;
      }
    }
    // var_dump($filteredCds); die();

    header('Content-Type: application/json');
    echo json_encode($filteredCds);

  } else {

    header('Content-Type: application/json');
    echo json_encode($database);

  }
