<?php
/**
 * File: Categories.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
namespace Model;

class Categories extends Model
{
    protected $table ='categories';

    public function getCategoriesByPostId($id){
        $sql = 'SELECT categories.* FROM categories JOIN post ON categories.id=post.id_category WHERE post.id=:id
        ';
        $pdoSt = $this->connection->prepare($sql);
        $pdoSt->execute(['id'=>$id]);
        return $pdoSt->fetchAll();
    }

}