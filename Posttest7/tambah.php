<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];
    $sql = "INSERT INTO komentar_gambar1 (nama, rating, review) VALUES ('$nama', '$rating', '$review')";
    if (mysqli_query($conn, $sql)) {
        header("Location: tampil.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/stylegambar.css">
    <title>Animeku</title>
    <link rel="icon" href="Gambar/ANIMEKU.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
     
    <?php
    include "navbar.php";
    ?>
    
    <main class="utama" id="utama">
    <div class="container">
    <div class="row">

<form action="index.php" method="POST">

    <div class="warna">
        <h3>Review</h3>
    </div>

    <div class="warna">
         <label>Name</label>
        <input type="text" name="name">
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">
    <div>
        <labe class="warna"l>Review</label>
        <textarea id="review" name="review" rows="5" cols="50" placeholder="Write your review here..."></textarea>
    </div>

    </div>

        <div><input type="submit" name="add"> </div>

    </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

        
        
    </main>
    <footer class="footer-akhir">
        <p>
            <a href="index.html">Home</a> 
            <a href="aboutme.html">About Me</a>
            <a href="https://classroom.google.com/c/NzEwMjM1NDMwMjIz/a/NzIxMDE2NzUwMDM3/details" target="_blank">Posttest5</a>
        </p>
    </footer>
    <script>
        feather.replace();
    </script>
    <script src="Javascript/script.js"></script>
    <script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>
</html>