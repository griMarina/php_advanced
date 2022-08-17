<?php

namespace Grimarina\Blog_Project\Blog\Repositories\LikesRepositories;

use Grimarina\Blog_Project\Blog\{Like, UUID};

interface LikesRepositoryInterface
{
    public function save(Like $like): void;

    public function getByPostUuid(UUID $uuid): Like;
}