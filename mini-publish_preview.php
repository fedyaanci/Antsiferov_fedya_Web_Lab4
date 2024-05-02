<div class="mini-publish">
    <img class="mini-publish__image" src= <?= $mini_publish__post['img_modifier'] ?> >                 
    <div class="mini-publish__name">
        <?= $mini_publish__post['title'] ?> 
    </div>
    <div class="mini-publish__about"> 
        <?= $mini_publish__post['subtitle'] ?>
    </div>
    <hr color="#EFEFEF">                  
    <div class="mini-publish__card-item-user">
        <div class="mini-publish__user-photo">
            <img src=<?= $mini_publish__post['photo-author'] ?> class="view-photo">
        </div>
        <div class="mini-publish__user">
            <ul>
                <li><?= $mini_publish__post['author'] ?></li>
                <li><?= $mini_publish__post['date'] ?></li>
            </ul>
        </div>
    </div>
</div>
        