<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
<center>
        <form action="/add" method="post">
            {{ csrf_field() }}
            <table border="1">
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Kota asal</td>
                    <td>:</td>
                    <td><input type="text" name="kota_asal" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value="" placeholder="YYYY-MM-DD"></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="nama_ortu" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat_ortu" value="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Kodepos</td>
                    <td>:</td>
                    <td><input type="number" name="kodepos" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_telepon" value="" size="28"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    <select name="status">
                        <option value="TAMA">TAMA</option>
                        <option value="WREDA">WREDA</option>                   
                    </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>