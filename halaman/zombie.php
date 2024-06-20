<?php

$files = scandir("./../img/Zombie");

?>

<?php foreach($files as $i => $file): ?>
<img src="./../img/Zombie/<?= $file ?>">
<?php endforeach; ?>
