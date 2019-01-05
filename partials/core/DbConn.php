<?php
  $host =  'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'crud';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  // Create a PDO instance
  $conn = new PDO($dsn, $user, $password);
