<?php

namespace App\Models\DTOs;

readonly class PostDTO
{
    /**
     * PostDTO constructor.
     *
     * @param string $title
     * @param string $content
     * @param string $author
     * @param string $category
     * @param string $status
     */
	public function __construct(
		public string $title,
		public string $content,
		public string $author,
		public string $category,
		public string $status,
	){}
}