<!--
/**
 * File: index_post.php
 * User: Dylan Schirino
 * Date: 5/03/16
 * Time: 11:04
 */
 -->
<ul>
    <?php foreach($data['post'] as $post): ?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=post&id=<?php echo $post->id;?>&with=comments"><?php echo $post->title;?></a></li>
<?php endforeach; ?>
</ul>