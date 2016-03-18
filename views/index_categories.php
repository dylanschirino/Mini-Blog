<!--
/**
 * File: index_post.php
 * User: Dylan Schirino
 * Date: 5/03/16
 * Time: 11:04
 */
 -->
<ul>
    <?php foreach($data['categories'] as $category): ?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=categories&id=<?php echo $category->id;?>"><?php echo $category->name;?></a></li>
<?php endforeach; ?>
</ul>