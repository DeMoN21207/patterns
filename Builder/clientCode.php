<?php

use patterns\builder\BlogPostBuilder;
use patterns\builder\BlogPostDirector;

require_once '../vendor/autoload.php';

function builder()
{

    $posts = [];

    $builder = new BlogPostBuilder();
    $posts[] = $builder->setTitle('Articele 1')->getBlogPosts();

    $director = new BlogPostDirector();
    $director->setBuilder($builder);

    $posts[] = $director->createEmptyPost();
    $posts[] = $director->createNewPost();
    $posts[] = $director->createPostWithTags();

    var_dump($posts);
}

builder();
