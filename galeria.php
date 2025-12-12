<?php include __DIR__ . '/includes/header.php'; ?>

<h2>Galeria</h2>
<div class="galeria">
<?php
$dir = __DIR__ . '/uploads';
$files = array_diff(scandir($dir), array('.', '..'));
foreach ($files as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg','jpeg' ])) {
        echo '<figure><img src="/uploads/' . htmlspecialchars($file) . '" alt=""></figure>';
    }
}
?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
