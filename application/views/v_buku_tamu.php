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
    <h3>INI ADALAH HALAMAN BUKU TAMU</h3>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="" id=""></td>
            </tr>
            <tr>
                <td>Nama Pengirim</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Kirim Pesan"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <a href="<?= base_url('/beranda') ?>">Kembali ke beranda</a>
</body>
</html>