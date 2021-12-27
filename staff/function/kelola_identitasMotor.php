<?php
    require 'session.php';
    require '../koneksi.php';

//Read Data Motor//
    $sqlRead = "SELECT * FROM data_motor";
    $queryRead = mysql_query($koneksi, $sqlRead);
?>
