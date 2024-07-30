<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Service extends Model implements Sortable
{
    use HasSlug, HasMedias, HasPosition, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
