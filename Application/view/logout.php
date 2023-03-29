

<?php

setcookie('admin', $id, time()-10, '/');
header('location:home.php');

?>