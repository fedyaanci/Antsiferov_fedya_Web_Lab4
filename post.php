<?php 
    $post_id = $_GET['id'];


?>
<!DOCTYPE html>
<html>
    <head>  
        <meta charset="'UTF-8">
        <title>The Road Ahead</title>
        <link rel="stylesheet" type="text/css" href="style-post.css">
    </head> 
    <body>    
        <nav>
            <ul class="edge">
                <li class="nav_logo"><a href="home.php"> <img src="static/image/Logo_nav.svg" alt="mount" /></a> </li>
                <li><a class="part_of_nav">HOME</a></li>
                <li><a class="part_of_nav">CATEGORIES</a></li>
                <li><a class="part_of_nav">ABOUT</a></li>
                <li><a class="part_of_nav">CONTACT</a></li>
            </ul>
        </nav>

        <header>
           <h1><?= $post['title'], $postID ?></h1> 
           <p><?= $post['subtitle'] ?></p> 
        </header>    

        <div class="image">
            <img src="<?=$post['img_modifier'] ?>" width="100%" height="534px" alt="mount">
        </div>

        <main>
            
    
        </main>

        <footer>
            <ul class="edge">
                <li class="footer_logo"> <img src="static/image/Logo_footer.svg" alt="mount" /> </li>
                <li><a class="part_of_footer">HOME</a></li>
                <li><a class="part_of_footer">CATEGORIES</a></li>
                <li><a class="part_of_footer">ABOUT</a></li>
                <li><a class="part_of_footer">CONTACT</a></li>
            </ul>
        </footer>
    </body>
</html>
