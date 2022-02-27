<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

/**
 * @property string $title
 * @property string $excerpt
 * @property string $date
 * @property string $body
*/
class Post
{
    public string $title;
    public string $excerpt;
    public string $date;
    public string $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all() : array
    {
        $files = File::files(resource_path("posts/"));
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.php"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", now()->addMinutes(20), function () use ($path) {
            return file_get_contents($path);
        });
    }
}
