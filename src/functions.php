<?php

function getPosts()
{
    $posts =  json_decode(file_get_contents(getcwd() . "\\db\\posts.json"), true)['posts'];
    return $posts;
}

// print_r(getPosts()['posts']);

function getTags()
{
    $posts =  json_decode(file_get_contents(getcwd() . "\\db\\posts.json"), true)['posts'];

    $tags =  array_column($posts, 'tag');

    return $tags;
}

function featuredPosts()
{

    $posts =  json_decode(file_get_contents(getcwd() . "\\db\\posts.json"), true)['posts'];

    $featured = array_filter($posts, function ($post) {
        return $post['featured'];
    });

    return $featured;
}

function filterPosts()
{
    $posts =  json_decode(file_get_contents(getcwd() . "\\db\\posts.json"), true)['posts'];

    $searchedPosts = array_filter($posts, function ($post) {

        if (isset($_GET['search'])) {
            $needle = strtolower($_GET['search']);
        } elseif (isset($_GET['tag'])) {
            $needle = strtolower($_GET['tag']);
        } else {
            $needle = '';
        }

        // $needle = strtolower($_GET['search']) ?? '';
        $title = strtolower($post['title']);
        return str_contains($title, $needle);
    });

    return $searchedPosts;
}


//sigle post

function getSinglePost()
{
    $posts =  json_decode(file_get_contents(getcwd() . "\\db\\posts.json"), true)['posts'];

    $searchedPost = array_filter($posts, function ($post) {

        if (isset($_GET['slug'])) {
            $needle = strtolower($_GET['slug']);
        }

        // $needle = strtolower($_GET['search']) ?? '';
        $slug = $post['slug'];
        return str_contains($slug, $needle);
    });

    return $searchedPost;
}
