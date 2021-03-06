<?php
/**
 * File: Post.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
namespace Model;

class Post extends Model
{
    protected $table ='post';
    public function getPostByCategoriesId($id){
        $sql = 'SELECT post.* FROM post JOIN categories ON categories.id=post.id_category WHERE categories.id=:id
        ';
        $pdoSt = $this->connection->prepare($sql);
        $pdoSt->execute(['id'=>$id]);
        return $pdoSt->fetchAll();
    }

}