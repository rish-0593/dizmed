<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'category_id',
        'title',
        'slug',
        'description',
        'status'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model['slug'] = Str::slug(request()->title);
        });

        self::updating(function($model){
            $model['slug'] = Str::slug(request()->title);
        });
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->using(ProductTag::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->using(ProductAttribute::class)->withPivot('value');
    }
}
