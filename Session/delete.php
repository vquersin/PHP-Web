<?php ob_start() ?>
<?php 
session_start();
session_destroy();
header("location:index.php");
exit();
?>
<?php 
$content = ob_get_clean();
require "template.php"; 
?>