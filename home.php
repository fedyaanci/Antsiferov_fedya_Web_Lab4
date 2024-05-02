<?php
$card__posts = [
 [
   'id' => 0,
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved = it might not be.',
   'img_modifier' => 'static/main-image/Amount.jpeg',
   'author' => 'Mat Vogels',
   'date' => 'September 25, 2015',
   'button' => 'Adventure',
   'button-colour' => '#8A2BE2',
   'button-text'=> 'RIGHT NOW',
   'photo-author' => "static/main-image/user1.jpeg",
 ],
 [
 'id' => 1,
 'title' => 'From Top Down',
 'subtitle' => 'Once a year, go someplace you"ve never been before.',
 'img_modifier' => 'static/main-image/balloon.jpeg',
 'author' => 'William Wong',
 'date' => 'September 25, 2015',
 'button' => 'Adventure',
 'button-colour' => '#DD783F',
 'button-text'=> 'ADVENTURE',
 'photo-author' => "static/main-image/user2.jpeg",
 ],
];
$mini_publish__posts=[
 [
    'id' => 2,
    'img_modifier' => 'static/main-image/balloon.jpeg', 
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'author' => 'William Wong',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user1.jpeg",
 ],
 [
    'id' => 3,
    'img_modifier' => 'static/main-image/bridge.jpeg', 
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user2.jpeg",
 ],
 [
    'id' => 4,
    'img_modifier' => 'static/main-image/lake.jpeg', 
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user2.jpeg",
 ],
 [
    'id' => 5,
    'img_modifier' => 'static/main-image/wave.jpeg', 
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'author' => 'William Wong',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user1.jpeg",
 ],
 [
    'id' => 6,
    'img_modifier' => 'static/main-image/wires.jpeg', 
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user2.jpeg",
 ],
 [
    'id' => 7,
    'img_modifier' => 'static/main-image/balloon.jpeg', 
    'title' => 'Try it Always',
    'subtitle' => 'The world is a book, and those who do not travel read only one page.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'photo-author' => "static/main-image/user2.jpeg",
 ],
]

?>

<!DOCTYPE html>
<html>
    <head>  

        <meta charset="'UTF-8">
        <title>Travel Web</title>
        <link rel="stylesheet" type="text/css" href="style-home.css">

    </head> 
    <body>  

        <div class = "main-header">
            <div class="main-header__nav">
                <a href="https://github.com/fedyaanci"><img src="static/main-image/Logo_nav.svg" alt="mount" /></a> 
                <ul class="nav__list">
                    <li><a class="nav__item" href="https://github.com/fedyaanci">HOME</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">CATEGORIES</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">ABOUT</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">CONTACT</a></li>
                </ul>
            </div>
            <div class="text-center">
                <header>
                    <h1 class="text-center__h1">Let's do it together.</h1>
                    <h3 class="text-center__h3">We travel the world in search of stories. Come along for the ride.</h3>
                    <div class="text-center__button-view">View Latest Posts</div>
                </header>
            </div>
        </div>

            <ul class = "catalog">
                <li><a class='catalog__item'href="https://github.com/fedyaanci">Nature</a></li>
                <li><a class='catalog__item' href="https://github.com/fedyaanci">Photography</a></li>
                <li><a class='catalog__item' href="https://github.com/fedyaanci">Relaxation</a></li>
                <li><a class='catalog__item' href="https://github.com/fedyaanci">Vacation</a></li>
                <li><a class='catalog__item' href="https://github.com/fedyaanci">Travel</a></li>
                <li><a class='catalog__item' href="https://github.com/fedyaanci">Adventure</a></li>
            </ul> 

        <section>
        
            <h1 class="limited-container">
                Featured Posts<br><br>
                <hr color="#DEDEDE">
            </h1>

            <div class="card">

                 <?php 
                    foreach ($card__posts as $post) {
                        include 'post_preview.php';
                    }
                ?> 

            </div> 


        <h1 class="limited-container">Most Recent<br><br><hr color="#DEDEDE">
        </h1>

        <div class="main-information-block">
            <?php
                foreach ($mini_publish__posts as $post){
                    include 'mini-publish_preview.php';
                } 
            ?>
        </div>

        </section>

        <footer>
            <div class= "list-footer">
                <a class = "footer-logo"> <img src="static/main-image/Logo_nav.svg" alt="mount" /> </a>
                <ul>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">HOME</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">CATEGORIES</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">ABOUT</a></li>
                    <li><a class="nav__item" href="https://github.com/fedyaanci">CONTACT</a></li>
                </ul>
            </div>    
        </footer>
    </body>

</html>
