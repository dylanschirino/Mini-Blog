<?php

/**
 * File: Model.php
 * User: Dylan Schirino
 * Date: 18/03/16
 */
namespace Model;

class Model
{
    protected $table='';
    protected $connection=null;

    public function __construct()
    {
        $dbConfig = parse_ini_file('db.ini');// on parcourt et on extrait de l'info dedans

        $pdoOptions = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];//pour avoir un tableau d'objet

        try {
            $dsn = sprintf('%s:dbname=%s;host=%s',$dbConfig['driver'],$dbConfig['dbname'],$dbConfig['host']);
            $this->connection = new \PDO($dsn,$dbConfig['username'],$dbConfig['password'],$pdoOptions);

            $this->connection->exec('SET CHARACTER SET UTF8');
            $this->connection->exec('SET NAMES UTF8');

        }catch(\PDOException $exception){
            //redirection vers une page pour afficher une erreur relative à l'exception
            die($exception->getMessage());// la flèche c'est la meme chose que le point en JS donc on va chercher une propriete d'un object
        }// try va lancer une exception et on doit l'attraper avec catch on mets le type PDO exception et la variable
    }

    public function all()
    {
        $sql = sprintf('SELECT * FROM %s ORDER BY id DESC ',$this->table);
        $pdoSt = $this->connection->query($sql);
        return $pdoSt->fetchAll();

    }

    public function find($id)
    {
        $sql = sprintf('SELECT * FROM %s WHERE id = :id ',$this->table);
        $pdoSt = $this->connection->prepare($sql);
        $pdoSt->execute([':id' => $id]);// on execute en remplacant par la valeur recupere dans l'url de $id
        return $pdoSt->fetch();

    }
}