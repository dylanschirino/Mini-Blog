
<h1> <?php echo $data['categorie'] -> name; ?></h1>

<?php if($data['post']): ?>
    <h2>Articles Associé&nbsp;:</h2>
    <ul class="post">
        <?php foreach($data['post'] as $post) : ?>
            <li class="post">
                <a href="?a=show&e=post&id=<?php echo $post->id;?>&with=comments,categories"><?php echo $post->title;?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>






