<?php
session_start();
error_reporting(0);
  if($_SESSION['jabatan']!='Administrator'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang Anda tuju.');window.location=('../../sign-in.php')</script>";
  }
?>