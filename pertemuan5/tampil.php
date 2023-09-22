<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
</head>
<body>
    <h2>Data Pengguna</h2>
    <pre>Nama           : <?php echo $_POST["nama"]?></pre>
    <pre>User Name      : <?php echo $_POST["username"]?></pre>
    <pre>Email          : <?php echo $_POST["email"]?></pre>
    <pre>Password       : <?php echo $_POST["password"]?></pre>
    <pre>Tanggal Lahir  : <?php echo $_POST["date"]?></pre>
    <pre>Jenis Kelamin  : <?php echo $_POST["jenis_kelamin"]?></pre>
    <pre>Agama          : <?php echo $_POST["agama"]?></pre>
    <pre>Biografi       : <?php echo $_POST["biografi"]?></pre>
</body>
</html>