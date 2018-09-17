<?php

namespace Chelout\RelationshipEvents\Tests\Stubs\Events\HasMany;

class HasManyUpdating
{
    public $user;
    public $post;

    public function __construct($user, $params)
    {
        $this->user = $user;
        $this->post = $params[0];
    }
}