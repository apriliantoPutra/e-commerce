<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $fillable=[
        'title','description','price', 'category', 'quantity', 'image', ''
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title' // slug diambil dari title (min 2 kata)
            ]
        ];
    }
}
