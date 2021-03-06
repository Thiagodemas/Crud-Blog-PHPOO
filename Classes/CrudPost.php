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
        $sql = "SELECT * FROM $this->table ORDER BY id DESC";
        $stmt = Conection::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insert($title, $subtitle, $text, $data)
    {
        $sql = "INSERT INTO $this->table (title, subtitle, text, data) VALUES (:title, :subtitle, :text, :data)";
        $stmt = Conection::prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':subtitle', $subtitle);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':data', $data);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Conection::prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();


    }

    public function update($id, $title, $subtitle, $text)
    {
        $sql = "UPDATE $this->table SET title = :title, subtitle = :subtitle, text = :text WHERE id = :id";
        $stmt = Conection::prepare($sql);
        $stmt->bindParam(   ':title', $title);
        $stmt->bindParam(   ':subtitle', $subtitle);
        $stmt->bindParam(   ':text', $text);
        $stmt->bindParam(   ':id', $id);
        return $stmt->execute();
    }
}