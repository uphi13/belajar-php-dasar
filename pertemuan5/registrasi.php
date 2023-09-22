<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
<fieldset>
        <legend>Registrasi</legend>
        <form action="tampil.php" method="POST">
            <pre>Nama          : <input type="text" name="nama"/></pre>
            <pre>Username      : <input type="text" name="username"/></pre>
            <pre>Email         : <input type="email" name="email"/></pre>
            <pre>Password      : <input type="password" name="password"/></pre>
            <pre>Tanggal Lahir : <input type="date" name="date"/></pre>
            <pre>Jenis Kelamin : <label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label><label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label></pre>
            <pre>Agama         : <select name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select></pre>
            <pre>Biografi      : <textarea name="biografi"cols="20" rows="1"></textarea></pre>
            <button type="daftar">Daftar</button>
        </form>
</fieldset>
</body>
</html>