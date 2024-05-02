<div class="mini-publish">
    <img class="mini-publish__image" src= <?= $post['img_modifier'] ?> >                 
    <div class="mini-publish__name">
        <?= $post['title'] ?> 
    </div>
 
    <a class="mini-publish__about" title = '<?= $post['title'] ?>' href= '/post.php?id= <?= $post['id'] ?>'> <?= $post['subtitle'] ?> </a>
   
    <hr color="#EFEFEF">                  
    <div class="mini-publish__card-item-user">
        <div class="mini-publish__user-photo">
            <img src=<?= $post['photo-author'] ?> class="view-photo">
        </div>
        <div class="mini-publish__user">
            <ul>
                <li><?= $post['author'] ?></li>
                <li><?= $post['date'] ?></li>
            </ul>
        </div>
    </div>
</div>
        