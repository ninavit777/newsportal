<?php
ob_start();
?>

<h1>Error404</h1>
<?php
$content = ob_get_clean();
include_once 'view/layout.php';

  ?>