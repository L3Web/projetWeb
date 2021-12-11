<?php

namespace App\repository;

use App\Database;
use App\model\Post as Post;

class Repository extends Database
{
    public function getPost()
    {
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM todos');
    }

    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM todos WHERE id = :todoId',
            ['todoId' => $id]
        );
        
        return $this->buildObject($result->fetch());
    }
    public function delete(int $id)
    {
       
        $prep = $this->createQuery("DELETE FROM todos WHERE id= :todoId" , ['todoId' => $id]);
        return  $prep->rowCount();
  

        
    }

    public function create(array $data = [])
    {
        $this->createQuery(
            'INSERT INTO todos (title, checked, created_At) VALUES (:title, :checked, :created_At)',
            [
                'title' => $data['title'],
                'checked' => 0,
                'created_At' => (new \DateTime())->format('Y-m-d H:i:s'),
            ]
        );
    }



    private function buildObject(array $row): Post
    {
        $post = new Post;
        $post->setId((int) $row['id']);
        $post->setTitle($row['title']);
        $post->setCreatedAt(new \DateTime($row['created_At']));
        return $post;
    }
    
    public function getAll(): array
    {
        $prep = $this->createQuery("SELECT * FROM todos");
        $result = $prep->fetchAll(\PDO::FETCH_ASSOC);
        $res = array();
        foreach ($result as $row) {
            array_push($res, ($this->buildObject($row)));
        }
        return $res;
    }
}
