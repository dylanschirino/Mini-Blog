<?php if($data['post'] ->photo): ?>
<header class="intro-header" style="background-image: url('<?php echo $data['post']->photo; ?>')">
    <?php endif;?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <br>
                    <br>
                    <h1><?php echo $data['post'] -> title; ?></h1>
                    <?php if($data['post']->author): ?>
                    <h2 class="subheading">Authors&nbsp;:&nbsp;<?php echo $data['post']->author;?> </h2>
                    <?php endif;?>
                    <?php if($data['category']): ?>
                    <?php foreach($data['category'] as $category) : ?>
                        <h2><a href="?a=show&e=post&id=<?php echo $category->id;?>&with=post"><?php echo 'Categories&nbsp:&nbsp;'.$category->name;?></a></h2>
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
        <hr>
        <?php if($data['comments']): ?>
        <?php foreach($data['comments'] as $comment) : ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $comment->author;?></h3>
                <time><?php echo $comment->created_at;?></time>
            </div>

            <div class="panel-body">
                <p><p><?php echo $comment->body;?></p></p>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </article>

