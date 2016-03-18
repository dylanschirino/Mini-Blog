
<h1> <?php echo $data['post'] -> title; ?></h1>
<?php if($data['post'] ->photo): ?>
<div class="cover">
    <img src="<?php echo $data['post']->photo; ?>" alt="" width="600" height="400">
</div>
<?php endif; ?>
<?php if($data['post']->body): ?>
    <div class="content">
        <?php echo 'Description : '.$data['post']->body;?>
    </div>
<?php endif; ?>
<?php if($data['post']->source): ?>
    <div class="source">
        <a href="<?php echo $data['post']->source;?>">Site internet de la source </a>
    </div>
<?php endif; ?>
<?php if($data['post']->created_at): ?>
    <div class="content">
        <?php echo 'Date de création : '.$data['post']->created_at;?>
    </div>
<?php endif; ?>
<?php if($data['post']->author): ?>
    <div class="content">
        <?php echo 'Auteur : '.$data['post']->author;?>
    </div>
<?php endif; ?>

<?php if($data['comments']): ?>
    <h2>Commentaires&nbsp;:</h2>
    <ul class="commentaires">
        <?php foreach($data['comments'] as $comment) : ?>
            <li class="comments">
                <time><?php echo $comment->created_at;?></time>
                <p><?php echo $comment->author;?></p>
                <p><?php echo $comment->body;?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php if($data['categories']): ?>
    <h2>Catégorie&nbsp;:</h2>
    <ul class="catégories">
        <?php foreach($data['categories'] as $category) : ?>
            <li class="comments">
                <a href="?a=show&e=categories&id=<?php echo $category->id;?>&with=post"><?php echo $category->name;?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


