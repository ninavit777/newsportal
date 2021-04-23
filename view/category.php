<?php
echo "<li class='submenuunit'><a href='all'>ALL</a></li><br>";
foreach ($arr as $value) {
echo "<li class='submenuunit'>

<a href='category?id=".$value['id']."'>".$value['name'].'</a>
</li>
<br>';
}

?>

catnews.php

<?php
ob_start();
?>
<h1>Uudised (kategoorii)</h1>
<br>

<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>

error404.php

<?php
ob_start();
?>

<h1>Error404</h1>
<?php
$content = ob_get_clean();
include_once 'view/layout.php';

  ?>