<?php

namespace patterns\builder;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    /** @var BlogPost */
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();
        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->title = $val;
        return $this;
    }

    public function setCategories(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->categories[] = $val;
        return $this;
    }


    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->categories[] = $val;
        return $this;
    }

    public function setTag(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->tags[] = $val;
        return $this;
    }


    public function getBlogPosts(): BlogPost
    {
        $res = $this->blogPost;
        $this->create();
        return $res;
    }
}