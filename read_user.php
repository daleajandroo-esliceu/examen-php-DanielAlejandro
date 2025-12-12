<?php include __DIR__ . '/includes/header.php'; ?>

<?php
$usuari = isset($_POST['usuari']) ? htmlspecialchars($_POST['usuari']) : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
?>

<h2>Dades enviades</h2>
<p><strong>Usuari:</strong> <?= $usuari ?></p>
<p><strong>Password:</strong> <?= $password ?></p>

<?php include __DIR__ . '/includes/footer.php'; ?>
