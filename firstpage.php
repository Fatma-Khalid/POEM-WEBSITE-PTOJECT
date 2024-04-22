<?php 
session_start();
if (isset($_SESSION["user"])) {
header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
    <link rel="stylesheet" href="firstpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
    <nav>
        <p>TUMALEED &trade;</p>
    </nav>
       
        <div class="text-box">
            <h1>WELCOME TO THE POEM GALLERY</h1>
            <p>Step into a world of words where feelings come alive.
                 Our Poetry Haven welcomes you to explore<br> enchanting verses that paint emotions in every line.
                  Discover the magic of language, dance with<br> the rhythm of expression, 
                  and let each poem be a gentle guide through the beauty of heartfelt words.<br>
                  </p>
                   <p>In the garden of knoeledge, where the verses flow<br>
                    A poetic journey, a whole world to explore<br>
                    Unvail the beauty, and let your mind blow<br>
                    For delightful advanture, Click the button below

                   </p>
            <a href="Registerpage.php" class="hero-btn">Explore</a>
        </div>

    </section>


    
</body>
</html>