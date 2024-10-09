<?php
require 'koneksi.php';

// Fetch data from the database
$sql = "SELECT * FROM komentar_gambar1";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <title>Tampil Data</title>
</head>
<body>
    <div class="container">
        <h1>Data Reviews</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['nama']) . "</td>
                                <td>" . htmlspecialchars($row['rating']) . "</td>
                                <td>" . htmlspecialchars($row['review']) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No reviews found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="gambar1.php" class="btn btn-primary">Back to Form</a>
    </div>
</body>
</html>
