<!--
/**
 * File: index_categories.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
 -->
<header class="intro-header" style="background-image: url('img/categories.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Catégorie</h1>
                    <hr class="small">
                    <span class="subheading">La page des catégories</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <?php foreach($data['categories'] as $category): ?>
                <div class="post-preview">
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?a=show&e=categories&id=<?php echo $category->id;?>&with=post">
                        <h2 class="post-title">
                            <?php echo $category->name;?>
                        </h2>

                    </a>
                </div>
                <hr>
            <?php endforeach; ?>
