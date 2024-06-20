<?php

/**
 * Kita compile dulu gambar gambar nya biar gampang
 */

function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess');

    $files = array();
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return $files;
}

$files = scan_dir("./../img/arsip_negara");
unset($files[0]);
unset($files[1]);

?>

<?php foreach($files as $i => $file): ?>
<div>
    <img src="./../img/arsip_negara/<?= $file ?>" alt="<?= $file ?>">
</div>
<?php endforeach; ?>
