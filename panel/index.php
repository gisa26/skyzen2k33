<?php
require_once "config.php";

$user = $_GET['user'] ?? "demo";

$json = file_get_contents("api/account.php?user=".$user);

$user = "Free Palestine";
$status = "Aktif";
$download = "85.02 GB";
$upload = "5.55 GB";
$used = "90.57 GB";
$total = "150 GB";
$remain = "59.43 GB";
$expired = "Tanpa Kadaluarsa";
$percent = 60;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title><?= PANEL_NAME ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<div class="container py-4">

<div class="card shadow-lg">

<div class="card-body">

<h3><?= $user ?></h3>

<span class="badge bg-success"><?= $status ?></span>

<hr>

<table class="table table-dark table-borderless">

<tr>
<td>Download</td>
<td><?= $download ?></td>
</tr>

<tr>
<td>Upload</td>
<td><?= $upload ?></td>
</tr>

<tr>
<td>Penggunaan</td>
<td><?= $used ?></td>
</tr>

<tr>
<td>Kuota Total</td>
<td><?= $total ?></td>
</tr>

<tr>
<td>Tersisa</td>
<td><?= $remain ?></td>
</tr>

<tr>
<td>Kadaluarsa</td>
<td><?= $expired ?></td>
</tr>

</table>

<div class="progress">

<div class="progress-bar bg-success"
style="width:<?= $percent ?>%">
<?= $percent ?>%
</div>

</div>

<br>

<button class="btn btn-success w-100">
Salin URL
</button>

</div>

</div>

</div>

</body>
</html>