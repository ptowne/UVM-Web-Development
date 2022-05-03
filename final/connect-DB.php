<!-- Connecting -->
<?php
$databaseName = 'HGSHERID_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'hgsherid_writer';
$password = 'a43jd4q3sN5j';
$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->