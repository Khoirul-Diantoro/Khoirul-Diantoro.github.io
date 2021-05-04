<?php

session_start();
unset($_SESSION['Email']);
unset($_SESSION['Nama']);


session_destroy();
echo "<script>alert('Anda telah keluar dari akun');document.location='index.html'</script>";
?>