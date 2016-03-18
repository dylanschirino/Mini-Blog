<!doctype html>
<html lang="fr">
    <head>
        <meta charset ="UTF-8">
        <title><?php echo $data['page_title'];?></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/clean-blog.css">
    </head>
    <body>
    <?php include ('partials/_main_navigation.php'); ?>
    <?php  include($data['view']); ?>
</body>
</html>