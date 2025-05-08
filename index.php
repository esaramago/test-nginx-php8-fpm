<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/main.css">
</head>
<body>
  <h1>Olá, TP!</h1>
  <h2>Teste de aplicação PHP com Nginx e PHP8-FPM</h2>

  <div class="card">
    <button id="counter" type="button"></button>
  </div>

  <hello-world></hello-world>

  <?php
  echo phpinfo();
  ?>

  <script src="dist/main.js"></script>
</body>
</html>
