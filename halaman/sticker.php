<?php

$files = scandir("./../img/sticker");

?>
<?php foreach($files as $i => $file): ?>
<div>
    <img src="./../img/sticker/<?= $file ?>" alt="./../img/sticker/<?= $file ?>">
</div>
<?php endforeach; ?>
