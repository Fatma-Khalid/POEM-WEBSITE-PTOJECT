<?php 
session_start();
if (!isset($_SESSION["user"])) {
header("Location: loginpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="innerpagesec">
<nav> <p>TUMALEED &trade;</p>
<a href="Logoutpage.php" class="btn btn-primary">Logout</a></nav>
<div class="nav-links" id="navlinks">
                    
                     <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="discover.php">DISCOVER</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
               


    <div class="innerpage">
        <h1>EXPLORE THE VARIETIES OF POEMS</h1><br>
        <p>Choose the poems below</p>

       
    </div>
    </section>


    <section class="literature">
        <h1>NEW LITERATURE POSTS</h1><br>
        <div class="pad">
            
            </div>
        <p>Click on the poems below to Unvail the beauty of literature</p>

        <div class="row">
            <div class="poem-col">
                <img src="../friends.jpg">
                <div class="layer">
                    <p> <a href="friend-loveyourself.php">FRIEND</a></p>
                </div>

            </div>
            <div class="poem-col">
                <img src="../heart2.jpg">
                <div class="layer">
                    <p><a href="friend-loveyourself.php">LOVE YOURSELF</a></p>
                </div>

            </div>
            <div class="poem-col">
                <img src="../teacher2.jpg">
                <div class="layer">
                    <p><a href="goodbye-thesolarsystem.php">GOODBYE</a></p>
                </div>

            </div>
           
        </div>

    </section>
    <section class="literature2">
    <div class="row">
            <div class="poem-col">
                <img src="../solar.jpg">
                <div class="layer">
                    <p><a href="goodbye-thesolarsystem.php">THE SOLAR SYSTEM</a></p>
                </div>

            </div>
            <div class="poem-col">
                <img src="../s3.jpg">
                <div class="layer">
                    <p><a href="birthday-heart.php">BIRTHDAY</a></p>
                </div>

            </div>
            <div class="poem-col">
                <img src="../s1.jpg">
                <div class="layer">
                    <p><a href="birthday-heart.php">HEART</a></p>
                </div>

            </div>
           
        </div>

    </section>
    <section class="literature3">
        <h1>WORDS THAT BLOOM</h1><br>
        <div class="pad">
            
            </div>
<p>Discover the importance of Literature in this poetic advanture</p><br><br><br>
<div class="row2">
    <div class="image"><img src="../pict.jpg" ></div>
    <div class="text"><p>&nbsp;&nbsp;&nbsp;&nbsp;Stories and poems are like special friends that help us understand and share important things. Imagine them as mirrors reflecting how people live, what they care about, and what makes them happy or sad. When we read poems, it's like talking about feelings in a short and special way.

These stories and poems also help us become really good with words. &nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;They're like puzzles that make our brains think and understand better. And guess what? They're not just fun, but they also make us smarter!

You know, when we read about different characters and their adventures, it's like going on exciting trips without leaving our cozy spots. And these stories teach us to understand others better, making us kind and caring.

Sometimes, old stories and poems are like treasure chests, keeping safe the cool things people did long ago. They make sure we remember where we come from, like a family photo album but with words.
<br>&nbsp;&nbsp;&nbsp;
And you know what's awesome? These stories and poems make our imaginations go wild! They help artists create new things and inspire everyone to be creative. Plus, they tell us about the world's problems, showing us how we can make things better.

So, let's think of stories and poems as our friends who teach us, make us smile, and help us understand the big, amazing world around us!
</p></div>
    </div>
    </section>
    <section class="literature3">
    <h1>SHORT STORIES</h1><br>
        <div class="pad">
            
            </div>
<p>Read some of the interesting short stories</p><br><br><br>

    </section>


    <section class="literature3">
        <div class="story">
        
        <div class="tex"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE MAGIC CAFE</b><br><br>

In a quiet city, there was a special café called "Time Brews." It had a magical clock that could whisk you away to different times. One day, a curious guy named Alex visited for inspiration. When the clock struck noon, he found himself in ancient Rome, surrounded by togas and lively markets. Each time the clock ticked, Alex explored different eras – having tea with Victorian poets, talking philosophy with wise thinkers, and dancing in the Roaring Twenties. Word spread about the magic, and soon, Time Brews became a meeting place for dreamers from all over. The real magic wasn't just in time travel but in the friendships formed across centuries, making Time Brews a place where stories from the past and present blended into a unique adventure.</p></div>
<div class="pic"><img src="../div.jpg"></div>

</div>

<div class="story2">
    <div class="pic2"><img src="../hiden.jpg"></div>
    <div class="tex2"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE HIDDEN ROOM</b><br><br>
	 In a cozy, old house, Emma stumbled upon a dusty room tucked away behind a creaky door. Inside, she found shelves stacked with forgotten books. As she opened them, the words painted vivid pictures, transporting her to far-off lands and introducing her to colorful characters. Emma’s afternoons were now filled with magical tales, each book whispering secrets that made her world a little brighter.</p></div>
</div>
<div class="story3">
  
    <div class="tex3"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE CURIOUS SEED</b><br><br>In a quiet village, young Alex stumbled upon a small seed that sparked his curiosity. Planting it in a pot near his home, he eagerly watched as a tiny sprout emerged, setting off a journey of discovery. With guidance from his teacher, Mrs. Clark, Alex delved into the wonders of photosynthesis and the science behind plant growth. As the sprout flourished into a vibrant plant, Alex not only witnessed nature's magic but also cultivated patience, care, and a love for learning. The story of the curious seed spread, inspiring a village of children to embark on their own educational adventures, sowing the seeds of curiosity and knowledge.</p></div>
    <div class="pic3"><img src="../seed2.jpg" ></div>
</div>
<h1>VIEWERS RESPONSIVENESS</h1><br>
        <div class="pad">
            
            </div>
<p>Here are some of our viewers responses and comments</p><br><br><br>


    </section>
    <section class="testimonials">
          
            <div class= "row">
                <div class="testimonial-col">
                    <img src="../fat.jpg">
                    <div>
                        <p>This is a very nice website. It is very helpful.I highly 
                            reccomend this website as people get to learn and experience imaginations through literature
                        </p>
                        <h3>Kuluthum Abubakar</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    </div>
                    <div class="testimonial-col">
                        <img src="../kul.jpg">
                        <div>
                            <p>This website is like a cool library for poems. It's easy to use on my computer or phone, and I can chat with other poetry fans. It's my go-to place for awesome poems anytime! </p>
                 <h3>Fatma Khalid</h3>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </section>
         <!-------------------------call to action------------------------->
         <section class="cta">
            <h1>Grow creativity and let your imagination run wild<br> For more info click the button below</h1>
            <a href="contact.php" class="btn">CONTACT US </a>

        </section>
        <!-----------------------footer-------------------------------->
        <section class="footer">
            <h4>About Us</h4>
            <p>Enjoy your journey across this amazing website full of fascinating poems<br>Grow creativity and let your imagination run wild</p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
               <a href="https://www.instargram.com/tumaleed_" target="_blank"> <i class="fa fa-instagram"></i></a>
                <i class="fa fa-linkedin"></i>
               

            </div>
            <p>Made with  <i class="fa fa-heart-o"></i> By Tumaleed</p>
        </section>
</body>
</html>