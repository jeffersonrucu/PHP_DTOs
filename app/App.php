<?php

namespace App;

use App\Models\DTOs\PostDTO;
use App\Models\Post;

class App
{
    /**
     * App constructor.
     */
	public function __construct()
	{
		$post = new PostDTO("My First Post", "<p>The Best Content</p>", "Jefferson Oliveira", "Public", "Published");
	    $post = new Post($post);

        echo $post;
    }
}