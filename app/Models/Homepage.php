<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Homepage extends Model 
{
    use HasMedias, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
