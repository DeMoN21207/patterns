<?php

namespace patterns\builder;

class BlogPostDirector
{

    /** @var BlogPostBuilderInterface builder */
    private $builder;

    /**
     * Set builder for Director
     * @param BlogPostBuilderInterface $builder
     * @return $this
     */
    public function setBuilder(BlogPostBuilderInterface $builder): BlogPostDirector
    {
        $this->builder = $builder;
        return $this;
    }

    /** @return BlogPost Create new empty post */
    public function createEmptyPost(): BlogPost
    {
        return $this->builder->getBlogPosts();
    }

    /** @return BlogPost  Create new post */
    public function createNewPost(): BlogPost
    {
        return $this->builder
            ->setTitle('New Post')
            ->setBody('Set body Article')
            ->getBlogPosts();
    }

    /** @return BlogPost  Create post with a tag */
    public function createPostWithTags(): BlogPost
    {
        return $this->builder
            ->setTitle('Article with tags')
            ->setTag('tag 1')
            ->setTag('tag 2')
            ->getBlogPosts();
    }

}