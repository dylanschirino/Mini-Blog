
<h1> <?php echo $data['post'] -> title; ?></h1>
<?php if($data['post'] ->photo): ?>
<div class="cover">
    <img src="<?php echo $data['post']->photo; ?>" alt="" width="600" height="400">
</div>
<?php endif; ?>
<?php if($data['post']->body): ?>
    <div class="content">
        <?php echo 'Description : '.$data['post']->body;?>
    </div>
<?php endif; ?>
<?php if($data['post']->source): ?>
    <div class="source">
        <a href="<?php echo $data['post']->source;?>">Site internet de la source </a>
    </div>
<?php endif; ?>
<?php if($data['post']->created_at): ?>
    <div class="content">
        <?php echo 'Date de création : '.$data['post']->created_at;?>
    </div>
<?php endif; ?>
<?php if($data['post']->author): ?>
    <div class="content">
        <?php echo 'Auteur : '.$data['post']->author;?>
    </div>
<?php endif; ?>




