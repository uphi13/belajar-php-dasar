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
            <p>
                <label>Nama :</label>
                <input type="text" name="nama"/>
            </p>
            <p>
                <label>Username :</label>
                <input type="text" name="username"/>
            </p>
            <p>
                <label>Email :</label>
                <input type="email" name="email"/>
            </p>
            <p>
                <label>Password :</label>
                <input type="password" name="password"/>
            </p>
            <p>
                <label>Tanggal Lahir :</label>
                <input type="date" name="date"/>
            </p>
            <p>
                <label>Jenis Kelamin :</label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label>Agama :</label>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="biografi">Biografi :</label>
                <textarea name="biografi"cols="30" rows="2"></textarea>
            </p>
            <button type="daftar">Daftar</button>
        </form>
    </fieldset>
</body>
</html>