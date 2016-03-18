<?php
/**
 * File: Comments.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
namespace Model;

class Comments extends Model
{
    protected $table ='comment';

    public function getCommentsByPostId($id){
        $sql = 'SELECT comment.* FROM comment JOIN post ON post.id=comment.id_post WHERE post.id=:id
        ';
        $pdoSt = $this->connection->prepare($sql);
        $pdoSt->execute(['id'=>$id]);
        return $pdoSt->fetchAll();
    }
}