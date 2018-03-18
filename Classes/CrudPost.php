<?php
/**
 * Created by PhpStorm.
 * User: thiagodemas
 * Date: 18/03/18
 * Time: 13:30
 */
require_once './Models/Post.php';
class CrudPost extends Post
{
    protected $table = 'posts';

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = Conection::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}