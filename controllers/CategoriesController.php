<?php

namespace Controller;


use Model\Post;
use Model\Categories;

class CategoriesController
{
    private $categories_model = null;
    public function __construct()
    {
        $this->categories_model = new Categories();
    }

    function index()
    {
        $categories =$this->categories_model->all();
        $view = 'index_categories.php';
        $page_title='Catégorie : ';
        return ['categories' => $categories, 'view' => $view,'page_title'=>$page_title];
    }

    function show()
    {

        if (isset($_GET['id'])) {

            $id = intval($_GET['id']); //pour empecher les injections sql on ne prend que des entiers ici avec intval
            $categorie =$this->categories_model->find($id);
            $view = 'show_categories.php';
            $page_title='Les articles correspondant&nbsp;: '.$categorie->name;

            $posts = null;
            if (isset($_GET['with'])){  //on regarde si la clé with existe si oui on explose sont contenu
                $with = explode(',',$_GET['with']);
                if(in_array('posts',$with)){ //on verifie si le mots authors est dans le tableau
                    $posts_model = new Post(); // on crée un nouveau model des auteurs
                    $posts = $posts_model->getPostsByCategoriesId($categorie->id);
                }

            }
            return ['categorie' => $categorie, 'view' => $view,'page_title'=>$page_title,'posts'=>$posts];

        } else {
            die('ERREUR 404 NOT FOUND');
        }
    }
}
