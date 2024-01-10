<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Kostum</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin: 20px auto;
            width: 50%;
            text-align: center;
        }
        input[type="text"] {
            width: 70%;
            padding: 6px;
        }
        input[type="submit"] {
            padding: 6px 20px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2 align="center">Daftar Kostum</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kostum</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'tampilkan_data.php'; ?>
        </tbody>
    </table>
    
    <form action="tambah_data.php" method="post">
        <input type="text" name="nama_kostum" placeholder="Nama Kostum" required>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>