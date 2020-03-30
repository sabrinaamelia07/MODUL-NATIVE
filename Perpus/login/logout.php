<?php
session_start();
session_destroy();
header("Location: http://localhost/php/SiPerpus/login/index.php");
?>