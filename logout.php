<?php  
// bila login adalah menyimpan data ke session
// berarti logout adalah menghacurkan data dari sesion

session_destroy();
echo "<div class='alert alert-danger'>Anda telah logout</div>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";

?>