<!--
/**
 * File: index_post.php
 * User: Dylan Schirino
 * Date: 19/03/16
 */
 -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Dylan Schirino</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($data['post'] as $post): ?>
            <div class="post-preview">
                <a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=post&id=<?php echo $post->id;?>&with=comments,categories">
                    <h2 class="post-title">
                        <?php echo $post->title;?>
                    </h2>

                </a>
                <p class="post-meta">Posted by <?php echo $post->author;?> on <?php echo $post->created_at;?></p>
            </div>
                <hr>
            <?php endforeach; ?>
            <?php foreach($data['category'] as $category): ?>
                <div class="post-preview">
                    <a href="?a=index&e=post&id=<?php echo $category->id;?>&with=category">
                        <h2 class="post-title">
                            <?php echo $category->name;?>
                        </h2>

                    </a>
                </div>
                <hr>
            <?php endforeach; ?>

