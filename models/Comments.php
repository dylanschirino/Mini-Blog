<?php
/**
 * File: Comments.php
 * User: Dylan Schirino
 * Date: 3/03/16
 * Time: 15:23
 */
namespace Model;

class Comments extends Model
{
    protected $table ='blog';

    public function getCommentsByPostId($id){
        $sql = 'SELECT comment.* FROM comment JOIN post ON post.id=comment.id_post WHERE post.id=:id
        ';
        $pdoSt = $this->connection->prepare($sql);
        $pdoSt->execute(['id'=>$id]);
        return $pdoSt->fetchAll();
    }
}