	
<?php
$pdo = include "connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
        <style>
            table {
                border: 1px solid #ddd;
                border-collapse: collapse;
            }
            table td, table th {
                padding: 8px;
                border: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $pdo->prepare("select * from mahasiswa");
                    $query->execute();
                    while($siswa = $query->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo htmlentities($siswa['nrp']);?></td>
                        <td><?php echo htmlentities($siswa['nama']);?></td>
                        <td><?php echo htmlentities($siswa['jenis_kelamin']);?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </body>
</html>