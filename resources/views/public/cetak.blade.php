<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google" value="notranslate">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cetak Tiket</title>
<head>
<style>
    table {
    width: 100%;
    }
</style>
</head>
<body>
<div class="container">
    <h4>Tanggal Cetak Tiket: {{Carbon\Carbon::now()->toDateTimeString()}}</h4>
    <div class="content-center">
<table border="1px">
    <tr>
        <td width="80px"><img src="https://i.ibb.co/4mktMy1/hd-tickets-49014.png" alt="image" width="80px" /></td>
        <td>
            <table cellpadding="4">
                <tr>
                    <td width="200px"><div class="lead">ID Tiket :</td>
                    <td><div class="value">{{$tiket->id_tiket}}</div></td>
                </tr>
                <tr>
                    <td><div class="lead">Nama :</div></td>
                    <td><div class="value">{{$tiket->name}}</div></td>
                </tr>
                <tr>
                    <td><div class="lead">No Telepon :</div></td>
                    <td><div class="value">{{$tiket->no_hp}}</div></td>
                </tr>
                <tr>
                    <td><div class="lead">Harga :</div></td>
                    <td><div class="value">Rp. {{ number_format($tiket->harga, 0, ".", ".") }},-</div></td>
                </tr>
                <tr>
                    <td><div class="lead">Pesanan Dibuat :</div></td>
                    <td><div class="value">{{$tiket->created_at}}</div></td>
                </tr>
                <tr>
                    <td><div class="lead">Pengesahan :</div></td>
                    <td><img class="center" width="100px" src="https://i.ibb.co/Z8cpYgw/ttd.png" alt="image-ttd"><br>
                        <div class="value">Admin Tiketing</div></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<p>*Tiket / ID tiket tiperlihatkan kepada petugas </p>
</div>
</div>
</body>
</html>