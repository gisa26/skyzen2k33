<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title><?= PANEL_NAME ?></title>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container">

<div class="card">

<div class="title">
<?= PANEL_NAME ?>
</div>

<p>Status :
<span class="status">Aktif</span>
</p>

<p>Download : 0 GB</p>

<p>Upload : 0 GB</p>

<p>Total : 0 GB</p>

<div class="progress">
<div class="bar"></div>
</div>

</div>

</div>

</body>
</html>