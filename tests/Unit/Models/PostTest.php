<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function test_setLowercase()
    {
        $post = new Post;
        $post->setNameAttr("Mariana Giraldo Luna");
        $this->assertEquals("mariana giraldo luna", $post->name);
    }

    public function test_getSlug(){
        $post = new Post;
        $post->setNameAttr("aboutus/Mariana Giraldo Luna");
        $this -> assertEquals('aboutus/mariana%giraldo%luna', $post->getSlugAttribute());
    }
}
