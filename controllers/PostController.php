<?php
/**
 * File: PostController.php
 * User: Dylan Schirino
 * Date: 18/03/16
 * Time: 10:58
 */
namespace Controller;


use Model\Categories;
use Model\Comments;
use Model\Post;

class PostController
{
    private $post_model = null;
    public function __construct()
    {
        $this->post_model = new Post();
    }

    function index()
    {

        $post =$this->post_model->all();
        $view = 'index_post.php';
        $page_title='La liste des articles';
        return ['post' => $post,'view' => $view,'page_title'=>$page_title];
    }

    function show()
    {
        //include('Post.php');
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']); //pour empecher les injections sql on ne prend que des entiers ici avec intval
            $post =$this->post_model->find($id);
            $view = 'show_post.php';
            $page_title='La Fiche du blog: '.$post->title;

            $comments = null;
            if (isset($_GET['with'])) {  //on regarde si la clé with existe si oui on explose sont contenu
                $with = explode(',', $_GET['with']);
                if (in_array('comments', $with)) { //on verifie si le mots authors est dans le tableau
                    $comments_model = new Comments(); // on crée un nouveau model des auteurs
                    $comments = $comments_model->getCommentsByPostId($post->id);
                }
            }
            $categories = null;
            if (isset($_GET['with'])) {  //on regarde si la clé with existe si oui on explose sont contenu
                $with = explode(',', $_GET['with']);
                if (in_array('categories', $with)) { //on verifie si le mots authors est dans le tableau
                    $categories_model = new Categories(); // on crée un nouveau model des auteurs
                    $categories = $categories_model->getCategoriesByPostId($post->id);
                }
            }

            return ['post' => $post, 'view' => $view,'page_title'=>$page_title,'comments'=>$comments,'categories'=>$categories];
        } else {
            die('il manque un identifiant a votre livre');
        }
    }
}