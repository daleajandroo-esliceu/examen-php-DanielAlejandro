<?php include __DIR__ . '/includes/header.php'; ?>
<h2>Login</h2>
<form method="POST" action="read_user.php">
  <label for="usuari">Usuari</label>
  <input id="usuari" name="usuari" type="text" required>

  <label for="password">Contrasenya</label>
  <input id="password" name="password" type="password" required>

  <button type="submit">Enviar</button>
</form>
<?php include __DIR__ . '/includes/footer.php'; ?>
