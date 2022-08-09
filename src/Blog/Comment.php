<?php

namespace Grimarina\Blog_Project\Blog;

class Comment 
{
    public function __construct(
        private UUID $uuid,
        private UUID $post_uuid,
        private UUID $author_uuid,
        private string $text,
        )
    {
    }

    public function __toString(): string
    {
        return $this->text . PHP_EOL;
    }

    public function getUuid(): UUID
    {
        return $this->uuid;
    }

    public function getPost_uuid(): UUID
    {
        return $this->post_uuid;
    }

    public function getAuthor_uuid(): UUID
    {
        return $this->author_uuid;
    }

    public function getText(): string
    {
       return $this->text;
    }
}
