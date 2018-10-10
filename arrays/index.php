<?php

class Post {
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('Black Panther', true),
    new Post('Wonder Woman', false),
    new Post('Spiderman', false),
    new Post('Batman', true),
];

$published_posts = array_filter($posts, function ($post) {
    return $post->published;
});



var_dump($published_posts);