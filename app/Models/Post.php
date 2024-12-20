<?php

namespace App\Models;

use App\Models\DTOs\PostDTO;

class Post
{
	private string $title;
	private string $content;
	private string $author;
	private string $category;
	private string $status;

	/**
	 * Post constructor.
	 *
	 * @param PostDTO $post
	 */
	public function __construct(PostDTO $post)
	{
		$this->title = $post->title;
		$this->content = $post->content;
		$this->author = $post->author;
		$this->category = $post->category;
		$this->status = $post->status;
	}

	/**
	 * Get the title of the post.
	 *
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * Get the content of the post.
	 *
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}

	/**
	 * Get the author of the post.
	 *
	 * @return string
	 */
	public function getAuthor(): string
	{
		return $this->author;
	}

	/**
	 * Get the category of the post.
	 *
	 * @return string
	 */
	public function getCategory(): string
	{
		return $this->category;
	}

	/**
	 * Get the status of the post.
	 *
	 * @return string
	 */
	public function getStatus(): string
	{
		return $this->status;
	}

	/**
	 * Convert the post to a string.
	 *
	 * @return string
	 */
	public function __toString(): string
	{
		return "
			Title: {$this->getTitle()}\n
			Content: {$this->getContent()}\n
			Author: {$this->getAuthor()}\n
			Category: {$this->getCategory()}\n
			Status: {$this->getStatus()}
		";
	}
}
