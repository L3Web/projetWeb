<?php

namespace App\model;

class Post
{
    private $id;
    private $title;
    private $created_At;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_At;
    }

    public function setCreatedAt($created_At)
    {
        $this->created_At = $created_At;

        return $this;
    }


}
