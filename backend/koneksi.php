<?php
$server ="localhost";
$user ="root";
$passwd ="";
$db ="dbgmj";
$koneksi=mysql_connect($server, $user, $passwd)
or die ("Gagal konek ke server MySQL".mysql_error());
$bukadb=mysql_select_db($db)
or die ("Gagal membuka database $db".mysql_error());
?>