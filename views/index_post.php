<!--
/**
 * File: index_post.php
 * User: Dylan Schirino
 * Date: 19/03/16
 */
 -->
<ul>
    <?php foreach($data['post'] as $post): ?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=post&id=<?php echo $post->id;?>&with=comments,categories"><?php echo $post->title;?></a></li>
<?php endforeach; ?>
</ul>