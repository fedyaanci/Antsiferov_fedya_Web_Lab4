<a class="card-item" href="post.php">
<img src=<?= $post['img_modifier'] ?> class="card-item__image">
<div class="card-item__button" style= 'background-color: <?= $post['button-colour']?>' ><?= $post['button-text'] ?> </div>
<div class="card-item-align">
    <div class="card-item__name"><?= $post['title'] ?></div>
    <a class="card-item__about" title = '<?= $post['title'] ?>' href= '/post.php?id= <?= $post['id'] ?>'> <?= $post['subtitle'] ?> </a>
    <div class="card-item__user">
        <div class="user-photo">
            <img src=<?= $post['photo-author']?> class="view-photo">
        </div>
        <div class="name-and-photo">
            <ul>
                <li><?= $post['author'] ?></li>
                <li><?= $post['date'] ?></li>
            </ul>
        </div>
    </div>
</div>
</a>
