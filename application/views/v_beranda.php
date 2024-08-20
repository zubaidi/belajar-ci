<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INI HALAMAN BERANDA</h1>
    <li>
        <ol><a href="<?= base_url('beranda/about') ?>">Halaman About</a></ol>
        <ol><a href="<?= base_url('beranda/buku_tamu') ?>">Halaman Buku Tamu</a></ol>
    </li>
    <a href="<?= base_url('login')?>"><button>Logout</button></a>
</body>
</html>