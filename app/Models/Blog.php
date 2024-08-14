<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use App\Repositories\BlogRepository;
use App\Repositories\PageRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Blog extends Model
{
    use HasSlug, HasMedias, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'short_description',
        'image',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'image' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 7,
                ],
            ],
            'list' => [
                [
                    'name' => 'list',
                    'ratio' => 10 / 6,
                ],
            ],
        ],
    ];


    public function resolveRouteBinding($value, $field = null)
    {
        /** @var PageRepository $repository */
        $repository = app(BlogRepository::class);
        $service = $repository->forSlug($value);

        abort_if(! $service, 404);

        return $service;
    }

    public function getRouteKey()
    {
        return $this->getSlug();
    }

}
