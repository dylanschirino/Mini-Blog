<!--
/**
 * File: _main_navigation.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
 -->

<!-- MOBILE VERSION -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <!--FIN MOBILE VERSION-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="?a=index&e=post">Tout les Articles</a>
                </li>
                <li class="liste-deroulant">

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="?a=index&e=post&with=categories" class="lien-deroulant">Catégories</a>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php foreach($data['category'] as $category): ?>
                            <li>
                                <a href="?a=index&e=post&id=<?php echo $category->id;?>&with=category">
                                        <?php echo $category->name;?>
                                    </a>
                            </li>
                                <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!--ENTETE-->
