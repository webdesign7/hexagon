<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use App\Repositories\PageRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Page extends Model
{
    use HasSlug, HasMedias, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        /** @var PageRepository $repository */
        $repository = app(PageRepository::class);
        $service = $repository->forSlug($value);

        abort_if(! $service, 404);

        return $service;
    }

}
