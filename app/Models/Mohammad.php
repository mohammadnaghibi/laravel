<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohammad extends Model
{
    use HasFactory,Sluggable, SluggableScopeHelpers;

    protected $fillable = [
      "title", "first_name", "last_name", 'slug'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ""
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
