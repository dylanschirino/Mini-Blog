<header class="intro-header" style="background-image: url('img/categories.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php echo $data['categorie'] -> name; ?></h1>
                    <hr class="small">
                    <span class="subheading">Ci-dessous les articles associé</span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if($data['post']): ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($data['post'] as $post) : ?>
                <div class="post-preview">
                    <a href="?a=show&e=post&id=<?php echo $post->id;?>&with=comments,categories">
                        <h2 class="post-title">
                            <?php echo $post->title;?>
                        </h2>
                    </a>
                </div>
                <hr>
            <?php endforeach; ?>
            <?php endif; ?>






