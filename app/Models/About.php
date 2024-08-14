<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class About extends Model
{
    use HasMedias, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
        'mission',
        'what_we_do',
        'unrivalled',
        'image1',
        'image2',
        'meta_title',
        'meta_description',
    ];

}
