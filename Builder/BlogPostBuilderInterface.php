<?php


namespace patterns\builder;

interface BlogPostBuilderInterface
{
    /**
     * Create new exemplar
     * @return BlogPostBuilderInterface
     */
    public function create(): BlogPostBuilderInterface;

    /**
     * Set Title for post
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setTitle(string $val): BlogPostBuilderInterface;

    /**
     * Set Categories for post
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setCategories(string $val): BlogPostBuilderInterface;

    /**
     * Set body for post
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setBody(string $val): BlogPostBuilderInterface;

    /**
     * Set tag for post
     * @param string $val
     * @return BlogPostBuilderInterface
     */
    public function setTag(string $val): BlogPostBuilderInterface;

    /**
     * Get exemplar
     * @return BlogPost
     */
    public function getBlogPosts(): BlogPost;

}