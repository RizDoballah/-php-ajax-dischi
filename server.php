<?php
  include 'database.php';

  if (!empty($_GET['author'])) {
    $filtredCds = [];

    foreach ($database as $cd) {
      if($_GET['author'] == $cd['author']) {
        $filtredCds[] = $cd;
      }
    }
    // var_dump($cdsFiltered); die();

    header('Content-Type: application/json');
    echo json_encode($filtredCds);

  } else {
    
    header('Content-Type: application/json');
    echo json_encode($database);

  }
