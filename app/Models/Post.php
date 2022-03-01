<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    public string $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all() : Collection
    {
        return collect(File::files(resource_path('posts/')))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                $document->matter('title'),
                $document->matter('excerpt'),
                $document->matter('date'),
                $document->body(),
                $document->matter('slug')
            ));
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
