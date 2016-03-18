<!--
/**
 * File: index_categories.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
 -->
<ul>
    <?php foreach($data['categories'] as $category): ?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=categories&id=<?php echo $category->id;?>&with=post"><?php echo $category->name;?></a></li>
<?php endforeach; ?>
</ul>