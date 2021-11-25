<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class CreatePostResolver
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::create([
            'user_id' => $args['user_id'],
            'title' => $args['title'],
            'body' => $args['body'],
        ]);

        Log::info('sending email');

        return $post;
    }
}
