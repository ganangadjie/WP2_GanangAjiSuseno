<html>
<head>
        <title>Form Input Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="namamahasiswa" id="namamahasiswa">
                        <?= form_error('namamahasiswa', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                        <?= form_error('nis', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggallahir" id="tanggallahir">
                        <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatlahir" id="tempatlahir">
                        <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Laki-Laki">
                        <label for="laki-laki">Laki-Laki</label><br>
                        <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label><br>
                        <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>');?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>