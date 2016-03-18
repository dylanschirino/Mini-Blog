<?php if($data['post'] ->photo): ?>
<header class="intro-header" style="background-image: url('<?php echo $data['post']->photo; ?>')">
    <?php endif;?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?php echo $data['post'] -> title; ?></h1>
                    <?php if($data['post']->author): ?>
                    <h2 class="subheading">Authors&nbsp;:&nbsp;<?php echo $data['post']->author;?> </h2>
                    <?php endif;?>
                    <?php if($data['categories']): ?>
                    <?php foreach($data['categories'] as $category) : ?>
                        <h2><a href="?a=show&e=categories&id=<?php echo $category->id;?>&with=post"><?php echo $category->name;?></a></h2>
                    <?php endforeach; ?>
                    <?php endif;?>

                    <?php if($data['post']->created_at): ?>
                    <span class="meta">Posted on <?php echo $data['post']->created_at;?></span>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php if($data['post']->body): ?>
                <p><?php echo $data['post']->body;?></p>
                <?php endif;?>

                <?php if($data['post']->source): ?>
                <a href="<?php echo $data['post']->source;?>">Lien vers Wikipedia</a>
                <?php endif;?>

                </div>
            </div>
        </div>
    </article>

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

                <a href="?a=show&e=categories&id=<?php echo $category->id;?>&with=post"><?php echo $category->name;?></a>

        <?php endforeach; ?>
    </ul>
<?php endif; ?>


