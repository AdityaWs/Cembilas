<?php

$files = scandir("./../img/Bubahrium");

?>

<?php foreach($files as $i => $file): ?>
<img src="./../img/Bubahrium/<?= $file ?>">
<?php endforeach; ?>
