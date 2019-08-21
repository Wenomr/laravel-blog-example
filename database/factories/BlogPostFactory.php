<?php

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'content' => $faker->paragraphs(4, true)
    ];
});


$factory->state(App\BlogPost::class, 'new-title', function(Faker $faker) {
    return [
        'title' => "New title",
        'content' => 'Content of blog post'
    ];
});