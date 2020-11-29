<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <center>
        <?php foreach($data as $row){ ?>
        <form action="/view/update/{{ $row->id }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <table border="1">
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="<?php echo $row->nim; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value="<?php echo $row->nama_lengkap; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Kota asal</td>
                    <td>:</td>
                    <td><input type="text" name="kota_asal" value="<?php echo $row->kota_asal; ?> " size="28"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir; ?>" placeholder="YYYY-MM-DD"></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="nama_ortu" value="<?php echo $row->nama_ortu; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat_ortu" value="<?php echo $row->alamat_ortu; ?>" cols="30" rows="10"><?php echo $row->alamat_ortu; ?></textarea></td>
                </tr>
                <tr>
                    <td>Kodepos</td>
                    <td>:</td>
                    <td><input type="number" name="kodepos" value="<?php echo $row->kodepos; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_telepon" value="<?php echo $row->nomor_telepon; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    <select name="status">
                        <option @if($row->status == "TAMA") selected @endif value="TAMA">TAMA</option>
                        <option @if($row->status == "WREDA") selected @endif value="WREDA">WREDA</option>                   
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
        <?php }; ?>
    </center>
</body>
</html>