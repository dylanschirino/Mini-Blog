<!--
/**
 * File: index_post.php
 * User: Dylan Schirino
 * Date: 19/03/16
 */
 -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
<ul>
    <?php foreach($data['post'] as $post): ?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=post&id=<?php echo $post->id;?>&with=comments,categories"><?php echo $post->title;?></a></li>
<?php endforeach; ?>
</ul>